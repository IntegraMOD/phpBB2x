<?php
/*
  paFileDB 3.0
  ©2001/2002 PHP Arena
  Written by Todd
  todd@phparena.net
  http://www.phparena.net
  Keep all copyright links on the script visible
  Sub category counting bug fix by Kron
  Please read the license included with this script for more information.
*/
 
if ( !defined('IN_PHPBB') )
{
die("Hacking attempt");
}
 
$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a></span>';
 
$template->set_filenames(array(
'main_output' => 'pa_main_body.tpl')
);
 
$template->assign_vars(array(
'LOCBAR' => locbar($locbar),
'L_CATEGORY' => $lang['Category'],
'L_FILES' => $lang['Files'])
); 
 
/*Begin Sub Cat counting bug fix. Thanx Kron!!!!!*/
$sql = "SELECT * FROM " . PA_FILES_TABLE;
 
if ( !($fil = $db->sql_query($sql)) )
{
message_die(GENERAL_ERROR, 'Couldnt Query number of files', '', __LINE__, __FILE__, $sql);
}
 
$filesindb = $db->sql_numrows($fil);
 
$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " ORDER BY cat_order";
 
if ( !($result = $db->sql_query($sql)) )
{
message_die(GENERAL_ERROR, 'Couldnt Query categories info', '', __LINE__, __FILE__, $sql);
}
 
$view_all_image = false; // Initialize the variable here
 
while ($category = $db->sql_fetchrow($result))
{
$filesincat = 0;
if ($category['cat_parent'] == 0) 
{
$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $category['cat_id']. "'";
 
if ( !($filcat = $db->sql_query($sql)) )
{
message_die(GENERAL_ERROR, 'Couldnt Query number of files inside categories', '', __LINE__, __FILE__, $sql);
}
 
$filesincat = $db->sql_numrows($filcat);
 
$file = $db->sql_fetchrow($filcat);
 
$newind = '<img src="' . $images['folder'] . '" border="0" alt="No New file">';
 
if ($file && time() - ($config['settings_newdays'] * 24 * 60 * 60) < $file['file_time'])
{
$newind = '<img src="' . $images['folder_new'] . '" border="0" alt="New file">';
 
$view_all_image = true;
}
 
$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_parent = " . $category['cat_id'];
 
if ( !($subgroups = $db->sql_query($sql)) )
{
message_die(GENERAL_ERROR, 'Couldnt Query number of files inside categories', '', __LINE__, __FILE__, $sql);
}
 
while($category_file = $db->sql_fetchrow($subgroups)) 
{
$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = " . $category_file['cat_id'];
 
if ( !($filecate = $db->sql_query($sql)) )
{
message_die(GENERAL_ERROR, 'Couldnt Query number of files inside categories', '', __LINE__, __FILE__, $sql);
}
 
$filesincat += $db->sql_numrows($filecate);
 
$file_in_sub = $db->sql_fetchrow($filcat);
 
if ($file_in_sub && time() - ($config['settings_newdays'] * 24 * 60 * 60) < $file_in_sub['file_time'])
{
$newind = '<img src="' . $images['folder_new'] . '" border="0" alt="New file">';
 
$view_all_image = true;
}
}
}
 
if ($category['cat_parent'] == 0)
{
$template->assign_block_vars("no_cat_parent", array(
"U_CAT" => append_sid("dload.php?action=category&id=" . $category['cat_id']),
"CAT_IMAGE" => $newind,
"CAT_NAME" => $category['cat_name'],
"FILECAT" => $filesincat,
"CAT_DESC" => $category['cat_desc'])
);
}
}
 
/*End Sub Cat counting bug fix.*/
if ($config['settings_viewall'] == 1) 
{
$new_view_all = '<img src="' . $images['folder'] . '" border="0" alt="No New file">';
 
if ($view_all_image)
{
$new_view_all = '<img src="' . $images['folder_new'] . '" border="0" alt="New file">';
}
 
$template->assign_block_vars("viewall", array());
 
$template->assign_vars(array(
'U_VIEW_ALL' => append_sid("dload.php?action=viewall"),
'L_VIEW_ALL' => $lang['Viewall'],
'L_VA_INFO' => $lang['Vainfo'],
'VIEW_ALL_IMAGE' => $new_view_all,
'FILEDB' => $filesindb)
); 
}
 
$template->assign_var_from_handle("ACTION_INCLUDE", "main_output");