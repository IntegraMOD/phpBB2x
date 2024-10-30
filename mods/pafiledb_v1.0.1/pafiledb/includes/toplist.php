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

$show = $config['settings_topnumber']; // How many files do you want to show on the list

$template->set_filenames(array(
	'toplist_output' => 'pa_toplist_body.tpl')
);

$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> -> <a href="' . append_sid("dload.php?action=toplist") . '" class="nav">' . $lang['Toplist'] . '</a></span>';

$template->assign_vars(array(
	'LOCBAR' => locbar($locbar))
);

if ( isset($HTTP_GET_VARS['list']) || isset($HTTP_POST_VARS['list']) )
{
	$list = ( isset($HTTP_GET_VARS['list']) ) ? $HTTP_GET_VARS['list'] : $HTTP_POST_VARS['list'];
}

switch ($list)
{
	case 'newest':
         $sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_time DESC LIMIT 0," . $show . " ";
         if ( !($result = $db->sql_query($sql)) )
         {
         	message_die(GENERAL_ERROR, 'Could not query database for latest downloads');
         }
         $title = $lang['Latest_downloads'];
	break;
	case 'downloads':
         $sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY file_dls DESC LIMIT 0," . $show . " ";
         if ( !($result = $db->sql_query($sql)) )
         {
         	message_die(GENERAL_ERROR, 'Could not query database for the most downloads');
         } 
         $title = $lang['Most_downloads'];
	break;
	case 'rating':
         $sql = "SELECT * FROM " . PA_FILES_TABLE . " ORDER BY (file_rating/(file_totalvotes)) DESC LIMIT 0," . $show . " ";
         if ( !($result = $db->sql_query($sql)) )
         {
         	message_die(GENERAL_ERROR, 'Could not query database for the most rated downloads');
         }  
         $title = $lang['Rated_downloads'];
	break;
	default:        
        $title = $lang['Select_list'];
        $template->assign_vars(array(
   			'NAME1' => $lang['By_date'],
   			'NAME2' => $lang['By_download'],
   			'NAME3' => $lang['By_rated'],
  			'LINK1' => append_sid('dload.php?action=toplist&list=newest'),
  			'LINK2' => append_sid('dload.php?action=toplist&list=downloads'),
  			'LINK3' => append_sid('dload.php?action=toplist&list=rating'),
        	'TITLE' => $title)
        );        
        $template->assign_block_vars('dlshow', array());
        $not = 1;    
	break;
}

$template->assign_vars(array(
	'TITLE' => $title)
);
if (!$not)
{
	$i = 1;
	while ($file = $db->sql_fetchrow($result)) 
	{   
		if ($list == 'newest')
		{
			$infoline = create_date($board_config['default_dateformat'], $file['file_time'], $board_config['board_timezone']);
		}

		if ($list == 'downloads')
		{
			$infoline = $file['file_dls'] . $lang['Dls']; 
		}

		if ($list == "rating")
		{
			$ntv = $file['file_totalvotes'] - 1;
			$infoline = @round($file['file_rating']/$ntv,2) . "/10 - " . $ntv . $lang['Votes'];
		}

		$template->assign_block_vars('dlrow', array(
			'NUMBER' => $i,
			'FILELINK' => append_sid("dload.php?action=download&id=" . $file['file_id']),
			'FILENAME' => $file['file_name'],
			'INFO' => $infoline)
		);
        
		$i++;
	}
	$template->assign_block_vars('dlshow2', array());
}

$template->assign_var_from_handle("ACTION_INCLUDE", "toplist_output");

?>
