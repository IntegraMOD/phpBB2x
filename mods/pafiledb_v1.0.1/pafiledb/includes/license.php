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
	'license_output' => 'pa_license_body.tpl')
);

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

if ( isset($HTTP_GET_VARS['file']) || isset($HTTP_POST_VARS['file']) )
{
	$file = ( isset($HTTP_GET_VARS['file']) ) ? intval($HTTP_GET_VARS['file']) : intval($HTTP_POST_VARS['file']);
}

$f = $file;

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $f . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query file info', '', __LINE__, __FILE__, $sql);
}

$file = $db->sql_fetchrow($result);

$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $file['file_catid'] . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query category info for this file', '', __LINE__, __FILE__, $sql);
}

$category = $db->sql_fetchrow($result);

if ($category['cat_parent'] == 0)
{
	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $file['file_catid']) . '" class="nav">' . $category['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=file&id=" . $f) . '" class="nav">' . $file['file_name'] . '</a> -> ' . $lang['License'] . '</span>';
}
if ($category['cat_parent'] > 0)
{
	$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $category['cat_parent'] . "'";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query parent category info for this file', '', __LINE__, __FILE__, $sql);
	}

	$parent = $db->sql_fetchrow($result);

	$locbar = '<a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $parent['cat_id']) . '" class="nav">' . $parent['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $category['cat_id']) . '" class="nav">' . $category['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=file&id=" . $f) . '" class="nav">' . $file['file_name'] . '</a> -> ' . $lang['License'] . '';
}

$sql = "SELECT * FROM " . PA_LICENSE_TABLE . " WHERE license_id = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query license info for this file', '', __LINE__, __FILE__, $sql);
}

$license = $db->sql_fetchrow($result);

$template->assign_vars(array(
	'LE_NAME' => $license['license_name'],
	'L_LEWARN' => $lang['Licensewarn'],
	'FILE_NAME' => $file['file_name'],
	'LE_TEXT' => $license['license_text'],
	'ID' => $f,
	'L_AGREE' => $lang['Iagree'],
	'L_NOT_AGREE' => $lang['Dontagree'],      
	'LOCBAR' => locbar($locbar))
);

$template->assign_var_from_handle("ACTION_INCLUDE", "license_output");

?>
