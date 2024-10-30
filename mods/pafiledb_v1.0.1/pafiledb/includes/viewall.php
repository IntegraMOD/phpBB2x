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
	'viewall_output' => 'pa_viewall_body.tpl')
);

if ($config['settings_viewall'] == 0) 
{
	$message = $lang['viewall_disabled'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php") . "\">", "</a>");
	message_die(GENERAL_MESSAGE, $message);
}

global $start, $pages, $filelist, $id, $prev, $next;

$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=viewall") . '" class="nav">' . $lang['Viewall'] . '</a></span>';

$template->assign_vars(array(
	'LOCBAR' => locbar($locbar),
	'L_DATE' => $lang['Date'],
	'L_RATING' => $lang['DlRating'],
	'L_DOWNLOADS' => $lang['Dls'],
	'L_FILE' => $lang['File']) 
);

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '1' ORDER BY file_id";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query all pinned file', '', __LINE__, __FILE__, $sql);
}

/*PINNED*/
while ($pin = $db->sql_fetchrow($result))
{
	$date = create_date($board_config['default_dateformat'], $pin['file_time'], $board_config['board_timezone']);

	$ntv = $pin['file_totalvotes'] - 1;

	if ($pin['file_rating'] == 0 || $ntv == 0)
	{
		$rating = 0;
	}
	else
	{
		$rating = round($pin['file_rating']/$ntv, 2);
	}

	$newind = "";

	if (time() - ($config['settings_newdays'] * 24 * 60 * 60) < $pin['file_time'])
	{
		$newind = '<img src="pafiledb/images/new.gif" border="0" alt="' . $lang['New_file'] . '">';
	}

	$template->assign_block_vars("pin_file", array(
		"FILE_ID" => $pin['file_id'],
		"FILE_NAME" => $pin['file_name'],
		"FILE_DESC" => $pin['file_desc'],
		"DATE" => $date,
		"RATING" => $rating,
		"NEW" => $newind,
		"FILE_DLS" => $pin['file_dls'])
	);  
}

if ( isset($HTTP_GET_VARS['start']) || isset($HTTP_POST_VARS['start']) )
{
	$start = ( isset($HTTP_GET_VARS['start']) ) ? $HTTP_GET_VARS['start'] : $HTTP_POST_VARS['start'];
}

$start = isset($start) ? trim($start) : '';

if (empty($start))
{
	$start = 0;
}

if ( isset($HTTP_GET_VARS['sortby']) || isset($HTTP_POST_VARS['sortby']) )
{
	$sortby = ( isset($HTTP_GET_VARS['sortby']) ) ? $HTTP_GET_VARS['sortby'] : $HTTP_POST_VARS['sortby'];
}

if (empty($sortby))
{
	$sortby = 'name';
}

if ($sortby == 'name')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' ORDER BY file_name ASC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by name', '', __LINE__, __FILE__, $sql);
	}
}

if ($sortby == 'date')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' ORDER BY file_time DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
    {
		message_die(GENERAL_ERROR, 'Couldnt sort file by date', '', __LINE__, __FILE__, $sql);
    }    
}

if ($sortby == 'downloads')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' ORDER BY file_dls DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by downloads', '', __LINE__, __FILE__, $sql);
	}    
}

if ($sortby == 'rating')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' ORDER BY (file_rating/(file_totalvotes)) DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by rating', '', __LINE__, __FILE__, $sql);
	}    
}

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0'";

if ( !($result3 = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query number of files', '', __LINE__, __FILE__, $sql);
}

$filesincat = $db->sql_numrows($result3);

if ($filesincat == 0)
{
	$filesincat = 1;
}

/*NOT PINNED*/
while ($file = $db->sql_fetchrow($result))
{
	$date = create_date($board_config['default_dateformat'], $file['file_time'], $board_config['board_timezone']);

	if ($file['file_rating'] == 0 or $file['file_totalvotes'] == 0)
	{
		$rating = 0;
	}
	else
	{
		$rating = round($file['file_rating']/($file['file_totalvotes']-1), 2); 
	}

	if ($file['file_posticon'] == 'none' or $file['file_posticon'] == 'none.gif' or empty($file['file_posticon']))
	{
		$posticon = "&nbsp;";
	}
	else
	{
		$posticon = '<img src="pafiledb/icons/' . $file['file_posticon']. '" border="0">';
	}

	$newind = "";
	if (time() - ($config['settings_newdays'] * 24 * 60 * 60) < $file['file_time'])
	{
		$newind = '<img src="pafiledb/images/new.gif" border="0" alt="' . $lang['New_file'] . '">';
	}

	$template->assign_block_vars("no_pin_file", array(
		"FILE_ID" => $file['file_id'],
		"FILE_NAME" => $file['file_name'],
		"FILE_DESC" => $file['file_desc'],
		"DATE" => $date,
		"RATING" => $rating,                
		"POST_ICON" => $posticon,
		"NEW" => $newind,
		"FILE_DLS" => $file['file_dls']) 
	);
}

$numpages = ceil($filesincat / 20);

if ($start + 20 < $filesincat)
{
	$newstart = $start + 20;

	$next = '<a href="' . append_sid("dload.php?action=viewall&start=" . $newstart . "&sortby=" . $sortby) . '">' . $lang['Next'] . '</a>';
}

if ($start - 20 >= 0)
{
	$newstart = $start - 20;

	$prev = '<a href="' . append_sid("dload.php?action=viewall&start=" . $newstart . "&sortby=" . $sortby) . '">' . $lang['Prev'] . '</a>';
}

for ($i = 0; $i < $numpages; $i++)
{
	$newstart = 20*$i;
	$pagenum = $i + 1;
	if ($newstart == $start)
	{
		$pages .= $pagenum . ' ';
	}
	else
	{
		$pages .= '<a href="' . append_sid("dload.php?action=viewall&start=" . $newstart . "&sortby=" . $sortby) . '">' . $pagenum . '</a> ';
	}
}

$template->assign_vars(array(
	'S_VIEWALL_ACTION' => append_sid("dload.php"),
	'L_RATING' => $lang['DlRating'],
	'L_DOWNLOADS' => $lang['Dls'],
	'L_DATE' => $lang['Date'],
	'L_NAME' => $lang['Name'],
	"FILELIST" => $filelist,
	"ID" => $id,
	"START" => $start,
	'L_SORTBY' => $lang['Sort_by'],
	"PREV" => $prev,    
	'L_GO' => $lang['Go'],
	'L_PAGENO' => $lang['Pagenums'],
	"PAGES" => $pages,
	"NEXT" => $next,
	'L_FILE' => $lang['File']) 
);

$template->assign_var_from_handle("ACTION_INCLUDE", "viewall_output");

?>
