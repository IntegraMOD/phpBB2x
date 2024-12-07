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

if ( isset($HTTP_GET_VARS['search']) || isset($HTTP_POST_VARS['search']) )
{
	$search = ( isset($HTTP_GET_VARS['search']) ) ? $HTTP_GET_VARS['search'] : $HTTP_POST_VARS['search'];
}

if ( isset($HTTP_GET_VARS['string']) || isset($HTTP_POST_VARS['string']) )
{
	$string = ( isset($HTTP_GET_VARS['string']) ) ? $HTTP_GET_VARS['string'] : $HTTP_POST_VARS['string'];
}

if ($search == 'do')
{
	$template->set_filenames(array(
		'search_output' => 'pa_search_result.tpl')
	);

	$string = strip_tags($string, '<a><b><i><u>');

	$locbar = '<span class="nav"><a href="' . append_sid($config[settings_homeurl]) . '" class="nav">' . $config[settings_sitename] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config[settings_dbname] . '</a> -> <a href="' . append_sid("dload.php?action=search") . '" class="nav">' . $lang['Search'] . '</a> -> ' . $lang['Results'] . ' ' . $string . '</span>';

	$template->assign_vars(array(
		'LOCBAR' => locbar($locbar))
	);
	
    $sql = "SELECT * FROM " . PA_FILES_TABLE . " WHERE file_name LIKE '%" . $string . "%' OR file_desc LIKE '%" . $string . "%' OR file_creator LIKE '%" . $string . "%' OR file_longdesc LIKE '%" . $string . "%' OR file_version LIKE '%" . $string . "%'";

    if ( !($result = $db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, 'Couldnt Query Search info', '', __LINE__, __FILE__, $sql);
    }

	$numhits = $db->sql_numrows($result);

    if ($numhits == 0)
    {
        $template->assign_vars(array(
            "META" => '<meta http-equiv="refresh" content="3;url=' . append_sid("dload.php?action=search") . '">')
        );
        $search_nothing = $lang['No_matches'] . ' <b>' . $string . '</b>';
        $message = $search_nothing . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("dload.php?action=search") . "\">", "</a>");
        message_die(GENERAL_MESSAGE, $message);
    }
    else
    {
        $template->assign_block_vars("search_done", array());    
        $template->assign_vars(array(
            'L_SEARCH' => $lang['Search'],
            'L_RESULTS' => $lang['Results'],
            'L_NO_MATCHES' => $lang['No_matches'],
            'L_MATCHES' => $lang['Matches'],

            'HITS' => $numhits,       
            'SVALUE' => $string)
        );
		
        while ($r = $db->sql_fetchrow($result))
        {
            if ($r['file_posticon'] == 'none' or $r['file_posticon'] == 'none.gif' or empty($r['file_posticon']))
            {
                $posticon = '&nbsp;';
            }
            else 
            {
                $posticon = '<img src="pafiledb/icons/' . $r['file_posticon'] . '">';
            }
            $template->assign_block_vars("search_result", array(
                'ID' => $r['file_id'],
                'ICON' => $posticon,
                'NAME' => $r['file_name'])
            );        
        }
    }
}

if (empty ($search))
{
    $template->set_filenames(array(
        'search_output' => 'pa_search_body.tpl')
    );

	$locbar = '<span class="nav"><a href="' . append_sid($config['settings_homeurl']) . '" class="nav">' . $config['settings_sitename'] . '</a> -> <a href="' . append_sid("dload.php") . '" class="nav">' . $config['settings_dbname'] . '</a> ->  <a href="' . append_sid("dload.php?action=search") . '" class="nav">' . $lang['Search'] . '</a></span>';

	$template->assign_vars(array(
		'S_SEARCH_ACTION' => append_sid("dload.php"),    
		'L_SEARCH' => $lang['Search'],
		'L_SEARCH_FOR' => $lang['Search_for'],
		'LOCBAR' => locbar($locbar))
	);         
}

$template->assign_var_from_handle("ACTION_INCLUDE", "search_output");

?>
