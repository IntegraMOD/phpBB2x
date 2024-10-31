<?php
/*
  paFileDB 3.0
  ©2001/2002 PHP Arena
  Written by Todd
  todd@phparena.net
  http://www.phparena.net
  Keep all copyright links on the script visible
  Please read the license included with this script for more information.
*/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', 1);
}

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Download'][$lang['Settings']] = "$file";
	return;
}

$phpbb_root_path = "./../";

require($phpbb_root_path . 'extension.inc');

require('./pagestart.' . $phpEx);

include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin_pafiledb.' . $phpEx);

include($phpbb_root_path . 'pafiledb/includes/functions.' . $phpEx); 

$config = pafiledb_config();

$template->set_filenames(array(
	'admin' => 'admin/pa_admin_settings.tpl')
);  

global $settings, $vadropmenu, $ssdropmenu, $dddropmenu, $html, $bbcodea, $smiliesa, $clinks, $cimage;

if ( isset($HTTP_GET_VARS['settings']) || isset($HTTP_POST_VARS['settings']) )
{
	$settings = ( isset($HTTP_GET_VARS['settings']) ) ? $HTTP_GET_VARS['settings'] : $HTTP_POST_VARS['settings'];
}

if ($settings == 'do')
{
	if ( isset($HTTP_GET_VARS['form']) || isset($HTTP_POST_VARS['form']) )
	{
		$form = ( isset($HTTP_GET_VARS['form']) ) ? $HTTP_GET_VARS['form'] : $HTTP_POST_VARS['form'];
	}

	$sql = "UPDATE " . PA_SETTINGS_TABLE . " SET settings_dbname = '" . $form['dbname'] . "', settings_sitename = '" . $form['sitename'] . "', settings_dburl = '" . $form['dburl'] . "', settings_topnumber = '" . $form['top'] . "', settings_homeurl = '" . $form['hpurl'] . "', settings_newdays = '" . $form['new'] . "', settings_viewall = '" . $form['viewall'] . "', settings_showss = '" . $form['showss'] . "', settings_disable = '" . $form['disable'] . "', allow_html = '" . $form['allowhtml'] . "', allow_bbcode = '" . $form['allowbbcode'] . "', allow_smilies = '" . $form['allows'] . "', allow_comment_links = '" . $form['allowl'] . "', no_comment_link_message = '" . $form['linkm'] . "', allow_comment_images = '" . $form['allowi'] . "', no_comment_image_message = '" . $form['imagem'] . "', max_comment_chars = '" . $form['max_char'] . "' WHERE settings_id = '1'";

	if ( !($db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query Basic settings for Download database', '', __LINE__, __FILE__, $sql);
	}

	$message = $lang['Settings_changed'] . '<br /><br />' . sprintf($lang['Click_return'], '<a href="' . append_sid("admin_settings.$phpEx") . '">', '</a>') . '<br /><br />' . sprintf($lang['Click_return_admin_index'], '<a href="' . append_sid("index.$phpEx?pane=right") . '">', '</a>');

	message_die(GENERAL_MESSAGE, $message); 
}

if (empty($settings)) 
{
	if (isset($config['settings_viewall']) && $config['settings_viewall'] == 0)
	{
		$vadropmenu .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$vadropmenu .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$vadropmenu .= '<option value="0">' . $lang['No'] . '</option>';
		$vadropmenu .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}
	
    if (isset($config['settings_showss']) && $config['settings_showss'] == 0)
	{
		$ssdropmenu .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$ssdropmenu .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$ssdropmenu .= '<option value="0">' . $lang['No'] . '</option>';
		$ssdropmenu .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}
	
    if (isset($config['settings_disable']) && $config['settings_disable'] == 0)
	{
		$dddropmenu .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$dddropmenu .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$dddropmenu .= '<option value="0">' . $lang['No'] . '</option>';
		$dddropmenu .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}
	
    if (isset($config['allow_html']) && $config['allow_html'] == 0)
	{
		$html .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$html .= '<option value="1">' . $lang['Yes'] . '</option>';
	} 
	else 
	{
		$html .= '<option value="0">' . $lang['No'] . '</option>';
		$html .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}
	
    if (isset($config['allow_bbcode']) && $config['allow_bbcode'] == 0)
	{
		$bbcodea .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$bbcodea .= '<option value="1">' . $lang['Yes'] . '</option>';
	} 
	else 
	{
		$bbcodea .= '<option value="0">' . $lang['No'] . '</option>';
		$bbcodea .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}

    if (isset($config['allow_smilies']) && $config['allow_smilies'] == 0)
	{
		$smiliesa .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$smiliesa .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$smiliesa .= '<option value="0">' . $lang['No'] . '</option>';
		$smiliesa .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}

    if (isset($config['allow_comment_links']) && $config['allow_comment_links'] == 0)
	{
		$clinks .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$clinks .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$clinks .= '<option value="0">' . $lang['No'] . '</option>';
		$clinks .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}

    if (isset($config['allow_comment_images']) && $config['allow_comment_images'] == 0)
	{
		$cimage .= '<option value="0" selected>' . $lang['No'] . '</option>';
		$cimage .= '<option value="1">' . $lang['Yes'] . '</option>';
	}
	else 
	{
		$cimage .= '<option value="0">' . $lang['No'] . '</option>';
		$cimage .= '<option value="1" selected>' . $lang['Yes'] . '</option>';
	}	 
	
	$template->assign_vars(array(
		'S_SETTINGS_ACTION' => append_sid("admin_settings.$phpEx"),
		'L_SETTINGS' => $lang['Settings'],
		'L_SETTINGSTITLE' => $lang['Settingstitle'],
		'L_SETTINGSEXPLAIN' => $lang['Settingsexplain'],
		'L_DBNAME' => $lang['Dbname'],
		'L_DBNAMEINFO' => $lang['Dbnameinfo'],
        'SETTINGS_DBNAME' => isset($config['settings_dbname']) ? $config['settings_dbname'] : null,
		'L_SITENAME' => $lang['Sitename'],
		'L_SITENAMEINFO' => $lang['Sitenameinfo'],
        'SETTINGS_SITENAME' => isset($config['settings_sitename']) ? $config['settings_sitename'] : null,
		'L_DBURL' => $lang['Dburl'],
		'L_DBURLINFO' => $lang['Dburlinfo'],
        'SETTINGS_DBURL' => isset($config['settings_dburl']) ? $config['settings_dburl'] : null,
		'L_TOPNUM' => $lang['topnum'] ?? '',
		'L_TOPNUMINFO' => $lang['Topnuminfo'],
        'SETTINGS_TOPNUMBER' => isset($config['settings_topnumber']) ? $config['settings_topnumber'] : null,
		'L_HPURL' => $lang['Hpurl'],
		'L_HPURLINFO' => $lang['Hpurlinfo'],
		'SETTINGS_HOMEURL' => isset($config['settings_homeurl']) ? $config['settings_homeurl'] : null,
		'L_NFDAYS' => $lang['Nfdays'],
		'L_NFDAYSINFO' => $lang['Nfdaysinfo'],
		'SETTINGS_NEWDAYS' => isset($config['settings_newdays']) ? $config['settings_newdays'] : null,
		'L_TOPNUM' => $lang['Topnum'],
		'L_TOPNUMINFO' => $lang['Topnuminfo'],
		'SETTINGS_TOPNUMBER' => isset($config['settings_topnumber']) ? $config['settings_topnumber'] : null,

		'L_COMMENT_SETTINGS' => $lang['Com_settings'],
		'L_SHOW_VIEWALL' => $lang['Showva'],
		'L_VIEWALL_INFO' => $lang['Showvainfo'],
		'VIEWALL_DROPMENU' => $vadropmenu,
		'L_SHOW_SS' => $lang['Showss'],
		'L_SS_INFO' => $lang['Showssinfo'],
		'SS_DROPMENU' => $ssdropmenu,
		'L_DISABLE' => $lang['Dbdl'],
		'L_DISABLE_INFO' => $lang['Dbdlinfo'],
		'DISABLE_DROPMENU' => $dddropmenu,
		'L_ALLOW_HTML' => $lang['Com_allowh'],
		'HTML_DROPMENU' => $html,
		'L_ALLOW_BBCODE' => $lang['Com_allowb'],
		'BBCODE_DROPMENU' => $bbcodea,
		'L_ALLOW_SMILIES' => $lang['Com_allows'],
		'SMILIES_DROPMENU' => $smiliesa,
		'L_ALLOW_LINKS' => $lang['Com_allowl'],
		'LINKS_DROPMENU' => $clinks,
		'L_LINKS_MESSAGE' => $lang['Com_messagel'],
		'L_LINKS_MESSAGE_INFO' => $lang['Com_messagel_info'],
		'MESSAGE_LINK' => isset($config['no_comment_link_message']) ? $config['no_comment_link_message'] : '',
		'L_ALLOW_IMAGE' => $lang['Com_allowi'],
		'IMAGE_DROPMENU' => $cimage,
		'L_IMAGE_MESSAGE' => $lang['Com_messagei'],
		'L_MAX_CHAR' => $lang['Max_char'],
		'L_MAX_CHAR_INFO' => $lang['Max_char_info'],
		'MAX_CHAR' => isset($config['max_comment_chars']) ? $config['max_comment_chars'] : null,
		'L_IMAGE_MESSAGE_INFO' => $lang['Com_messagei_info'],
		'MESSAGE_IMAGE' => isset($config['no_comment_image_message']) ? $config['no_comment_image_message'] : null,
		'L_SUBMIT' => $lang['Submit'])
	);                 
}

$template->pparse('admin');

include('./page_footer_admin.'.$phpEx);