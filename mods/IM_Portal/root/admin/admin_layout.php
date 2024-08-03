<?php
/***************************************************************************
 *                             admin_layout.php
 *                            -------------------
 *   begin                : Sunday, March 21, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website			  : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *
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

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true);
}

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['IM_Portal']['Page_Management'] = "$file";
	return;
}

//
// Load default header
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

include_once($phpbb_root_path . 'includes/lite.'.$phpEx);
$options = array(
    'cacheDir' => $phpbb_root_path . 'var_cache/',
);

$var_cache = new Cache_Lite($options);

$var_cache->clean('block');
$var_cache->clean('layout');

if( isset($_GET['mode']) || isset($_POST['mode']) )
{
	$mode = ($_GET['mode']) ? $_GET['mode'] : $_POST['mode'];
	$mode = htmlspecialchars($mode);
}
else 
{
	//
	// These could be entered via a form button
	//
	if( isset($_POST['add']) )
	{
		$mode = "add";
	}
	else if( isset($_POST['save']) )
	{
		$mode = "save";
	}
	else
	{
		$mode = "";
	}
}

if(isset($_POST['cancel']))
{
	$mode="";
}

$sql = "SELECT config_value FROM " . PORTAL_CONFIG_TABLE . " WHERE config_name = 'default_portal'";
if( !($result = $db->sql_query($sql)) )
{
	message_die(CRITICAL_ERROR, "Could not query portal config table", "", __LINE__, __FILE__, $sql);
}
$row = $db->sql_fetchrow($result);
$default_portal = $row['config_value'];

if( $mode != "" )
{
	if( $mode == "edit" || $mode == "add" )
	{
		$l_id = ( isset($_GET['id']) ) ? intval($_GET['id']) : 0;

		$template->set_filenames(array(
			"body" => "admin/layout_edit_body.tpl")
		);

		$s_hidden_fields = '';

		if( $mode == "edit" )
		{
			if( $l_id )
			{
				$sql = "SELECT * 
					FROM " . LAYOUT_TABLE . " 
					WHERE lid = $l_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not query layout table", "Error", __LINE__, __FILE__, $sql);
				}

				$l_info = $db->sql_fetchrow($result);
				$s_hidden_fields .= '<input type="hidden" name="id" value="' . $l_id . '" />';

				$sql = "SELECT template_name FROM " . THEMES_TABLE . " WHERE themes_id = '" . $board_config['default_style'] . "'"; 
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, "Could not query themes information", "", __LINE__, __FILE__, $sql);
				}

				$row = $db->sql_fetchrow($result);

				$template_dir = $phpbb_root_path .'/templates/' . $row['template_name']. '/layout';
	    		$templates = opendir($template_dir);
				
	    		while ($file = readdir($templates)) 
				{
					$pos = strpos($file, ".tpl");
					if ($pos!==false)
					{
						$templatefile .= '<option value="' . $file .'" ';
						if($l_info['template']==$file)
						{
							$templatefile .= 'selected';
						}
						$templatefile .= '>' . $file;
					}
				}

				$view_array = array(
					'0' => $lang['B_All'],
					'1' => $lang['B_Guests'],
					'2' => $lang['B_Reg'],
					'3' => $lang['B_Mod'],
					'4' => $lang['B_Admin']
				);

				$view ='';
				for ($i = 0; $i <= 4; $i++)
				{
					$view .= '<option value="' . $i .'" ';
					if($l_info['view']==$i)
					{
						$view .= 'selected';
					}
					$view .= '>' . $view_array[$i];
				}

				$sql = "SELECT group_id, group_name FROM " . GROUPS_TABLE . " WHERE group_single_user = 0 ORDER BY group_id"; 
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, "Could not query user groups information", "", __LINE__, __FILE__, $sql);
				}
				$group_array = explode(",", $l_info['pgroup']);
				$group = '';
				while ($row = $db->sql_fetchrow($result))
				{
					$checked = (in_array($row['group_id'],$group_array)) ? 'checked' : '';
					$group .= '<input type="checkbox" name="group' . strval($row['group_id']) . '" ' . $checked . '>' . $row['group_name'] . '&nbsp;&nbsp;';
				}
				if(empty($group))
				{
					$group = '&nbsp;&nbsp;None';
				}
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_layout_selected']);
			}
		}else
		{
			$sql = "SELECT template_name FROM " . THEMES_TABLE . " WHERE themes_id = '" . $board_config['default_style'] . "'"; 
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, "Could not query themes information", "", __LINE__, __FILE__, $sql);
			}

			$row = $db->sql_fetchrow($result);

			$template_dir = $phpbb_root_path .'/templates/' . $row['template_name']. '/layout';
			$templates = opendir($template_dir);
			
			while ($file = readdir($templates)) 
			{
				$pos = strpos($file, ".tpl");
				if ($pos!==false)
				{
					$templatefile .= '<option value="' . $file .'">' . $file;
				}
			}

			$view_array = array(
				'0' => $lang['B_All'],
				'1' => $lang['B_Guests'],
				'2' => $lang['B_Reg'],
				'3' => $lang['B_Mod'],
				'4' => $lang['B_Admin']
			);

			$view ='';
			for ($i = 0; $i <= 4; $i++)
			{
				$view .= '<option value="' . $i .'">' . $view_array[$i];
			}

			$sql = "SELECT group_id, group_name FROM " . GROUPS_TABLE . " WHERE group_single_user = 0 ORDER BY group_id"; 
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, "Could not query user groups information", "", __LINE__, __FILE__, $sql);
			}
			$group = '';
			while ($row = $db->sql_fetchrow($result))
			{
				$group .= '<input type="checkbox" name="group' . strval($row['group_id']) . '">' . $row['group_name'] . '&nbsp;&nbsp;';
			}
			if(empty($group))
			{
				$group = '&nbsp;&nbsp;None';
			}
		}

		$template->assign_vars(array(
			"L_LAYOUT_TITLE" => $lang['Layout_Title'],
			"L_LAYOUT_TEXT" => $lang['Layout_Explain'],
			"L_LAYOUT_NAME" => $lang['Layout_Name'],
			"L_LAYOUT_PAGETITLE" => $lang['Layout_Pagetitle'],
			"L_LAYOUT_TEMPLATE" => $lang['Layout_Template'],
			"L_LAYOUT_FORUM_WIDE" => $lang['Layout_Forum_wide'],
			"L_LAYOUT_COLLAPSE" => $lang['Layout_Collapse'],
			"L_LAYOUT_VIEW" => $lang['Layout_View'],
			"L_LAYOUT_GROUPS" => $lang['B_Groups'],
			"L_YES" => $lang['Yes'],
			"L_NO" => $lang['No'],
			"NAME" => $l_info['name'],
			"PAGETITLE" => $l_info['pagetitle'],
			"TEMPLATE" => $templatefile,
			"VIEW" => $view,
			"GROUPS" => $group,
			"FORUM_WIDE" => ( $l_info['forum_wide'] ) ? "checked=\"checked\"" : "",
			"NOT_FORUM_WIDE" =>	( !$l_info['forum_wide'] ) ? "checked=\"checked\"" : "",
			"PAGE_COLLAPSE" => ( $l_info['page_collapse'] ) ? "checked=\"checked\"" : "",
			"NOT_PAGE_COLLAPSE" =>	( !$l_info['page_collapse'] ) ? "checked=\"checked\"" : "",
			"L_EDIT_LAYOUT" => $lang['Layout_Edit'],
			"L_SUBMIT" => $lang['Submit'],
			"S_LAYOUT_ACTION" => append_sid("admin_layout.$phpEx"),
			"S_HIDDEN_FIELDS" => $s_hidden_fields)
		);

		$template->pparse("body");

		include('./page_footer_admin.'.$phpEx);
	}
	else if( $mode == "save" )
	{
		$l_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : 0;
		$l_name = ( isset($_POST['name']) ) ? trim($_POST['name']) : "";
		$l_pagetitle = ( isset($_POST['pagetitle']) ) ? trim($_POST['pagetitle']) : "";
		$l_template = ( isset($_POST['template']) ) ? trim($_POST['template']) : "";
		$l_forum_wide = ( isset($_POST['forum_wide']) ) ? intval($_POST['forum_wide']) : 0;
		$l_page_collapse = ( isset($_POST['page_collapse']) ) ? intval($_POST['page_collapse']) : 0;
		$l_view = ( isset($_POST['view']) ) ? intval($_POST['view']) : 0;

		$sql = "SELECT MAX(group_id) max_group_id FROM " . GROUPS_TABLE . " WHERE group_single_user = 0"; 
		if( !($result = $db->sql_query($sql)) )
		{
			message_die(CRITICAL_ERROR, "Could not query user groups information", "", __LINE__, __FILE__, $sql);
		}
		$row = $db->sql_fetchrow($result);
		$l_group = '';
		$not_first = FALSE;
		for($i = 1; $i <= $row['max_group_id']; $i++)
		{
			if(isset($_POST['group' . strval($i)]))
			{
				if($not_first)
				{
					$l_group .= ',' . strval($i);
				}else
				{
					$l_group .= strval($i);
					$not_first = TRUE;
				}
			}
		}

		if($l_name == "" || $l_pagetitle == "" || $l_template=="")
		{
			message_die(GENERAL_MESSAGE, $lang['Must_enter_layout']);
		}

		if( $l_id )
		{
			$sql = "UPDATE " . LAYOUT_TABLE . " 
				SET name = '" . str_replace("\'", "''", $l_name) . "',
				pagetitle = '" . str_replace("\'", "''", $l_pagetitle) . "',
				template = '" . str_replace("\'", "''", $l_template) . "',
				forum_wide = '" . $l_forum_wide . "',
				page_collapse = '" . $l_page_collapse . "',
				view = '" . $l_view . "',
				pgroup = '" . $l_group . "'
				WHERE lid = '$l_id'";
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not insert data into layout table", $lang['Error'], __LINE__, __FILE__, $sql);
			}
			$message = $lang['Layout_updated'];

			$sql = "SELECT template_name FROM " . THEMES_TABLE . " WHERE themes_id = '" . $board_config['default_style'] . "'"; 
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, "Could not query themes information", "", __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);
			
			if(file_exists($phpbb_root_path .'/templates/' . $row['template_name']. '/layout/' . preg_replace('/.tpl/', '/.cfg/', $l_template)))
			{
				$sql = "DELETE FROM " . BLOCK_POSITION_TABLE . " 
					WHERE layout = $l_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from blocks position table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				include($phpbb_root_path . '/templates/' . $row['template_name']. '/layout/' . preg_replace('/.tpl/', '/.cfg/', $l_template));

				$message .= '<br /><br />' . $lang['Layout_BP_added'];

				for($i = 0; $i < $layout_count_positions; $i++)
				{
					$sql = "INSERT INTO " . BLOCK_POSITION_TABLE . " (pkey, bposition, layout) 
						VALUES ('" . str_replace("\'", "''", $layout_block_positions[$i][0]) . "', '" . str_replace("\'", "''", $layout_block_positions[$i][1]) . "', '" . $l_id . "')";
					if(!$result = $db->sql_query($sql))
					{
						message_die(GENERAL_ERROR, "Could not insert data into block position table", $lang['Error'], __LINE__, __FILE__, $sql);
					}				
				}
			}
		}
		else
		{
			$sql = "INSERT INTO " . LAYOUT_TABLE . " (name, pagetitle, template, forum_wide, page_collapse, view, pgroup) 
				VALUES ('" . str_replace("\'", "''", $l_name) . "', '" . str_replace("\'", "''", $l_pagetitle) . "', '" . str_replace("\'", "''", $l_template) . "', '" . $l_forum_wide . "', '" . $l_page_collapse . "', '" . $l_view . "', '" . $l_group . "')";
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not insert data into layout table", $lang['Error'], __LINE__, __FILE__, $sql);
			}
			$message = $lang['Layout_added'];

			$sql = "SELECT template_name FROM " . THEMES_TABLE . " WHERE themes_id = '" . $board_config['default_style'] . "'"; 
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, "Could not query themes information", "", __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);

			if(file_exists($phpbb_root_path .'/templates/' . $row['template_name']. '/layout/' . preg_replace('/.tpl/', '/.cfg/', $l_template)))
			{
				include($phpbb_root_path . '/templates/' . $row['template_name']. '/layout/' . preg_replace('/.tpl/', '/.cfg/', $l_template));

				$message .= '<br /><br />' . $lang['Layout_BP_added'];

				$sql = "SELECT lid FROM " . LAYOUT_TABLE . " ORDER BY lid desc LIMIT 1"; 
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, "Could not query themes information", "", __LINE__, __FILE__, $sql);
				}
				$row = $db->sql_fetchrow($result);
				$layout_id = $row['lid'];

				for($i = 0; $i < $layout_count_positions; $i++)
				{
					$sql = "INSERT INTO " . BLOCK_POSITION_TABLE . " (pkey, bposition, layout) 
						VALUES ('" . str_replace("\'", "''", $layout_block_positions[$i][0]) . "', '" . str_replace("\'", "''", $layout_block_positions[$i][1]) . "', '" . $layout_id . "')";
					if(!$result = $db->sql_query($sql))
					{
						message_die(GENERAL_ERROR, "Could not insert data into block position table", $lang['Error'], __LINE__, __FILE__, $sql);
					}				
				}
			}
		}

		$message .= "<br /><br />" . sprintf($lang['Click_return_layoutadmin'], "<a href=\"" . append_sid("admin_layout.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
		message_die(GENERAL_MESSAGE, $message);
	}
	else if( $mode == "delete" )
	{
		if( isset($_POST['id']) ||  isset($_GET['id']) )
		{
			$l_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);
		}
		else
		{
			$l_id = 0;
		}

		if(!isset($_POST['confirm']))
		{
			$hidden_fields = '<input type="hidden" name="mode" value="'.$mode.'" /><input type="hidden" name="id" value="'.$l_id.'" />';
			
			//
			// Set template files
			//
			$template->set_filenames(array(
				"confirm" => "admin/confirm_body.tpl")
			);

			$template->assign_vars(array(
				"MESSAGE_TITLE" => $lang['Confirm'],
				"MESSAGE_TEXT" => $lang['Confirm_delete_item'],

				"L_YES" => $lang['Yes'],
				"L_NO" => $lang['No'],

				"S_CONFIRM_ACTION" => append_sid("admin_layout.$phpEx"),
				"S_HIDDEN_FIELDS" => $hidden_fields)
			);

			$template->pparse("confirm");
			exit();
		}else
		{
			if( $l_id )
			{
				$sql = "DELETE FROM " . LAYOUT_TABLE . " 
					WHERE lid = $l_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from layout table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE FROM " . BLOCK_POSITION_TABLE . " 
					WHERE layout = $l_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from blocks position table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE FROM " . BLOCKS_TABLE . " 
					WHERE layout = $l_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from blocks table", $lang['Error'], __LINE__, __FILE__, $sql);
				}
				
				$message = $lang['Layout_removed'] . "<br /><br />" . sprintf($lang['Click_return_layoutadmin'], "<a href=\"" . append_sid("admin_layout.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

				message_die(GENERAL_MESSAGE, $message);
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_layout_selected']);
			}
		}
	}
}
else
{
	if( isset($_GET['d']))
	{
		$d = intval($_GET['d']);

		$sql = "UPDATE " . PORTAL_CONFIG_TABLE . " SET config_value = '" . $d . "' WHERE config_name = 'default_portal'";

		if( !$result = $db->sql_query($sql) )
		{	
			message_die(GENERAL_ERROR, "Could not update config table", $lang['Error'], __LINE__, __FILE__, $sql);
		}

		$default_portal = $d;
	}

	$template->set_filenames(array(
		"body" => "admin/layout_list_body.tpl")
	);

	$sql = "SELECT * 
		FROM " . LAYOUT_TABLE . " 
		ORDER BY lid";
	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Could not query layout table", $lang['Error'], __LINE__, __FILE__, $sql);
	}

	$l_rows = $db->sql_fetchrowset($result);
	$l_count = count($l_rows);

	$template->assign_vars(array(
		"L_LAYOUT_TITLE" => $lang['Layout_Title'],
		"L_LAYOUT_TEXT" => $lang['Layout_Explain'],
		"L_LAYOUT_NAME" => $lang['Layout_Name'],
		"L_LAYOUT_PAGETITLE" => $lang['Layout_pagetitle'],
		"L_LAYOUT_PAGE" => $lang['Layout_Page'],
		"L_LAYOUT_VIEW" => $lang['Layout_View'],
		"L_LAYOUT_GROUPS" => $lang['B_Groups'],
		"L_LAYOUT_FORUM_WIDE" => $lang['Layout_Forum_wide'],
		"L_LAYOUT_COLLAPSE" => $lang['Layout_Collapse'],
		"L_LAYOUT_TEMPLATE" => $lang['Layout_Template'],
		"L_EDIT" => $lang['Edit'],
		"L_LAYOUT_ADD" => $lang['Layout_Add'],
		"L_ACTION" => $lang['Action'],

		"S_LAYOUT_ACTION" => append_sid("admin_layout.$phpEx"),
		"S_HIDDEN_FIELDS" => '')
	);

	for($i = 0; $i < $l_count; $i++)
	{
		$l_name = $l_rows[$i]['name'];
		$l_pagetitle = $l_rows[$i]['pagetitle'];
		$l_template = $l_rows[$i]['template'];
		$l_id = $l_rows[$i]['lid'];

		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		switch ($l_rows[$i]['view'])
		{
			case '0':
				$l_view = $lang['B_All'];
				break;
			case '1':
				$l_view = $lang['B_Guests'];
				break;
			case '2':
				$l_view = $lang['B_Reg'];
				break;
			case '3':
				$l_view = $lang['B_Mod'];
				break;
			case '4':
				$l_view = $lang['B_Admin'];
				break;
		}

		if(!empty($l_rows[$i]['pgroup']))
		{
			$sql = "SELECT group_name FROM " . GROUPS_TABLE . " WHERE group_id in (" . $l_rows[$i]['pgroup'] . ")"; 
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, "Could not query user groups information", "", __LINE__, __FILE__, $sql);
			}
			$pgroup = '';
			$not_first = FALSE;
			while ($row = $db->sql_fetchrow($result))
			{
				if($not_first)
				{
					$pgroup .= '&nbsp;&nbsp;' . '[ ' . $row['group_name'] . ' ]';
				}else
				{
					$not_first = TRUE;
					$pgroup .= '[ ' . $row['group_name'] . ' ]';
				}
			}
		}else
		{
			$pgroup = $lang['B_All'];
		}

		$template->assign_block_vars("layout", array(
			"ROW_COLOR" => "#" . $row_color,
			"ROW_CLASS" => $row_class,
			"NAME" => $l_name,
			"PAGETITLE" => $l_pagetitle,
			"TEMPLATE" => $l_template,
			"PAGE" => strval($l_id),
			"VIEW" => $l_view,
			"GROUPS" => $pgroup,
			"FORUM_WIDE" => ($l_rows[$i]['forum_wide']) ? $lang['Yes'] : $lang['No'],
			"PAGE_COLLAPSE" => ($l_rows[$i]['page_collapse']) ? $lang['Yes'] : $lang['No'],
			"L_DEFAULT" => ($l_id!=$default_portal) ? '<a href ="' . append_sid("admin_layout.$phpEx?d=$l_id") . '">' . $lang['Layout_make_default'] . '</a>' : $lang['Layout_default'],
			"U_LAYOUT_EDIT" => append_sid("admin_layout.$phpEx?mode=edit&amp;id=$l_id"),
			"L_LAYOUT_DELETE" => ($l_id!=$default_portal) ? '<a href ="' . append_sid("admin_layout.$phpEx?mode=delete&amp;id=$l_id") . '">' . $lang['Delete'] . '</a>' : ''
			)
		);
	}
}

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>