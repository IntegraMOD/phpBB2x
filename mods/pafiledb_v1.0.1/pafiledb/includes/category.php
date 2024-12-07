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
	'category_output' => 'pa_category_body.tpl')
);

global $filelist, $prev, $next;

if ( isset($_GET['id']) || isset($_POST['id']) )
{
	$id = ( isset($_GET['id']) ) ? intval($_GET['id']) : intval($_POST['id']);
}

$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $id . "'";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query category info', '', __LINE__, __FILE__, $sql);
}

$category = $db->sql_fetchrow($result);

if ($category['cat_parent'] == 0) 
{ 
	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> ' . $category['cat_name'] . '</span>';
}

if ($category['cat_parent'] > 0)
{
	$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_id = '" . $category['cat_parent'] . "'";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt Query category info', '', __LINE__, __FILE__, $sql);
	}

	$parent = $db->sql_fetchrow($result);

	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=category&id=" . $parent['cat_id']) . '" class="nav">' . $parent['cat_name'] . '</a> -> ' . $category['cat_name'] . '</span>';
}

$template->assign_vars(array(
	'LOCBAR' => locbar($locbar))
);

$sql = "SELECT * FROM " . PA_CATEGORY_TABLE . " WHERE cat_parent = '" . $id . "' ORDER BY cat_id";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query category info for parent categories', '', __LINE__, __FILE__, $sql);
}

$row_number = $db->sql_numrows($result);

$no_file_message = 0;

if ($row_number > 0) 
{
	$no_file_message = 1;

	$template->assign_vars(array(
		'L_CATEGORY' => $lang['Category'],
		'L_FILES' => $lang['Files']) 
	);

	$template->assign_block_vars("cat_parent", array());

	while ($sub = $db->sql_fetchrow($result)) 
	{
		$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $sub['cat_id'] . "'";

		if ( !($result2 = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Couldnt Query category info for parent categories', '', __LINE__, __FILE__, $sql);
		}

		$filesincat = $db->sql_numrows($result2);

		$file_new = $db->sql_fetchrow(isset($filcat) ? $filcat : null);

		$new_cat = '<img src="' . $images['folder'] . '" border="0" alt="No New file">';

		if (isset($config['settings_newdays']) && isset($file_new['file_time']) && 
			(time() - ($config['settings_newdays'] * 24 * 60 * 60) < $file_new['file_time']))
		{
			$new_cat = '<img src="' . $images['folder_new'] . '" border="0" alt="New file">';
		}

		$template->assign_block_vars("cat_parent_do", array(
			'U_CAT' => append_sid("dload.php?action=category&id=" . $sub['cat_id']),
			'CAT_DESC' => $sub['cat_desc'],
			'FILECAT' => $filesincat,
			'CAT_IMAGE' => $new_cat,    
			'CAT_NAME' => $sub['cat_name']) 
		);
	}
}

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $id . "' AND file_pin = '1' ORDER BY file_id";

if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query category info for parent categories', '', __LINE__, __FILE__, $sql);
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
 
    $newind = ''; // Initialize $newind variable
    if (time() - ($config['settings_newdays'] * 24 * 60 * 60) < $pin['file_time'])
    {
        $newind = '<img src="pafiledb/images/new.gif" border="0" alt="New file">';
    }
 
    $filelist .= '<tr> 
            <td class="row1" align="center" valign="middle"><a href="' . append_sid("dload.php?action=file&id=" . $pin['file_id']) . '" class="topictitle"><img src="pafiledb/images/pin.gif" border="0"></a></td>
            <td class="row1" valign="middle"><span class="gensmall"><a href="' . append_sid("dload.php?action=file&id=" . $pin['file_id']) . '" class="topictitle">' . $pin['file_name'] . '</a></span> ' . $newind . '<br><span class="genmed">' . $pin['file_desc'] . '</span></td>
            <td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">' . $date . '</td>
            <td class="row3" align="center" valign="middle"><span class="postdetails">' . $pin['file_dls'] . '</td>
            <td class="row2" align="center" valign="middle"><span class="postdetails">' . $rating . '/10</td>
            </tr>';
}

if ( isset($_GET['start']) || isset($_POST['start']) )
{
	$start = ( isset($_GET['start']) ) ? $_GET['start'] : $_POST['start'];
}

$start = isset($start) ? trim($start) : '';

if (empty($start)) 
{
	$start = 0;
}

if ( isset($_GET['sortby']) || isset($_POST['sortby']) )
{
	$sortby = ( isset($_GET['sortby']) ) ? $_GET['sortby'] : $_POST['sortby'];
}

if (empty($sortby)) 
{ 
	$sortby = 'name';
}

if ($sortby == 'name') 
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' AND file_catid = '" . $id . "' ORDER BY file_name ASC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by name', '', __LINE__, __FILE__, $sql);
	}
}

if ($sortby == 'date')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' AND file_catid = '" . $id . "' ORDER BY file_time DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by date', '', __LINE__, __FILE__, $sql);
	}
}

if ($sortby == 'downloads')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' AND file_catid = '" . $id . "' ORDER BY file_dls DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by number of downloads', '', __LINE__, __FILE__, $sql);
	}
}

if ($sortby == 'rating')
{
	$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_pin = '0' AND file_catid = '" . $id . "' ORDER BY (file_rating/(file_totalvotes)) DESC LIMIT " . $start . ",20";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Couldnt sort file by rating', '', __LINE__, __FILE__, $sql);
	}
}

$sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_catid = '" . $id . "' AND file_pin = '0'";

if ( !($result2 = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Couldnt Query number of files', '', __LINE__, __FILE__, $sql);
}	

$filesincat = $db->sql_numrows($result2);

if ($filesincat == 0) 
{
	$filesincat = 1;
}

/*NOT PINNED*/
while ($file = $db->sql_fetchrow($result)) 
{
	$date = create_date($board_config['default_dateformat'], $file['file_time'], $board_config['board_timezone']);

	$ntv = $file['file_totalvotes'] - 1;

	if ($file['file_rating'] == 0 or $ntv == 0) 
	{ 
		$rating = 0; 
	} 
	else 
	{
		$rating = round($file['file_rating']/$ntv, 2); 
	}

	if ($file['file_posticon'] == 'none' or $file['file_posticon'] == 'none.gif') 
	{
		$posticon = '&nbsp;';
	} 
	else 
	{
		$posticon = '<img src="pafiledb/icons/' . $file['file_posticon']. '" border="0">';
	}

	$newind = '';

	if (time() - ($config['settings_newdays'] * 24 * 60 * 60) < $file['file_time'])
	{
		$newind = '<img src="pafiledb/images/new.gif" border="0" alt="New file">';
	}

	$filelist .= '<tr>
	<td class="row1" align="center" valign="middle"><a href="' . append_sid("dload.php?action=file&id=" . $file['file_id']) . '" class="topictitle">' . $posticon . '</a></td>
	<td class="row1" valign="middle"><span class="topictitle"><a href="' . append_sid("dload.php?action=file&id=" . $file['file_id']) . '" class="topictitle">' . $file['file_name'] . '</a></span> ' . $newind . '<br><span class="genmed">' . $file['file_desc'] . '</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">' . $date . '</span></td>
	<td class="row3" align="center" valign="middle"><span class="postdetails">' . $file['file_dls'] . '</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">' . $rating . '/10</span></td>
	</tr>';
}

$numpages = ceil($filesincat / 20);

if ($start + 20 < $filesincat) 
{
	$newstart = $start + 20;

	$next = '<a href="' . append_sid("dload.php?action=category&id=" . $id . "&start=" . $newstart . "&sortby=" . $sortby) . '">' . $lang['Next'] . '</a>';
}

if ($start - 20 >= 0) 
{
	$newstart = $start - 20;

	$prev = '<a href="' . append_sid("dload.php?action=category&id=" . $id . "&start=" . $newstart . "&sortby=" . $sortby ). '">' . $lang['Prev'] . '</a>';
}

for ($i = 0; $i < $numpages; $i++) 
{
	$newstart = 20*$i;

	$pagenum = $i + 1;

	if (!isset($pages)) {
	    $pages = '';
	}
	
	if ($newstart == $start) 
	{
		$pages .= $pagenum . " ";
	}
	else 
	{
		$pages .= '<a href="' . append_sid("dload.php?action=category&id=" . $id . "&start=" . $newstart . "&sortby=" . $sortby) . '">' . $pagenum . '</a> ';
	}
}

$filelist = isset($filelist) ? trim($filelist) : '';

if (!empty($filelist)) 
{
	$template->assign_block_vars("filelist", array());

	$template->assign_vars(array(
		'S_ACTION_SORT' => append_sid("dload.php"),
		'L_RATING' => $lang['DlRating'],
		'L_DOWNLOADS' => $lang['Dls'],
		'L_DATE' => $lang['Date'],
		'L_NAME' => $lang['Name'],
		'FILELIST' => $filelist,
		'ID' => $id,
		'START' => $start,
		'L_SORTBY' => $lang['Sort_by'],
		'PREV' => $prev,    
		'L_GO' => $lang['Go'],
		'L_PAGENO' => $lang['Pagenums'],
		'PAGES' => $pages,
		'NEXT' => $next,
		'L_FILE' => $lang['File']) 
	);
}
else 
{    
	if (!$no_file_message)
	{
		$template->assign_block_vars("nofilelist", array());

		$template->assign_vars(array(
			'L_NO_FILES' => $lang['No_files'],
            'L_NO_FILES_CAT' => $lang['No_files_cat']) 
		);
	}
}

$template->assign_var_from_handle("ACTION_INCLUDE", "category_output");