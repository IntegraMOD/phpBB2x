<?php
/***************************************************************************
 *                                portal.php
 *                            -------------------
 *   begin                : Sunday, March 21, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website              : http://www.integramod.com
 *   email                : webmaster@integramod.com
 *
 *   note: removing the original copyright is illegal even you have modified
 *         the code.  Just append yours if you have modified it.
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
//
// Set up for phpBB integration.
//
if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true );
}
$phpbb_root_path = './';

//
// phpBB related files
//
include_once($phpbb_root_path . 'extension.inc');
include_once($phpbb_root_path . 'common.' . $phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);

if (file_exists('install_imp.php')) 
{
    message_die(GENERAL_MESSAGE, 'Please ensure the <b>IM Portal</b> Install file (portalinstall.php) is deleted');
}

define('PORTAL_INIT', true);
include($phpbb_root_path . 'includes/functions_portal.' . $phpEx);
portal_config_init($portal_config);
include_once($phpbb_root_path . 'includes/lite.'.$phpEx);
$options = array(
    'cacheDir' => $phpbb_root_path . 'var_cache/',
    'fileLocking' => $portal_config['md_cache_file_locking'],
    'writeControl' => $portal_config['md_cache_write_control'],
    'readControl' => $portal_config['md_cache_read_control'],
    'readControlType' => $portal_config['md_cache_read_type'],
    'fileNameProtection' => $portal_config['md_cache_filename_protect'],
    'automaticSerialization' => $portal_config['md_cache_serialize']
);
$var_cache = new Cache_Lite($options);

if(isset($_GET['page'])) 
{
    $layout = intval($_GET['page']);
} 
else 
{
    $layout = $portal_config['default_portal'];
}

if($portal_config['cache_enabled']) {
    $layout_row = $var_cache->get('lr' . strval($layout), 86400, 'layout');
}
if(!$layout_row) {
    $sql = "SELECT template, forum_wide, view, pgroup, pagetitle 
	FROM " . LAYOUT_TABLE . " 
	WHERE lid = '" . $layout . "'";
    if(!($layout_result = $db->sql_query($sql))) {
        message_die(CRITICAL_ERROR, "Could not query portal layout information", "", __LINE__, __FILE__, $sql);
    }
    $layout_row = $db->sql_fetchrow($layout_result);
    if(($layout_row['template'] != '') && $portal_config['cache_enabled']) {
        $var_cache->save($layout_row, 'lr' . strval($layout), 'layout');
    }
}
$layout_template = $layout_row['template'];
$layout_forum_wide_flag = ($layout_row['forum_wide']) ? false : true;

if ($userdata['user_id'] == ANONYMOUS) 
{
    $lview = in_array($layout_row['view'], array(0,1));
} 
else 
{
    switch($userdata['user_level']) 
    {
        case USER:
            $lview = in_array($layout_row['view'], array(0,2));
            break;
        case MOD:
            $lview = in_array($layout_row['view'], array(0,2,3));
            break;
        case ADMIN:
            $lview = in_array($layout_row['view'], array(0,1,2,3,4));
            break;
        default:
            $lview = in_array($layout_row['view'], array(0));
    }
}

$not_group_allowed = false;
if(!empty($layout_row['pgroup'])) {
    $not_group_allowed = true;
    $group_content = explode(",", $layout_row['pgroup']);
    for ($i = 0; $i < count($group_content); $i++) {
        if(in_array(intval($group_content[$i]), portal_groups($userdata['user_id']))) {
            $not_group_allowed = false;
        }
    }
}

if(($layout_template == '') || (!$lview) || ($not_group_allowed)) 
{
    $layout = $portal_config['default_portal'];
    if($portal_config['cache_enabled']) 
    {
        $layout_row = $var_cache->get('lr' . strval($layout), 86400, 'layout');
    }
    if(!$layout_row) 
    {
        $sql = "SELECT template, forum_wide FROM " . LAYOUT_TABLE . " WHERE lid = '" . $layout . "'";
        if(!($layout_result = $db->sql_query($sql))) 
        {
            message_die(CRITICAL_ERROR, "Could not query portal layout information", "", __LINE__, __FILE__, $sql);
        }
        $layout_row = $db->sql_fetchrow($layout_result);
        if($portal_config['cache_enabled']) 
        {
            $var_cache->save($layout_row, 'lr' . strval($layout), 'layout');
        }
    }
    $layout_template = $layout_row['template'];
    $layout_forum_wide_flag = ($layout_row['forum_wide']) ? false : true;
}

//
// Start output of page
//
$page_title = $layout_row['pagetitle'];
define('SHOW_ONLINE', true);
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

// Tell the template class which template to use.
$template->set_filenames(array( 'body' => 'layout/' . $layout_template ));

//
// Start Blocks
//
portal_parse_blocks($layout);

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

