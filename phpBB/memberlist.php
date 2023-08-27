<?php
/***************************************************************************
 *                              memberlist.php
 *                            -------------------
 *   begin                : Friday, May 11, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id$
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true);
}
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_VIEWMEMBERS);
init_userprefs($userdata);
//
// End session management
//

$start = ( isset($HTTP_GET_VARS['start']) ) ? intval($HTTP_GET_VARS['start']) : 0;
$start = ($start < 0) ? 0 : $start;

if ( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
{
	$mode = ( isset($HTTP_POST_VARS['mode']) ) ? htmlspecialchars($HTTP_POST_VARS['mode'], ENT_COMPAT, 'ISO-8859-1') : htmlspecialchars($HTTP_GET_VARS['mode'], ENT_COMPAT, 'ISO-8859-1');
}
else
{
	$mode = 'joined';
}

if(isset($HTTP_POST_VARS['order']))
{
	$sort_order = ($HTTP_POST_VARS['order'] == 'ASC') ? 'ASC' : 'DESC';
}
else if(isset($HTTP_GET_VARS['order']))
{
	$sort_order = ($HTTP_GET_VARS['order'] == 'ASC') ? 'ASC' : 'DESC';
}
else
{
	$sort_order = 'ASC';
}

//
// Memberlist sorting
//
$mode_types_text = array($lang['Sort_Joined'], $lang['Sort_Username'], $lang['Sort_Location'], $lang['Sort_Posts'], $lang['Sort_Email'],  $lang['Sort_Website'], $lang['Sort_Top_Ten']);
$mode_types = array('joined', 'username', 'location', 'posts', 'email', 'website', 'topten');

$select_sort_mode = '<select name="mode">';
for($i = 0; $i < count($mode_types_text); $i++)
{
	$selected = ( $mode == $mode_types[$i] ) ? ' selected="selected"' : '';
	$select_sort_mode .= '<option value="' . $mode_types[$i] . '"' . $selected . '>' . $mode_types_text[$i] . '</option>';
}
$select_sort_mode .= '</select>';

$select_sort_order = '<select name="order">';
if($sort_order == 'ASC')
{
	$select_sort_order .= '<option value="ASC" selected="selected">' . $lang['Sort_Ascending'] . '</option><option value="DESC">' . $lang['Sort_Descending'] . '</option>';
}
else
{
	$select_sort_order .= '<option value="ASC">' . $lang['Sort_Ascending'] . '</option><option value="DESC" selected="selected">' . $lang['Sort_Descending'] . '</option>';
}
$select_sort_order .= '</select>';

//
// Generate page
//
$page_title = $lang['Memberlist'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array(
	'body' => 'memberlist_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

$template->assign_vars(array(
	'L_SELECT_SORT_METHOD' => $lang['Select_sort_method'],
	'L_EMAIL' => $lang['Email'],
	'L_WEBSITE' => $lang['Website'],
	'L_FROM' => $lang['Location'],
	'L_ORDER' => $lang['Order'],
	'L_SORT' => $lang['Sort'],
	'L_SUBMIT' => $lang['Sort'],
	'L_ICQ' => $lang['ICQ'], 
	'L_FB' => $lang['FB'],
	'L_IG' => $lang['IG'],
	'L_PT' => $lang['PT'],
	'L_TWR' => $lang['TWR'],
	'L_SKP' => $lang['SKP'],
	'L_TG' => $lang['TG'],
	'L_LI' => $lang['LI'],
	'L_TT' => $lang['TT'],
	'L_DC' => $lang['DC'],	
	'L_JOINED' => $lang['Joined'], 
	'L_POSTS' => $lang['Posts'], 
	'L_PM' => $lang['Private_Message'], 

	'S_MODE_SELECT' => $select_sort_mode,
	'S_ORDER_SELECT' => $select_sort_order,
	'S_MODE_ACTION' => append_sid("memberlist.$phpEx"))
);

switch( $mode )
{
	case 'joined':
		$order_by = "user_regdate $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'username':
		$order_by = "username $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'location':
		$order_by = "user_from $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'posts':
		$order_by = "user_posts $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'email':
		$order_by = "user_email $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'website':
		$order_by = "user_website $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
	case 'topten':
		$order_by = "user_posts $sort_order LIMIT 10";
		break;
	default:
		$order_by = "user_regdate $sort_order LIMIT $start, " . $board_config['topics_per_page'];
		break;
}

$sql = "SELECT username, user_id, user_viewemail, user_posts, user_regdate, user_from, user_website, user_email, user_icq, user_fb, user_ig, user_pt, user_twr, user_skp, user_tg, user_li, user_tt, user_dc, user_avatar, user_avatar_type, user_allowavatar 
	FROM " . USERS_TABLE . "
	WHERE user_id <> " . ANONYMOUS . "
	ORDER BY $order_by";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query users', '', __LINE__, __FILE__, $sql);
}

if ( $row = $db->sql_fetchrow($result) )
{
	$i = 0;
	do
	{
		$username = $row['username'];
		$user_id = $row['user_id'];

		$from = ( !empty($row['user_from']) ) ? $row['user_from'] : '&nbsp;';
		$joined = create_date($lang['DATE_FORMAT'], $row['user_regdate'], $board_config['board_timezone']);
		$posts = ( $row['user_posts'] ) ? $row['user_posts'] : 0;

		$poster_avatar = '';
		if ( $row['user_avatar_type'] && $user_id != ANONYMOUS && $row['user_allowavatar'] )
		{
			switch( $row['user_avatar_type'] )
			{
				case USER_AVATAR_UPLOAD:
					$poster_avatar = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $board_config['avatar_path'] . '/' . $row['user_avatar'] . '" alt="" border="0" />' : '';
					break;
				case USER_AVATAR_REMOTE:
					$poster_avatar = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $row['user_avatar'] . '" alt="" border="0" />' : '';
					break;
				case USER_AVATAR_GALLERY:
					$poster_avatar = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $board_config['avatar_gallery_path'] . '/' . $row['user_avatar'] . '" alt="" border="0" />' : '';
					break;
			}
		}

		if ( !empty($row['user_viewemail']) || $userdata['user_level'] == ADMIN )
		{
			$email_uri = ( $board_config['board_email_form'] ) ? append_sid("profile.$phpEx?mode=email&amp;" . POST_USERS_URL .'=' . $user_id) : 'mailto:' . $row['user_email'];

			$email_img = '<a href="' . $email_uri . '"><img src="' . $images['icon_email'] . '" alt="' . $lang['Send_email'] . '" title="' . $lang['Send_email'] . '" border="0" /></a>';
			$email = '<a href="' . $email_uri . '">' . $lang['Send_email'] . '</a>';
		}
		else
		{
			$email_img = '&nbsp;';
			$email = '&nbsp;';
		}

		$temp_url = append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$user_id");
		$profile_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_profile'] . '" alt="' . $lang['Read_profile'] . '" title="' . $lang['Read_profile'] . '" border="0" /></a>';
		$profile = '<a href="' . $temp_url . '">' . $lang['Read_profile'] . '</a>';

		$temp_url = append_sid("privmsg.$phpEx?mode=post&amp;" . POST_USERS_URL . "=$user_id");
		$pm_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_pm'] . '" alt="' . $lang['Send_private_message'] . '" title="' . $lang['Send_private_message'] . '" border="0" /></a>';
		$pm = '<a href="' . $temp_url . '">' . $lang['Send_private_message'] . '</a>';

		$www_img = ( $row['user_website'] ) ? '<a href="' . $row['user_website'] . '" target="_userwww"><img src="' . $images['icon_www'] . '" alt="' . $lang['Visit_website'] . '" title="' . $lang['Visit_website'] . '" border="0" /></a>' : '';
		$www = ( $row['user_website'] ) ? '<a href="' . $row['user_website'] . '" target="_userwww">' . $lang['Visit_website'] . '</a>' : '';

		if ( !empty($row['user_icq']) )
		{
			$icq_status_img = '<a href="http://wwp.icq.com/' . $row['user_icq'] . '#pager"><img src="http://web.icq.com/whitepages/online?icq=' . $row['user_icq'] . '&img=5" width="18" height="18" border="0" /></a>';
			$icq_img = '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $row['user_icq'] . '"><img src="' . $images['icon_icq'] . '" alt="' . $lang['ICQ'] . '" title="' . $lang['ICQ'] . '" border="0" /></a>';
			$icq =  '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $row['user_icq'] . '">' . $lang['ICQ'] . '</a>';
		}
		else
		{
			$icq_status_img = '';
			$icq_img = '';
			$icq = '';
		}

		$fb_img = ( $row['user_fb'] ) ? '<a href="https://www.facebook.com/' . $row['user_fb'] . '" target="blank" title="' . $lang['FB'] . '"><img src="' . $images['icon_fb'] . '" alt="' . $lang['FB'] . '" /></a>' : ''; 
		$fb = ( $row['user_fb'] ) ? '<a href="https://www.facebook.com/' . $row['user_fb'] . '" target="blank">' . $lang['FB'] . '</a>' : ''; 

		$ig_img = ( $row['user_ig'] ) ? '<a href="https://www.instagram.com/' . $row['user_ig'] . '" target="blank" title="' . $lang['IG'] . '"><img src="' . $images['icon_ig'] . '" alt="' . $lang['IG'] . '" /></a>' : ''; 
		$ig = ( $row['user_ig'] ) ? '<a href="https://www.instagram.com/' . $row['user_ig'] . '" target="blank">' . $lang['IG'] . '</a>' : ''; 

		$pt_img = ( $row['user_pt'] ) ? '<a href="/www.pinterest.com/' . $row['user_pt'] . '" target="blank" title="' . $lang['PT'] . '"><img src="' . $images['icon_pt'] . '" alt="' . $lang['PT'] . '" /></a>' : ''; 
		$pt = ( $row['user_pt'] ) ? '<a href="https://www.pinterest.com/' . $row['user_pt'] . '" target="blank">' . $lang['PT'] . '</a>' : ''; 

		$twr_img = ( $row['user_twr'] ) ? '<a href="https://twitter.com/' . $row['user_twr'] . '" target="blank"><img src="' . $images['icon_twr'] . '" alt="' . $lang['TWR'] . '" title="' . $lang['TWR'] . '" border="0" /></a>' : '';
		$twr = ( $row['user_twr'] ) ? '<a href="https://twitter.com/' . $row['user_twr'] . '" target="blank">' . $lang['TWR'] . '</a>' : '';

		$skp_img = ( $row['user_skp'] ) ? '<a href="skype:' . $row['user_skp'] . '?call" title="' . $lang['SKP'] . '"><img src="' . $images['icon_skp'] . '" alt="' . $lang['SKP'] . '" /></a>' : ''; 
	    $skp = ( $row['user_skp'] ) ? '<a href="skype:' . $row['user_skp'] . '?call">' . $lang['SKP'] . '</a>' : ''; 

		$tg_img = ( $row['user_tg'] ) ? '<a href="https://t.me/' . $row['user_tg'] . '" target="blank"><img src="' . $images['icon_tg'] . '" alt="' . $lang['TG'] . '" title="' . $lang['TG'] . '" border="0" /></a>' : '';
		$tg = ( $row['user_tg'] ) ? '<a href="https://t,me/' . $row['user_tg'] . '" target="blank">' . $lang['TG'] . '</a>' : '';

		$li_img = ( $row['user_li'] ) ? '<a href="https://www.linkedin.com/in/' . $row['user_li'] . '" target="blank"><img src="' . $images['icon_li'] . '" alt="' . $lang['LI'] . '" title="' . $lang['LI'] . '" border="0" /></a>' : '';
		$li = ( $row['user_li'] ) ? '<a href="https://www.linkedin.com/in/' . $row['user_li'] . '" target="blank">' . $lang['LI'] . '</a>' : '';

		$tt_img = ( $row['user_tt'] ) ? '<a href="https://www.tiktok.com/@' . $row['user_tt'] . '" target="blank"><img src="' . $images['icon_tt'] . '" alt="' . $lang['TT'] . '" title="' . $lang['TT'] . '" border="0" /></a>' : '';
		$tt = ( $row['user_tt'] ) ? '<a href="https://www.tiktok.com/@' . $row['user_tt'] . '" target="blank">' . $lang['TT'] . '</a>' : '';

		$dc_img = ( $row['user_dc'] ) ? '<a href="https://www.discordapp.com/users/' . $row['user_dc'] . '" target="blank"><img src="' . $images['icon_dc'] . '" alt="' . $lang['DC'] . '" title="' . $lang['DC'] . '" border="0" /></a>' : '';
		$dc = ( $row['user_dc'] ) ? '<a href="https://www.discordapp.com/users/' . $row['user_dc'] . '" target="blank">' . $lang['DC'] . '</a>' : '';

		$temp_url = append_sid("search.$phpEx?search_author=" . urlencode($username) . "&amp;showresults=posts");
		$search_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_search'] . '" alt="' . sprintf($lang['Search_user_posts'], $username) . '" title="' . sprintf($lang['Search_user_posts'], $username) . '" border="0" /></a>';
		$search = '<a href="' . $temp_url . '">' . sprintf($lang['Search_user_posts'], $username) . '</a>';

		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$template->assign_block_vars('memberrow', array(
			'ROW_NUMBER' => $i + ( $start + 1 ),
			'ROW_COLOR' => '#' . $row_color,
			'ROW_CLASS' => $row_class,
			'USERNAME' => $username,
			'FROM' => $from,
			'JOINED' => $joined,
			'POSTS' => $posts,
			'AVATAR_IMG' => $poster_avatar,
			'PROFILE_IMG' => $profile_img, 
			'PROFILE' => $profile, 
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
			
			'U_VIEWPROFILE' => append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$user_id"))
		);

		$i++;
	}
	while ( $row = $db->sql_fetchrow($result) );
	$db->sql_freeresult($result);
}

if ( $mode != 'topten' || $board_config['topics_per_page'] < 10 )
{
	$sql = "SELECT count(*) AS total
		FROM " . USERS_TABLE . "
		WHERE user_id <> " . ANONYMOUS;

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Error getting total users', '', __LINE__, __FILE__, $sql);
	}

	if ( $total = $db->sql_fetchrow($result) )
	{
		$total_members = $total['total'];

		$pagination = generate_pagination("memberlist.$phpEx?mode=$mode&amp;order=$sort_order", $total_members, $board_config['topics_per_page'], $start). '&nbsp;';
	}
	$db->sql_freeresult($result);
}
else
{
	$pagination = '&nbsp;';
	$total_members = 10;
}

$template->assign_vars(array(
	'PAGINATION' => $pagination,
	'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $total_members / $board_config['topics_per_page'] )), 

	'L_GOTO_PAGE' => $lang['Goto_page'])
);

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>