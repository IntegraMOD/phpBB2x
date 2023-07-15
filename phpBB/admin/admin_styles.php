<?php
/***************************************************************************
 *                              admin_styles.php
 *                            -------------------
 *   begin                : Thursday, Jul 12, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id$
 *
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
	$module['Styles']['Add_new'] = "$file?mode=addnew";
	$module['Styles']['Create_new'] = "$file?mode=create";
	$module['Styles']['Manage'] = $file;
	$module['Styles']['Export'] = "$file?mode=export";
	return;
}

//
// Load default header
//
//
// Check if the user has cancled a confirmation message.
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');

$confirm = (isset($HTTP_POST_VARS['confirm']) || isset($_POST['confirm'])) ? TRUE : FALSE;
$cancel = (isset($HTTP_POST_VARS['cancel']) || isset($_POST['cancel'])) ? TRUE : FALSE;

$no_page_header = (!empty($HTTP_POST_VARS['send_file']) || !empty($_POST['send_file']) || $cancel) ? TRUE : FALSE;

require('./pagestart.' . $phpEx);

$confirm = ( isset($HTTP_POST_VARS['confirm']) ) ? TRUE : FALSE;
$cancel = ( isset($HTTP_POST_VARS['cancel']) ) ? TRUE : FALSE;

if ($cancel)
{
	redirect('admin/' . append_sid("admin_styles.$phpEx", true));
}

if( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
{
	$mode = ( isset($HTTP_GET_VARS['mode']) ) ? $HTTP_GET_VARS['mode'] : $HTTP_POST_VARS['mode'];
	$mode = htmlspecialchars($mode, ENT_COMPAT, 'ISO-8859-1');
}
else 
{
	$mode = "";
}

switch( $mode )
{
	case "addnew":
	
		if ( isset($HTTP_GET_VARS['install_to']) )
		{
			$install_to = urldecode($HTTP_GET_VARS['install_to']);
		}
		else if ( isset($HTTP_POST_VARS['install_to']) )
		{
			$install_to = $HTTP_POST_VARS['install_to'];
		}
			
		if ( isset($HTTP_GET_VARS['style']) )
		{
			$style_name = urldecode($HTTP_GET_VARS['style']);
		}
		else if ( isset($HTTP_POST_VARS['style']) )
		{
			$style_name = $HTTP_POST_VARS['style'];
		}	
		if( isset($install_to) )
		{
			include($phpbb_root_path. "templates/" . basename($install_to) . "/theme_info.cfg");

			$template_name = $$install_to;
			$found = FALSE; 
			
			for($i = 0; $i < (is_countable($template_name) ? count($template_name) : 0) && !$found; $i++)
			{
				if( $template_name[$i]['style_name'] == $style_name )
				{
					foreach ($template_name[$i] as $key => $val) {
						$db_fields[] = $key;
						$db_values[] = str_replace("\'", "''" , $val);
					}
				}
			}
					
			$sql = "INSERT INTO " . THEMES_TABLE . " (";

			for($i = 0; $i < (is_countable($db_fields) ? count($db_fields) : 0); $i++)
			{
				$sql .= $db_fields[$i];
				if($i != ((is_countable($db_fields) ? count($db_fields) : 0) - 1))
				{
					$sql .= ", ";
				}
				
			}

			$sql .= ") VALUES (";

			for($i = 0; $i < (is_countable($db_values) ? count($db_values) : 0); $i++)
			{
				$sql .= "'" . $db_values[$i] . "'";
				if($i != ((is_countable($db_values) ? count($db_values) : 0) - 1))
				{
					$sql .= ", ";
				}
			}
			$sql .= ")";
			
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Could not insert theme data!", "", __LINE__, __FILE__, $sql);
			}
			
			$message = $lang['Theme_installed'] . "<br /><br />" . sprintf($lang['Click_return_styleadmin'], "<a href=\"" . append_sid("admin_styles.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
		else
		{
			
			$installable_themes = array();
			
			if( $dir = @opendir($phpbb_root_path. "templates/") )
			{
				while( $sub_dir = @readdir($dir) )
				{
					if( !is_file(phpbb_realpath($phpbb_root_path . 'templates/' .$sub_dir)) && !is_link(phpbb_realpath($phpbb_root_path . 'templates/' .$sub_dir)) && $sub_dir != "." && $sub_dir != ".." && $sub_dir != "CVS" )
					{
						if( @file_exists(@phpbb_realpath($phpbb_root_path. "templates/" . $sub_dir . "/theme_info.cfg")) )
						{
							include($phpbb_root_path. "templates/" . $sub_dir . "/theme_info.cfg");
							
							for($i = 0; $i < (is_countable(${$sub_dir}) ? count($$sub_dir) : 0); $i++)
							{
								$working_data = ${$sub_dir};
								
								$style_name = $working_data[$i]['style_name'];
														
								$sql = "SELECT themes_id 
									FROM " . THEMES_TABLE . " 
									WHERE style_name = '" . str_replace("\'", "''", $style_name) . "'";
								if(!$result = $db->sql_query($sql))
								{
									message_die(GENERAL_ERROR, "Could not query themes table!", "", __LINE__, __FILE__, $sql);
								}

								if(!$db->sql_numrows($result))
								{
									$installable_themes[] = $working_data[$i];
								}
							}
						}
					}
				}
				
				$template->set_filenames(array(
					"body" => "admin/styles_addnew_body.tpl")
				);
				
				$template->assign_vars(array(
					"L_STYLES_TITLE" => $lang['Styles_admin'],
					"L_STYLES_ADD_TEXT" => $lang['Styles_addnew_explain'],
					"L_STYLE" => $lang['Style'],
					"L_TEMPLATE" => $lang['Template'],
					"L_INSTALL" => $lang['Install'],
					"L_ACTION" => $lang['Action'])
				);
					
				for($i = 0; $i < count($installable_themes); $i++)
				{
					$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
					$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
		
					$template->assign_block_vars("styles", array(
						"ROW_CLASS" => $row_class,
						"ROW_COLOR" => "#" . $row_color,
						"STYLE_NAME" => $installable_themes[$i]['style_name'],
						"TEMPLATE_NAME" => $installable_themes[$i]['template_name'],

						"U_STYLES_INSTALL" => append_sid("admin_styles.$phpEx?mode=addnew&amp;style=" . urlencode($installable_themes[$i]['style_name']) . "&amp;install_to=" . urlencode($installable_themes[$i]['template_name'])))
					);
				
				}
				$template->pparse("body");
					
			}
			closedir($dir);
		}
		break;
	
	case "create":
	case "edit":
		$submit = ( isset($HTTP_POST_VARS['submit']) ) ? TRUE : 0;
		
		if( $submit )
		{
			//	
			// DAMN! Thats alot of data to validate...
			//
			$updated['style_name'] = $HTTP_POST_VARS['style_name'];
			$updated['template_name'] = $HTTP_POST_VARS['template_name'];
			$updated['head_stylesheet'] = $HTTP_POST_VARS['head_stylesheet'];
			$updated['body_background'] = $HTTP_POST_VARS['body_background'];
			$updated['body_bgcolor'] = $HTTP_POST_VARS['body_bgcolor'];
			$updated['body_text'] = $HTTP_POST_VARS['body_text'];
			$updated['body_link'] = $HTTP_POST_VARS['body_link'];
			$updated['body_vlink'] = $HTTP_POST_VARS['body_vlink'];
			$updated['body_alink'] = $HTTP_POST_VARS['body_alink'];
			$updated['body_hlink'] = $HTTP_POST_VARS['body_hlink'];
			$updated['tr_color1'] = $HTTP_POST_VARS['tr_color1'];
			$updated_name['tr_color1_name'] =  $HTTP_POST_VARS['tr_color1_name'];
			$updated['tr_color2'] = $HTTP_POST_VARS['tr_color2'];
			$updated_name['tr_color2_name'] = $HTTP_POST_VARS['tr_color2_name'];
			$updated['tr_color3'] = $HTTP_POST_VARS['tr_color3'];
			$updated_name['tr_color3_name'] = $HTTP_POST_VARS['tr_color3_name'];
			$updated['tr_class1'] = $HTTP_POST_VARS['tr_class1'];
			$updated_name['tr_class1_name'] = $HTTP_POST_VARS['tr_class1_name'];
			$updated['tr_class2'] = $HTTP_POST_VARS['tr_class2'];
			$updated_name['tr_class2_name'] = $HTTP_POST_VARS['tr_class2_name'];
			$updated['tr_class3'] = $HTTP_POST_VARS['tr_class3'];
			$updated_name['tr_class3_name'] = $HTTP_POST_VARS['tr_class3_name'];
			$updated['th_color1'] = $HTTP_POST_VARS['th_color1'];
			$updated_name['th_color1_name'] = $HTTP_POST_VARS['th_color1_name'];
			$updated['th_color2'] = $HTTP_POST_VARS['th_color2'];
			$updated_name['th_color2_name'] = $HTTP_POST_VARS['th_color2_name'];
			$updated['th_color3'] = $HTTP_POST_VARS['th_color3'];
			$updated_name['th_color3_name'] = $HTTP_POST_VARS['th_color3_name'];
			$updated['th_class1'] = $HTTP_POST_VARS['th_class1'];
			$updated_name['th_class1_name'] = $HTTP_POST_VARS['th_class1_name'];
			$updated['th_class2'] = $HTTP_POST_VARS['th_class2'];
			$updated_name['th_class2_name'] = $HTTP_POST_VARS['th_class2_name'];
			$updated['th_class3'] = $HTTP_POST_VARS['th_class3'];
			$updated_name['th_class3_name'] = $HTTP_POST_VARS['th_class3_name'];
			$updated['td_color1'] = $HTTP_POST_VARS['td_color1'];
			$updated_name['td_color1_name'] = $HTTP_POST_VARS['td_color1_name'];
			$updated['td_color2'] = $HTTP_POST_VARS['td_color2'];
			$updated_name['td_color2_name'] = $HTTP_POST_VARS['td_color2_name'];
			$updated['td_color3'] = $HTTP_POST_VARS['td_color3'];
			$updated_name['td_color3_name'] = $HTTP_POST_VARS['td_color3_name'];
			$updated['td_class1'] = $HTTP_POST_VARS['td_class1'];
			$updated_name['td_class1_name'] = $HTTP_POST_VARS['td_class1_name'];
			$updated['td_class2'] = $HTTP_POST_VARS['td_class2'];
			$updated_name['td_class2_name'] = $HTTP_POST_VARS['td_class2_name'];
			$updated['td_class3'] = $HTTP_POST_VARS['td_class3'];
			$updated_name['td_class3_name'] = $HTTP_POST_VARS['td_class3_name'];
			$updated['fontface1'] = $HTTP_POST_VARS['fontface1'];
			$updated_name['fontface1_name'] = $HTTP_POST_VARS['fontface1_name'];
			$updated['fontface2'] = $HTTP_POST_VARS['fontface2'];
			$updated_name['fontface2_name'] = $HTTP_POST_VARS['fontface2_name'];
			$updated['fontface3'] = $HTTP_POST_VARS['fontface3'];
			$updated_name['fontface3_name'] = $HTTP_POST_VARS['fontface3_name'];
			$updated['fontsize1'] = intval($HTTP_POST_VARS['fontsize1']);
			$updated_name['fontsize1_name'] = $HTTP_POST_VARS['fontsize1_name'];
			$updated['fontsize2'] = intval($HTTP_POST_VARS['fontsize2']);
			$updated_name['fontsize2_name'] = $HTTP_POST_VARS['fontsize2_name'];
			$updated['fontsize3'] = intval($HTTP_POST_VARS['fontsize3']);
			$updated_name['fontsize3_name'] = $HTTP_POST_VARS['fontsize3_name'];
			$updated['fontcolor1'] = $HTTP_POST_VARS['fontcolor1'];
			$updated_name['fontcolor1_name'] = $HTTP_POST_VARS['fontcolor1_name'];
			$updated['fontcolor2'] = $HTTP_POST_VARS['fontcolor2'];
			$updated_name['fontcolor2_name'] = $HTTP_POST_VARS['fontcolor2_name'];
			$updated['fontcolor3'] = $HTTP_POST_VARS['fontcolor3'];
			$updated_name['fontcolor3_name'] = $HTTP_POST_VARS['fontcolor3_name'];
			$updated['span_class1'] = $HTTP_POST_VARS['span_class1'];
			$updated_name['span_class1_name'] = $HTTP_POST_VARS['span_class1_name'];
			$updated['span_class2'] = $HTTP_POST_VARS['span_class2'];
			$updated_name['span_class2_name'] = $HTTP_POST_VARS['span_class2_name'];
			$updated['span_class3'] = $HTTP_POST_VARS['span_class3'];
			$updated_name['span_class3_name'] = $HTTP_POST_VARS['span_class3_name'];
			$style_id = (isset($HTTP_POST_VARS['style_id'])) ? intval($HTTP_POST_VARS['style_id']) : '';
			//
			// Wheeeew! Thank heavens for copy and paste and search and replace :D
			//
			
			if($mode == "edit")
			{
				$sql = "UPDATE " . THEMES_TABLE . " SET ";
				$count = 0;

				foreach ($updated as $key => $val) {
	if($count != 0)
					{
						$sql .= ", ";
					}
	//
	// I don't like this but it'll keep MSSQL from throwing
	// an error and save me alot of typing
	//
	$sql .= ( stristr($key, "fontsize") ) ? "$key = $val" : "$key = '" . str_replace("\'", "''", $val) . "'";
	$count++;
}
				
				$sql .= " WHERE themes_id = $style_id";
				
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not update themes table!", "", __LINE__, __FILE__, $sql);
				}
				
				//
				// Check if there's a names table entry for this style
				//
				$sql = "SELECT themes_id 
					FROM " . THEMES_NAME_TABLE . " 
					WHERE themes_id = $style_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not get data from themes_name table", "", __LINE__, __FILE__, $sql);
				}
				
				if($db->sql_numrows($result) > 0)
				{
					$sql = "UPDATE " . THEMES_NAME_TABLE . " 
						SET ";
					$count = 0;
					foreach ($updated_name as $key => $val) {
						if($count != 0)
						{
							$sql .= ", ";
						}
						$sql .= "$key = '$val'";
						$count++;
					}
					
					$sql .= " WHERE themes_id = $style_id";
				}
				else
				{
					//
					// Nope, no names entry so we create a new one.
					//
					$sql = "INSERT INTO " . THEMES_NAME_TABLE . " (themes_id, ";
					while(list($key, $val) = each($updated_name))
					{
						$fields[] = $key;
						$vals[] = str_replace("\'", "''", $val);
					}

					for($i = 0; $i < (is_countable($fields) ? count($fields) : 0); $i++)
					{
						if($i > 0)
						{
							$sql .= ", ";
						}
						$sql .= $fields[$i];
					}
					
					$sql .= ") VALUES ($style_id, ";
					for($i = 0; $i < (is_countable($vals) ? count($vals) : 0); $i++)
					{
						if($i > 0)
						{
							$sql .= ", ";
						}
						$sql .= "'" . $vals[$i] . "'";
					}
					
					$sql .= ")";
				}
										
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not update themes name table!", "", __LINE__, __FILE__, $sql);
				}
							
				$message = $lang['Theme_updated'] . "<br /><br />" . sprintf($lang['Click_return_styleadmin'], "<a href=\"" . append_sid("admin_styles.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

				message_die(GENERAL_MESSAGE, $message);
			}
			else
			{
				//
				// First, check if we already have a style by this name
				//
				$sql = "SELECT themes_id 
					FROM " . THEMES_TABLE . " 
					WHERE style_name = '" . str_replace("\'", "''", $updated['style_name']) . "'";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not query themes table", "", __LINE__, __FILE__, $sql);
				}
				
				if($db->sql_numrows($result))
				{
					message_die(GENERAL_ERROR, $lang['Style_exists'], $lang['Error']);
				}				
				
				while(list($key, $val) = each($updated))
				{
					$field_names[] = $key;

					if(stristr($key, "fontsize"))
					{
						$values[] = "$val";
					}
					else
					{
						$values[] = "'" . str_replace("\'", "''", $val) . "'";
					}
				}
				
				$sql = "INSERT 
					INTO " . THEMES_TABLE . " (";
				for($i = 0; $i < (is_countable($field_names) ? count($field_names) : 0); $i++)
				{
					if($i != 0)
					{
						$sql .= ", ";
					}
					$sql .= $field_names[$i];
				}
				
				$sql .= ") VALUES (";
				for($i = 0; $i < (is_countable($values) ? count($values) : 0); $i++)
				{
					if($i != 0)
					{
						$sql .= ", ";
					}
					$sql .= $values[$i];
				}
				$sql .= ")";
				
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not update themes table!", "", __LINE__, __FILE__, $sql);
				}
				
				$style_id = $db->sql_nextid();
				
				// 
				// Insert names data
				//
				$sql = "INSERT INTO " . THEMES_NAME_TABLE . " (themes_id, ";
				while(list($key, $val) = each($updated_name))
				{
					$fields[] = $key;
					$vals[] = $val;
				}

				for($i = 0; $i < (is_countable($fields) ? count($fields) : 0); $i++)
				{
					if($i > 0)
					{
						$sql .= ", ";
					}
					$sql .= $fields[$i];
				}
				
				$sql .= ") VALUES ($style_id, ";
				for($i = 0; $i < (is_countable($vals) ? count($vals) : 0); $i++)
				{
					if($i > 0)
					{
					$sql .= ", ";
					}
				$sql .= "'" . $vals[$i] . "'";
				}
				
				$sql .= ")";
										
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not insert themes name table!", "", __LINE__, __FILE__, $sql);
				}
				
				$message = $lang['Theme_created'] . "<br /><br />" . sprintf($lang['Click_return_styleadmin'], "<a href=\"" . append_sid("admin_styles.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

				message_die(GENERAL_MESSAGE, $message);
			}
		}
		else
		{
			if($mode == "edit")
			{
				$themes_title = $lang['Edit_theme'];
				$themes_explain = $lang['Edit_theme_explain'];
				
				$style_id = intval($HTTP_GET_VARS['style_id']);
				
				$selected_names = array();
				$selected_values = array();
				// 
				// Fetch the Theme Info from the db
				//
				$sql = "SELECT * 
					FROM " . THEMES_TABLE . " 
					WHERE themes_id = $style_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not get data from themes table", "", __LINE__, __FILE__, $sql);
				}
				
				if ( $selected_values = $db->sql_fetchrow($result) )
				{
					while(list($key, $val) = @each($selected_values))
					{
						$selected[$key] = $val;
					}
				}
				
				//
				// Fetch the Themes Name data
				//
				$sql = "SELECT * 
					FROM " . THEMES_NAME_TABLE . " 
					WHERE themes_id = $style_id";
				if(!$result = $db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, "Could not get data from themes name table", "", __LINE__, __FILE__, $sql);
				}
				
				if ( $selected_names = $db->sql_fetchrow($result) )
				{
					while(list($key, $val) = @each($selected_names))
					{
						$selected[$key] = $val;
					}
				}

				$s_hidden_fields = '<input type="hidden" name="style_id" value="' . $style_id . '" />';
			}
			else
			{
				$themes_title = $lang['Create_theme'];
				$themes_explain = $lang['Create_theme_explain'];
			}
			
			$template->set_filenames(array(
				"body" => "admin/styles_edit_body.tpl")
			);
			
			if( $dir = @opendir($phpbb_root_path . 'templates/') )
			{	
				$s_template_select = '<select name="template_name">';
				while( $file = @readdir($dir) )
				{	
					if( !is_file(phpbb_realpath($phpbb_root_path . 'templates/' . $file)) && !is_link(phpbb_realpath($phpbb_root_path . 'templates/' . $file)) && $file != "." && $file != ".." && $file != "CVS" )
					{
						$selected['template_name'] = (isset($selected['template_name'])) ? $selected['template_name'] : '';
						if($file == $selected['template_name'])
						{
							$s_template_select .= '<option value="' . $file . '" selected="selected">' . $file . "</option>\n";
						}
						else
						{
							$s_template_select .= '<option value="' . $file . '">' . $file . "</option>\n";
						}
					}
				}
				$s_template_select .= '</select>';
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_template_dir']);
			}

			$s_hidden_fields = (isset($s_hidden_fields)) ? $s_hidden_fields : '';
			$s_hidden_fields .= '<input type="hidden" name="mode" value="' . $mode . '" />';

			$template->assign_vars(array(
				"L_THEMES_TITLE" => $themes_title,
				"L_THEMES_EXPLAIN" => $themes_explain,
				"L_THEME_NAME" => $lang['Theme_name'],
				"L_TEMPLATE" => $lang['Template'],
				"L_THEME_SETTINGS" => $lang['Theme_settings'],
				"L_THEME_ELEMENT" => $lang['Theme_element'],
				"L_SIMPLE_NAME" => $lang['Simple_name'],
				"L_VALUE" => $lang['Value'],
				"L_STYLESHEET" => $lang['Stylesheet'],
				"L_STYLESHEET_EXPLAIN" => $lang['Stylesheet_explain'],
				"L_BACKGROUND_IMAGE" => $lang['Background_image'],
				"L_BACKGROUND_COLOR" => $lang['Background_color'],
				"L_BODY_TEXT_COLOR" => $lang['Text_color'],
				"L_BODY_LINK_COLOR" => $lang['Link_color'],
				"L_BODY_VLINK_COLOR" => $lang['VLink_color'],
				"L_BODY_ALINK_COLOR" => $lang['ALink_color'],
				"L_BODY_HLINK_COLOR" => $lang['HLink_color'],
				"L_TR_COLOR1" => $lang['Tr_color1'],
				"L_TR_COLOR2" => $lang['Tr_color2'],
				"L_TR_COLOR3" => $lang['Tr_color3'],
				"L_TR_CLASS1" => $lang['Tr_class1'],
				"L_TR_CLASS2" => $lang['Tr_class2'],
				"L_TR_CLASS3" => $lang['Tr_class3'],
				"L_TH_COLOR1" => $lang['Th_color1'],
				"L_TH_COLOR2" => $lang['Th_color2'],
				"L_TH_COLOR3" => $lang['Th_color3'],
				"L_TH_CLASS1" => $lang['Th_class1'],
				"L_TH_CLASS2" => $lang['Th_class2'],
				"L_TH_CLASS3" => $lang['Th_class3'],
				"L_TD_COLOR1" => $lang['Td_color1'],
				"L_TD_COLOR2" => $lang['Td_color2'],
				"L_TD_COLOR3" => $lang['Td_color3'],
				"L_TD_CLASS1" => $lang['Td_class1'],
				"L_TD_CLASS2" => $lang['Td_class2'],
				"L_TD_CLASS3" => $lang['Td_class3'],
				"L_FONTFACE_1" => $lang['fontface1'],
				"L_FONTFACE_2" => $lang['fontface2'],
				"L_FONTFACE_3" => $lang['fontface3'],
				"L_FONTSIZE_1" => $lang['fontsize1'],
				"L_FONTSIZE_2" => $lang['fontsize2'],
				"L_FONTSIZE_3" => $lang['fontsize3'],
				"L_FONTCOLOR_1" => $lang['fontcolor1'],
				"L_FONTCOLOR_2" => $lang['fontcolor2'],
				"L_FONTCOLOR_3" => $lang['fontcolor3'],
				"L_SPAN_CLASS_1" => $lang['span_class1'],
				"L_SPAN_CLASS_2" => $lang['span_class2'],
				"L_SPAN_CLASS_3" => $lang['span_class3'],
				"L_DIV_CLASS_1" => $lang['div_class1'],
				"L_DIV_CLASS_2" => $lang['div_class2'],
				"L_DIV_CLASS_3" => $lang['div_class3'],				
				"L_ROW_CLASS_1" => $lang['row_class1'],
				"L_ROW_CLASS_2" => $lang['row_class2'],
				"L_ROW_CLASS_3" => $lang['row_class3'],				
				"L_COL_CLASS_1" => $lang['col_class1'],
				"L_COL_CLASS_2" => $lang['col_class2'],
				"L_COL_CLASS_3" => $lang['col_class3'],				
				"L_SAVE_SETTINGS" => $lang['Save_Settings'], 
				"THEME_NAME" => (isset($selected['style_name'])) ? $selected['style_name'] : '',
				"HEAD_STYLESHEET" => (isset($selected['head_stylesheet'])) ? $selected['head_stylesheet'] : '',
				"BODY_BACKGROUND" => (isset($selected['body_background'])) ? $selected['body_background'] : '',
				"BODY_BGCOLOR" => (isset($selected['body_bgcolor'])) ? $selected['body_bgcolor'] : '',
				"BODY_TEXT_COLOR" => (isset($selected['body_text'])) ? $selected['body_text'] : '',
				"BODY_LINK_COLOR" => (isset($selected['body_link'])) ? $selected['body_link'] : '',
				"BODY_VLINK_COLOR" => (isset($selected['body_vlink'])) ? $selected['body_vlink'] : '',
				"BODY_ALINK_COLOR" => (isset($selected['body_alink'])) ? $selected['body_alink'] : '',
				"BODY_HLINK_COLOR" => (isset($selected['body_hlink'])) ? $selected['body_hlink'] : '',
				"TR_COLOR1" => (isset($selected['tr_color1'])) ? $selected['tr_color1'] : '',
				"TR_COLOR2" => (isset($selected['tr_color2'])) ? $selected['tr_color2'] : '',
				"TR_COLOR3" => (isset($selected['tr_color3'])) ? $selected['tr_color3'] : '',
				"TR_CLASS1" => (isset($selected['tr_class1'])) ? $selected['tr_class1'] : '',
				"TR_CLASS2" => (isset($selected['tr_class2'])) ? $selected['tr_class2'] : '',
				"TR_CLASS3" => (isset($selected['tr_class3'])) ? $selected['tr_class3'] : '',
				"TH_COLOR1" => (isset($selected['th_color1'])) ? $selected['th_color1'] : '',
				"TH_COLOR2" => (isset($selected['th_color2'])) ? $selected['th_color2'] : '',
				"TH_COLOR3" => (isset($selected['th_color3'])) ? $selected['th_color3'] : '',
				"TH_CLASS1" => (isset($selected['th_class1'])) ? $selected['th_class1'] : '',
				"TH_CLASS2" => (isset($selected['th_class2'])) ? $selected['th_class2'] : '',
				"TH_CLASS3" => (isset($selected['th_class3'])) ? $selected['th_class3'] : '',
				"TD_COLOR1" => (isset($selected['td_color1'])) ? $selected['td_color1'] : '',
				"TD_COLOR2" => (isset($selected['td_color2'])) ? $selected['td_color2'] : '',
				"TD_COLOR3" => (isset($selected['td_color3'])) ? $selected['td_color3'] : '',
				"TD_CLASS1" => (isset($selected['td_class1'])) ? $selected['td_class1'] : '',
				"TD_CLASS2" => (isset($selected['td_class2'])) ? $selected['td_class2'] : '',
				"TD_CLASS3" => (isset($selected['td_class3'])) ? $selected['td_class3'] : '',
				"FONTFACE1" => (isset($selected['fontface1'])) ? $selected['fontface1'] : '',
				"FONTFACE2" => (isset($selected['fontface2'])) ? $selected['fontface2'] : '',
				"FONTFACE3" => (isset($selected['fontface3'])) ? $selected['fontface3'] : '',
				"FONTSIZE1" => (isset($selected['fontsize1'])) ? $selected['fontsize1'] : '',
				"FONTSIZE2" => (isset($selected['fontsize2'])) ? $selected['fontsize2'] : '',
				"FONTSIZE3" => (isset($selected['fontsize3'])) ? $selected['fontsize3'] : '',
				"FONTCOLOR1" => (isset($selected['fontcolor1'])) ? $selected['fontcolor1'] : '',
				"FONTCOLOR2" => (isset($selected['fontcolor2'])) ? $selected['fontcolor2'] : '',
				"FONTCOLOR3" => (isset($selected['fontcolor3'])) ? $selected['fontcolor3'] : '',
				"SPAN_CLASS1" => (isset($selected['span_class1'])) ? $selected['span_class1'] : '',
				"SPAN_CLASS2" => (isset($selected['span_class2'])) ? $selected['span_class2'] : '',
				"SPAN_CLASS3" => (isset($selected['span_class3'])) ? $selected['span_class3'] : '',
				"DIV_CLASS1" => (isset($selected['div_class1'])) ? $selected['div_class1'] : '',
				"DIV_CLASS2" => (isset($selected['div_class2'])) ? $selected['div_class2'] : '',
				"DIV_CLASS3" => (isset($selected['div_class3'])) ? $selected['div_class3'] : '',
				"ROW_CLASS1" => (isset($selected['row_class1'])) ? $selected['row_class1'] : '',
				"ROW_CLASS2" => (isset($selected['row_class2'])) ? $selected['row_class2'] : '',
				"ROW_CLASS3" => (isset($selected['row_class3'])) ? $selected['row_class3'] : '',
				"COL_CLASS1" => (isset($selected['col_class1'])) ? $selected['col_class1'] : '',
				"COL_CLASS2" => (isset($selected['col_class2'])) ? $selected['col_class2'] : '',
				"COL_CLASS3" => (isset($selected['col_class3'])) ? $selected['col_class3'] : '',				
				"TR_COLOR1_NAME" => (isset($selected['tr_color1_name'])) ? $selected['tr_color1_name'] : '',
				"TR_COLOR2_NAME" => (isset($selected['tr_color2_name'])) ? $selected['tr_color2_name'] : '',
				"TR_COLOR3_NAME" => (isset($selected['tr_color3_name'])) ? $selected['tr_color3_name'] : '',
				"TR_CLASS1_NAME" => (isset($selected['tr_class1_name'])) ? $selected['tr_class1_name'] : '',
				"TR_CLASS2_NAME" => (isset($selected['tr_class2_name'])) ? $selected['tr_class2_name'] : '',
				"TR_CLASS3_NAME" => (isset($selected['tr_class3_name'])) ? $selected['tr_class3_name'] : '',
				"TH_COLOR1_NAME" => (isset($selected['th_color1_name'])) ? $selected['th_color1_name'] : '',
				"TH_COLOR2_NAME" => (isset($selected['th_color2_name'])) ? $selected['th_color2_name'] : '',
				"TH_COLOR3_NAME" => (isset($selected['th_color3_name'])) ? $selected['th_color3_name'] : '',
				"TH_CLASS1_NAME" => (isset($selected['th_class1_name'])) ? $selected['th_class1_name'] : '',
				"TH_CLASS2_NAME" => (isset($selected['th_class2_name'])) ? $selected['th_class2_name'] : '',
				"TH_CLASS3_NAME" => (isset($selected['th_class3_name'])) ? $selected['th_class3_name'] : '',
				"TD_COLOR1_NAME" => (isset($selected['td_color1_name'])) ? $selected['td_color1_name'] : '',
				"TD_COLOR2_NAME" => (isset($selected['td_color2_name'])) ? $selected['td_color2_name'] : '',
				"TD_COLOR3_NAME" => (isset($selected['td_color3_name'])) ? $selected['td_color3_name'] : '',
				"TD_CLASS1_NAME" => (isset($selected['td_class1_name'])) ? $selected['td_class1_name'] : '',
				"TD_CLASS2_NAME" => (isset($selected['td_class2_name'])) ? $selected['td_class2_name'] : '',
				"TD_CLASS3_NAME" => (isset($selected['td_class3_name'])) ? $selected['td_class3_name'] : '',
				"FONTFACE1_NAME" => (isset($selected['fontface1_name'])) ? $selected['fontface1_name'] : '',
				"FONTFACE2_NAME" => (isset($selected['fontface2_name'])) ? $selected['fontface2_name'] : '',
				"FONTFACE3_NAME" => (isset($selected['fontface3_name'])) ? $selected['fontface3_name'] : '',
				"FONTSIZE1_NAME" => (isset($selected['fontsize1_name'])) ? $selected['fontsize1_name'] : '',
				"FONTSIZE2_NAME" => (isset($selected['fontsize2_name'])) ? $selected['fontsize2_name'] : '',
				"FONTSIZE3_NAME" => (isset($selected['fontsize3_name'])) ? $selected['fontsize3_name'] : '',
				"FONTCOLOR1_NAME" => (isset($selected['fontcolor1_name'])) ? $selected['fontcolor1_name'] : '',
				"FONTCOLOR2_NAME" => (isset($selected['fontcolor2_name'])) ? $selected['fontcolor2_name'] : '',
				"FONTCOLOR3_NAME" => (isset($selected['fontcolor3_name'])) ? $selected['fontcolor3_name'] : '',
				"SPAN_CLASS1_NAME" => (isset($selected['span_class1_name'])) ? $selected['span_class1_name'] : '',
				"SPAN_CLASS2_NAME" => (isset($selected['span_class2_name'])) ? $selected['span_class2_name'] : '',
				"SPAN_CLASS3_NAME" => (isset($selected['span_class3_name'])) ? $selected['span_class3_name'] : '',
				"DIV_CLASS1_NAME" => (isset($selected['div_class1_name'])) ? $selected['div_class1_name'] : '',
				"DIV_CLASS2_NAME" => (isset($selected['div_class2_name'])) ? $selected['div_class2_name'] : '',
				"DIV_CLASS3_NAME" => (isset($selected['div_class3_name'])) ? $selected['div_class3_name'] : '',
				"ROW_CLASS1_NAME" => (isset($selected['row_class1_name'])) ? $selected['row_class1_name'] : '',
				"ROW_CLASS2_NAME" => (isset($selected['row_class2_name'])) ? $selected['row_class2_name'] : '',
				"ROW_CLASS3_NAME" => (isset($selected['row_class3_name'])) ? $selected['row_class3_name'] : '',
				"COL_CLASS1_NAME" => (isset($selected['col_class1_name'])) ? $selected['col_class1_name'] : '',
				"COL_CLASS2_NAME" => (isset($selected['col_class2_name'])) ? $selected['col_class2_name'] : '',
				"COL_CLASS3_NAME" => (isset($selected['col_class3_name'])) ? $selected['col_class3_name'] : '',
				"S_THEME_ACTION" => append_sid("admin_styles.$phpEx"),
				"S_TEMPLATE_SELECT" => $s_template_select,
				"S_HIDDEN_FIELDS" => $s_hidden_fields)
			);
			
			$template->pparse("body");
		}
		break;

	case "export":
		$HTTP_POST_VARS['export_template'] = (isset($HTTP_POST_VARS['export_template'])) ? $HTTP_POST_VARS['export_template'] : '';
		$HTTP_POST_VARS['send_file'] = (isset($HTTP_POST_VARS['send_file'])) ? $HTTP_POST_VARS['send_file'] : '';

		if(isset($HTTP_POST_VARS['export_template']) && $HTTP_POST_VARS['export_template'])

		{
			$template_name = $HTTP_POST_VARS['export_template'];

			$sql = "SELECT * 
				FROM " . THEMES_TABLE . " 
				WHERE template_name = '" . str_replace("\'", "''", $template_name) . "'";
			if(!$result = $db->sql_query($sql))
			{
				message_die(GENERAL_ERROR, "Could not get theme data for selected template", "", __LINE__, __FILE__, $sql);
			}
			
			$theme_rowset = $db->sql_fetchrowset($result);
			
			if( (is_countable($theme_rowset) ? count($theme_rowset) : 0) == 0 )
			{
				message_die(GENERAL_MESSAGE, $lang['No_themes']);
			}
			
			$theme_data = '<?php'."\n\n";
			$theme_data .= "//\n// phpBB 2.x auto-generated theme config file for $template_name\n// Do not change anything in this file!\n//\n\n";

			for($i = 0; $i < (is_countable($theme_rowset) ? count($theme_rowset) : 0); $i++)
			{
				foreach ($theme_rowset[$i] as $key => $val) {
					if(!intval($key) && $key != "0" && $key != "themes_id")
					{
						$theme_data .= '$' . $template_name . "[$i]['$key'] = \"" . addslashes($val) . "\";\n";
					}
				}
				$theme_data .= "\n";
			}
			
			$theme_data .= '?' . '>'; // Done this to prevent highlighting editors getting confused!
			
			@umask(0111);

			$fp = @fopen($phpbb_root_path . 'templates/' . basename($template_name) . '/theme_info.cfg', 'w');

			if( !$fp )
			{
				//
				// Unable to open the file writeable do something here as an attempt
				// to get around that...
				//
				$s_hidden_fields = '<input type="hidden" name="theme_info" value="' . htmlspecialchars($theme_data, ENT_COMPAT, 'ISO-8859-1') . '" />';
				$s_hidden_fields .= '<input type="hidden" name="send_file" value="1" /><input type="hidden" name="mode" value="export" />';
				
				$download_form = '<form action="' . append_sid("admin_styles.$phpEx") . '" method="post"><input class="mainoption" type="submit" name="submit" value="' . $lang['Download'] . '" />' . $s_hidden_fields;

				$template->set_filenames(array(
					"body" => "message_body.tpl")
				);

				$template->assign_vars(array(
					"MESSAGE_TITLE" => $lang['Export_themes'],
					"MESSAGE_TEXT" => $lang['Download_theme_cfg'] . "<br /><br />" . $download_form)
				);

				$template->pparse('body');
				exit();
			}

			$result = @fputs($fp, $theme_data, strlen($theme_data));
			fclose($fp);
			
			$message = $lang['Theme_info_saved'] . "<br /><br />" . sprintf($lang['Click_return_styleadmin'], "<a href=\"" . append_sid("admin_styles.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);

		}
		else if(isset($HTTP_POST_VARS['send_file']) && $HTTP_POST_VARS['send_file'])
		{
			
			header("Content-Type: text/x-delimtext; name=\"theme_info.cfg\"");
			header("Content-disposition: attachment; filename=theme_info.cfg");

			echo stripslashes($HTTP_POST_VARS['theme_info']);
		}
		else
		{
			$template->set_filenames(array(
				"body" => "admin/styles_exporter.tpl")
			);
			
			if( $dir = @opendir($phpbb_root_path . 'templates/') )
			{	
				$s_template_select = '<select name="export_template">';
				while( $file = @readdir($dir) )
				{	
					if( !is_file(phpbb_realpath($phpbb_root_path . 'templates/' . $file)) && !is_link(phpbb_realpath($phpbb_root_path . 'templates/' .$file)) && $file != "." && $file != ".." && $file != "CVS" )
					{
						$s_template_select .= '<option value="' . $file . '">' . $file . "</option>\n";
					}
				}
				$s_template_select .= '</select>';
			}
			else
			{
				message_die(GENERAL_MESSAGE, $lang['No_template_dir']);
			}
			
			$template->assign_vars(array(
				"L_STYLE_EXPORTER" => $lang['Export_themes'],
				"L_EXPORTER_EXPLAIN" => $lang['Export_explain'],
				"L_TEMPLATE_SELECT" => $lang['Select_template'],
				"L_SUBMIT" => $lang['Submit'], 

				"S_EXPORTER_ACTION" => append_sid("admin_styles.$phpEx?mode=export"),
				"S_TEMPLATE_SELECT" => $s_template_select)
			);
			
			$template->pparse("body");
			
		}
		break;

	case "delete":
		$style_id = ( isset($HTTP_GET_VARS['style_id']) ) ? intval($HTTP_GET_VARS['style_id']) : intval($HTTP_POST_VARS['style_id']);
		
		if( !$confirm )
		{
			if($style_id == $board_config['default_style'])
			{
				message_die(GENERAL_MESSAGE, $lang['Cannot_remove_style']);
			}
			
			$hidden_fields = '<input type="hidden" name="mode" value="'.$mode.'" /><input type="hidden" name="style_id" value="'.$style_id.'" />';
			
			//
			// Set template files
			//
			$template->set_filenames(array(
				"confirm" => "admin/confirm_body.tpl")
			);

			$template->assign_vars(array(
				"MESSAGE_TITLE" => $lang['Confirm'],
				"MESSAGE_TEXT" => $lang['Confirm_delete_style'],

				"L_YES" => $lang['Yes'],
				"L_NO" => $lang['No'],

				"S_CONFIRM_ACTION" => append_sid("admin_styles.$phpEx"),
				"S_HIDDEN_FIELDS" => $hidden_fields)
			);

			$template->pparse("confirm");

		}
		else
		{
			//
			// The user has confirmed the delete. Remove the style, the style element
			// names and update any users who might be using this style
			//
			$sql = "DELETE FROM " . THEMES_TABLE . " 
				WHERE themes_id = $style_id";
			if(!$result = $db->sql_query($sql, BEGIN_TRANSACTION))
			{
				message_die(GENERAL_ERROR, "Could not remove style data!", "", __LINE__, __FILE__, $sql);
			}
			
			//
			// There may not be any theme name data so don't throw an error
			// if the SQL dosan't work
			//
			$sql = "DELETE FROM " . THEMES_NAME_TABLE . " 
				WHERE themes_id = $style_id";
			$db->sql_query($sql);

			$sql = "UPDATE " . USERS_TABLE . " 
				SET user_style = " . $board_config['default_style'] . " 
				WHERE user_style = $style_id";
			if(!$result = $db->sql_query($sql, END_TRANSACTION))
			{
				message_die(GENERAL_ERROR, "Could not update user style information", "", __LINE__, __FILE__, $sql);
			}
			
			$message = $lang['Style_removed'] . "<br /><br />" . sprintf($lang['Click_return_styleadmin'], "<a href=\"" . append_sid("admin_styles.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

			message_die(GENERAL_MESSAGE, $message);
		}
		break;

	default:
		
		$sql = "SELECT themes_id, template_name, style_name 
			FROM " . THEMES_TABLE . " 
			ORDER BY template_name";
		if(!$result = $db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, "Could not get style information!", "", __LINE__, __FILE__, $sql);
		}
		
		$style_rowset = $db->sql_fetchrowset($result);
		
		$template->set_filenames(array(
			"body" => "admin/styles_list_body.tpl")
		);

		$template->assign_vars(array(
			"L_STYLES_TITLE" => $lang['Styles_admin'],
			"L_STYLES_TEXT" => $lang['Styles_explain'],
			"L_STYLE" => $lang['Style'],
			"L_TEMPLATE" => $lang['Template'],
			"L_EDIT" => $lang['Edit'],
			"L_DELETE" => $lang['Delete'])
		);
					
		for($i = 0; $i < (is_countable($style_rowset) ? count($style_rowset) : 0); $i++)
		{
			$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$template->assign_block_vars("styles", array(
				"ROW_CLASS" => $row_class,
				"ROW_COLOR" => $row_color,
				"STYLE_NAME" => $style_rowset[$i]['style_name'],
				"TEMPLATE_NAME" => $style_rowset[$i]['template_name'],

				"U_STYLES_EDIT" => append_sid("admin_styles.$phpEx?mode=edit&amp;style_id=" . $style_rowset[$i]['themes_id']),
				"U_STYLES_DELETE" => append_sid("admin_styles.$phpEx?mode=delete&amp;style_id=" . $style_rowset[$i]['themes_id']))
			);
		}
		
		$template->pparse("body");	
		break;
}

if (empty($HTTP_POST_VARS['send_file']))
{
	include('./page_footer_admin.'.$phpEx);
}

?>