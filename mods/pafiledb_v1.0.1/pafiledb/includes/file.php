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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

$template->set_filenames(array(
	'file_output' => 'pa_file_body.tpl')
);

global $ssurl, $docsurl;

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query file info', '', __LINE__, __FILE__, $sql);
}

$file = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $file['file_catid'] . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query parent category', '', __LINE__, __FILE__, $sql);
}

$category = $db->sql_fetchrow($result);

if ($category['cat_parent'] == 0)
{
    $locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl'] ?? '') . '" class="nav">' . ($config['settings_sitename'] ?? '') . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . ($config['settings_dbname'] ?? '') . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . ($file['file_catid'] ?? '')) . '" class="nav">' . ($category['cat_name'] ?? '') . '</a> -> ' . ($file['file_name'] ?? '') . '</span>';
}

if ($category['cat_parent'] > 0) 
{
	$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $category['cat_parent'] . "'";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query parent category', '', __LINE__, __FILE__, $sql);
	}

	$parent = $db->sql_fetchrow($result);

	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $parent['cat_id']) . '" class="nav">' . $parent['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $category['cat_id']) . '" class="nav">' . $category['cat_name'] . '</a> -> ' . $file['file_name'] . '</span>';
}

$template->assign_vars(array(
	'LOCBAR' => locbar($locbar))
);

$file_time = create_date($board_config['default_dateformat'], $file['file_time'], $board_config['board_timezone']);

if ($file['file_last'] == 0)
{
	$last = $lang['never'];
}
else
{
	$last = create_date($board_config['default_dateformat'], $file['file_last'], $board_config['board_timezone']);
}

$file['file_creator'] = trim($file['file_creator']);

$file['file_version'] = trim($file['file_version']);

$file['file_ssurl'] = trim($file['file_ssurl']);

$file['file_docsurl'] = trim($file['file_docsurl']);

if (!empty($file['file_creator']))
{ 
	$creator = '<tr><td class="row2">' . $lang['Creator'] . ':</td><td class="row1">' . $file['file_creator'] . '</td></tr>';
}

if (!empty($file['file_version'])) 
{
	$version = '<tr><td class="row2">' . $lang['Version'] . ':</td><td class="row1">' . $file['file_version'] . '</td></tr>';
}

if (!empty($file['file_ssurl'])) 
{ 
	if ($config['settings_showss'] == 1) 
	{
		$ssurl = "<tr><td class=\"row2\">" . $lang['Scrsht'] . ":</td><td class=\"row1\"><a href=\"javascript:mpFoto('" . $file['file_ssurl'] . "')\"><img src=\"" . $file['file_ssurl'] . "\" border=\"0\" width=\"100\" hight=\"100\"></a></td></tr>";
	}
	else
	{
		$ssurl = "<tr><td class=\"row2\">" . $lang['Scrsht'] . ":</td><td class=\"row1\"><a href=\"" . $file['file_ssurl'] . "\" target=\"_blank\">" . $file['file_ssurl'] . "</a></td></tr>";
	}
}

if (!empty($file['file_docsurl']))
{
	$docsurl = '<tr><td class="row2">' . $lang['Docs'] . ':</td><td class="row1"><a href="' . $file['file_docsurl'] . '" target="docs_' . $id . '">' . $file['file_docsurl'] . '</a></td></tr>'; 
}

$file['file_totalvotes'] = $file['file_totalvotes'] - 1;

if ($file['file_rating'] == 0 or $file['file_totalvotes'] == 0) 
{
	$rating = 0; 
}
else
{
	$rating = round($file['file_rating']/$file['file_totalvotes'], 2);
}

if ($file['file_license'] == 0)
{
	$downloadlink = append_sid("dload.php?action=download&id=" . $id);
}

if ($file['file_license'] > 0)
{
	$downloadlink = append_sid("dload.php?action=license&id=" . $file['file_license'] . "&file=" . $id);
}

	$download_img = $images['pa_download'];
	$email_img = $images['pa_email'];
	$rate_img = $images['pa_rate'];

$template->assign_vars(array(
	"L_FILE" => $lang['File'],
	"FILE_NAME" => $file['file_name'],
 	"L_DESC" => $lang['Desc'],
  	"FILE_LONGDESC" => nl2br($file['file_longdesc']),
	"FILE_VOTES" => $file['file_totalvotes'],
	"L_VOTES" => $lang['Votes'],
	"CREATOR" => $creator,
	"VERSION" => $version,
	"SSURL" => $ssurl,
	"DOCSURL" => $docsurl,
	"L_DATE" => $lang['Date'],
	"TIME" => $file_time,
	"L_LASTTDL" => $lang['Lastdl'],
	"LAST" => $last,
	"L_RATING" => $lang['DlRating'],
	"RATING" => $rating,
	"L_DLS" => $lang['Dls'],
	"FILE_DLS" => $file['file_dls']) 
);


$sql = "SELECT * FROM " . PA_CUSTOM_DATA_TABLE . " WHERE customdata_file = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query Custom field data', '', __LINE__, __FILE__, $sql);
}

while ($custom = $db->sql_fetchrow($result))
{
	$sql = "SELECT * FROM " . PA_CUSTOM_TABLE . " WHERE custom_id = '" . $custom['customdata_custom'] . "'";

	if ( !($result2 = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query Custom field data', '', __LINE__, __FILE__, $sql);
	}

	$field = $db->sql_fetchrow($result2);

	$custom['data'] = trim($custom['data']);

	if (!empty($custom['data']))
	{
		$template->assign_block_vars("custom_field", array(
			"CUSTOM_NAME" => $field['custom_name'],
			"DATA" => $custom['data']) 
		);
	}

}

$template->assign_vars(array(
	'DOWNLOAD_IMG' => $download_img,
	'RATE_IMG' => $rate_img,
	'EMAIL_IMG' => $email_img,

	'L_DOWNLOAD' => $lang['Downloadfile'],
	'L_RATE' => $lang['Rate'],
	'L_EMAIL' => $lang['Emailfile'],
	"U_DOWNLOAD" => $downloadlink,
	"U_RATE" => append_sid("dload.php?action=rate&id=" . $id),
 	"U_EMAIL" => append_sid("dload.php?action=email&id=" . $id))
);

if ( isset($HTTP_GET_VARS['comment']) || isset($HTTP_POST_VARS['comment']) )
{
	$comment = ( isset($HTTP_GET_VARS['comment']) ) ? $HTTP_GET_VARS['comment'] : $HTTP_POST_VARS['comment'];
}

if (!isset($comment))
{
	include($phpbb_root_path . 'pafiledb/includes/comment.'.$phpEx);

	$template->assign_var_from_handle("ACTION_INCLUDE", "file_output");
}
else
{
	include($phpbb_root_path . 'pafiledb/includes/post_comment.'.$phpEx);      
}