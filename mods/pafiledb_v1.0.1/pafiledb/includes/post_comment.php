<?
/***************************************************************************
 *                            post_comment.php
 *                            -------------------
 *   begin                : Wednesday, Jan 1, 2003
 *   copyright            : (C) 2002 Illuminati Gaming Network
 *   email                : whofarted75@yahoo.com
 *
 *   $Id: post_comment.php,v 0.0.6   Exp $
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
if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

include($phpbb_root_path . 'includes/bbcode.'.$phpEx);
include($phpbb_root_path . 'includes/functions_post.'.$phpEx);
include_once($phpbb_root_path . 'pafiledb/includes/functions.'.$phpEx);

//
// Get sig & bbcode id for user
//
$profiledata = get_userdata(intval($userdata['user_id']));

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

if ( isset($HTTP_GET_VARS['cid']) || isset($HTTP_POST_VARS['cid']) )
{
	$cid = ( isset($HTTP_GET_VARS['cid']) ) ? intval($HTTP_GET_VARS['cid']) : intval($HTTP_POST_VARS['cid']);
}

$allowhtml = $config['allow_html'];
$allowbbcode = $config['allow_bbcode'];
$allowsmilies = $config['allow_smilies'];
//
// Initial editing page, if user has a sig already
// the box will be filled in for them to edit
// 

if(!isset($HTTP_POST_VARS['submit']))
{

	// Generate smilies listing for page output
	generate_smilies('inline', PAGE_POSTING);

	//
	// Include page header
	//
	$template->set_filenames(array(
		'comment_post_output' => 'pa_comment_posting.tpl')
	);

	$html_status =  ( $userdata['user_allowhtml'] && $config['allow_html'] ) ? $lang['HTML_is_ON'] : $lang['HTML_is_OFF'];
	$bbcode_status = ( $userdata['user_allowbbcode'] && $config['allow_bbcode']  ) ? $lang['BBCode_is_ON'] : $lang['BBCode_is_OFF'];
	$smilies_status = ( $userdata['user_allowsmile'] && $config['allow_smilies']  ) ? $lang['Smilies_are_ON'] : $lang['Smilies_are_OFF'];
    $links_status = ( $config['allow_comment_links'] ) ? $lang['Links_are_ON'] : (isset($lang['Links_are_OFF']) ? $lang['Links_are_OFF'] : 'Links are OFF');
    $images_status = ( $config['allow_comment_images'] ) ? (isset($lang['Images_are_ON']) ? $lang['Images_are_ON'] : 'Images are ON') : (isset($lang['Images_are_OFF']) ? $lang['Images_are_OFF'] : 'Images are OFF');
	$hidden_form_fields = '<input type="hidden" name="action" value="file">
				<input type="hidden" name="id" value="' . $id . '">
				<input type="hidden" name="comment" value="post">';


	//
	// Output the data to the template
	//
	$template->assign_vars(array(
		'HTML_STATUS' => $html_status,
		'BBCODE_STATUS' => sprintf($bbcode_status, '<a href="' . append_sid("faq.$phpEx?mode=bbcode") . '" target="_phpbbcode">', '</a>'), 
		'SMILIES_STATUS' => $smilies_status,
		'LINKS_STATUS' => $links_status, 
		'IMAGES_STATUS' => $images_status, 

		'L_COMMENT_ADD' => $lang['Comment_add'],
		'L_COMMENT' => $lang['Message_body'],
		'L_COMMENT_TITLE' => $lang['Subject'],
		'L_OPTIONS' => $lang['Options'],
		'L_COMMENT_EXPLAIN' => sprintf($lang['Comment_explain'], $config['max_comment_chars']),
		'L_PREVIEW' => $lang['Preview'],
		'L_SUBMIT' => $lang['Submit'],
		'L_DOWNLOAD'=> $lang['Download'],
		'L_INDEX' => sprintf($lang['Forum_Index'], $board_config['sitename']),

		'L_BBCODE_B_HELP' => $lang['bbcode_b_help'], 
		'L_BBCODE_I_HELP' => $lang['bbcode_i_help'], 
		'L_BBCODE_U_HELP' => $lang['bbcode_u_help'], 
		'L_BBCODE_Q_HELP' => $lang['bbcode_q_help'], 
		'L_BBCODE_C_HELP' => $lang['bbcode_c_help'], 
		'L_BBCODE_L_HELP' => $lang['bbcode_l_help'], 
		'L_BBCODE_O_HELP' => $lang['bbcode_o_help'], 
		'L_BBCODE_P_HELP' => $lang['bbcode_p_help'], 
		'L_BBCODE_W_HELP' => $lang['bbcode_w_help'], 
		'L_BBCODE_A_HELP' => $lang['bbcode_a_help'], 
		'L_BBCODE_S_HELP' => $lang['bbcode_s_help'], 
		'L_BBCODE_F_HELP' => $lang['bbcode_f_help'], 
		'L_EMPTY_MESSAGE' => $lang['Empty_message'],

		'L_FONT_COLOR' => $lang['Font_color'], 
		'L_COLOR_DEFAULT' => $lang['color_default'], 
		'L_COLOR_DARK_RED' => $lang['color_dark_red'], 
		'L_COLOR_RED' => $lang['color_red'], 
		'L_COLOR_ORANGE' => $lang['color_orange'], 
		'L_COLOR_BROWN' => $lang['color_brown'], 
		'L_COLOR_YELLOW' => $lang['color_yellow'], 
		'L_COLOR_GREEN' => $lang['color_green'], 
		'L_COLOR_OLIVE' => $lang['color_olive'], 
		'L_COLOR_CYAN' => $lang['color_cyan'], 
		'L_COLOR_BLUE' => $lang['color_blue'], 
		'L_COLOR_DARK_BLUE' => $lang['color_dark_blue'], 
		'L_COLOR_INDIGO' => $lang['color_indigo'], 
		'L_COLOR_VIOLET' => $lang['color_violet'], 
		'L_COLOR_WHITE' => $lang['color_white'], 
		'L_COLOR_BLACK' => $lang['color_black'], 

		'L_FONT_SIZE' => $lang['Font_size'], 
		'L_FONT_TINY' => $lang['font_tiny'], 
		'L_FONT_SMALL' => $lang['font_small'], 
		'L_FONT_NORMAL' => $lang['font_normal'], 
		'L_FONT_LARGE' => $lang['font_large'], 
		'L_FONT_HUGE' => $lang['font_huge'], 

		'L_BBCODE_CLOSE_TAGS' => $lang['Close_Tags'], 
		'L_STYLES_TIP' => $lang['Styles_tip'], 

		'U_DOWNLOAD' => append_sid('dload.'.$phpEx),
		'U_INDEX' => append_sid('index.'.$phpEx),

		'S_POST_ACTION' => append_sid("dload.$phpEx"),
		'S_HIDDEN_FORM_FIELDS' => $hidden_form_fields)
	);

	//
	// Show preview stuff if user clicked preview
	//
	if(isset($HTTP_POST_VARS['preview']))
	{
		$comments_text = stripslashes($HTTP_POST_VARS['message']);
		$title = stripslashes($HTTP_POST_VARS['subject']);
		$comment_bbcode_uid = ( $bbcode_on ) ? make_bbcode_uid() : '';
		$comments_text = bbencode_first_pass($comments_text, $comment_bbcode_uid);

		if ( !$config['allow_html'] && $userdata['user_allowhtml'] )
		{
			$comments_text = comment_suite($user_sig);
			$comments_text = preg_replace('#(<)([\/]?.*?)(>)#is', "&lt;\\2&gt;", $comments_text);
		}

		if ( $config['allow_bbcode'])
		{
			$comments_text = comment_suite($comments_text);
			$comments_text = ( $board_config['allow_bbcode'] ) ? bbencode_second_pass($comments_text, $comment_bbcode_uid) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $comments_text);
		}

		//
		// Now we run sig suite before checking for smilies 
		// so admins can add them in messages if they like
		// and so smilies are not counted as images in sigs.
		// this is done here again incase above conditions are
		// not met.
		//
		$comments_text = comment_suite($comments_text);

		//
		// Parse smilies
		//
		if ( $config['allow_smilies'] )
		{
			$comment_suite = smilies_pass($comments_text);
		}

		$comments_text = make_clickable($comments_text);
		$comments_text = str_replace("\n", "\n<br />\n", $comments_text);

		//
		// Replace naughty words
		//

		if (!$userdata['user_allowswearywords'])
		{
			$orig_word = array();
			$replacement_word = array();
			obtain_word_list($orig_word, $replacement_word);
			$comments_text = preg_replace($orig_word, $replacement_word, $comments_text);
		}
	
		$template->assign_block_vars('preview', array());
	
		$template->assign_vars(array(
			'COMMENT' => stripslashes($HTTP_POST_VARS['message']),
			'SUBJECT' => stripslashes($HTTP_POST_VARS['subject']),        
			'PRE_COMMENT' => $comments_text)
		);
	}

	$template->assign_var_from_handle("ACTION_INCLUDE", "comment_post_output");

}


//
// Update sig if they click submit
//
if(isset($HTTP_POST_VARS['submit']))
{

	$length = strlen($HTTP_POST_VARS['message']);
	$comments_text = str_replace('<br />', "\n", $HTTP_POST_VARS['message']);
	$comment_bbcode_uid = make_bbcode_uid();
	$comments_text = prepare_message($comments_text, $allowhtml, $allowbbcode, $allowsmilies, $comment_bbcode_uid);
	$comments_text = bbencode_first_pass($comments_text, $comment_bbcode_uid);

	$poster_id = $userdata['user_id'];
	$title = stripslashes($HTTP_POST_VARS['subject']);
	$time = time();
	if($length > $config['max_comment_chars'])
	{
		message_die(GENERAL_ERROR, 'Your comment is too long!<br/>The maximum length allowed in characters is ' . $config['max_comment_chars'] . '');
	}


//	$sql = "INSERT INTO " . PA_COMMENTS_TABLE . " VALUES('','" . $id . "','" . str_replace("\'", "''", $comments_text) . "','" . str_replace("\'", "''", $title) . "','" . $time . "', '" . $comment_bbcode_uid . "','" . $poster_id . "')";
	$sql = "INSERT INTO " . PA_COMMENTS_TABLE . " VALUES(NULL, '" . $id . "', '" . str_replace("\'", "''", $comments_text) . "', '" . str_replace("\'", "''", $title) . "', '" . $time . "', '" . $comment_bbcode_uid . "', '" . $poster_id . "')";
	if ( !($db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt insert comments', '', __LINE__, __FILE__, $sql);
	}

	$template->assign_vars(array(
		'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("dload.php?action=file&id=" . $id) . '">')
	);
	$message = $lang['Comment_posted'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php?action=file&id=" . $id) . "\">", "</a>");
	message_die(GENERAL_MESSAGE, $message);	
}

?>