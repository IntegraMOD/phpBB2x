<?php
/***************************************************************************
 *                           usercp_viewprofile.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id$
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
	exit;
}

if ( empty($HTTP_GET_VARS[POST_USERS_URL]) || $HTTP_GET_VARS[POST_USERS_URL] == ANONYMOUS )
{
	message_die(GENERAL_MESSAGE, $lang['No_user_id_specified']);
}
$profiledata = get_userdata($HTTP_GET_VARS[POST_USERS_URL]);

if (!$profiledata)
{
	message_die(GENERAL_MESSAGE, $lang['No_user_id_specified']);
}

$sql = "SELECT *
	FROM " . RANKS_TABLE . "
	ORDER BY rank_special, rank_min";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not obtain ranks information', '', __LINE__, __FILE__, $sql);
}

$ranksrow = array();
while ( $row = $db->sql_fetchrow($result) )
{
	$ranksrow[] = $row;
}
$db->sql_freeresult($result);

//
// Output page header and profile_view template
//
$template->set_filenames(array(
	'body' => 'profile_view_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

//
// Calculate the number of days this user has been a member ($memberdays)
// Then calculate their posts per day
//
$regdate = $profiledata['user_regdate'];
$memberdays = max(1, round( ( time() - $regdate ) / 86400 ));
$posts_per_day = $profiledata['user_posts'] / $memberdays;

// Get the users percentage of total posts
if ( $profiledata['user_posts'] != 0  )
{
	$total_posts = get_db_stat('postcount');
	$percentage = ( $total_posts ) ? min(100, ($profiledata['user_posts'] / $total_posts) * 100) : 0;
}
else
{
	$percentage = 0;
}

$avatar_img = '';
if ( $profiledata['user_avatar_type'] && $profiledata['user_allowavatar'] )
{
	switch( $profiledata['user_avatar_type'] )
	{
		case USER_AVATAR_UPLOAD:
			$avatar_img = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $board_config['avatar_path'] . '/' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
		case USER_AVATAR_REMOTE:
			$avatar_img = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
		case USER_AVATAR_GALLERY:
			$avatar_img = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $board_config['avatar_gallery_path'] . '/' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
	}
}

$poster_rank = '';
$rank_image = '';
if ( $profiledata['user_rank'] )
{
	for($i = 0; $i < count($ranksrow); $i++)
	{
		if ( $profiledata['user_rank'] == $ranksrow[$i]['rank_id'] && $ranksrow[$i]['rank_special'] )
		{
			$poster_rank = $ranksrow[$i]['rank_title'];
			$rank_image = ( $ranksrow[$i]['rank_image'] ) ? '<img src="' . $ranksrow[$i]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
		}
	}
}
else
{
	for($i = 0; $i < count($ranksrow); $i++)
	{
		if ( $profiledata['user_posts'] >= $ranksrow[$i]['rank_min'] && !$ranksrow[$i]['rank_special'] )
		{
			$poster_rank = $ranksrow[$i]['rank_title'];
			$rank_image = ( $ranksrow[$i]['rank_image'] ) ? '<img src="' . $ranksrow[$i]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
		}
	}
}

$temp_url = append_sid("privmsg.$phpEx?mode=post&amp;" . POST_USERS_URL . "=" . $profiledata['user_id']);
$pm_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_pm'] . '" alt="' . $lang['Send_private_message'] . '" title="' . $lang['Send_private_message'] . '" border="0" /></a>';
$pm = '<a href="' . $temp_url . '">' . $lang['Send_private_message'] . '</a>';

if ( !empty($profiledata['user_viewemail']) || $userdata['user_level'] == ADMIN )
{
	$email_uri = ( $board_config['board_email_form'] ) ? append_sid("profile.$phpEx?mode=email&amp;" . POST_USERS_URL .'=' . $profiledata['user_id']) : 'mailto:' . $profiledata['user_email'];

	$email_img = '<a href="' . $email_uri . '"><img src="' . $images['icon_email'] . '" alt="' . $lang['Send_email'] . '" title="' . $lang['Send_email'] . '" border="0" /></a>';
	$email = '<a href="' . $email_uri . '">' . $lang['Send_email'] . '</a>';
}
else
{
	$email_img = '&nbsp;';
	$email = '&nbsp;';
}

$www_img = ( $profiledata['user_website'] ) ? '<a href="' . $profiledata['user_website'] . '" target="_userwww"><img src="' . $images['icon_www'] . '" alt="' . $lang['Visit_website'] . '" title="' . $lang['Visit_website'] . '" border="0" /></a>' : '&nbsp;';
$www = ( $profiledata['user_website'] ) ? '<a href="' . $profiledata['user_website'] . '" target="_userwww">' . $profiledata['user_website'] . '</a>' : '&nbsp;';

if ( !empty($profiledata['user_icq']) )
{
	$icq_status_img = '<a href="http://wwp.icq.com/' . $profiledata['user_icq'] . '#pager"><img src="http://web.icq.com/whitepages/online?icq=' . $profiledata['user_icq'] . '&img=5" width="18" height="18" border="0" /></a>';
	$icq_img = '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $profiledata['user_icq'] . '"><img src="' . $images['icon_icq'] . '" alt="' . $lang['ICQ'] . '" title="' . $lang['ICQ'] . '" border="0" /></a>';
	$icq =  '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $profiledata['user_icq'] . '">' . $lang['ICQ'] . '</a>';
}
else
{
	$icq_status_img = '&nbsp;';
	$icq_img = '&nbsp;';
	$icq = '&nbsp;';
}

$fb_img = ( $profiledata['user_fb'] ) ? '<a href="https://www.facebook.com/' . $profiledata['user_fb'] . '" target="blank" title="' . $lang['FB'] . '"><img src="' . $images['icon_fb'] . '" alt="' . $lang['FB'] . '" /></a>' : ''; 
$fb = ( $profiledata['user_fb'] ) ? '<a href="https://www.facebook.com/' . $profiledata['user_fb'] . '" target="blank">' . $lang['FB'] . '</a>' : ''; 

$ig_img = ( $profiledata['user_ig'] ) ? '<a href="https://www.instagram.com/' . $profiledata['user_ig'] . '" target="blank" title="' . $lang['IG'] . '"><img src="' . $images['icon_ig'] . '" alt="' . $lang['IG'] . '" /></a>' : ''; 
$ig = ( $profiledata['user_ig'] ) ? '<a href="https://www.instagram.com/' . $profiledata['user_ig'] . '" target="blank">' . $lang['IG'] . '</a>' : ''; 

$pt_img = ( $profiledata['user_pt'] ) ? '<a href="https://www.pinterest.com/' . $profiledata['user_pt'] . '" target="blank" title="' . $lang['PT'] . '"><img src="' . $images['icon_pt'] . '" alt="' . $lang['PT'] . '" /></a>' : ''; 
$pt = ( $profiledata['user_pt'] ) ? '<a href="https://www.pinterest.com/' . $profiledata['user_pt'] . '" target="blank">' . $lang['PT'] . '</a>' : ''; 

$twr_img = ( $profiledata['user_twr'] ) ? '<a href="https://twitter.com/' . $profiledata['user_twr'] . '" target="blank"><img src="' . $images['icon_twr'] . '" alt="' . $lang['TWR'] . '" title="' . $lang['TWR'] . '" border="0" /></a>' : '';
$twr = ( $profiledata['user_twr'] ) ? '<a href="https://twitter.com/' . $profiledata['user_twr'] . '" target="blank">' . $lang['TWR'] . '</a>' : '';

$skp_img = ( $profiledata['user_skp'] ) ? '<a href="skype:' . $profiledata['user_skp'] . '?call" title="' . $lang['SKP'] . '" target="blank"><img src="' . $images['icon_skp'] . '" alt="' . $lang['SKP'] . '" /></a>' : ''; 
$skp = ( $profiledata['user_skp'] ) ? '<a href="skype:' . $profiledata['user_skp'] . '?call" target="blank">' . $lang['SKP'] . '</a>' : ''; 

$tg_img = ( $profiledata['user_tg'] ) ? '<a href="https://t.me/' . $profiledata['user_tg'] . '" target="blank"><img src="' . $images['icon_tg'] . '" alt="' . $lang['TG'] . '" title="' . $lang['TG'] . '" border="0" /></a>' : '';
$tg = ( $profiledata['user_tg'] ) ? '<a href="https://t,me/' . $profiledata['user_tg'] . '" target="blank">' . $lang['TG'] . '</a>' : '';

$li_img = ( $profiledata['user_li'] ) ? '<a href="https://www.linkedin.com/in/' . $profiledata['user_li'] . '" target="blank"><img src="' . $images['icon_li'] . '" alt="' . $lang['LI'] . '" title="' . $lang['LI'] . '" border="0" /></a>' : '';
$li = ( $profiledata['user_li'] ) ? '<a href="https://www.linkedin.com/in/' . $profiledata['user_li'] . '" target="blank">' . $lang['LI'] . '</a>' : '';

$tt_img = ( $profiledata['user_tt'] ) ? '<a href="https://www.tiktok.com/@' . $profiledata['user_tt'] . '" target="blank"><img src="' . $images['icon_tt'] . '" alt="' . $lang['TT'] . '" title="' . $lang['TT'] . '" border="0" /></a>' : '';
$tt = ( $profiledata['user_tt'] ) ? '<a href="https://www.tiktok.com/@' . $profiledata['user_tt'] . '" target="blank">' . $lang['TT'] . '</a>' : '';

$dc_img = ( $profiledata['user_dc'] ) ? '<a href="https://www.discordapp.com/users/' . $profiledata['user_dc'] . '" target="blank"><img src="' . $images['icon_dc'] . '" alt="' . $lang['DC'] . '" title="' . $lang['DC'] . '" border="0" /></a>' : '';
$dc = ( $profiledata['user_dc'] ) ? '<a href="https://www.discordapp.com/users/' . $profiledata['user_dc'] . '" target="blank">' . $lang['DC'] . '</a>' : '';

$temp_url = append_sid("search.$phpEx?search_author=" . urlencode($profiledata['username']) . "&amp;showresults=posts");
$search_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_search'] . '" alt="' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '" title="' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '" border="0" /></a>';
$search = '<a href="' . $temp_url . '">' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '</a>';

//
// Generate page
//
$page_title = $lang['Viewing_profile'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

if (function_exists('get_html_translation_table'))
{
	$u_search_author = urlencode(strtr($profiledata['username'], array_flip(get_html_translation_table(HTML_ENTITIES))));
}
else
{
	$u_search_author = urlencode(str_replace(array('&amp;', '&#039;', '&quot;', '&lt;', '&gt;'), array('&', "'", '"', '<', '>'), $profiledata['username']));
}

$template->assign_vars(array(
	'USERNAME' => $profiledata['username'],
	'JOINED' => create_date($lang['DATE_FORMAT'], $profiledata['user_regdate'], $board_config['board_timezone']),
	'POSTER_RANK' => $poster_rank,
	'RANK_IMAGE' => $rank_image,
	'POSTS_PER_DAY' => $posts_per_day,
	'POSTS' => $profiledata['user_posts'],
	'PERCENTAGE' => $percentage . '%', 
	'POST_DAY_STATS' => sprintf($lang['User_post_day_stats'], $posts_per_day), 
	'POST_PERCENT_STATS' => sprintf($lang['User_post_pct_stats'], $percentage), 

	'SEARCH_IMG' => $search_img,
	'SEARCH' => $search,
	'PM_IMG' => $pm_img,
	'PM' => $pm,
	'EMAIL_IMG' => $email_img,
	'EMAIL' => $email,
	'WWW_IMG' => $www_img,
	'WWW' => $www,
	'ICQ_STATUS_IMG' => $icq_status_img,
	'ICQ_IMG' => $icq_img, 
	'ICQ' => $icq, 
	'FB_IMG' => $fb_img, 
	'FB' => $fb, 
	'IG_IMG' => $ig_img,
	'IG' => $ig,
	'PT_IMG' => $pt_img,
	'PT' => $pt,
	'TWR_IMG' => $twr_img,
	'TWR' => $twr,
	'SKP_IMG' => $skp_img, 
	'SKP' => $skp, 
	'TG_IMG' => $tg_img,
	'TG' => $tg,
	'LI_IMG' => $li_img,
	'LI' => $li,
	'TT_IMG' => $tt_img,
	'TT' => $tt,
	'DC_IMG' => $dc_img,
	'DC' => $dc,
	
	'LOCATION' => ( $profiledata['user_from'] ) ? $profiledata['user_from'] : '&nbsp;',
	'OCCUPATION' => ( $profiledata['user_occ'] ) ? $profiledata['user_occ'] : '&nbsp;',
	'INTERESTS' => ( $profiledata['user_interests'] ) ? $profiledata['user_interests'] : '&nbsp;',
	'AVATAR_IMG' => $avatar_img,

	'L_VIEWING_PROFILE' => sprintf($lang['Viewing_user_profile'], $profiledata['username']), 
	'L_ABOUT_USER' => sprintf($lang['About_user'], $profiledata['username']), 
	'L_AVATAR' => $lang['Avatar'], 
	'L_POSTER_RANK' => $lang['Poster_rank'], 
	'L_JOINED' => $lang['Joined'], 
	'L_TOTAL_POSTS' => $lang['Total_posts'], 
	'L_SEARCH_USER_POSTS' => sprintf($lang['Search_user_posts'], $profiledata['username']), 
	'L_CONTACT' => $lang['Contact'],
	'L_EMAIL_ADDRESS' => $lang['Email_address'],
	'L_EMAIL' => $lang['Email'],
	'L_PM' => $lang['Private_Message'],
	'L_ICQ_NUMBER' => $lang['ICQ'],
	'L_FACEBOOK' => $lang['FB'],
	'L_INSTAGRAM' => $lang['IG'],
	'L_PINTEREST' => $lang['PT'],
	'L_TWITTER' => $lang['TWR'],
	'L_SKYPE' => $lang['SKP'],
	'L_TELEGRAM' => $lang['TG'],
	'L_LINKEDIN' => $lang['LI'],
	'L_TIKTOK' => $lang['TT'],
	'L_DISCORD' => $lang['DC'],	
	'L_WEBSITE' => $lang['Website'],
	'L_LOCATION' => $lang['Location'],
	'L_OCCUPATION' => $lang['Occupation'],
	'L_INTERESTS' => $lang['Interests'],

	'U_SEARCH_USER' => append_sid("search.$phpEx?search_author=" . $u_search_author),

	'S_PROFILE_ACTION' => append_sid("profile.$phpEx"))
);

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>