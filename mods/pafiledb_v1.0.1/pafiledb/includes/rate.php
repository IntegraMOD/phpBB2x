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
	'rate_output' => 'pa_rate_body.tpl')
);

if ( isset($HTTP_GET_VARS['id']) || isset($HTTP_POST_VARS['id']) )
{
	$id = ( isset($HTTP_GET_VARS['id']) ) ? intval($HTTP_GET_VARS['id']) : intval($HTTP_POST_VARS['id']);
}

if ( isset($HTTP_GET_VARS['rate']) || isset($HTTP_POST_VARS['rate']) )
{
	$rate = ( isset($HTTP_GET_VARS['rate']) ) ? $HTTP_GET_VARS['rate'] : $HTTP_POST_VARS['rate'];
}

if ( isset($HTTP_GET_VARS['rating']) || isset($HTTP_POST_VARS['rating']) )
{
	$rating = ( isset($HTTP_GET_VARS['rating']) ) ? intval($HTTP_GET_VARS['rating']) : intval($HTTP_POST_VARS['rating']);
}

$f = $id;

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
	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $file['file_catid']) . '" class="nav">' . $category['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=file&id=" . $f) . '" class="nav">' . $file['file_name'] . '</a> -> ' . $lang['Rate'] . '</span>';
}

if ($category['cat_parent'] > 0)
{
	$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $category['cat_parent'] . "'";
 
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query parent category info for this file', '', __LINE__, __FILE__, $sql);
	}

	$parent = $db->sql_fetchrow($result);

	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $parent['cat_id']) . '" class="nav">' . $parent['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $category['cat_id']) . '" class="nav">' . $category['cat_name'] . '</a> -> <a href="' . append_sid("dload.php?action=file&id=" . $f) . '" class="nav">' . $file['file_name'] . '</a> -> ' . $lang['Rate']. '</span>';
}

$template->assign_vars(array(
	'LOCBAR' => locbar($locbar))
);

$ipaddy= getenv ("REMOTE_ADDR");

$sql = "SELECT * FROM " . PA_VOTES_TABLE . " WHERE votes_ip = '" . $ipaddy . "'";

if ( !($result = $db->sql_query($sql)) )
{
   	message_die(GENERAL_ERROR, 'Couldnt Query rate ip', '', __LINE__, __FILE__, $sql);
}
while ($vote = $db->sql_fetchrow($result))
{
	if ($vote['votes_file'] == $id)
	{
		$check = 1;
	}
}

if ($check == 1)
{
	$template->assign_vars(array(
		"META" => '<meta http-equiv="refresh" content="3;url='  . append_sid("dload.php?action=file&id=" . $f) . '">')
	);
	$message = $lang['Rerror'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php?action=file&id=$f") . "\">", "</a>");
	message_die(GENERAL_MESSAGE, $message);
}

else if ($rate == 'dorate')
{
	$conf = str_replace("{filename}", $file['file_name'], $lang['Rconf']);

	$conf = str_replace("{rate}", $rating, $conf);

	if ($file['file_totalvotes'] == 1)
    {
		$add = 0;
	}
	else
	{
		$add = 1;
	}
 
    $sql = "UPDATE " . PA_FILES_TABLE . " SET file_rating=file_rating+" . $rating . ", file_totalvotes=file_totalvotes+1 WHERE file_id = '" . $id . "'";

    if ( !($update = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Couldnt Update rating table', '', __LINE__, __FILE__, $sql);
    }

	$ipaddy = getenv ("REMOTE_ADDR");

	$sql = "INSERT INTO " . PA_VOTES_TABLE . " VALUES('" . $ipaddy . "', '" . $id . "')";

    if ( !($insert = $db->sql_query($sql)) )
    {
       	message_die(GENERAL_ERROR, 'Couldnt Update rating table', '', __LINE__, __FILE__, $sql);
    }

    $sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_id = '" . $id . "'";

    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Couldnt Update rating table', '', __LINE__, __FILE__, $sql);
    }

	$file = $db->sql_fetchrow($result);

	if ($file['file_rating'] == 0 or $file['file_totalvotes'] == 0)
	{
		$nrating = 0; 
	}
	else
	{
		$nrating = round($file['file_rating']/($file['file_totalvotes']-1), 2); 
	}

	$conf = str_replace("{newrating}", $nrating, $conf);

	$template->assign_vars(array(
		"META" => '<meta http-equiv="refresh" content="3;url='  .append_sid("dload.php?action=file&id=" . $f) . '">')
	);
	$message = $conf . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php?action=file&id=$f") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_forum'], "<a href=\"" . append_sid("index.$phpEx") . "\">", "</a>");
	message_die(GENERAL_MESSAGE, $message);  

}
else
{
	$rateinfo = str_replace("{filename}", $file['file_name'], $lang['Rateinfo']);

	$template->assign_block_vars("rate", array());

	$template->assign_vars(array(
		'S_RATE_ACTION' => append_sid("dload.php"),
		'L_RATE' => $lang['Rate'],
		'L_RERROR' => $lang['Rerror'],
		'L_R1' => $lang['R1'],
		'L_R2' => $lang['R2'],
		'L_R3' => $lang['R3'],
		'L_R4' => $lang['R4'],
		'L_R5' => $lang['R5'],
		'L_R6' => $lang['R6'],
		'L_R7' => $lang['R7'],
		'L_R8' => $lang['R8'],
		'L_R9' => $lang['R9'],
		'L_R10' => $lang['R10'],
		'RATEINFO' => $rateinfo, 
		'ID' => $id) 
	);
}

$template->assign_var_from_handle("ACTION_INCLUDE", "rate_output");

?>
