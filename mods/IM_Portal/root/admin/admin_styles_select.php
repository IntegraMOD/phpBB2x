<?php
/***************************************************************************
 *                             admin_styles_select.php
 *                            -------------------------
 *   begin                : Monday, Jan 6, 2003
 *   author               : CRLin
 *   url                  : http://mail.dhjh.tcc.edu.tw/~gzqbyr/
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
	$module['Styles']['Style_select_manage'] = "$file";
	return;
}

//
// Load default header
//
$phpbb_root_path = "../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

// define('THEMES_SELECT_INFO_TABLE', $table_prefix.'themes_select_info');

if( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
{
	$mode = ( isset($HTTP_GET_VARS['mode']) ) ? $HTTP_GET_VARS['mode'] : $HTTP_POST_VARS['mode'];
}
else 
{
	$mode = "";
}

switch( $mode )
{
	case "edit":
		$submit = ( isset($HTTP_POST_VARS['submit']) ) ? TRUE : 0;
		
		if( $submit )
		{
			//	
			// DAMN! Thats alot of data to validate...
			//
			$updated['style_author'] = $HTTP_POST_VARS['style_author'];
			$updated['style_version'] = $HTTP_POST_VARS['style_version'];
			$updated['style_website'] = $HTTP_POST_VARS['style_website'];
			$updated['style_views'] = $HTTP_POST_VARS['style_views'];
			$updated['style_dlurl'] = $HTTP_POST_VARS['style_dlurl'];
			$updated['style_dls'] = $HTTP_POST_VARS['style_dls'];
			$updated['style_loaclurl'] = $HTTP_POST_VARS['style_loaclurl'];
			$updated['style_ludls'] = $HTTP_POST_VARS['style_ludls'];
			$style_id = intval($HTTP_POST_VARS['style_id']);
			
			//
			// Update
			//
			$sql = "UPDATE " . THEMES_SELECT_INFO_TABLE . " SET ";
			$count = 0;

			while(list($key, $val) = each($updated))
			{
				if($count != 0)
				{
					$sql .= ", ";
				}
				$sql .= "$key = '$val'";
				$count++;
			}
			
			$sql .= " WHERE themes_id = $style_id";
			
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not update themes_select_info table!", "", __LINE__, __FILE__, $sql);
			}
				
			$message = $lang['Style_select_update'] . "<br /><br />" . sprintf($lang['Click_return_style_sel_admin'], "<a href=\"" . append_sid("admin_styles_select.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
		else
		{
			$style_id = $HTTP_GET_VARS['style_id'];
				
			$sql = "SELECT t.style_name, tdi.* 
				FROM ( " . THEMES_TABLE . "  t
				LEFT JOIN " . THEMES_SELECT_INFO_TABLE . " tdi ON t.themes_id = tdi.themes_id ) 
				WHERE t.themes_id = $style_id";
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not get style information!", "", __LINE__, __FILE__, $sql);
			}
		
			$s_hidden_fields = '<input type="hidden" name="style_id" value="' . $style_id . '" />';
			$s_hidden_fields .= '<input type="hidden" name="mode" value="' . $mode . '" />';

			$style_rowset = $db->sql_fetchrowset($result);
		
			$template->set_filenames(array(
				"body" => "styles_select_edit_body.tpl")
			);

			$template->assign_vars(array(
				"L_STYLES_TITLE" => $lang['Style_select_manage'],
				"L_STYLES_TEXT" => $lang['Style_select_explain'],
				"L_STYLE_AUTHOR" => $lang['Style_select_author'],
				"L_STYLE_VERSION" => $lang['Style_select_version'],
				"L_STYLE_WEBSITE" => $lang['Style_select_website'],
				'L_STYLE_VIEWINGS' => $lang['Style_select_viewings'],
				'L_STYLE_DLURL' => $lang['Style_select_dlurl'],
				'L_STYLE_DLS' => $lang['Style_select_dls'],
				'L_STYLE_LOCALURL' => $lang['Style_select_loaclurl'],
				'L_STYLE_LUDLS' => $lang['Style_select_ludls'],
				"L_SUBMIT" => $lang['Submit'],

				"S_STYLE_ACTION" => append_sid("admin_styles_select.$phpEx"),
				"S_HIDDEN_FIELDS" => $s_hidden_fields )
			);
					
			for($i = 0; $i < count($style_rowset); $i++)
			{
				$template->assign_vars(array(
					"L_STYLE_TITLE" => $lang['Style'] . "&nbsp;::&nbsp;" . $style_rowset[$i]['style_name'],
					"STYLE_AUTHOR" => $style_rowset[$i]['style_author'],
					"STYLE_VERSION" => $style_rowset[$i]['style_version'],
					"STYLE_WEBSITE" => $style_rowset[$i]['style_website'],
					"STYLE_VIEWS" => $style_rowset[$i]['style_views'],
					"STYLE_DLURL" => $style_rowset[$i]['style_dlurl'],
					"STYLE_DLS" => $style_rowset[$i]['style_dls'],
					"STYLE_LOCALURL" => $style_rowset[$i]['style_loaclurl'],
					"STYLE_LUDLS" => $style_rowset[$i]['style_ludls'])
				);
			}
			
			$template->pparse("body");
		}
		break;

	default:
		//
		// Check themes select info table
		//
		$sql = "SELECT themes_id
			FROM " . THEMES_TABLE;
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not query themes table!", "", __LINE__, __FILE__, $sql);
		}
		while( $row = $db->sql_fetchrow($result) )
		{
			$sql = "SELECT themes_id
				FROM " . THEMES_SELECT_INFO_TABLE . "
				WHERE themes_id = ";
			$sql .= $row['themes_id'];

			if(!$result1 = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not query themes select info table!", "", __LINE__, __FILE__, $sql);
			}
		
			$row1 = $db->sql_fetchrow($result1);
//			if( $row1['themes_id']==0 )
            if (isset($row1) && isset($row1['themes_id']) && $row1['themes_id'] == 0) 
			{
				//
				// Insert
				//
				$sql = "INSERT INTO " . THEMES_SELECT_INFO_TABLE . " (themes_id, style_views)
				VALUES (";
				$sql = $sql . $row['themes_id'] . ", 0)";
			
				if( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Could not insert themes select info table.", '', __LINE__, __FILE__, $sql);
				}
			}
		}

		//
		// Styles list
		//
		$sql = "SELECT t.style_name, tdi.* 
			FROM ( " . THEMES_TABLE . "  t
			LEFT JOIN " . THEMES_SELECT_INFO_TABLE . " tdi ON t.themes_id = tdi.themes_id ) 
			ORDER BY style_name";
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not get style information!", "", __LINE__, __FILE__, $sql);
		}
		
		$style_rowset = $db->sql_fetchrowset($result);
	
		$template->set_filenames(array(
			"body" => "styles_select_body.tpl")
		);

		$template->assign_vars(array(
			"L_STYLES_TITLE" => $lang['Style_select_manage'],
			"L_STYLES_TEXT" => $lang['Style_select_explain'],
			"L_STYLE" => $lang['Style'],
			"L_STYLE_AUTHOR" => $lang['Style_select_author'],
			"L_STYLE_VERSION" => $lang['Style_select_version'],
			"L_STYLE_WEBSITE" => $lang['Style_select_website'],
			'L_STYLE_VIEWINGS' => $lang['Style_select_viewings'],
			'L_STYLE_DLURL' => $lang['Style_select_dlurl'],
			'L_STYLE_DLS' => $lang['Style_select_dls'],
			'L_STYLE_LOCALURL' => $lang['Style_select_loaclurl'],
			'L_STYLE_LUDLS' => $lang['Style_select_ludls'],
			"L_EDIT" => $lang['Edit'])
		);
		
		for($i = 0; $i < count($style_rowset); $i++)
		{
			$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$style_website = ( $style_rowset[$i]['style_website'] ) ? '<a href="' . $style_rowset[$i]['style_website'] . '" target="_blank">URL</a>' : '';
			$style_dlurl = ( $style_rowset[$i]['style_dlurl'] ) ? '<a href="' . $style_rowset[$i]['style_dlurl'] . '" target="_blank">URL</a>' : '';
			$style_localurl = $style_rowset[$i]['style_loaclurl'];
			if ($style_localurl && $style_localurl != 'included')
			{
				$style_localurl = '<a href="' . $style_localurl . '" target="_blank">URL</a>';
			}
			
			$template->assign_block_vars("styles", array(
				"ROW_CLASS" => $row_class,
				"ROW_COLOR" => $row_color,
				"STYLE_NAME" => $style_rowset[$i]['style_name'],
				"STYLE_AUTHOR" => $style_rowset[$i]['style_author'],
				"STYLE_VERSION" => $style_rowset[$i]['style_version'],
				"STYLE_WEBSITE" => $style_website,
				"STYLE_VIEWS" => $style_rowset[$i]['style_views'],
				"STYLE_DLURL" => $style_dlurl,
				"STYLE_DLS" => $style_rowset[$i]['style_dls'],
				"STYLE_LOCALURL" => $style_localurl,
				"STYLE_LUDLS" => $style_rowset[$i]['style_ludls'],

				"U_STYLES_EDIT" => append_sid("admin_styles_select.$phpEx?mode=edit&amp;style_id=" . $style_rowset[$i]['themes_id']))
			);
		}
		
		$template->pparse("body");	
		break;
}

include('./page_footer_admin.'.$phpEx);