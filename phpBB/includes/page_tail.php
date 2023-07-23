<?php
/***************************************************************************
 *                              page_tail.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id$
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

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

global $do_gzip_compress;

//
// Show the overall footer.
//
$userdata['user_level'] = (isset($userdata['user_level'])) ? $userdata['user_level'] : '';

$admin_link = ( $userdata['user_level'] == ADMIN ) ? '<a href="admin/index.' . $phpEx . '?sid=' . $userdata['session_id'] . '&amp;p_sid=' . $userdata['priv_session_id'] . '">' . $lang['Admin_panel'] . '</a><br /><br />' : '';

$template->set_filenames(array(
	'overall_footer' => ( empty($gen_simple_header) ) ? 'overall_footer.tpl' : 'simple_footer.tpl')
);

$template->assign_vars(array(
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : ((isset($lang['TRANSLATION'])) ? $lang['TRANSLATION'] : ''),
	'ADMIN_LINK' => $admin_link)
);

$template->pparse('overall_footer');

//
// Close our DB connection.
//
$db->sql_close();

/* Un-comment the line below to restrict Admins only to view page generation info */

//if( ($userdata['session_logged_in']) and ($userdata['user_level'] == ADMIN) )
//{
	$gzip_text = ($board_config['gzip_compress']) ? 'GZIP enabled' : 'GZIP disabled';

	$debug_text = (DEBUG == 1) ? 'Debug on' : 'Debug off';

	$excuted_queries = $db->num_queries;

	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$endtime = $mtime;

	$gentime = round(($endtime - $starttime), 4);

	$sql_time = round($db->sql_time, 4);

	$sql_part = round($sql_time / $gentime * 100);
	$php_part = 100 - $sql_part;

//}*/
if( defined('DEBUG') && DEBUG == "1")
{
	$debug_out = '<div class="gensmall" style="text-align: center; margin-bottom:10px;">[Page generation time: '. $gentime .'s (PHP: '. $php_part .'% | SQL: '. $sql_part .'%) | SQL queries: '. $excuted_queries .' | '. $gzip_text .' | '. $debug_text .']</div>';
}
else
{
	$debug_out = '<br />';
}

echo $debug_out;

//
// Compress buffered output if required and send to browser
//
if ( $do_gzip_compress )
{
	//
	// Borrowed from php.net!
	//
	$gzip_contents = ob_get_contents();
	ob_end_clean();

	$gzip_size = strlen($gzip_contents);
	$gzip_crc = crc32($gzip_contents);

	$gzip_contents = gzcompress($gzip_contents, 9);
	$gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);

	echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
	echo $gzip_contents;
	echo pack('V', $gzip_crc);
	echo pack('V', $gzip_size);
}

exit;

?>