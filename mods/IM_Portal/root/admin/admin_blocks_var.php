<?php
/***************************************************************************
 *                            admin_blocks_var.php
 *                            -------------------
 *   begin                : Thursday, March 25, 2004
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
	$module['IM_Portal']['Blocks Variables'] = "$file";
	return;
}

//
// Load default header
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

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
		$bv_id = ( isset($_GET['id']) ) ? intval($_GET['id']) : 0;

		$template->set_filenames(array(
			"body" => "admin/blocks_variables_edit_body.tpl")
		);

		$s_hidden_fields = '';

		if( $mode == "edit" )
		{
			if( $bv_id )
			{
				$sql = "SELECT * 
					FROM " . BLOCK_VARIABLE_TABLE . " 
					WHERE bvid = $bv_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not query blocks variable table", "Error", __LINE__, __FILE__, $sql);
				}

				$bv_info = $db->sql_fetchrow($result);
				$s_hidden_fields .= '<input type="hidden" name="id" value="' . $bv_id . '" />';

				$controltype = array( '1' => 'textbox', '2' => 'dropdown list', '3' => 'radio buttons', '4' => 'checkbox');

				$type='';
				for( $i=1; $i<=4; $i++ )
				{
					$type .= '<option value="' . $i . '" ';
					if($bv_info['type']==$i){
						$type .= 'selected';
					}
					$type .= '>' . $controltype[$i];
				}

				$block_dir = $phpbb_root_path .'blocks';
	    		$blocks = opendir($block_dir);
				
				$block='<option value = "@Portal Config">Portal Config';
	    		while ($file = readdir($blocks)) 
				{
					$pos = strpos($file, "blocks_imp_");
					if ($pos==0 && $pos!==false)
					{
						$pos = strpos($file, ".".$phpEx);
						if ($pos!==false)
						{
							$temp = str_replace(".".$phpEx,"",$file);
							$temp1 = str_replace('blocks_imp_','',$temp);
							$block .= '<option value="' . $temp1 .'" ';
							if($bv_info['block']==$temp1)
							{
								$block .= 'selected';
							}
							$block .= '>' . $temp1;
						}
					}
				}
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_bv_selected']);
			}
		}else{
			$controltype = array( '1' => 'textbox', '2' => 'dropdown list', '3' => 'radio buttons', '4' => 'checkbox');

			$type='';
			for( $i=1; $i<=4; $i++ )
			{
				$type .= '<option value="' . $i . '">' . $controltype[$i];
			}
			
			$block_dir = $phpbb_root_path .'blocks';
			$blocks = opendir($block_dir);
			
			$block='<option value = "@Portal Config">Portal Config';
			while ($file = readdir($blocks)) 
			{
				$pos = strpos($file, "blocks_imp_");
				if ($pos==0 && $pos!==false)
				{
					$pos = strpos($file, ".".$phpEx);
					if ($pos!==false)
					{
						$temp = str_replace("\.".$phpEx,"",$file);
						$temp1 = str_replace('blocks_imp_','',$temp);
						$block .= '<option value="' . $temp1 .'">' . $temp1;
					}
				}
			}
		}

		$template->assign_vars(array(
			"L_BV_TITLE" => $lang['BV_Title'],
			"L_BV_TEXT" => $lang['BV_Explain'],
			"L_BV_LABEL" => $lang['BV_Label'],
			"L_BV_SUB_LABEL" => $lang['BV_Sub_Label'],
			"L_BV_NAME" => $lang['BV_Name'],
			"L_BV_OPTIONS" => $lang['BV_Options'],
			"L_BV_VALUES" => $lang['BV_Values'],
			"L_BV_TYPE" => $lang['BV_Type'],
			"L_BV_BLOCK" => $lang['BV_Block'],
			"LABEL" => $bv_info['label'],
			"SUB_LABEL" => $bv_info['sub_label'],
			"NAME" => $bv_info['config_name'],
			"OPTIONS" => $bv_info['field_options'],
			"VALUES" => $bv_info['field_values'],
			"TYPE" => $type,
			"BLOCK" => $block,
			"L_EDIT_BV" => $lang['BV_Edit_Variable'],
			"L_SUBMIT" => $lang['Submit'],
			"L_FIELD_OPTIONS_EXPLAIN" => $lang['Field_Options_Explain'],
			"L_FIELD_VALUES_EXPLAIN" => $lang['Field_Values_Explain'],
			"L_CONFIG_NAME_EXPLAIN" => $lang['Config_Name_Explain'],
			"S_BLOCKS_VAR_ACTION" => append_sid("admin_blocks_var.$phpEx"),
			"S_HIDDEN_FIELDS" => $s_hidden_fields)
		);

		$template->pparse("body");

		include('./page_footer_admin.'.$phpEx);
	}
	else if( $mode == "save" )
	{
		$bv_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : 0;
		$bv_label = ( isset($_POST['label']) ) ? trim($_POST['label']) : "";
		$bv_sub_label = ( isset($_POST['sub_label']) ) ? trim($_POST['sub_label']) : "";
		$bv_name = ( isset($_POST['config_name']) ) ? trim($_POST['config_name']) : "";
		$bv_options = ( isset($_POST['options']) ) ? trim($_POST['options']) : "";
		$bv_values = ( isset($_POST['values']) ) ? trim($_POST['values']) : "";
		$bv_block = ( isset($_POST['block']) ) ? trim($_POST['block']) : "";
		$bv_type = ( isset($_POST['type']) ) ? intval($_POST['type']) : 0;

		if($bv_name == "" || $bv_label == "" )
		{
			message_die(GENERAL_MESSAGE, $lang['Must_enter_bv']);
		}

		if( $bv_id )
		{
			$sql = "SELECT config_name FROM " . BLOCK_VARIABLE_TABLE . " WHERE bvid = $bv_id";
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not query block variable table", $lang['Error'], __LINE__, __FILE__, $sql);
			}

			$row = $db->sql_fetchrow($result);

			$sql = "UPDATE " . BLOCK_VARIABLE_TABLE . " 
				SET label = '" . str_replace("\'", "''", $bv_label) . "', sub_label = '" . str_replace("\'", "''", $bv_sub_label) . "', config_name = '" . str_replace("\'", "''", $bv_name) . "', field_options = '" . str_replace("\'", "''", $bv_options) . "', field_values = '" . $bv_values . "', type = '" . $bv_type . "', block = '" . $bv_block . "'
				WHERE bvid = $bv_id";
			
			$sql2 = "UPDATE " . PORTAL_CONFIG_TABLE . " 
				SET config_name = '" . str_replace("\'", "''", $bv_name) . "' WHERE config_name = '" . $row['config_name'] . "'";

			$message = $lang['BV_updated'];
		}
		else
		{
			$sql = "INSERT INTO " . BLOCK_VARIABLE_TABLE . " (label, sub_label, config_name, field_options, field_values, type, block) 
				VALUES ('" . str_replace("\'", "''", $bv_label) . "', '" . str_replace("\'", "''", $bv_sub_label) . "', '" . str_replace("\'", "''", $bv_name) . "', '" . str_replace("\'", "''", $bv_options) . "', '" . $bv_values . "', '" . $bv_type . "', '" . str_replace("\'", "''", $bv_block) . "')";
			
			$sql2 = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name)
				VALUES ('" . str_replace("\'", "''", $bv_name) . "')";

			$message = $lang['BV_added'];
		}

		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not insert data into block variable table", $lang['Error'], __LINE__, __FILE__, $sql);
		}

		if(!$result = $db->sql_query($sql2))
		{
			message_die(GENERAL_ERROR, "Could not insert data into portal config table", $lang['Error'], __LINE__, __FILE__, $sql);
		}

		$message .= "<br /><br />" . sprintf($lang['Click_return_bvadmin'], "<a href=\"" . append_sid("admin_blocks_var.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
		message_die(GENERAL_MESSAGE, $message);
	}
	else if( $mode == "delete" )
	{
		if( isset($_POST['id']) ||  isset($_GET['id']) )
		{
			$bv_id = ( isset($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);
		}
		else
		{
			$bv_id = 0;
		}
		
		if(!isset($_POST['confirm']))
		{
			$hidden_fields = '<input type="hidden" name="mode" value="'.$mode.'" /><input type="hidden" name="id" value="'.$bv_id.'" />';
			
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

				"S_CONFIRM_ACTION" => append_sid("admin_blocks_var.$phpEx"),
				"S_HIDDEN_FIELDS" => $hidden_fields)
			);

			$template->pparse("confirm");
			exit();
		}else
		{
			if( $bv_id )
			{
				$sql = "SELECT config_name FROM " . BLOCK_VARIABLE_TABLE . " WHERE bvid = $bv_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not query block variable table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$row = $db->sql_fetchrow($result);

				$sql = "DELETE FROM " . BLOCK_VARIABLE_TABLE . " 
					WHERE bvid = $bv_id";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from blocks variables table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE FROM " . PORTAL_CONFIG_TABLE . "
					WHERE config_name = '" . $row['config_name'] . "'";

				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not remove data from portal config table", $lang['Error'], __LINE__, __FILE__, $sql);
				}

				$message = $lang['BV_removed'] . "<br /><br />" . sprintf($lang['Click_return_bvadmin'], "<a href=\"" . append_sid("admin_blocks_var.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

				message_die(GENERAL_MESSAGE, $message);
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_bv_selected']);
			}
		}
	}
}
else
{
	$template->set_filenames(array(
		"body" => "admin/blocks_variables_list_body.tpl")
	);

	$controltype = array( '1' => 'textbox', '2' => 'dropdown list', '3' => 'radio buttons', '4' => 'checkbox');

	$sql = "SELECT * FROM " . BLOCK_VARIABLE_TABLE . " ORDER BY block, bvid";
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, "Could not query blocks variables information", "", __LINE__, __FILE__, $sql);
	}


	$bv_rows = $db->sql_fetchrowset($result);
	$bv_count = count($bv_rows);

	$template->assign_vars(array(
		"L_BV_TITLE" => $lang['BV_Title'],
		"L_BV_TEXT" => $lang['BV_Explain'],
		"L_BV_LABEL" => $lang['BV_Label'],
		"L_BV_SUB_LABEL" => $lang['BV_Sub_Label'],
		"L_BV_NAME" => $lang['BV_Name'],
		"L_BV_OPTIONS" => $lang['BV_Options'],
		"L_BV_VALUES" => $lang['BV_Values'],
		"L_BV_TYPE" => $lang['BV_Type'],
		"L_BV_BLOCK" => $lang['BV_Block'],
		"L_EDIT" => $lang['Edit'],
		"L_DELETE" => $lang['Delete'],
		"L_BV_ADD_VARIABLE" => $lang['BV_Add_Variable'],
		"L_ACTION" => $lang['Action'],

		"S_BLOCKS_VAR_ACTION" => append_sid("admin_blocks_var.$phpEx"),
		"S_HIDDEN_FIELDS" => '')
	);

	for($i = 0; $i < $bv_count; $i++)
	{
		$bv_name = $bv_rows[$i]['config_name'];
		$bv_options = $bv_rows[$i]['field_options'];
		$bv_id = $bv_rows[$i]['bvid'];
		$bv_values = $bv_rows[$i]['field_values'];
		$bv_type = $bv_rows[$i]['type'];
		$bv_label = $bv_rows[$i]['label'];
		$bv_sub_label = $bv_rows[$i]['sub_label'];
		$bv_block = $bv_rows[$i]['block'];

		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$template->assign_block_vars("bv", array(
			"ROW_COLOR" => "#" . $row_color,
			"ROW_CLASS" => $row_class,
			"BV_LABEL" => $bv_label,
			"BV_SUB_LABEL" => $bv_sub_label,
			"BV_NAME" => $bv_name,
			"BV_OPTIONS" => $bv_options,
			"BV_VALUES" => $bv_values,
			"BV_BLOCK" => $bv_block,
			"BV_TYPE" => $controltype[$bv_type],
			"U_BV_EDIT" => append_sid("admin_blocks_var.$phpEx?mode=edit&amp;id=$bv_id"),
			"U_BV_DELETE" => append_sid("admin_blocks_var.$phpEx?mode=delete&amp;id=$bv_id"))
		);
	}
}

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>