<?php
/***************************************************************************
 *                             admin_portal.php
 *                            -------------------
 *   begin                : Friday, March 26, 2004
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
	$module['IM_Portal']['Portal_Configuration'] = "$file";
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

$template->set_filenames(array(
	"body" => "admin/portal_config_body.tpl")
);

//
// Get Blocks Variabled data
//
$sql = "SELECT * FROM " . BLOCK_VARIABLE_TABLE . " ORDER BY bvid";
if(!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query portal config information", "", __LINE__, __FILE__, $sql);
}

$var = array();
while( $row = $db->sql_fetchrow($result) )
{
	$var[$row['config_name']] = array();
	$var[$row['config_name']]['label'] = $row['label'];
	$var[$row['config_name']]['sub_label'] = $row['sub_label'];
	$var[$row['config_name']]['field_options'] = $row['field_options'];
	$var[$row['config_name']]['field_values'] = $row['field_values'];
	$var[$row['config_name']]['type'] = $row['type'];
	$var[$row['config_name']]['block'] = str_replace("_"," ",$row['block']);
}

$sql = "SELECT * FROM " . LAYOUT_TABLE . " ORDER BY lid";
if(!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query layout information", "", __LINE__, __FILE__, $sql);
}

$layout_options = '';
$layout_values = '';
$i=0;
while( $row = $db->sql_fetchrow($result) )
{
	if(!$i)
	{
		$layout_options .= $row['name'];
		$layout_values .= $row['lid'];
	}else
	{
		$layout_options .= ',' . $row['name'];
		$layout_values .= ',' . $row['lid'];
	}
	$i++;
}

//
// Pull all config data
//
$sql = "SELECT * FROM " . BLOCK_VARIABLE_TABLE . " AS b RIGHT JOIN " . PORTAL_CONFIG_TABLE . " AS p USING (config_name) WHERE b.config_name IS NULL OR b.config_name IS NOT NULL ORDER BY b.block, b.bvid, p.id";
if(!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query portal config information", "", __LINE__, __FILE__, $sql);
}
else
{
	$controltype = array( '1' => 'textbox', '2' => 'dropdown list', '3' => 'radio buttons', '4' => 'checkbox');
	while( $row = $db->sql_fetchrow($result) )
	{
		$portal_name = $row['config_name'];
		$portal_value = $row['config_value'];
		if( $portal_name == 'default_portal' )
		{
			$var[$portal_name]['label'] = $lang['Default_Portal'];
			$var[$portal_name]['sub_label'] = $lang['Default_Portal_Explain'];
			$var[$portal_name]['field_options'] = $layout_options;
			$var[$portal_name]['field_values'] = $layout_values;
			$var[$portal_name]['type'] = '2';
			$var[$portal_name]['block'] = '@Portal Config';
		}else if( $portal_name == 'portal_header' )
		{
			$var[$portal_name]['label'] = $lang['Portal_Header'];
			$var[$portal_name]['sub_label'] = $lang['Portal_Header_Explain'];
			$var[$portal_name]['type'] = '3';
			$var[$portal_name]['field_options'] = $lang['Yes'] . ',' . $lang['No'];
			$var[$portal_name]['field_values'] = '1,0';
			$var[$portal_name]['block'] = '@Portal Config';
		}else if( $portal_name == 'portal_tail' )
		{
			$var[$portal_name]['label'] = $lang['Portal_Tail'];
			$var[$portal_name]['sub_label'] = $lang['Portal_Tail_Explain'];
			$var[$portal_name]['type'] = '3';
			$var[$portal_name]['field_options'] = $lang['Yes'] . ',' . $lang['No'];
			$var[$portal_name]['field_values'] = '1,0';
			$var[$portal_name]['block'] = '@Portal Config';
		}else if( $portal_name == 'cache_enabled' )
		{
			$var[$portal_name]['label'] = $lang['Cache_Enabled'];
			$var[$portal_name]['sub_label'] = $lang['Cache_Enabled_Explain'];
			$var[$portal_name]['type'] = '3';
			$var[$portal_name]['field_options'] = $lang['Yes'] . ',' . $lang['No'];
			$var[$portal_name]['field_values'] = '1,0';
			$var[$portal_name]['block'] = '@Portal Config';
		}else if( $portal_name == 'collapse_layout' )
		{
			$var[$portal_name]['label'] = $lang['Collapse_Enabled'];
			$var[$portal_name]['sub_label'] = $lang['Collapse_Enabled_Explain'];
			$var[$portal_name]['type'] = '3';
			$var[$portal_name]['field_options'] = $lang['Yes'] . ',' . $lang['No'];
			$var[$portal_name]['field_values'] = '1,0';
			$var[$portal_name]['block'] = '@Portal Config';
		}

		switch($var[$portal_name]['type'])
		{
			case '1':
				$field = '<input type="text" maxlength="255" size="40" name="' . $portal_name . '" value="' . $portal_value . '" class="post" />';
				break;
			case '2':
				$options = explode("," , $var[$portal_name]['field_options']);
				$values = explode("," , $var[$portal_name]['field_values']);
				$field = '<select name = "' . $portal_name . '">';
				$i=0;
				while ($options[$i] ?? null)
				{
					$selected = ($portal_value == trim($values[$i])) ? 'selected' : '';
					$field .= '<option value = "' . trim($values[$i]) . '" ' . $selected . '>' . trim($options[$i]);
					$i++;
				}
				$field .= '</selected>';
				break;
			case '3':
				$options = explode("," , $var[$portal_name]['field_options']);
				$values = explode("," , $var[$portal_name]['field_values']);
				$field = '';
				$i=0;
				while ($options[$i] ?? null)
				{
					$checked = ($portal_value == trim($values[$i])) ? 'checked' : '';
					$field .= '<input type="radio" name = "' . $portal_name . '" value = "' . trim($values[$i]) . '" ' . $checked . '>' . trim($options[$i]) . '&nbsp;&nbsp;';
					$i++;
				}
				break;
			case '4':
				$checked = ($portal_value) ? 'checked' : '';
				$field = '<input type="checkbox" name="' . $portal_name . '" ' . $checked . '>';
				break;
			default:
				$field = '';
		}

		$default_portal[$portal_name] = $portal_value;
		
		if($var[$portal_name]['type'] == '4')
		{
			$new[$portal_name] = ( isset($_POST[$portal_name]) ) ? '1' : '0';
		}else
		{
			$new[$portal_name] = ( isset($_POST[$portal_name]) ) ? $_POST[$portal_name] : $default_portal[$portal_name];
		}

		if( isset($_POST['submit']) )
		{
			$sql = "UPDATE " . PORTAL_CONFIG_TABLE . " SET
				config_value = '" . str_replace("\'", "''", $new[$portal_name]) . "'
				WHERE config_name = '$portal_name'";
			if( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Failed to update configuration for $portal_name", "", __LINE__, __FILE__, $sql);
			}
		}else
		{
			$is_block = ($var[$portal_name]['block']!='@Portal Config') ? 'block ' : '';
			$template->assign_block_vars("portal", array(
				"L_FIELD_LABEL" => $var[$portal_name]['label'],
				"L_FIELD_SUBLABEL" => '<br /><br /><span class="gensmall">' . $var[$portal_name]['sub_label'] . ' [ ' . preg_replace("/@/","",$var[$portal_name]['block']) . ' ' . $is_block . ']</span>',
				"FIELD" => $field
				)
			);
		}
	}

	if( isset($_POST['submit']) )
	{
		$message = $lang['Config_updated'] . "<br /><br />" . sprintf($lang['Click_return_config'], "<a href=\"" . append_sid("admin_portal.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
	}
}

$template->assign_vars(array(
	"S_CONFIG_ACTION" => append_sid("admin_portal.$phpEx"),
	"L_CONFIGURATION_TITLE" => $lang['Portal_Config'],
	"L_CONFIGURATION_EXPLAIN" => $lang['Portal_Explain'],
	"L_GENERAL_CONFIG" => $lang['Portal_General_Config'],
	"L_SUBMIT" => $lang['Submit'], 
	"L_RESET" => $lang['Reset']
	)
);

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>