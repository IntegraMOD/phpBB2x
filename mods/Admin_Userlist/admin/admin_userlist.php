<?php
/***************************************************************************
 *                              admin_userlist.php
 *                            -------------------
 *   begin                : Tuesday, 09 Feburary 2004
 *   copyright            : (C) 2006 The phpBB Group / Brent Pirolli
 *   email                : BrentPirolli@gmail.com
 *   update               : Sunday, 07 April 2024 / Helter
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
    define( 'IN_PHPBB', 1);
}

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Users']['Userlist'] = $file;

	return;
}

$phpbb_root_path = './../';
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

//
// Set mode
//
if( isset( $_POST['mode'] ) || isset( $_GET['mode'] ) )
{
	$mode = $_POST['mode'] ?? $_GET['mode'];
}
else
{
	$mode = '';
}

//
// confirm
//
if( isset( $_POST['confirm'] ) || isset( $_GET['confirm'] ) )
{
	$confirm = true;
}
else
{
	$confirm = false;
}

//
// cancel
//
if( isset( $_POST['cancel'] ) || isset( $_GET['cancel'] ) )
{
	$cancel = true;
	$mode = '';
}
else
{
	$cancel = false;
}

//
// get starting position
//
$start = ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;

//
// get show amount
//
if ( isset($_GET['show']) || isset($_POST['show']) )
{
	$show = ( isset($_POST['show']) ) ? intval($_POST['show']) : intval($_GET['show']);
}
else
{
	$show = $board_config['topics_per_page'];
}
	//Prevent zero or negative show number  
if ($show < 1) 
{ 
$show = $board_config['topics_per_page']; 
}

//
// sort method
//
if ( isset($_GET['sort']) || isset($_POST['sort']) ) 
{ 
   $sort = ( isset($_POST['sort']) ) ? htmlspecialchars((string) $_POST['sort']) : htmlspecialchars((string) $_GET['sort']); 
   $sort = str_replace("\'", "''", $sort); 
} 
else 
{ 
   $sort = 'user_regdate'; 
} 
switch( $sort ) 
{ 

	case 'username': 
	case 'user_regdate': 
	case 'user_session_time': 
	case 'user_level': 
	case 'user_posts': 
	case 'user_rank': 
	case 'user_email': 
	case 'user_website': 
	case 'user_active': 
	break; 
	default: 
	$sort = "user_regdate"; 
	break; 
} 

//
// sort order
//
if( isset($_POST['order']) )
{
	$sort_order = ( $_POST['order'] == 'ASC' ) ? 'ASC' : 'DESC';
}
else if( isset($_GET['order']) )
{
	$sort_order = ( $_GET['order'] == 'ASC' ) ? 'ASC' : 'DESC';
}
else
{
	$sort_order = 'DESC';
}

//
// alphanumeric stuff
//
if ( isset($_GET['alphanum']) || isset($_POST['alphanum']) ) 
{ 
	$alphanum = ( isset($_POST['alphanum']) ) ? htmlspecialchars((string) $_POST['alphanum']) : htmlspecialchars((string) $_GET['alphanum']);
	$alphanum = str_replace("\'", "''", $alphanum);
	if ($dbms == 'postgres') 
	{
	    $alpha_where = ( $alphanum == 'num' ) ? "AND username !~ '^[A-Z]+'" : "AND username ILIKE '$alphanum%'";
	} 
	else
	{
	    $alpha_where = ( $alphanum == 'num' ) ? "AND username NOT RLIKE '^[A-Z]'" : "AND username LIKE '$alphanum%'";
	}
}
else
{
	$alpahnum = '';
	$alpha_where = '';
}


$user_ids = array();
//
// users id
// because it is an array we will intval() it when we use it
//
if ( isset($_POST[POST_USERS_URL]) || isset($_GET[POST_USERS_URL]) )
{
	$user_ids = $_POST[POST_USERS_URL] ?? $_GET[POST_USERS_URL];
}
else
{
	unset($user_ids);
}


switch( $mode )
{
	case 'delete':

		//
		// see if cancel has been hit and redirect if it has
		// shouldn't get to this point if it has been hit but
		// do this just in case
		//
		if ( $cancel )
		{
			redirect($phpbb_root_path . 'admin/admin_userlist.'.$phpEx);
		}

		//
		// check confirm and either delete or show confirm message
		//
		if ( !$confirm )
		{
			// show message
			$i = 0;
			$hidden_fields = '';
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);
				$hidden_fields .= '<input type="hidden" name="' . POST_USERS_URL . '[]" value="' . $user_id . '" />';

				unset($user_id);
				$i++;
			}

			$template->set_filenames(array(
				'body' => 'confirm_body.tpl')
			);
			$template->assign_vars(array(
				'MESSAGE_TITLE' => $lang['Delete'],
				'MESSAGE_TEXT' => $lang['Confirm_user_deleted'],
				
				'U_INDEX' => '',
				'L_INDEX' => '',
				
				'L_YES' => $lang['Yes'],
				'L_NO' => $lang['No'],
				
				'S_CONFIRM_ACTION' => append_sid('admin_userlist.'.$phpEx.'?mode=delete'),
				'S_HIDDEN_FIELDS' => $hidden_fields)
			);
		}
		else
		{
			// delete users
			$i = 0;
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);

				$sql = "SELECT u.username, g.group_id 
					FROM " . USERS_TABLE . " u, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g  
					WHERE ug.user_id = $user_id 
						AND u.user_id = $user_id
						AND g.group_id = ug.group_id 
						AND g.group_single_user = 1";
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not obtain group information for this user', '', __LINE__, __FILE__, $sql);
				}

				$row = $db->sql_fetchrow($result);
				
				$sql = "UPDATE " . POSTS_TABLE . "
					SET poster_id = " . DELETED . ", post_username = '" . str_replace("\\'", "''", addslashes((string) $row['username'])) . "'
					WHERE poster_id = $user_id";
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not update posts for this user', '', __LINE__, __FILE__, $sql);
				}

				$sql = "UPDATE " . TOPICS_TABLE . "
					SET topic_poster = " . DELETED . " 
					WHERE topic_poster = $user_id";
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not update topics for this user', '', __LINE__, __FILE__, $sql);
				}
				
				$sql = "UPDATE " . VOTE_USERS_TABLE . "
					SET vote_user_id = " . DELETED . "
					WHERE vote_user_id = $user_id";
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not update votes for this user', '', __LINE__, __FILE__, $sql);
				}
				
				$sql = "SELECT group_id
					FROM " . GROUPS_TABLE . "
					WHERE group_moderator = $user_id";
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not select groups where user was moderator', '', __LINE__, __FILE__, $sql);
				}
				
				$group_moderator = array();
				while ( $row_group = $db->sql_fetchrow($result) )
				{
					$group_moderator[] = $row_group['group_id'];
				}
				
				if ( count($group_moderator) )
				{
					$update_moderator_id = implode(', ', $group_moderator);
					
					$sql = "UPDATE " . GROUPS_TABLE . "
						SET group_moderator = " . $userdata['user_id'] . "
						WHERE group_id IN ($update_moderator_id)";
					if( !$db->sql_query($sql) )
					{
						message_die(GENERAL_ERROR, 'Could not update group moderators', '', __LINE__, __FILE__, $sql);
					}
				}

				$sql = "DELETE FROM " . USERS_TABLE . "
					WHERE user_id = $user_id";
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete user', '', __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE FROM " . USER_GROUP_TABLE . "
					WHERE user_id = $user_id";
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete user from user_group table', '', __LINE__, __FILE__, $sql);
				}

				if($row['group_id']) 
				{ 
					$sql = "DELETE FROM " . GROUPS_TABLE . " 
						WHERE group_id = " . $row['group_id']; 
					if( !$db->sql_query($sql) ) 
					{ 
						message_die(GENERAL_ERROR, 'Could not delete group for this user', '', __LINE__, __FILE__, $sql); 
					} 

					$sql = "DELETE FROM " . AUTH_ACCESS_TABLE . " 
						WHERE group_id = " . $row['group_id']; 
					if( !$db->sql_query($sql) ) 
					{ 
						message_die(GENERAL_ERROR, 'Could not delete group for this user', '', __LINE__, __FILE__, $sql); 
					} 
				}
				
				$sql = "DELETE FROM " . TOPICS_WATCH_TABLE . "
					WHERE user_id = $user_id";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete user from topic watch table', '', __LINE__, __FILE__, $sql);
				}
				
				$sql = "DELETE FROM " . BANLIST_TABLE . "
					WHERE ban_userid = $user_id";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete user from banlist table', '', __LINE__, __FILE__, $sql);
				}
				
				$sql = "DELETE FROM " . SESSIONS_TABLE . " 
                  WHERE session_user_id = $user_id"; 
               if ( !$db->sql_query($sql) ) 
               { 
                  message_die(GENERAL_ERROR, 'Could not delete sessions for this user', '', __LINE__, __FILE__, $sql); 
               } 

               $sql = "DELETE FROM " . SESSIONS_KEYS_TABLE . " 
                  WHERE user_id = $user_id"; 
               if ( !$db->sql_query($sql) ) 
               { 
                  message_die(GENERAL_ERROR, 'Could not delete auto-login keys for this user', '', __LINE__, __FILE__, $sql); 
               } 

				$sql = "SELECT privmsgs_id
					FROM " . PRIVMSGS_TABLE . "
					WHERE privmsgs_from_userid = $user_id 
						OR privmsgs_to_userid = $user_id";
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not select all users private messages', '', __LINE__, __FILE__, $sql);
				}

				// This little bit of code directly from the private messaging section.
				$mark_list = array();
				while ( $row_privmsgs = $db->sql_fetchrow($result) )
				{
					$mark_list[] = $row_privmsgs['privmsgs_id'];
				}
				
				if ( count($mark_list) )
				{
					$delete_sql_id = implode(', ', $mark_list);
					
					$delete_text_sql = "DELETE FROM " . PRIVMSGS_TEXT_TABLE . "
						WHERE privmsgs_text_id IN ($delete_sql_id)";
					$delete_sql = "DELETE FROM " . PRIVMSGS_TABLE . "
						WHERE privmsgs_id IN ($delete_sql_id)";
					
					if ( !$db->sql_query($delete_sql) )
					{
						message_die(GENERAL_ERROR, 'Could not delete private message info', '', __LINE__, __FILE__, $delete_sql);
					}
					
					if ( !$db->sql_query($delete_text_sql) )
					{
						message_die(GENERAL_ERROR, 'Could not delete private message text', '', __LINE__, __FILE__, $delete_text_sql);
					}
				}

				unset($user_id);
				$i++;
			}

			$message = $lang['User_deleted_successfully'] . "<br /><br />" . sprintf($lang['Click_return_userlist'], "<a href=\"" . append_sid("admin_userlist.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}		
		break;

	case 'ban':

		//
		// see if cancel has been hit and redirect if it has
		// shouldn't get to this point if it has been hit but
		// do this just in case
		//
		if ( $cancel )
		{
			redirect($phpbb_root_path . 'admin/admin_userlist.'.$phpEx);
		}

		//
		// check confirm and either ban or show confirm message
		//
		if ( !$confirm )
		{
			$i = 0;
			$hidden_fields = '';
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);
				$hidden_fields .= '<input type="hidden" name="' . POST_USERS_URL . '[]" value="' . $user_id . '" />';

				unset($user_id);
				$i++;
			}

			$template->set_filenames(array(
				'body' => 'confirm_body.tpl')
			);
			$template->assign_vars(array(
				'MESSAGE_TITLE' => $lang['Ban'],
				'MESSAGE_TEXT' => $lang['Confirm_user_ban'],
				
				'U_INDEX' => '',
				'L_INDEX' => '',
				
				'L_YES' => $lang['Yes'],
				'L_NO' => $lang['No'],
				
				'S_CONFIRM_ACTION' => append_sid('admin_userlist.'.$phpEx.'?mode=ban'),
				'S_HIDDEN_FIELDS' => $hidden_fields)
			);	
		}
		else
		{
			// ban users
			$i = 0;
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);
	
				$sql = "INSERT INTO " . BANLIST_TABLE . " ( ban_userid )
					VALUES ( '$user_id' )";
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not obtain ban user', '', __LINE__, __FILE__, $sql);
				}

	            $sql = "DELETE FROM " . SESSIONS_TABLE . " 
    	           WHERE session_user_id = $user_id"; 
        	    if ( !$db->sql_query($sql) ) 
        	    { 
        	       message_die(GENERAL_ERROR, 'Could not delete sessions for this user', '', __LINE__, __FILE__, $sql); 
           		} 

	            $sql = "DELETE FROM " . SESSIONS_KEYS_TABLE . " 
    	           WHERE user_id = $user_id"; 
        	    if ( !$db->sql_query($sql) ) 
            	{ 
    	           message_die(GENERAL_ERROR, 'Could not delete auto-login keys for this user', '', __LINE__, __FILE__, $sql); 
        	    } 

				unset($user_id);
				$i++;
			}

			$message = $lang['User_banned_successfully'] . "<br /><br />" . sprintf($lang['Click_return_userlist'], "<a href=\"" . append_sid("admin_userlist.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
		break;

	case 'unban': 

		// 
		// see if cancel has been hit and redirect if it has 
		// shouldn't get to this point if it has been hit but 
		// do this just in case 
		// 
		if ( $cancel ) 
		{ 
			redirect($phpbb_root_path . 'admin/admin_userlist.'.$phpEx); 
		} 

		// 
		// check confirm and either ban or show confirm message 
		// 
		if ( !$confirm ) 
		{ 
			$i = 0; 
			$hidden_fields = ''; 
			while( $i < count($user_ids) ) 
			{ 
				$user_id = intval($user_ids[$i]); 
				$hidden_fields .= '<input type="hidden" name="' . POST_USERS_URL . '[]" value="' . $user_id . '" />'; 

				unset($user_id); 
				$i++; 
			} 

			$template->set_filenames(array( 
				'body' => 'confirm_body.tpl') 
				); 
			$template->assign_vars(array( 
				'MESSAGE_TITLE' => $lang['UnBan'], 
				'MESSAGE_TEXT' => $lang['Confirm_user_un_ban'], 

				'U_INDEX' => '', 
				'L_INDEX' => '', 

				'L_YES' => $lang['Yes'], 
				'L_NO' => $lang['No'], 

				'S_CONFIRM_ACTION' => append_sid('admin_userlist.'.$phpEx.'?mode=unban'), 
				'S_HIDDEN_FIELDS' => $hidden_fields) 
				);
		} 
		else 
		{ 
		// unban users 
		$i = 0; 
		while( $i < count($user_ids) ) 
			{ 
				$user_id = intval($user_ids[$i]); 

				$sql = "DELETE FROM " . BANLIST_TABLE . " 
				WHERE ban_userid = $user_id"; 
				if ( !$db->sql_query($sql) ) 
				{ 
					message_die(GENERAL_ERROR, 'Could not delete user from banlist table', '', __LINE__, __FILE__, $sql); 
				} 

				unset($user_id); 
				$i++; 
			} 

			$message = $lang['User_un_banned_successfully'] . "<br /><br />" . sprintf($lang['Click_return_userlist'], "<a href=\"" . append_sid("admin_userlist.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>"); 

			message_die(GENERAL_MESSAGE, $message); 
		} 
		break; 

	case 'activate':

		//
		// activate or deactivate the seleted users
		//
		$i = 0;
		while( $i < count($user_ids) )
		{
			$user_id = intval($user_ids[$i]);
			$sql = "SELECT user_active FROM " . USERS_TABLE . "
				WHERE user_id = $user_id";
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not obtain user information', '', __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			$new_status = ( $row['user_active'] ) ? 0 : 1;

			$sql = "UPDATE " .  USERS_TABLE . " 
				SET user_active = '$new_status'
				WHERE user_id = $user_id";
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not update user status', '', __LINE__, __FILE__, $sql);
			}
			
			unset($user_id);
			$i++;
		}

		$message = $lang['User_status_updated'] . "<br /><br />" . sprintf($lang['Click_return_userlist'], "<a href=\"" . append_sid("admin_userlist.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
		break;

	case 'group':

		//
		// add users to a group
		//
		if ( !$confirm )
		{
			// show form to select which group to add users to
			$i = 0;
			$hidden_fields = '';
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);
				$hidden_fields .= '<input type="hidden" name="' . POST_USERS_URL . '[]" value="' . $user_id . '" />';

				unset($user_id);
				$i++;
			}

			$template->set_filenames(array(
				'body' => 'admin/userlist_group.tpl')
			);

			$template->assign_vars(array(
				'MESSAGE_TITLE' => $lang['Add_group'],
				'MESSAGE_TEXT' => $lang['Add_group_explain'],

				'L_GROUP' => $lang['Group'],
				
				'S_GROUP_VARIABLE' => POST_GROUPS_URL,
				'S_ACTION' => append_sid($phpbb_root_path . 'admin/admin_userlist.'.$phpEx.'?mode=group'),
				'L_GO' => $lang['Go'],
				'L_CANCEL' => $lang['Cancel'],
				'L_SELECT' => $lang['Select_one'],
				'S_HIDDEN_FIELDS' => $hidden_fields)
			);

			$sql = "SELECT group_id, group_name FROM " . GROUPS_TABLE . "
				WHERE group_single_user <> " . TRUE . " 
				ORDER BY group_name";
			
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not query groups', '', __LINE__, __FILE__, $sql);
			}

			// loop through groups
			while ( $row = $db->sql_fetchrow($result) )
			{
				$template->assign_block_vars('grouprow',array(
					'GROUP_NAME' => $row['group_name'],
					'GROUP_ID' => $row['group_id'])
				);
			}
		}
		else
		{
			// add the users to the selected group
			$group_id = intval($_POST[POST_GROUPS_URL]);

			include($phpbb_root_path . 'includes/emailer.'.$phpEx);
			$emailer = new emailer($board_config['smtp_delivery']);

			$i = 0;
			while( $i < count($user_ids) )
			{
				$user_id = intval($user_ids[$i]);

				//
				// For security, get the ID of the group moderator.
				//
				$sql = '';
				switch (SQL_LAYER) 
				{
	                case 'oracle':
	                    $sql = "SELECT g.group_moderator, g.group_type, aa.auth_mod 
	                    FROM " . GROUPS_TABLE . " g, " . AUTH_ACCESS_TABLE . " aa 
	                    WHERE g.group_id = $group_id
	                        AND aa.group_id = g.group_id(+)";
	                    break;
	                default:
	                    $sql = "SELECT g.group_moderator, g.group_type, aa.auth_mod 
	                    FROM ( " . GROUPS_TABLE . " g 
	                    LEFT JOIN " . AUTH_ACCESS_TABLE . " aa ON aa.group_id = g.group_id )
	                    WHERE g.group_id = $group_id";
	                    break;
	            }
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not get moderator information', '', __LINE__, __FILE__, $sql);
				}

				$group_info = $db->sql_fetchrow($result);

				$sql = "SELECT user_id, user_email, user_lang, user_level  
					FROM " . USERS_TABLE . " 
					WHERE user_id = $user_id";
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, "Could not get user information", $lang['Error'], __LINE__, __FILE__, $sql);
				}
				$row = $db->sql_fetchrow($result);
				
				$sql = "SELECT ug.user_id, u.user_level 
					FROM " . USER_GROUP_TABLE . " ug, " . USERS_TABLE . " u 
					WHERE u.user_id = " . $row['user_id'] . " 
						AND ug.user_id = u.user_id 
						AND ug.group_id = $group_id";
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not get user information', '', __LINE__, __FILE__, $sql);
				}

				if ( !($db->sql_fetchrow($result)) )
				{
					$sql = "INSERT INTO " . USER_GROUP_TABLE . " (user_id, group_id, user_pending) 
						VALUES (" . $row['user_id'] . ", $group_id, 0)";
					if ( !$db->sql_query($sql) )
					{
						message_die(GENERAL_ERROR, 'Could not add user to group', '', __LINE__, __FILE__, $sql);
					}
					
					if ( $row['user_level'] != ADMIN && $row['user_level'] != MOD && $group_info['auth_mod'] )
					{
						$sql = "UPDATE " . USERS_TABLE . " 
							SET user_level = " . MOD . " 
							WHERE user_id = " . $row['user_id'];
						if ( !$db->sql_query($sql) )
						{
							message_die(GENERAL_ERROR, 'Could not update user level', '', __LINE__, __FILE__, $sql);
						}
					}

					//
					// Get the group name
					// Email the user and tell them they're in the group
					//
					$group_sql = "SELECT group_name 
						FROM " . GROUPS_TABLE . " 
						WHERE group_id = $group_id";
					if ( !($result = $db->sql_query($group_sql)) )
					{
						message_die(GENERAL_ERROR, 'Could not get group information', '', __LINE__, __FILE__, $group_sql);
					}

					$group_name_row = $db->sql_fetchrow($result);

					$group_name = $group_name_row['group_name'];

					$script_name = preg_replace('/^\/?(.*?)\/?$/', "\\1", trim((string) $board_config['script_path']));
					$script_name = ( $script_name != '' ) ? $script_name . '/groupcp.'.$phpEx : 'groupcp.'.$phpEx;
					$server_name = trim((string) $board_config['server_name']);
					$server_protocol = ( $board_config['cookie_secure'] ) ? 'https://' : 'http://';
					$server_port = ( $board_config['server_port'] <> 80 ) ? ':' . trim((string) $board_config['server_port']) . '/' : '/';

					$server_url = $server_protocol . $server_name . $server_port . $script_name;

					$emailer->from($board_config['board_email']);
					$emailer->replyto($board_config['board_email']);

					$emailer->use_template('group_added', $row['user_lang']);
					$emailer->email_address($row['user_email']);
					$emailer->set_subject($lang['Group_added']);

					$emailer->assign_vars(array(
						'SITENAME' => $board_config['sitename'], 
						'GROUP_NAME' => $group_name,
						'EMAIL_SIG' => (!empty($board_config['board_email_sig'])) ? str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']) : '', 

						'U_GROUPCP' => $server_url . '?' . POST_GROUPS_URL . "=$group_id")
					);
					$emailer->send();
					$emailer->reset();
					
				}

				unset($user_id);
				$i++;
			}

			$message = $lang['User_add_group_successfully'] . "<br /><br />" . sprintf($lang['Click_return_userlist'], "<a href=\"" . append_sid("admin_userlist.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
		break;

	default:

global $alphanum, $temp, $banned;
		//
		// get and display all of the users
		//
		$template->set_filenames(array(
		  'body' => 'admin/userlist_body.tpl')
		);

		//
		// gets for alphanum
		//
		$alpha_range = array();
		$alpha_letters = array();
		$alpha_letters = range('A','Z');
		$alpha_start = array($lang['All'], '#');
		$alpha_range = array_merge($alpha_start, $alpha_letters);

		$i = 0;
		while( $i < count($alpha_range) )
		{
			
			if ( $alpha_range[$i] != $lang['All'] )
			{
				if ( $alpha_range[$i] != '#' )
				{
					$temp = strtolower((string) $alpha_range[$i]);
				}
				else
				{
					$temp = 'num';
				}
				$alphanum_search_url = append_sid($phpbb_root_path . "admin/admin_userlist.$phpEx?sort=$sort&amp;order=$sort_order&amp;show=$show&amp;alphanum=$temp");
			}
			else
			{
				$alphanum_search_url = append_sid($phpbb_root_path . "admin/admin_userlist.$phpEx?sort=$sort&amp;order=$sort_order&amp;show=$show");
			}

			if ( ( $alphanum == $temp ) || ( $alpha_range[$i] == $lang['All'] && empty($alphanum) ) )
			{
				$alpha_range[$i] = '<b>' . $alpha_range[$i] . '</b>';
			}

			$template->assign_block_vars('alphanumsearch', array(
				'SEARCH_SIZE' => floor(100/count($alpha_range)) . '%',
				'SEARCH_TERM' => $alpha_range[$i],
				'SEARCH_LINK' => $alphanum_search_url)
			);

			$i++;
		}

		$hidden_fields = '<input type="hidden" name="start" value="' . $start . '" />';
		      $select_sort_by = array('user_id', 'user_active', 'username', 'user_regdate', 'user_session_time', 'user_level', 'user_posts', 'user_rank', 'user_email', 'user_website'); 
		$select_sort_by_text = array($lang['User_id'], $lang['Active'], $lang['Username'], $lang['Joined'], $lang['Last_activity'], $lang['User_level'], $lang['Posts'], $lang['Rank'], $lang['Email'], $lang['Website']); 

		$select_sort = '<select name="sort" class="post">'; 
		for($i = 0; $i < count($select_sort_by); $i++) 
		{ 
			$selected = ($sort == $select_sort_by[$i]) ? ' selected="selected"' : ''; 
			$select_sort .= '<option value="' . $select_sort_by[$i] . '"' . $selected . '>' . $select_sort_by_text[$i] . '</option>'; 
		} 
		$select_sort .= '</select>'; 

		$select_sort_order = '<select name="order" class="post">'; 
		if ( $sort_order == 'ASC' ) 
		{ 
			$select_sort_order .= '<option value="ASC" selected="selected">' . $lang['Ascending'] . '</option><option value="DESC">' . $lang['Descending'] . '</option>'; 
		} 
		else 
		{ 
			$select_sort_order .= '<option value="ASC">' . $lang['Ascending'] . '</option><option value="DESC" selected="selected">' . $lang['Descending'] . '</option>'; 
		} 
		$select_sort_order .= '</select>';
		$hidden_fields .= '<input type="hidden" name="alphanum" value="' . $alphanum . '" />';

		//
		// set up template varibles
		//
		$template->assign_vars(array(
			'L_TITLE' => $lang['Userlist'],
			'L_DESCRIPTION' => $lang['Userlist_description'],

			'ARROWDOWN_IMG' => "<img src='$phpbb_root_path" . ($images['arrowdown'] ?? null) . "' />", 
			'ARROWRIGHT_IMG' => "<img src='$phpbb_root_path" . ($images['arrowright'] ?? null) . "' />",

			'L_OPEN_CLOSE' => $lang['Open_close'],
			'L_ACTIVE' => $lang['Active'],
			'L_USERNAME' => $lang['Username'],
			'L_GROUP' => $lang['Group'],
			'L_RANK' => $lang['Rank'],
			'L_POSTS' => $lang['Posts'],
			'L_FIND_ALL_POSTS' => $lang['Find_all_posts'],
			'L_JOINED' => $lang['Joined'],
			'L_ACTIVITY' => $lang['Last_activity'],
			'L_MANAGE' => $lang['User_manage'],
			'L_PERMISSIONS' => $lang['Permissions'],
			'L_EMAIL' => $lang['Email'],
			'L_PM' => $lang['Private_Message'],
			'L_WEBSITE' => $lang['Website'],
					
			'S_USER_VARIABLE' => POST_USERS_URL,
			'S_ACTION' => append_sid($phpbb_root_path . 'admin/admin_userlist.'.$phpEx),
			'L_SELECT_ALL' => $lang['Select_All'], 
			'L_DESELECT_ALL' => $lang['Deselect_All'], 
			'L_GO' => $lang['Go'],
			'L_SELECT' => $lang['Select_one'],
			'L_DELETE' => $lang['Delete'],
			'L_BAN' => $lang['Ban'],
			'L_UNBAN' => $lang['UnBan'], 
			'L_ACTIVATE_DEACTIVATE' => $lang['Activate_deactivate'],
			'L_ADD_GROUP' => $lang['Add_group'],
					
			'S_SHOW' => $show,
			'L_SORT_BY' => $lang['Sort_by'],
			'L_USER_ID' => $lang['User_id'],
			'L_USER_LEVEL' => $lang['User_level'],
			'L_ASCENDING' => $lang['Ascending'],
			'L_DESCENDING' => $lang['Descending'],
			'L_SHOW' => $lang['Show'],
			'S_SORT' => $lang['Sort'],
			'S_SELECT_SORT' => $select_sort, 
	        'S_SELECT_SORT_ORDER' => $select_sort_order,
            'S_HIDDEN_FIELDS' => $hidden_fields) 
	); 

	$order_by = "ORDER BY $sort $sort_order "; 

		//
		// Get ban data 
	      	// 
		$sql = 'SELECT ban_userid 
			FROM ' . BANLIST_TABLE; 
			if ( !($result = $db->sql_query($sql)) ) 
		{ 
			message_die(GENERAL_ERROR, "Couldn't obtain banlist information", "", __LINE__, __FILE__, $sql); 
		} 
		while ( $row = $db->sql_fetchrow($result) ) 
	      	{ 
			$banned[$row['ban_userid']] = true; 
	      	} 
		$db->sql_freeresult($result); 

		// 
		// users rank 
		// 
		$rank_sql = "SELECT * 
			FROM " . RANKS_TABLE . " 
	        	ORDER BY rank_special, rank_min"; 
			if ( !($rank_result = $db->sql_query($rank_sql)) ) 
			{ 
				message_die(GENERAL_ERROR, 'Could not obtain ranks information', '', __LINE__, __FILE__, $sql); 
			} 

			$ranksrow = array();
			while ( $rank_row = $db->sql_fetchrow($rank_result) ) 
			{ 
			$ranksrow[] = $rank_row; 
			} 
			$db->sql_freeresult($rank_result); 

			$sql = "SELECT * 
			FROM " . USERS_TABLE . "
			WHERE user_id <> " . ANONYMOUS . " 
				$alpha_where 
			$order_by
			LIMIT $start, $show";

		if( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not query users', '', __LINE__, __FILE__, $sql);
		}

		// loop through users
		$i = 1;
		while ( $row = $db->sql_fetchrow($result) )
		{
			//
			// users avatar
			//
			$avatar_img = '';
			if ( $row['user_avatar_type'] && $row['user_allowavatar'] )
			{
				switch( $row['user_avatar_type'] )
				{
					case USER_AVATAR_UPLOAD:
						$avatar_img = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $phpbb_root_path . $board_config['avatar_path'] . '/' . $row['user_avatar'] . '" alt="" border="0" />' : '';
						break;
					case USER_AVATAR_REMOTE:
						$avatar_img = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $row['user_avatar'] . '" alt="" border="0" />' : '';
						break;
					case USER_AVATAR_GALLERY:
						$avatar_img = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $phpbb_root_path . $board_config['avatar_gallery_path'] . '/' . $row['user_avatar'] . '" alt="" border="0" />' : '';
						break;
				}
			}
				
			$poster_rank = '';
			$rank_image = '';
			if ( $row['user_rank'] )
			{
				for($ji = 0; $ji < count($ranksrow); $ji++)
				{
					if ( $row['user_rank'] == $ranksrow[$ji]['rank_id'] && $ranksrow[$ji]['rank_special'] )
					{
						$poster_rank = $ranksrow[$ji]['rank_title'];
						$rank_image = ( $ranksrow[$ji]['rank_image'] ) ? '<img src="' . $phpbb_root_path . $ranksrow[$ji]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
					}
				}
			}
			else
			{
				for($ji = 0; $ji < count($ranksrow); $ji++)
				{
					if ( $row['user_posts'] >= $ranksrow[$ji]['rank_min'] && !$ranksrow[$ji]['rank_special'] )
					{
						$poster_rank = $ranksrow[$ji]['rank_title'];
						$rank_image = ( $ranksrow[$ji]['rank_image'] ) ? '<img src="' . $phpbb_root_path . $ranksrow[$ji]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
					}
				}
			}
				
			//
			// user's color depending on their level
			//
			$style_color = '';
			if ( $row['user_level'] == ADMIN )
			{
				$row['username'] = '<b>' . $row['username'] . '</b>';
				$style_color = 'style="color:#' . $theme['fontcolor3'] . '"';
			}
			else if ( $row['user_level'] == MOD )
			{
				$row['username'] = '<b>' . $row['username'] . '</b>';
				$style_color = 'style="color:#' . $theme['fontcolor2'] . '"';
			}

			//
			// setup user row template varibles
			//
			$template->assign_block_vars('user_row', array(
				'ROW_NUMBER' => $i + ( intval($_GET['start'] ?? null) + 1 ),
				'ROW_CLASS' => ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'],

				'USER_ID' => $row['user_id'],
				'ACTIVE' => ( $row['user_active'] == TRUE ) ? $lang['Yes'] : $lang['No'],
				'STYLE_COLOR' => $style_color,
//				'USERNAME' => ( ($banned[$row['user_id']]) ? '<b>'. $lang['Is_Banned'] .'</b> ': '' ) . $row['username'],
                'USERNAME' => ( (is_array($banned) && isset($banned[$row['user_id']])) ? '<b>'. $lang['Is_Banned'] .'</b> ': '' ) . $row['username'],
				'U_PROFILE' => append_sid($phpbb_root_path . 'profile.'.$phpEx.'?mode=viewprofile&amp;' . POST_USERS_URL . '=' . $row['user_id']),

				'RANK' => $poster_rank,
				'I_RANK' => $rank_image,
				'I_AVATAR' => $avatar_img,

				'JOINED' => create_date('d M Y', $row['user_regdate'], $board_config['board_timezone']),
				'LAST_ACTIVITY' => ( !empty($row['user_session_time']) ) ? create_date('d M Y @ h:ia', $row['user_session_time'], $board_config['board_timezone']) : $lang['Never'], 

				'POSTS' => ( $row['user_posts'] ) ? $row['user_posts'] : 0,
				'U_SEARCH' => append_sid($phpbb_root_path . 'search.'.$phpEx.'?search_author=' . urlencode(strip_tags((string) $row['username'])) . '&amp;showresults=posts'),

				'U_WEBSITE' => ( $row['user_website'] ) ? $row['user_website'] : '',

				'EMAIL' => $row['user_email'],
				'U_PM' => append_sid($phpbb_root_path . 'privmsg.' . $phpEx . '?mode=post&amp;' . POST_USERS_URL . '='. $row['user_id']),
				'U_MANAGE' => append_sid($phpbb_root_path . 'admin/admin_users.'.$phpEx.'?mode=edit&amp;' . POST_USERS_URL . '=' . $row['user_id']),
				'U_PERMISSIONS' => append_sid($phpbb_root_path . 'admin/admin_ug_auth.'.$phpEx.'?mode=user&amp;' . POST_USERS_URL . '=' . $row['user_id']))
			);

			//
			// get the users group information
			//
			$group_sql = "SELECT * FROM " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g
				WHERE ug.user_id = " . $row['user_id'] . "
				 AND g.group_single_user <> 1
				 AND g.group_id = ug.group_id";
				
			if( !($group_result = $db->sql_query($group_sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not query groups', '', __LINE__, __FILE__, $group_sql);
			}
			$g = 0;
			while ( $group_row = $db->sql_fetchrow($group_result) )
			{
				//
				// assign the group varibles
				//
				if ( $group_row['group_moderator'] == $row['user_id'] )
				{
					$group_status = $lang['Moderator'];
				}
				else if ( $group_row['user_pending'] == true )
				{
					$group_status = $lang['Pending'];
				}
				else
				{
					$group_status = $lang['Member'];
				}

				$template->assign_block_vars('user_row.group_row', array(
					'GROUP_NAME' => $group_row['group_name'],
					'GROUP_STATUS' => $group_status,
					'U_GROUP' => $phpbb_root_path . 'groupcp.'.$phpEx.'?'.POST_GROUPS_URL.'='.$group_row['group_id'])
				);
				$g++;
			}

			if ( $g == 0 )
			{
				$template->assign_block_vars('user_row.no_group_row', array(
					'L_NONE' => $lang['None'])
				);
			}
				
			$i++;
		}
		$db->sql_freeresult($result);

		$count_sql = "SELECT count(user_id) AS total 
			FROM " . USERS_TABLE . " 
			WHERE user_id <> " . ANONYMOUS . " $alpha_where";

		if ( !($count_result = $db->sql_query($count_sql)) )
		{
			message_die(GENERAL_ERROR, 'Error getting total users', '', __LINE__, __FILE__, $count_sql);
		}

		if ( $total = $db->sql_fetchrow($count_result) )
		{
			$total_members = $total['total'];

			$pagination = generate_pagination($phpbb_root_path . "admin/admin_userlist.$phpEx?sort=$sort&amp;order=$sort_order&amp;show=$show" . ( ( isset($alphanum) ) ? "&amp;alphanum=$alphanum" : '' ), $total_members, $show, $start);
		}

		$template->assign_vars(array(
			'PAGINATION' => $pagination,
			'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $show ) + 1 ), ceil( $total_members / $show )))
		);

		break;

} // switch()

$template->pparse('body');

include('./page_footer_admin.'.$phpEx);