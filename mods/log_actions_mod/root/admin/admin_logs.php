<?php
/***************************************************************************
 *				  admin_logs.php
 *                              -------------------
 *     begin                : Jan 24 2003
 *     copyright            : Morpheus
 *     email                : morpheus@2037.biz
 *
 *     $Id: admin_logs.php,v 1.85.2.9 2003/01/24 18:31:54 Moprheus Exp $
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
	$module['Logs']['Logs Actions'] = "$file";
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);


$template->set_filenames(array(
	"body" => "admin/logs_body.tpl")
);

$start = ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;

if ( isset($_POST['order']) )
	{
		$sort_order = ($_POST['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
else if ( isset($_GET['order']) )
	{
		$sort_order = ($_GET['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
else
	{
		$sort_order = 'ASC';
	}

if ( file_exists($phpbb_root_path . 'log_actions_db_update.' . $phpEx) )
{
	message_die(GENERAL_MESSAGE, $lang['File_not_deleted']);
}

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

//
// Logs sorting
//
global $mode;
$mode_types_text = array('Time', 'Member', 'Action', 'Id');
$mode_types = array('time', 'username', 'mode', 'id');

$select_sort_mode = '<select name="mode">';
for ($i = 0; $i < count($mode_types_text); $i++)
{
	$selected = ($mode == $mode_types[$i]) ? ' selected="selected"' : '';
	$select_sort_mode .= '<option value="' . $mode_types[$i] . '"' . $selected . '>' . $mode_types_text[$i] . '</option>';
}
$select_sort_mode .= '</select>';

$select_sort_order = '<select name="order">';
if ($sort_order == 'ASC')
{
	$select_sort_order .= '<option value="ASC" selected="selected">' . $lang['Sort_Ascending'] . '</option><option value="DESC">' . $lang['Sort_Descending'] . '</option>';
}
else
{
	$select_sort_order .= '<option value="ASC">' . $lang['Sort_Ascending'] . '</option><option value="DESC" selected="selected">' . $lang['Sort_Descending'] . '</option>';
}
$select_sort_order .= '</select>';

$template->assign_vars(array(
	'L_LOG_ACTIONS_TITLE' => $lang['Log_action_title'],
	'L_LOG_ACTION_EXPLAIN' => $lang['Log_action_explain'],
	'L_CHOOSE_SORT' => $lang['Choose_sort_method'],
	'L_ORDER' => $lang['Order'],
	'L_GO' => $lang['Go'],
	'L_CANCEL' => $lang['Cancel'],
	'L_DELETE' => $lang['Delete'],
	'L_DELETE_LOG' => $lang['Choose_log'],
	'L_ID_LOG' => $lang['Id_log'],
	'L_ACTION' => $lang['Action'],
	'L_TOPIC' => $lang['Topic'],
	'L_DONE_BY' => $lang['Done_by'],
	'L_USER_IP' => $lang['User_ip'],
	'L_DATE' => $lang['Date'],
	'L_MARK_ALL' => $lang['Select_all'],
	'L_UNMARK_ALL' => $lang['Unselect_all'],

	'S_MODE_SELECT' => $select_sort_mode,
	'S_ORDER_SELECT' => $select_sort_order,
	'S_MODE_ACTION' => append_sid("admin_logs.$phpEx"),
	'S_CANCEL_ACTION' => append_sid("admin_logs.$phpEx")
));

if (isset($_GET['mode']) || isset($_POST['mode']))
{
	$mode = (isset($_POST['mode'])) ? $_POST['mode'] : $_GET['mode'];

	switch ($mode)
	{
		case 'mode':
			$order_by = "mode $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;

		case 'username':
			$order_by = "username $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;

		case 'time':
			$order_by = "time $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;

		case 'id':
			$order_by = "id_log $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;

		default:
			$order_by = "time DESC LIMIT $start, " . $board_config['topics_per_page'];
			break;
	}
}
else
{
	$order_by = "time DESC LIMIT $start, " . $board_config['topics_per_page'];
}

$sql = "SELECT * 
	FROM " . LOGS_TABLE . " 
	ORDER BY $order_by";

if (!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query log informations", "", __LINE__, __FILE__, $sql);
}

$rows = $db->sql_fetchrowset($result);
$numrows = $db->sql_numrows($result);

for ($i = 0; $i < $numrows; $i++)
{
	$id_log = $rows[$i]['id_log'];
	$action = ucfirst($rows[$i]['mode']);
	$topic = $rows[$i]['topic_id'];
	$user_id = $rows[$i]['user_id'];
	$username = $rows[$i]['username'];
	$user_ip = decode_ip($rows[$i]['user_ip']);
	$date = $rows[$i]['time'];

	$sql = "SELECT user_level
		FROM " . USERS_TABLE . "
		WHERE user_id = " . intval($user_id);

	if (!$result_lvl = $db->sql_query($sql))
	{
		message_die(CRITICAL_ERROR, "Could not query user_level informations", "", __LINE__, __FILE__, $sql);
	}
	$row = $db->sql_fetchrow($result_lvl);
	$level = $row['user_level'];

	$style_color = '';
	if ($level == ADMIN)
	{
		$style_color = 'style="color:#' . $theme['fontcolor3'] . '"';
	}
	else if ($level == MOD)
	{
		$style_color = 'style="color:#' . $theme['fontcolor2'] . '"';
	}

	$temp_url = append_sid('admin_users.' . $phpEx . '?mode=edit&amp;u=' . intval($user_id));
	$temp2_url = append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?t=' . intval($topic));

	$template->assign_block_vars('record_row', array(
		'ID_LOG' => $id_log,
		'U_ACTION' => append_sid($phpbb_root_path . 'includes/rules.' . $phpEx . '?mode=' . urlencode($action)),
		'ACTION' => $action,
		'TOPIC' => $topic,
		'TOPIC_IMG' => '<a href="' . $temp2_url . '" target="_blank"><img src="' . $phpbb_root_path . $images['icon_latest_reply'] . '" title="' . $lang['See_topic'] . '" alt="' . $lang['See_topic'] . '" border="0"></a>',
		'USER_ID' => $user_id,
		'USERNAME' => '<a href="' . $temp_url . '" ' . $style_color . ' target="_new">' . $username . '</a>',
		'USER_IP' => $user_ip,
		'U_WHOIS_IP' => 'http://network-tools.com/default.asp?prog=express&Netnic=whois.arin.net&host=' . $user_ip,
		'DATE' => create_date($board_config['default_dateformat'], $date, $board_config['board_timezone'])
	));
	$db->sql_freeresult($result_lvl);
}

$db->sql_freeresult($result);

$log_list = (isset($_POST['log_list'])) ? $_POST['log_list'] : array();
$delete = (isset($_POST['delete'])) ? true : false;

$log_list_sql = implode(', ', $log_list);


if ($log_list_sql != '')
{
	if ($delete)
	{
		$sql = "DELETE 
			FROM " . LOGS_TABLE . " 
			WHERE id_log IN (" . $log_list_sql . ")";

		if (!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Could not delete Logs', '', __LINE__, __FILE__, $sql);
		}
		else
		{
			$redirect_page = append_sid("admin_logs.$phpEx");
			$l_redirect = sprintf($lang['Click_return_admin_log'], '<a href="' . $redirect_page . '">', '</a>');

			message_die(GENERAL_MESSAGE, $lang['Log_delete'] . '<br /><br />' . $l_redirect);
		}
	}
}

if ($board_config['topics_per_page'] > 10)
{
	$sql = "SELECT count(*) AS total
		FROM " . LOGS_TABLE;
	if (!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Error getting total informations for logs', '', __LINE__, __FILE__, $sql);
	}

	if ($total = $db->sql_fetchrow($result))
	{
		$total_records = $total['total'];

		$pagination = generate_pagination("admin_logs.$phpEx?mode=$mode&amp;order=$sort_order", $total_records, $board_config['topics_per_page'], $start) . '&nbsp;';
	}
}
else
{
	$pagination = '&nbsp;';
	$total_records = 10;
}

$template->assign_vars(array(
	'PAGINATION' => $pagination,
	'PAGE_NUMBER' => ($total_records == '0') ? '&nbsp;' : sprintf($lang['Page_of'], (floor($start / $board_config['topics_per_page']) + 1), ceil($total_records / $board_config['topics_per_page'])),
	'L_GOTO_PAGE' => $lang['Goto_page'],
	'L_WHOSONLINE_ADMIN' => sprintf($lang['Admin_online_color'], '<span style="color:#' . $theme['fontcolor3'] . '">', '</span>'),
	'L_WHOSONLINE_MOD' => sprintf($lang['Mod_online_color'], '<span style="color:#' . $theme['fontcolor2'] . '">', '</span>'),
));

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);