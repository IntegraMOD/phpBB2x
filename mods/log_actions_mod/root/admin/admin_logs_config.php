<?php
/***************************************************************************
 *				  admin_logs_config.php
 *                              -------------------
 *     begin                : Jan 24 2003
 *     copyright            : Morpheus
 *     email                : morpheus@2037.biz
 *
 *     $Id: admin_logs_config.php,v 1.85.2.9 2003/01/24 18:31:54 Moprheus Exp $
 *
 *     Log user actions with improved security and PHP 5.4-8.3 compatibility
 *
 ****************************************************************************/

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
	$module['Logs']['Logs Config'] = "$file";
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'includes/functions_log.' . $phpEx);


$template->set_filenames(array(
	"body" => "admin/logs_config_body.tpl")
);

$sql = "SELECT config_value AS all_admin
FROM " . LOGS_CONFIG_TABLE . "
WHERE config_name = 'all_admin' ";

if(!$result = $db->sql_query($sql)) 
{ 
   message_die(CRITICAL_ERROR, "Could not query log config informations", "", __LINE__, __FILE__, $sql); 
}
$row = $db->sql_fetchrow($result);
$all_admin_authorized = $row['all_admin'];

if ( $all_admin_authorized == '0' && $userdata['user_id'] <> '2' && $userdata['user_view_log'] <> '1' )
{
	message_die(GENERAL_MESSAGE, $lang['Admin_not_authorized']);
}

$sql = "SELECT *
	FROM " . LOGS_CONFIG_TABLE;

if(!$result = $db->sql_query($sql)) 
{ 
	message_die(CRITICAL_ERROR, "Could not query log config informations", "", __LINE__, __FILE__, $sql); 
}
else
{
	while ( $row = $db->sql_fetchrow($result) )
	{
		$config_name = $row['config_name'];
		$config_value = $row['config_value'];
		$default_config[$config_name] = $config_value;
		
		// Use $_POST instead of $HTTP_POST_VARS for PHP 5.4+ compatibility
		$new[$config_name] = ( isset($_POST[$config_name]) ) ? $_POST[$config_name] : $default_config[$config_name];

		if ( isset($_POST['submit']) )
		{
			$sql = "UPDATE " . LOGS_CONFIG_TABLE . " SET
				config_value = '" . str_replace("\'", "''", $new[$config_name]) . "'
				WHERE config_name = '$config_name'";
			if( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Failed to update configuration for $config_name", "", __LINE__, __FILE__, $sql);
			}
		}
	}	

	if( isset($_POST['submit']) )
	{
		$message = $lang['Log_Config_updated'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
	}
}

// Use $_POST instead of deprecated $HTTP_POST_VARS
$add_admin_username = ( isset($_POST['add_admin']) ) ? $_POST['add_admin'] : '';
$delete_admin_username = ( isset($_POST['delete_admin']) ) ? $_POST['delete_admin'] : array();

//
// Admins which can be allowed
//

$sql = "SELECT user_id, username
	FROM " . USERS_TABLE . "
	WHERE user_level = '1'
	AND user_id <> '2'
	AND user_view_log = '0' ";
$result = $db->sql_query($sql);
if( !$result )
{
	message_die(GENERAL_ERROR, "Couldn't selected informations about user.", "",__LINE__, __FILE__, $sql);
}

$choose = $db->sql_fetchrowset($result);
$add_admin_select = '<select name="add_admin_select">';

// Fix: Use empty() instead of trim() comparison and check if array is empty
if( empty($choose) )
{
	$add_admin_select .= '<option value="">' . $lang['No_other_admins'] . '</option>';
}
else 
{
	$user = array();
	for( $i = 0; $i < count($choose); $i++ )
	{
		// Add htmlspecialchars for XSS protection while maintaining format
		$add_admin_select .= '<option value="' . htmlspecialchars($choose[$i]['user_id'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($choose[$i]['username'], ENT_QUOTES, 'UTF-8') . '</option>';
	}
}
$add_admin_select .= '</select>';

// Use $_POST instead of deprecated $HTTP_POST_VARS
$choose_username_add = ( isset($_POST['add_admin_select']) ) ? $_POST['add_admin_select'] : '';

if ( $add_admin_username )
{
	if ( $choose_username_add != '' )
	{
		// Validate that the user_id is numeric for security
		if ( is_numeric($choose_username_add) )
		{
			//
			// Allow a admin to see the logs
			//
			$choose_username_add = intval($choose_username_add); // Cast to integer for security
			$sql = "UPDATE " . USERS_TABLE . "
				SET user_view_log = '1'
				WHERE user_id = '" . $choose_username_add . "' ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't allow this admin to see the logs.", "",__LINE__, __FILE__, $sql);
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['Admins_add_success'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>"));
			}
		}
		else
		{
			message_die(GENERAL_ERROR, "Invalid user ID provided.", "",__LINE__, __FILE__, "");
		}
	}
	else
	{
		message_die(GENERAL_MESSAGE, $lang['No_admins_allow'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>"));
	}
}

//
// Admins which can be disallowed
//

$sql = "SELECT user_id, username
	FROM " . USERS_TABLE . "
	WHERE user_level = '1'
	AND user_id <> '2'
	AND user_view_log = '1' ";
$result = $db->sql_query($sql);
if( !$result )
{
	message_die(GENERAL_ERROR, "Couldn't select information about user.", "", __LINE__, __FILE__, $sql);
}
$choose_delete = $db->sql_fetchrowset($result);
$delete_admin_select = '<select name="delete_admin_select[]" multiple="multiple" size="4">';

// Fixed: Check if array is empty instead of using trim on array
if( empty($choose_delete) )
{
	$delete_admin_select .= '<option value=""> ' . $lang['No_admins_authorized'] . '</option>';
}
else 
{
	$user = array();
	$count_choose_delete = count($choose_delete);
	for( $i = 0; $i < $count_choose_delete; $i++ )
	{
		// Added proper escaping for HTML output
		$user_id = isset($choose_delete[$i]['user_id']) ? (int)$choose_delete[$i]['user_id'] : 0;
		$username = isset($choose_delete[$i]['username']) ? htmlspecialchars($choose_delete[$i]['username'], ENT_QUOTES, 'UTF-8') : '';
		$delete_admin_select .= '<option value="' . $user_id . '">' . $username . '</option>';
	}
}
$delete_admin_select .= '</select>';

// Fixed: Use $_POST instead of deprecated $HTTP_POST_VARS
$choose_username_del = ( isset($_POST['delete_admin_select']) && is_array($_POST['delete_admin_select']) ) ? $_POST['delete_admin_select'] : array();

// Sanitize the array values to integers only
$choose_username_del = array_map('intval', $choose_username_del);
$choose_username_del = array_filter($choose_username_del); // Remove any zero values

$choose_username_del_sql = implode(', ', $choose_username_del);

// Fixed: Check if variable is defined before using it
if ( isset($delete_admin_username) && $delete_admin_username )
{
	if ( $choose_username_del_sql != '' )
	{
		//
		// Disallow an admin to see the logs
		//
		$sql = "UPDATE " . USERS_TABLE . "
			SET user_view_log = '0'
			WHERE user_id ";
			
		if ( count($choose_username_del) > 1 )
		{
			$sql .= "IN ($choose_username_del_sql)";
		}
		else
		{
			$sql .= " = $choose_username_del_sql ";
		}
		
		$result = $db->sql_query($sql);
		if( !$result )
		{
			message_die(GENERAL_ERROR, "Couldn't disallow this admin to see the logs.", "", __LINE__, __FILE__, $sql);
		}
		else
		{
			message_die(GENERAL_MESSAGE, $lang['Admins_del_success'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>"));
		}
	}
	else
	{
		message_die(GENERAL_MESSAGE, $lang['No_admins_disallow'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>"));
	}
}

// Fixed: Use $_POST instead of deprecated $HTTP_POST_VARS
$do_prune = ( isset($_POST['do_prune']) ) ? TRUE : FALSE;

if ( $do_prune )
{
	// Fixed: Use $_POST instead of deprecated $HTTP_POST_VARS
	$prune_days = ( isset($_POST['prune_days']) ) ? intval($_POST['prune_days']) : 0;

	// Ensure prune_logs function exists before calling it
	if ( function_exists('prune_logs') )
	{
		$prune = prune_logs($prune_days);
		
		if ( $prune )
		{
			message_die(GENERAL_MESSAGE, $lang['Prune_success'] . "<br /><br />" . sprintf($lang['Click_return_admin_log_config'], "<a href=\"" . append_sid("admin_logs_config.$phpEx") . "\">", "</a>"));
		}
	}
}

// Fixed: Check if $new array and key exist before accessing
$all_admin_yes = ( isset($new['all_admin']) && $new['all_admin'] ) ? "checked=\"checked\"" : "";
$all_admin_no = ( !isset($new['all_admin']) || !$new['all_admin'] ) ? "checked=\"checked\"" : "";

$template->assign_vars(array(
	"S_CONFIG_ACTION" => append_sid("admin_logs_config.$phpEx"),

	"L_YES" => $lang['Yes'],
	"L_NO" => $lang['No'],
	"L_SUBMIT" => $lang['Submit'], 
	"L_RESET" => $lang['Reset'], 
	"L_ENABLED" => $lang['Enabled'], 
	"L_DISABLED" => $lang['Disabled'],
	"L_ADD" => $lang['Add_disallow'],
	"L_DELETE" => $lang['Delete_disallow'],


	"L_LOG_CONFIG_TITLE" => $lang['Log_Config'],
	"L_LOG_CONFIG_TITLE_EXPLAIN" => $lang['Log_Config_explain'],
	"L_GENERAL_LOG_CONFIG" => $lang['General_Config_Log'],
	"L_ALLOW_OTHER_ADMIN" => $lang['Allow_all_admin'],
	"L_ALLOW_OTHER_ADMIN_EXPLAIN" => $lang['Allow_all_admin_explain'],
	"L_ADD_ADMIN_USERNAME" => $lang['Add_Admin_Username'],
	"L_DELETE_ADMIN_USERNAME" => $lang['Delete_Admin_Username'],
	"L_USERNAME_ADD_ADMIN_EXPLAIN" => $lang['Add_username_admin_explain'],
	"L_USERNAME_DELETE_ADMIN_EXPLAIN" => $lang['Delete_username_admin_explain'],
	"L_PRUNE_LOG" => $lang['Prune_of_logs'],
	"L_PRUNE" => $lang['Prune'],
	"L_PRUNE_EXPLAIN" => $lang['Prune_explain'],
	"L_DO_PRUNE" => $lang['Prune_!'],

	"S_ALLOW_ALL_ADMIN" => $all_admin_yes,
	"S_DISALLOW_ALL_ADMIN" => $all_admin_no,
	"S_ADD_ADMIN" => $add_admin_select,
	"S_DELETE_ADMIN" => $delete_admin_select)
);

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);