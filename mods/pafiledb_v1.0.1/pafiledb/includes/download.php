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

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt select download', '', __LINE__, __FILE__, $sql);
}

$file = $db->sql_fetchrow($result);

$time = time();

$sql = "UPDATE " . PA_FILES_TABLE . " SET file_dls=file_dls+1, file_last=" . $time . " WHERE file_id = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Update Files table', '', __LINE__, __FILE__, $sql);
}

$url = $board_config['server_name'];

if (!eregi($url,$_SERVER['HTTP_REFERER']))
{
	$template->assign_vars(array(
		"META" => '<meta http-equiv="refresh" content="3;url=' . append_sid("dload.php?action=file&id=" . $id) . '">')
	);

	$message = $lang['Directly_linked'];

	message_die(GENERAL_MESSAGE, $message);
}


header("Location: " . $file['file_dlurl']);

?>
