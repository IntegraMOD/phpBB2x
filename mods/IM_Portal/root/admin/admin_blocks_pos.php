<?php
/***************************************************************************
 *                            admin_blocks_pos.php
 *                            -------------------
 *   begin                : Sunday, March 21, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website			  : http://phpbbintegramod.sourceforge.net
 *   email                : masterdavid@users.sourceforge.net
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
	$module['IM_Portal']['Blocks_Position_Tag'] = "$file";
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
$var_cache->clean('layout_pos');

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

if( $mode != "" )
{
	if( $mode == "edit" || $mode == "add" )
	{
		$bp_id = ( isset($_GET['id']) ) ? intval($_GET['id']) : 0;

		$template->set_filenames(array(
			"body" => "admin/blocks_position_edit_body.tpl")
		);

		$s_hidden_fields = '';

		if( $mode == "edit" )
		{
			if( $bp_id )
			{
				$sql = "SELECT * 
					FROM " . BLOCK_POSITION_TABLE . " 
					WHERE bpid = $bp_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not query blocks position table", "Error", __LINE__, __FILE__, $sql);
				}

				$bp_info = $db->sql_fetchrow($result);
				$s_hidden_fields .= '<input type="hidden" name="id" value="' . $bp_id . '" />';
				$sql = "SELECT lid, name FROM " . LAYOUT_TABLE; 
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, "Could not query layout information", "", __LINE__, __FILE__, $sql);
				}

				$layout='';
				while ($row = $db->sql_fetchrow($result))
				{
					$layout .= '<option value="' . $row['lid'] . '" ';
					if($bp_info['layout']==$row['lid']){
						$layout .= 'selected';
					}
					$layout .= '>' . $row['name'];
				}
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_bp_selected']);
			}
		}else{
				$sql = "SELECT lid, name FROM " . LAYOUT_TABLE; 
				if( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, "Could not query layout information", "", __LINE__, __FILE__, $sql);
				}
				$layout='';
				while ($row = $db->sql_fetchrow($result))
				{
					$layout .= '<option value="' . $row['lid'] . '">' . $row['name'];
				}
		}

		$template->assign_vars(array(
			"L_BP_TITLE" => $lang['BP_Title'],
			"L_BP_TEXT" => $lang['BP_Explain'],
			"L_BP_POSITION" => $lang['BP_Position'],
			"L_BP_KEY" => $lang['BP_Key'],
			"L_BP_LAYOUT" => $lang['BP_Layout'],
			"PKEY" => $bp_info['pkey'],
			"BPOSITION" => $bp_info['bposition'],
			"LAYOUT" => $layout,
			"L_EDIT_BP" => $lang['BP_Edit_Position'],
			"L_SUBMIT" => $lang['Submit'],
			"S_BLOCKS_POS_ACTION" => append_sid("admin_blocks_pos.$phpEx"),
			"S_HIDDEN_FIELDS" => $s_hidden_fields)
		);

		$template->pparse("body");

		include('./page_footer_admin.'.$phpEx);
	}
	else if( $mode == "save" )
	{
		$bp_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : 0;
		$bp_pkey = ( isset($_POST['pkey']) ) ? trim($_POST['pkey']) : "";
		$bp_bposition = ( isset($_POST['bposition']) ) ? trim($_POST['bposition']) : "";
		$bp_layout = ( isset($_POST['layout']) ) ? trim($_POST['layout']) : "";

		if($bp_pkey == "" || $bp_bposition == "" || $bp_layout=="")
		{
			message_die(GENERAL_MESSAGE, $lang['Must_enter_bp']);
		}
		if($bp_bposition == '@' || $bp_bposition == '*')
		{
			message_die(GENERAL_MESSAGE, $lang['Pos_not_accept']);
		}

		if( $bp_id )
		{
			$sql = "UPDATE " . BLOCK_POSITION_TABLE . " 
				SET pkey = '" . str_replace("\'", "''", $bp_pkey) . "', bposition = '" . str_replace("\'", "''", $bp_bposition) . "', layout = '" . $bp_layout . "'
				WHERE bpid = $bp_id";
			$message = $lang['BP_updated'];
		}
		else
		{
			$sql = "INSERT INTO " . BLOCK_POSITION_TABLE . " (pkey, bposition, layout) 
				VALUES ('" . str_replace("\'", "''", $bp_pkey) . "', '" . str_replace("\'", "''", $bp_bposition) . "', '" . $bp_layout . "')";
			$message = $lang['BP_added'];
		}

		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not insert data into block position table", $lang['Error'], __LINE__, __FILE__, $sql);
		}

		$message .= "<br /><br />" . sprintf($lang['Click_return_bpadmin'], "<a href=\"" . append_sid("admin_blocks_pos.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
		message_die(GENERAL_MESSAGE, $message);
	}
	else if( $mode == "delete" )
	{
		if( isset($_POST['id']) ||  isset($_GET['id']) )
		{
			$bp_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);
		}
		else
		{
			$bp_id = 0;
		}

		if(!isset($_POST['confirm']))
		{
			$hidden_fields = '<input type="hidden" name="mode" value="'.$mode.'" /><input type="hidden" name="id" value="'.$bp_id.'" />';
			
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

				"S_CONFIRM_ACTION" => append_sid("admin_blocks_pos.$phpEx"),
				"S_HIDDEN_FIELDS" => $hidden_fields)
			);

			$template->pparse("confirm");
			exit();
		}else
		{
			if( $bp_id )
			{
				$sql = "DELETE FROM " . BLOCK_POSITION_TABLE . " 
					WHERE bpid = $bp_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from blocks position table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$message = $lang['BP_removed'] . "<br /><br />" . sprintf($lang['Click_return_bpadmin'], "<a href=\"" . append_sid("admin_blocks_pos.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

				message_die(GENERAL_MESSAGE, $message);
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_bp_selected']);
			}
		}
	}
}
else
{
	$template->set_filenames(array(
		"body" => "admin/blocks_position_list_body.tpl")
	);

	$sql = "SELECT lid, name FROM " . LAYOUT_TABLE; 
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, "Could not query layout information", "", __LINE__, __FILE__, $sql);
	}

	$layout=array();
	while ($row = $db->sql_fetchrow($result))
	{
		$layout[$row['lid']] = $row['name'];
	}

	$sql = "SELECT * 
		FROM " . BLOCK_POSITION_TABLE . " 
		ORDER BY layout, bpid";
	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Could not query blocks position table", $lang['Error'], __LINE__, __FILE__, $sql);
	}

	$bp_rows = $db->sql_fetchrowset($result);
	$bp_count = count($bp_rows);

	$template->assign_vars(array(
		"L_BP_TITLE" => $lang['BP_Title'],
		"L_BP_TEXT" => $lang['BP_Explain'],
		"L_BP_POSITION" => $lang['BP_Position'],
		"L_BP_KEY" => $lang['BP_Key'],
		"L_BP_LAYOUT" => $lang['BP_Layout'],
		"L_BP_ADD_POSITION" => $lang['BP_Add_Position'],
		"L_ACTION" => $lang['Action'],

		"S_BLOCKS_POS_ACTION" => append_sid("admin_blocks_pos.$phpEx"),
		"S_HIDDEN_FIELDS" => '')
	);

	for($i = 0; $i < $bp_count; $i++)
	{
		$bp_key = $bp_rows[$i]['pkey'];
		$bp_position = $bp_rows[$i]['bposition'];
		$bp_id = $bp_rows[$i]['bpid'];
		$bp_layout = $bp_rows[$i]['layout'];

		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$template->assign_block_vars("bp", array(
			"ROW_COLOR" => "#" . $row_color,
			"ROW_CLASS" => $row_class,
			"BP_KEY" => $bp_key,
			"BP_POSITION" => $bp_position,
			"BP_LAYOUT" => ($bp_layout) ? $layout[$bp_layout] : $lang['Portal_wide'],
			"U_BP_EDIT" => ($bp_layout) ? '<a href="' . append_sid("admin_blocks_pos.$phpEx?mode=edit&amp;id=$bp_id") . '">' . $lang['Edit'] . '</a>' : '',
			"U_BP_DELETE" => ($bp_layout) ? '<a href="' . append_sid("admin_blocks_pos.$phpEx?mode=delete&amp;id=$bp_id") . '">' . $lang['Delete'] . '</a>' : '')
		);
	}
}

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>