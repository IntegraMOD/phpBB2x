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
 
require "pafiledb/includes/mysql.php";
 
include($phpbb_root_path . 'pafiledb/includes/functions.'.$phpEx);
 
$config = pafiledb_config();
$action = ''; // Initialize $action variable
 
if ( isset($HTTP_GET_VARS['action']) || isset($HTTP_POST_VARS['action']) )
{
    $action = ( isset($HTTP_GET_VARS['action']) ) ? $HTTP_GET_VARS['action'] : $HTTP_POST_VARS['action'];
}
 
if ($action == 'download')
{
    include($phpbb_root_path . 'pafiledb/includes/download.'.$phpEx);
    exit();
}
 
$template->set_filenames(array(
    'download_output' => 'pa_download_body.tpl')
);
 
    $search_img = $images['pa_search'];
    $stats_img = $images['pa_stats'];
    $toplist_img = $images['pa_toplist'];
 
$template->assign_vars(array(
    'SEARCH_IMG' => $search_img,
    'STATS_IMG' => $stats_img,
    'TOPLIST_IMG' => $toplist_img,
 
    'L_SEARCH' => $lang['Search'],
    'L_STATS' => $lang['Statistics'],
    'L_TOPLIST' => $lang['Toplist'],
    'DOWNLOAD' => $config['settings_dbname'],
    'U_TOPLIST' => append_sid("dload.php?action=toplist"),
    'U_PASEARCH' => append_sid("dload.php?action=search"),
    'U_PASTATS' => append_sid("dload.php?action=stats"))
);
 
$disable = isset($config['settings_disable']) ? $config['settings_disable'] : 0;
 
if( $userdata['user_level'] == ADMIN )
{
    $disable = 0;
}
 
if (!$disable)
{
    switch ($action) 
    {
        case 'category':
            include($phpbb_root_path . 'pafiledb/includes/category.'.$phpEx);
        break;
 
        case 'file':
            include($phpbb_root_path . 'pafiledb/includes/file.'.$phpEx); 
        break;
 
        case 'viewall':
            include($phpbb_root_path . 'pafiledb/includes/viewall.'.$phpEx); 
        break;
 
        case 'search':
            include($phpbb_root_path . 'pafiledb/includes/search.'.$phpEx); 
        break;
 
        case 'license':
            include($phpbb_root_path . 'pafiledb/includes/license.'.$phpEx); 
        break;
 
        case 'rate':
            include($phpbb_root_path . 'pafiledb/includes/rate.'.$phpEx); 
        break;
 
        case 'email':
            include($phpbb_root_path . 'pafiledb/includes/email.'.$phpEx); 
        break;
 
        case 'stats':
            include($phpbb_root_path . 'pafiledb/includes/stats.'.$phpEx);
        break;
 
        case 'toplist':
            include($phpbb_root_path . 'pafiledb/includes/toplist.'.$phpEx);
        break;
 
        default:
            include($phpbb_root_path . 'pafiledb/includes/main.'.$phpEx); 
        break;
    }
 
    $template->assign_vars(array(
        'JUMPMENU' => jumpmenu($HTTP_SERVER_VARS['REQUEST_URI'], 'jump', ''),
        'STYLE' => $board_config['default_style'])
    ); 
    $template->assign_var_from_handle('DOWNLOAD_OUTPUT', 'download_output');
}
else
{
    $message = $lang['isdisabled'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("index.php") . "\">", "</a>");
    message_die(GENERAL_MESSAGE, $message);        
}