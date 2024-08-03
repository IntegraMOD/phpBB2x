<?php
/***************************************************************************
 *                           admin_clear_cache.php
 *                            -------------------
 *   begin                : Thursday, April 29, 2004
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   website			  : http://phpbbintegramod.sourceforge.net
 *   email                : masterdavid@users.sourceforge.net
 *
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true);
}

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['IM_Portal']['Delete_Cache_Files'] = "$file";
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

include_once($phpbb_root_path . 'includes/lite.'.$phpEx);
$options = array(
    'cacheDir' => $phpbb_root_path . 'var_cache/',
);

$var_cache = new Cache_Lite($options);

$var_cache->clean();

$message = $lang['Cache_cleared'] . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

message_die(GENERAL_MESSAGE, $message);
?>

