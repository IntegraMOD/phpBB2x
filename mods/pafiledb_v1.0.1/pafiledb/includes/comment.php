<?php
/*
  paFileDB 3.0
  ©2001/2002 PHP Arena
  Written by Todd
  todd@phparena.net
  http://www.phparena.net
  Keep all copyright links on the script visible
  Please read the license included with this script for more information.
*/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

$cancel = ( isset($HTTP_POST_VARS['cancel']) ) ? TRUE : 0;

$confirm = ( isset($HTTP_POST_VARS['confirm']) ) ? TRUE : 0;

$template->set_filenames(array(
	'comment_output' => 'pa_comment_body.tpl')
);

global $delete, $reply_img;

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

if ( isset($HTTP_GET_VARS['cid']) || isset($HTTP_POST_VARS['cid']) )
{
	$cid = ( isset($HTTP_GET_VARS['cid']) ) ? intval($HTTP_GET_VARS['cid']) : intval($HTTP_POST_VARS['cid']);
}

if ( isset($HTTP_GET_VARS['delete']) || isset($HTTP_POST_VARS['delete']) )
{
	$delete = ( isset($HTTP_GET_VARS['delete']) ) ? $HTTP_GET_VARS['delete'] : $HTTP_POST_VARS['delete'];
}

include($phpbb_root_path . 'includes/bbcode.'.$phpEx);

//
// Define censored word matches
//

$orig_word = array();

$replacement_word = array();

obtain_word_list($orig_word, $replacement_word);

if ($cancel)
{
	redirect(append_sid("dload.php?action=file&id=" . $id, true));
}

if ($delete == 'do') 
{
	if( $userdata['user_level'] != ADMIN )
	{
		message_die(GENERAL_MESSAGE, $lang['Not_admin']);
	}
	else
	{

		if ( !$confirm )
		{

			$s_hidden_fields =  '<input type="hidden" name="action" value="file" /><input type="hidden" name="cid" value="' . $cid . '" /><input type="hidden" name="id" value="' . $id . '" /><input type="hidden" name="delete" value="do" />';

			include($phpbb_root_path . 'includes/page_header.'.$phpEx);

			$template->set_filenames(array(
				'confirm_body' => 'confirm_body.tpl')
			);

			$template->assign_vars(array(
				'MESSAGE_TITLE' => $lang['Information'],
				'MESSAGE_TEXT' =>  $lang['Confirm_delete_pm'],

				'L_YES' => $lang['Yes'],
				'L_NO' => $lang['No'],

				'S_CONFIRM_ACTION' => append_sid("dload.$phpEx"),
				'S_HIDDEN_FIELDS' => $s_hidden_fields)
			);

			$template->pparse('confirm_body');

			include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
		}

		if ( $confirm )
		{ 
			$sql = "DELETE FROM " . PA_COMMENTS_TABLE . " WHERE comments_id = " . $cid;

			if ( !($db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Couldnt delete this comment', '', __LINE__, __FILE__, $sql);
			}

			$template->assign_vars(array(
				"META" => '<meta http-equiv="refresh" content="3;url='  .append_sid("dload.php?action=file&id=" . $id) . '">')
			);

			$message = $lang['Comment_deleted'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php?action=file&id=" . $id) . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
	}
}

$template->assign_vars(array(
	'L_COMMENTS' => $lang['Comments']) 
);

$sql = "SELECT * FROM " . PA_COMMENTS_TABLE . " WHERE file_id = '" . $id . "'";

if ( !($comment = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt select comments', '', __LINE__, __FILE__, $sql);
}

if (!($comment_number = $db->sql_numrows($comment)))
{
	$template->assign_block_vars("no_comment", array());

	$template->assign_vars(array(
		'L_NO_COMMENTS' => $lang['No_comments']) 
	);
}

$sql = "SELECT *
	FROM " . RANKS_TABLE . "
	ORDER BY rank_special, rank_min";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, "Could not obtain ranks information.", '', __LINE__, __FILE__, $sql);
}

$ranksrow = array();
while ( $row = $db->sql_fetchrow($result) )
{
	$ranksrow[] = $row;
}
$db->sql_freeresult($result);

while ($r = $db->sql_fetchrow($comment)) 
{
	extract ($r);
      
	$time = create_date($board_config['default_dateformat'], $comments_time, $board_config['board_timezone']);

	if ( !$config['allow_html'] )
	{
		if ( $comments_text != '' && $userdata['user_allowhtml'] )
		{
			$comments_text = comment_suite($comments_text); 

			$comments_text = preg_replace('#(<)([\/]?.*?)(>)#is', "&lt;\\2&gt;", $comments_text);
		}      
	}

	if ( $config['allow_bbcode'] )
	{
		if ( $comments_text != '' && $comment_bbcode_uid != '' )
		{
			$comments_text = comment_suite($comments_text);

			$comments_text = ( $config['allow_bbcode'] ) ? bbencode_second_pass($comments_text, $comment_bbcode_uid) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $comments_text);
		}    
	}

	$comments_text = comment_suite($comments_text);

	$comments_text = make_clickable($comments_text);

   	if ( count($orig_word) )
	{
		if ( $comments_text != '' )
		{
			$comments_text = preg_replace($orig_word, $replacement_word, $comments_text);
		}
	}

	if ( $config['allow_smilies'] )
	{
		if ( $userdata['user_allowsmile'] && $comments_text != '' )
		{
			$comments_text = smilies_pass($comments_text);
		}
	}

	$comments_poster = get_userdata(intval($poster_id));

	$poster = ( $comments_poster['user_id'] == ANONYMOUS ) ? $lang['Guest'] : $comments_poster['username'];

	$poster_posts = ( $comments_poster['user_id'] != ANONYMOUS ) ? $lang['Posts'] . ': ' . $comments_poster['user_posts'] : '';

	$poster_from = ( $comments_poster['user_from'] && $comments_poster['user_id'] != ANONYMOUS ) ? $lang['Location'] . ': ' . $comments_poster['user_from'] : '';

	$poster_joined = ( $comments_poster['user_id'] != ANONYMOUS ) ? $lang['Joined'] . ': ' . create_date($lang['DATE_FORMAT'], $comments_poster['user_regdate'], $board_config['board_timezone']) : '';

	$poster_avatar = '';
	if ( $comments_poster['user_avatar_type'] && $poster_id != ANONYMOUS && $comments_poster['user_allowavatar'] )
	{
		switch( $comments_poster['user_avatar_type'] )
		{
			case USER_AVATAR_UPLOAD:
				$poster_avatar = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $board_config['avatar_path'] . '/' . $comments_poster['user_avatar'] . '" alt="" border="0" />' : '';
				break;
			case USER_AVATAR_REMOTE:
				$poster_avatar = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $comments_poster['user_avatar'] . '" alt="" border="0" />' : '';
				break;
			case USER_AVATAR_GALLERY:
				$poster_avatar = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $board_config['avatar_gallery_path'] . '/' . $comments_poster['user_avatar'] . '" alt="" border="0" />' : '';
				break;
		}
	}
 
	//
	// Generate ranks, set them to empty string initially.
	//
	$poster_rank = '';
	$rank_image = '';
	if ( $comments_poster['user_id'] == ANONYMOUS )
	{
	}
	else if ( $comments_poster['user_rank'] )
	{
		for($j = 0; $j < count($ranksrow); $j++)
		{
			if ( $comments_poster['user_rank'] == $ranksrow[$j]['rank_id'] && $ranksrow[$j]['rank_special'] )
			{
				$poster_rank = $ranksrow[$j]['rank_title'];
				$rank_image = ( $ranksrow[$j]['rank_image'] ) ? '<img src="' . $ranksrow[$j]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
			}
		}
	}
	else
	{
		for($j = 0; $j < count($ranksrow); $j++)
		{
			if ( $comments_poster['user_posts'] >= $ranksrow[$j]['rank_min'] && !$ranksrow[$j]['rank_special'] )
			{
				$poster_rank = $ranksrow[$j]['rank_title'];
				$rank_image = ( $ranksrow[$j]['rank_image'] ) ? '<img src="' . $ranksrow[$j]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
			}
		}
	}

	$comments_text = str_replace("\n", "\n<br />\n", $comments_text);
	$reply_img = $images['reply_new'];

	$template->assign_block_vars("text", array(
		"POSTER" => $poster,
		'POSTER_RANK' => $poster_rank,
		'RANK_IMAGE' => $rank_image,
		'POSTER_JOINED' => $poster_joined,
		'POSTER_POSTS' => $poster_posts,
		'POSTER_FROM' => $poster_from,
		'POSTER_AVATAR' => $poster_avatar,
		"TITLE" => $comments_title,
		"TIME" => $time,
		"TEXT" => $comments_text) 
	);

	if( $userdata['user_level'] == ADMIN )
	{
		$template->assign_block_vars("text.is_admin", array(
			"U_COMMENT_DELETE" => append_sid("dload.php?action=file&cid=$comments_id&delete=do&id=$id"))
		);
	}
}

$template->assign_vars(array(
	'REPLY_IMG' => $reply_img,
	'L_COMMENTS' => $lang['Comments'],
	'L_AUTHOR' => $lang['Author'],
	'L_POSTED' => $lang['Posted'],
	'L_COMMENT_SUBJECT' => $lang['Comment_subject'],
	'L_COMMENT_ADD' => $lang['Comment_add'],
	'L_COMMENT_DELETE' => $lang['Comment_delete'],
	'L_COMMENTS_NAME' => $lang['Name'],
	'L_BACK_TO_TOP' => $lang['Back_to_top'],
	'ID' => $id)
);

if ( $userdata['session_logged_in'] )
{
	$template->assign_block_vars("auth_post", array());

	$template->assign_vars(array(
        'L_COMMENT_DO' => isset($lang['Comment_do']) ? $lang['Comment_do'] : 'Comment',
		'U_COMMENT_DO' => append_sid("dload.php?action=file&id=$id&comment=post"))
	);
}

$template->assign_var_from_handle("COMMENT", "comment_output");

?>
