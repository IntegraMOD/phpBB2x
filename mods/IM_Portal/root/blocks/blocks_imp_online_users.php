<?php
/***************************************************************************
 *                         blocks_imp_online_users.php
 *                            -------------------
 *   begin                : Saturday, March 20, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website              : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *   note: removing the original copyright is illegal even you have modified
 *         the code.  Just append yours if you have modified it.
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
 
define('imp_online_users_block_func', 'imp_online_users_block_func');

if(!function_exists('imp_online_users_block_func'))
{
	function imp_online_users_block_func()
	{
		global $template, $lang, $db, $theme, $phpEx, $lang, $board_config;

		$sql = "SELECT u.username, u.user_id, u.user_allow_viewonline, u.user_level, s.session_logged_in, s.session_ip
			FROM ".USERS_TABLE." u, ".SESSIONS_TABLE." s
			WHERE u.user_id = s.session_user_id
				AND s.session_time >= ".( time() - 300 ) . "
			ORDER BY u.username ASC, s.session_ip ASC";
		if( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not obtain user/online information', '', __LINE__, __FILE__, $sql);
		}

		$userlist_ary = array();
		$userlist_visible = array();
		$prev_user_id = 0;
		$prev_user_ip = '';

		while( $row = $db->sql_fetchrow($result) )
		{
			// User is logged in and therefor not a guest
			if ( $row['session_logged_in'] )
			{
				// Skip multiple sessions for one user
				if ( $row['user_id'] != $prev_user_id )
				{
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

                    if ( $row['user_allow_viewonline'] )
                    {
                        $user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color .'>' . $row['username'] . '</a>';
                        if (!isset($logged_visible_online)) 
                        {
                            $logged_visible_online = 0;
                        }
                        $logged_visible_online++;
                    }
					else
					{
						$user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color .'><i>' . $row['username'] . '</i></a>';
						$logged_hidden_online++;
					}

                    $online_userlist = ''; // Initialize the variable to avoid undefined warning
                    if ( $row['user_allow_viewonline'] || $userdata['user_level'] == ADMIN )
                    {
                        $online_userlist .= ( $online_userlist != '' ) ? ', ' . $user_online_link : $user_online_link;
                    }
				}
				$prev_user_id = $row['user_id'];
			}
			else
			{
              // Skip multiple sessions for one user
              $prev_session_ip = ''; // Initialize the variable to avoid undefined warning
              $guests_online = '';
              if ( $row['session_ip'] != $prev_session_ip )
              {
                  if (is_numeric($guests_online)) 
                  {
                      $guests_online++;
                  }  
                  else 
                  {
                      // Handle the case where $guests_online is not a numeric value
                      $guests_online = 0; // or set it to a default value
                  }
              }
			}
			$prev_session_ip = $row['session_ip'];
		}
		$db->sql_freeresult($result);

		if ( empty($online_userlist) )
		{
			$online_userlist = $lang['None'];
		}
		$online_userlist = $lang['Registered_users'] . ' ' . $online_userlist;

        $logged_visible_online = 0; // Initialize if not already defined
        $logged_hidden_online = 0; // Initialize the undefined variable
        $guests_online = 0; // Initialize if not already defined
        $total_online_users = $logged_visible_online + $logged_hidden_online + $guests_online;

		if ( $total_online_users > $board_config['record_online_users'])
		{
			$board_config['record_online_users'] = $total_online_users;
			$board_config['record_online_date'] = time();
			$sql = "UPDATE " . CONFIG_TABLE . "
				SET config_value = '$total_online_users'
				WHERE config_name = 'record_online_users'";
			if ( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, 'Could not update online user record (nr of users)', '', __LINE__, __FILE__, $sql);
			}

			$sql = "UPDATE " . CONFIG_TABLE . "
				SET config_value = '" . $board_config['record_online_date'] . "'
				WHERE config_name = 'record_online_date'";
			if ( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, 'Could not update online user record (date)', '', __LINE__, __FILE__, $sql);
			}
		}

		if ( $total_online_users == 0 )
		{
			$l_t_user_s = $lang['Online_users_zero_total'];
		}
		else if ( $total_online_users == 1 )
		{
			$l_t_user_s = $lang['Online_user_total'];
		}
		else
		{
			$l_t_user_s = $lang['Online_users_total'];
		}

		if ( $logged_visible_online == 0 )
		{
			$l_r_user_s = $lang['Reg_users_zero_total'];
		}
		else if ( $logged_visible_online == 1 )
		{
			$l_r_user_s = $lang['Reg_user_total'];
		}
		else
		{
			$l_r_user_s = $lang['Reg_users_total'];
		}

		if ( $logged_hidden_online == 0 )
		{
			$l_h_user_s = $lang['Hidden_users_zero_total'];
		}
		else if ( $logged_hidden_online == 1 )
		{
			$l_h_user_s = $lang['Hidden_user_total'];
		}
		else
		{
			$l_h_user_s = $lang['Hidden_users_total'];
		}

		if ( $guests_online == 0 )
		{
			$l_g_user_s = $lang['Guest_users_zero_total'];
		}
		else if ( $guests_online == 1 )
		{
			$l_g_user_s = $lang['Guest_user_total'];
		}
		else
		{
			$l_g_user_s = $lang['Guest_users_total'];
		}

		$l_online_users = sprintf($l_t_user_s, $total_online_users);
		$l_online_users .= sprintf($l_r_user_s, $logged_visible_online);
		$l_online_users .= sprintf($l_h_user_s, $logged_hidden_online);
		$l_online_users .= sprintf($l_g_user_s, $guests_online);

		$template->assign_vars(array(
			'B_L_VIEW' => $lang['View_complete_list'],
			'B_TOTAL_USERS_ONLINE' => $l_online_users,
			'B_LOGGED_IN_USER_LIST' => $online_userlist,
			'B_U_VIEWONLINE' => append_sid('viewonline.'.$phpEx),
			'B_RECORD_USERS' => sprintf($lang['Record_online_users'], $board_config['record_online_users'], create_date($board_config['default_dateformat'], $board_config['record_online_date'], $board_config['board_timezone']))
			)
		);
	}
}

imp_online_users_block_func();

?>