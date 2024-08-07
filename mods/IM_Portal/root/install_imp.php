<?php 
/*************************************************************************** 
 *                              install_imp.php 
 *   begin                : Friday, June 14, 2024
 *   copyright            : (C) 2004 masterdavid - Ronald John David
 *   update               : Helter
 *   website              : http://www.integramod.com
 *   email                : helter@integramod.com
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
$phpbb_root_path = './';

$i = 0;
while ( !file_exists($phpbb_root_path . 'extension.inc') && ($i++ < 4) )
{
	$phpbb_root_path .= '../';
}
if ( $i > 4 )
{
	message_die(GENERAL_MESSAGE, 'Unable to find extension.inc, terminating. Please move this file into your main/"root" phpbb directory and try again.'); 
}

include($phpbb_root_path . 'extension.inc'); 
include($phpbb_root_path . 'common.'.$phpEx); 

// 
// Start session management 
// 
$userdata = session_pagestart($user_ip, PAGE_INDEX); 
init_userprefs($userdata); 
// 
// End session management 
// 

if( !$userdata['session_logged_in'] ) 
{ 
	redirect(append_sid("login.$phpEx?redirect=sql_install.$phpEx", true));
} 

if( $userdata['user_level'] != ADMIN ) 
{ 
	message_die(GENERAL_MESSAGE, 'You are not authorised to access this page'); 
} 

$page_title = 'IM Portal Installation v:1.3.3'; 
include($phpbb_root_path . 'includes/page_header.'.$phpEx); 

echo '
<table width="100%" cellspacing="1" cellpadding="2" border="0" class="forumline">
	<tr>
	  <th class="thHead">Installing IM Portal Database Updates</th>
	</tr>
	<tr>
	  <td>
		<span class="genmed">
		<ul type="square">';

$current_time = time();

$sql = array (
  0 => 'DROP TABLE IF EXISTS phpbb_block_position',
  1 => 'CREATE TABLE phpbb_block_position (
  bpid int(10) NOT NULL auto_increment,
  pkey varchar(30) NOT NULL default \'\',
  bposition char(1) NOT NULL default \'\',
  layout int(10) NOT NULL default \'1\',
  PRIMARY KEY  (bpid)
)',
  2 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(1, \'header\', \'@\', 0)',
  3 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(2, \'footer\', \'*\', 0)',
  4 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(5, \'center\', \'c\', 2)',
  5 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(21, \'center\', \'c\', 1)',
  6 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(22, \'right\', \'r\', 1)',
  7 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(24, \'center\', \'c\', 3)',
  8 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(25, \'left\', \'l\', 4)',
  9 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(26, \'center\', \'c\', 4)',
 10 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(27, \'right\', \'r\', 4)',
 11 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(28, \'toprow\', \'t\', 5)',
 12 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(29, \'column1\', \'c\', 5)',
 13 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(30, \'column2\', \'d\', 5)',
 14 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(31, \'bottomrow\', \'b\', 5)',
 15 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(32, \'toprow\', \'t\', 6)',
 16 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(33, \'left\', \'l\', 6)',
 17 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(34, \'center\', \'c\', 6)',
 18 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(35, \'right\', \'r\', 6)',
 19 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(36, \'bottomrow\', \'b\', 6)',
 20 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(37, \'col_1\', \'1\', 7)',
 21 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(38, \'col_2\', \'2\', 7)',
 22 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(39, \'col_3\', \'3\', 7)',
 23 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(40, \'col_4\', \'4\', 7)',
 24 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(41, \'col_5\', \'5\', 7)',
 25 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES(42, \'col_6\', \'6\', 7)',
 26 => 'DROP TABLE IF EXISTS phpbb_block_variable',
 27 => 'CREATE TABLE phpbb_block_variable (
  bvid int(10) NOT NULL auto_increment,
  label varchar(30) NOT NULL default \'\',
  sub_label varchar(255) default NULL,
  config_name varchar(30) NOT NULL default \'\',
  field_options varchar(255) default NULL,
  field_values varchar(255) default NULL,
  `type` tinyint(1) NOT NULL default \'0\',
  block varchar(255) default NULL,
  PRIMARY KEY  (config_name),
  KEY bvid (bvid)
)',
 28 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (1, \'Number of news on portal\', \'\', \'md_num_news\', \'\', \'\', 1, \'forum\')',
 29 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (2, \'Length of news\', \'Number of characters displayed\', \'md_news_length\', \'\', \'\', 1, \'forum\')',
 30 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (3, \'Poll Bar Length\', \'decrease/increase the value for 1 vote bar length\', \'md_poll_bar_length\', \'\', \'\', 1, \'poll\')',
 31 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (4, \'News Forum ID(s)\', \'comma delimited\', \'md_news_forum_id\', \'\', \'\', 1, \'forum\')',
 32 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (5, \'Poll Forum ID(s)\', \'comma delimited\', \'md_poll_forum_id\', \'\', \'\', 1, \'poll\')',
 33 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (6, \'Number of recent topics\', \'number of topics displayed\', \'md_num_recent_topics\', \'\', \'\', 1, \'recent_topics\')',
 34 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (7, \'Approve MOD installed?\', \'tick if Approve MOD is installed\', \'md_approve_mod_installed\', \'\', \'\', 4, \'recent_topics\')',
 35 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (8, \'Recent Topics Style\', \'choose static display or scrolling display\', \'md_recent_topics_style\', \'Scroll,Static\', \'1,0\', 3, \'recent_topics\')',
 36 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (9, \'Search option text\', \'Text displayed as the default option\', \'md_search_option_text\', \'\', \'\', 1, \'search\')',
 37 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (10, \'Header width\', \'Width of forum-wide left column in pixels\', \'header_width\', \'\', \'\', 1, \'@Portal Config\')',
 38 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (11, \'Footer width\', \'Width of forum-wide right column in pixels\', \'footer_width\', \'\', \'\', 1, \'@Portal Config\')',
 39 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (12, \'Cache File Locking\', \'can avoid cache corruption under bad circumstances\', \'md_cache_file_locking\', \'\', \'\', 4, \'@Portal Config\')',
 40 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (13, \'Cache Write Control\', \'detect some corrupt cache files\', \'md_cache_write_control\', \'\', \'\', 4, \'@Portal Config\')',
 41 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (14, \'Cache Read Control\', \'a control key is embeded in cache file\', \'md_cache_read_control\', \'\', \'\', 4, \'@Portal Config\')',
 42 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (15, \'Cache Read Control Type\', \'Type of read control (only if read control is enabled)\', \'md_cache_read_type\', \'md5 hash control, crc32 hash control, length only test\', \'md5,crc32,strlen\', 2, \'@Portal Config\')',
 43 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (16, \'Cache File Name Protection\', \'\', \'md_cache_filename_protect\', \'\', \'\', 4, \'@Portal Config\')',
 44 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (17, \'Cache Automatic Serialization\', \'Enable / disable automatic serialization\', \'md_cache_serialize\', \'\', \'\', 4, \'@Portal Config\')',
 45 => 'DROP TABLE IF EXISTS phpbb_blocks',
 46 => 'CREATE TABLE phpbb_blocks (
  bid int(10) NOT NULL auto_increment,
  title varchar(60) NOT NULL default \'\',
  title_image VARCHAR(255) NOT NULL default \'\',
  content text NOT NULL,
  bposition char(1) NOT NULL default \'\',
  weight int(10) NOT NULL default \'1\',
  active tinyint(1) NOT NULL default \'1\',
  blockfile varchar(255) NOT NULL default \'\',
  view tinyint(1) NOT NULL default \'0\',
  layout int(10) NOT NULL default \'1\',
  `cache` tinyint(1) NOT NULL default \'0\',
  cache_time int(10) NOT NULL default \'0\',
  block_bbcode_uid varchar(10) default NULL,
  `type` tinyint(1) NOT NULL default \'1\',
  border tinyint(1) NOT NULL default \'1\',
  titlebar tinyint(1) NOT NULL default \'1\',
  openclose tinyint(1) NOT NULL default \'1\',
  background tinyint(1) NOT NULL default \'1\',
  `local` tinyint(1) NOT NULL default \'0\',
  pgroup tinytext NOT NULL,
  PRIMARY KEY  (bid)
)',
 47 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (1, \'Select Style\', \'\', \'@\', 1, 1, \'blocks_imp_style_select\', 0, 0, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'3\')',
 48 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (2, \'Board Navigation\', \'<table width="100%" cellpadding="0" cellspacing="1" border="0">\\r\\n<tr>\\r\\n<td align="left"><span class="genmed" style="line-height: 150%">\\r\\n<a href="portal.php">Home</a><br />\\r\\n<a href="index.php">Forum</a><br />\\r\\n<a href="memberlist.php">Memberlist</a><br />\\r\\n<a href="faq.php">FAQ</a><br />\\r\\n<a href="search.php">Search</a><br />\\r\\n</span></td>\\r\\n</tr>\\r\\n</table>\', \'@\', 1, 1, \'\', 0, 0, 0, 0, \'\', 0, 1, 1, 0, 1, 0, \'\')',
 49 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (3, \'Statistics\', \'\', \'r\', 3, 1, \'blocks_imp_statistics\', 0, 1, 1, 43200, \'\', 1, 1, 1, 1, 1, 0, \'5\')',
 50 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (4, \'Links\', \'<table width="100%" cellpadding="0" cellspacing="1" border="0">\\r\\n<tr>\\r\\n<td class="row1" align="center"><a href="http://phpbbintegramod.sourceforge.net" target="_blank" class="gen">IntegraMOD</a></td>\\r\\n</tr>\\r\\n</table>\', \'r\', 2, 1, \'\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
 51 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (5, \'Welcome to IM Portal\', \'<table cellspacing="0" cellpadding="0" border="0" width="100%">\\r\\n<tr>\\r\\n<td align="center"><span class="gen">\\r\\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href="http://www.integramod.com">IntegraMOD</a>\\r\\n</span>\\r\\n</td>\\r\\n</tr>\\r\\n</table>\', \'c\', 2, 1, \'\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
 52 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (6, \'News\', \'\', \'c\', 3, 1, \'blocks_imp_forum\', 0, 1, 0, 0, \'\', 1, 1, 1, 1, 1, 0, \'\')',
 53 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (7, \'User Block\', \'\', \'@\', 2, 1, \'blocks_imp_user_block\', 0, 0, 0, 0, \'\', 1, 1, 1, 1, 1, 0, \'\')',
 54 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (8, \'Who is Online\', \'\', \'@\', 3, 1, \'blocks_imp_online_users\', 0, 0, 1, 300, \'\', 1, 1, 1, 1, 1, 0, \'\')',
 55 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (9, \'Poll\', \'hkghk\', \'r\', 4, 1, \'blocks_imp_poll\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
 56 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (10, \'Recent Topics\', \'\', \'r\', 1, 1, \'blocks_imp_recent_topics\', 0, 1, 1, 300, \'\', 1, 1, 1, 1, 1, 0, \'\')',
 57 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (11, \'Search\', \'\', \'@\', 4, 1, \'blocks_imp_search\', 0, 0, 1, 1000000000, \'\', 1, 1, 1, 1, 1, 0, \'\')',
 58 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (12, \'sample block\', \'[size=12:81ef439b94][b:81ef439b94][color=red:81ef439b94]This is just a sample block[/color:81ef439b94][/b:81ef439b94] showing the capabilities of [b:81ef439b94][color=green:81ef439b94]IM Portal[/color:81ef439b94][/b:81ef439b94] with the use of BBCodes.[/size:81ef439b94] \\r\\n\\r\\n :lol:  8)  :o  :( \\r\\n[quote:81ef439b94]This version of IM Portal uses a multi-page feature to create more than one page for your portal.  Try visiting this address: [b:81ef439b94]http://www.myforum.com/portal.php?page=2[/b:81ef439b94]. Replace www.myforum.com with the correct location[/quote:81ef439b94]The block below (Welcome to IM Portal) is an example of a block using HTML.\', \'c\', 1, 1, \'\', 0, 1, 0, 0, \'81ef439b94\', 1, 1, 1, 1, 1, 0, \'\')',
 59 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (13, \'Sample 1\', \'This page shows an example of the multi-page feature of IM Portal.  This page also displays the forum-wide blocks.\\r\\n\\r\\n[code:1:82bdfbd9b5]Try to visit&#58; http&#58;//www.myforum.com/portal.php?page=3[/code:1:82bdfbd9b5]\', \'c\', 1, 1, \'\', 0, 2, 0, 0, \'82bdfbd9b5\', 1, 1, 1, 1, 1, 0, \'\')',
 60 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (14, \'Sample 6\', \'This block also shows the [b:0c6a883c90][color=orange:0c6a883c90]multi-page feature of IM Portal[/color:0c6a883c90][/b:0c6a883c90].  But this time, it does not display the forum-wide blocks.\\r\\n\\r\\nYou can now proceed to the [b:0c6a883c90][color=blue:0c6a883c90]ACP[/color:0c6a883c90][/b:0c6a883c90] and delete the sample layouts/pages in the layout management page.\', \'c\', 1, 1, \'\', 0, 3, 0, 0, \'0c6a883c90\', 1, 1, 1, 1, 1, 0, \'\')',
 61 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (15, \'News\', \'\', \'c\', 4, 1, \'blocks_imp_forum\', 0, 3, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
 62 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (16, \'Sample 2\', \'This is the new feature of IM Portal which enables a block with the following options:[list:2377d30f6a][*:2377d30f6a]with or without titlebar\\r\\n[*:2377d30f6a]with or without border\\r\\n[*:2377d30f6a]with or without background[/list:u:2377d30f6a]\\r\\nThis block is without a titlebar, border and background\', \'c\', 2, 1, \'\', 0, 2, 0, 0, \'2377d30f6a\', 1, 0, 0, 0, 0, 0, \'\')',
 63 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (17, \'Sample 3\', \'Without titlebar only  :o\', \'c\', 3, 1, \'\', 0, 2, 0, 0, \'7e13fbbacc\', 1, 1, 0, 1, 1, 0, \'\')',
 64 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (18, \'Sample 4\', \'Without background only  :wink:\', \'c\', 4, 1, \'\', 0, 2, 0, 0, \'5b8176554c\', 1, 1, 1, 1, 0, 0, \'\')',
 65 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (19, \'Sample 5\', \'Without border  :arrow:  :idea:  :arrow:\', \'c\', 5, 1, \'\', 0, 2, 0, 0, \'ed31156971\', 1, 0, 1, 1, 1, 0, \'\')',
 66 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (20, \'Sample 7\', \'Take note that pages and blocks can have different permissions.  There are 2 kinds of permissions to set, per user level and per userpgroup.  It is allowed to mix permissions but it is wise to set the user level to registered when userpgroup are used (e.g. making a page only accessible for a specific usergroup)  :wink:\', \'c\', 2, 1, \'\', 0, 3, 0, 0, \'16703bc74c\', 1, 1, 0, 1, 0, 0, \'\')',
 67 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (21, \'Sample 8\', \'To support localization for IM Portal, titlebars can also be localized so titles being displayed, instead of being retrieved from the database will be retrieved from the language files.  This only applies for those blocks which has a language file.  :shock:  8)\', \'c\', 3, 1, \'\', 0, 3, 0, 0, \'48d2dd24ac\', 1, 0, 1, 1, 0, 0, \'\')',
 68 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (22, \'Sample 9\', \'This is a sample block with the open/close button feature switched off\\r\\n\\r\\n :D  8)  8)  :lol:  :wink:\', \'c\', 5, 1, \'\', 0, 3, 0, 0, \'edaa61b06b\', 1, 1, 1, 0, 1, 0, \'\')',
 69 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (23, \'Board Navigation\', \'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php\">Home</a><br />\r\n<a href=\"index.php\">Forum</a><br />\r\n<a href=\"memberlist.php\">Memberlist</a><br />\r\n<a href=\"faq.php\">FAQ</a><br />\r\n<a href=\"search.php\">Search</a><br />\r\n</span></td>\r\n</tr>\r\n</table>\', \'l\', 1, 1, \'\', 0, 4, 1, 15000, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 70 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (24, \'Welcome\', \'<table>\r\n<tr>\r\n<td><span>\r\nWelcome to IM Portal<br><br>For questions, comments and suggestions, please visit <a>IntegraMOD</a>\r\n</span>\r\n</td>\r\n</tr>\r\n</table>\', \'c\', 1, 1, \'\', 0, 4, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 71 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (25, \'User Info\', \'\', \'r\', 1, 1, \'blocks_imp_user_block\', 0, 4, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 72 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (26, \'Sample Pages\', \'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php?page=2\">Sample 1</a><br />\r\n<a href=\"portal.php?page=3\">Sample 2</a><br />\r\n<a href=\"portal.php?page=4\">3 Colunm</a><br />\r\n<a href=\"portal.php?page=5\">4 Colunm</a><br />\r\n<a href=\"portal.php?page=6\">5 Colunm</a><br />\r\n<a href=\"portal.php?page=7\">6 Colunm</a><br />\r\n</span></td>\r\n</tr>\r\n</table>\', \'@\', 3, 1, \'\', 0, 0, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 73 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (27, \'Sample Pages\', \'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php?page=2\">Sample 1</a><br />\r\n<a href=\"portal.php?page=3\">Sample 2</a><br />\r\n<a href=\"portal.php?page=4\"><b>3 Colunm</b></a><br />\r\n<a href=\"portal.php?page=5\">4 Colunm</a><br />\r\n<a href=\"portal.php?page=6\">5 Colunm</a><br />\r\n<a href=\"portal.php?page=7\">6 Colunm</a><br />\r\n</span></td>\r\n</tr>\r\n</table>\', \'l\', 2, 1, \'\', 0, 4, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 74 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (28, \'Sample Pages\', \'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php?page=2\">Sample 1</a><br />\r\n<a href=\"portal.php?page=3\">Sample 2</a><br />\r\n<a href=\"portal.php?page=4\">3 Colunm</a><br />\r\n<a href=\"portal.php?page=5\"><b>4 Colunm</b></a><br />\r\n<a href=\"portal.php?page=6\">5 Colunm</a><br />\r\n<a href=\"portal.php?page=7\">6 Colunm</a><br />\r\n</span></td>\r\n</tr>\r\n</table>\', \'c\', 2, 1, \'\', 0, 5, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 75 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (29, \'Board Navigation\', \'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php\">Home</a><br />\r\n<a href=\"index.php\">Forum</a><br />\r\n<a href=\"memberlist.php\">Memberlist</a><br />\r\n<a href=\"faq.php\">FAQ</a><br />\r\n<a href=\"search.php\">Search</a><br />\r\n</span></td>\r\n</tr>\r\n</table>\', \'c\', 1, 1, \'\', 0, 5, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 76 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (30, \'Welcome to IM Portal\', \'<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n<tr>\r\n<td align=\"center\"><span class=\"gen\">\r\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href=\"http://www.integramod.com\">IntegraMOD</a>\r\n</span>\r\n</td>\r\n</tr>\r\n</table>\', \'t\', 1, 1, \'\', 0, 5, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 77 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (31, \'User Block\', \'\', \'d\', 1, 1, \'blocks_imp_user_block\', 0, 5, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 78 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, pgroup) VALUES (32, \'IM Portal Stats\', \'\', \'b\', 1, 1, \'blocks_imp_statistics\', 0, 5, 0, 0, \'\', 0, 1, 1, 1, 1, 1, \'\')',
 79 => 'DROP TABLE IF EXISTS phpbb_layout',
 80 => 'CREATE TABLE phpbb_layout (
  lid int(10) unsigned NOT NULL auto_increment,
  name varchar(100) NOT NULL default \'\',
  template varchar(100) NOT NULL default \'\',
  forum_wide tinyint(1) NOT NULL default \'1\',
  page_collapse tinyint(1) NOT NULL default \'0\',
  view tinyint(1) NOT NULL default \'0\',
  pgroup tinytext NOT NULL,
  pagetitle varchar(100) NOT NULL default \'Home\',
  PRIMARY KEY  (lid)
)',
 81 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(1, \'IM Portal Default\', \'portal_body.tpl\', 1, 0, 0, \'\', \'IM Portal Default\')',
 82 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(2, \'Sample 1\', \'layout1.tpl\', 1, 0, 0, \'\', \'Sample 1\')',
 83 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(3, \'Sample 2\', \'layout1.tpl\', 0, 0, 0, \'\', \'Sample 2\')',
 84 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(4, \'3col\', \'3_column.tpl\', 0, 1, 0, \'\', \'3 Column\')',
 85 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(5, \'4col\', \'4_column.tpl\', 0, 1, 0, \'\', \'4 column\')',
 86 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(6, \'5col\', \'5_column.tpl\', 0, 1, 0, \'\', \'5 column\')',
 87 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, pgroup, pagetitle) VALUES(7, \'6col\', \'6_column.tpl\', 0, 1, 0, \'\', \'6 Column\')',
 88 => 'DROP TABLE IF EXISTS phpbb_portal_config',
 89 => 'CREATE TABLE phpbb_portal_config (
  id int(10) unsigned NOT NULL auto_increment,
  config_name varchar(255) NOT NULL default \'\',
  config_value varchar(255) NOT NULL default \'\',
  PRIMARY KEY  (id)
)',
 90 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (1, \'default_portal\', \'1\')',
 91 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (2, \'portal_header\', \'1\')',
 92 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (3, \'portal_tail\', \'0\')',
 93 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (4, \'cache_enabled\', \'1\')',
 94 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (5, \'md_news_length\', \'250\')',
 95 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (6, \'md_news_forum_id\', \'1\')',
 96 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (7, \'md_num_news\', \'5\')',
 97 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (8, \'md_search_option_text\', \'IM Portal\')',
 98 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (9, \'md_num_recent_topics\', \'10\')',
 99 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (10, \'md_approve_mod_installed\', \'0\')',
100 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (11, \'md_recent_topics_style\', \'1\')',
101 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (12, \'md_poll_bar_length\', \'40\')',
102 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (13, \'md_poll_forum_id\', \'1\')',
103 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (14, \'header_width\', \'150\')',
104 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (15, \'footer_width\', \'150\')',
105 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (16, \'md_cache_file_locking\', \'1\')',
106 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (17, \'md_cache_write_control\', \'1\')',
107 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (18, \'md_cache_read_control\', \'1\')',
108 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (19, \'md_cache_read_type\', \'md5\')',
109 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (20, \'md_cache_filename_protect\', \'0\')',
110 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (21, \'md_cache_serialize\', \'1\')',
111 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (22, \'collapse_layout\', \'1\')',
112 => 'DROP TABLE IF EXISTS phpbb_news',
113 => 'CREATE TABLE phpbb_news (
	news_id mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	news_category VARCHAR(70) NOT NULL ,
	news_image VARCHAR(70) NOT NULL ,
	PRIMARY KEY (news_id)
)',
114 => 'DROP TABLE IF EXISTS phpbb_themes_select_info',
115 => 'CREATE TABLE phpbb_themes_select_info (
	themes_id mediumint(8) unsigned NOT NULL auto_increment,
	style_author varchar(50) NOT NULL default \'\',
	style_version varchar(10) NOT NULL default \'\',
	style_date int(11) NOT NULL default \'0\',
	style_website varchar(100) NOT NULL default \'\',
	style_views mediumint(8) unsigned NOT NULL default \'0\',
	style_dlurl varchar(100) NOT NULL default \'\',
	style_dls mediumint(8) unsigned NOT NULL default \'0\',
	style_loaclurl varchar(100) NOT NULL default \'\',
	style_ludls mediumint(8) unsigned NOT NULL default \'0\',
	PRIMARY KEY (themes_id)
)',
116 => 'ALTER TABLE phpbb_topics ADD news_id INT UNSIGNED DEFAULT \'0\' NOT NULL',
117 => 'ALTER TABLE phpbb_topics ADD INDEX (news_id)',
118 => 'ALTER TABLE phpbb_forums ADD auth_news TINYINT(2) DEFAULT \'2\' NOT NULL',
119 => 'ALTER TABLE phpbb_auth_access ADD auth_news TINYINT(1) DEFAULT \'0\' NOT NULL',
120 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'allow_news\', \'1\' )',
121 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_item_trim\', \'0\' )',
122 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_title_trim\', \'0\' )',
123 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_item_num\', \'10\' )',
124 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_path\', \'images/news\' )',
125 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'allow_rss\', \'1\' )',
126 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_desc\', \'\' )',
127 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_language\', \'en_us\' )',
128 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_ttl\', \'60\' )',
129 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_cat\', \'\' )',
130 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_image\', \'\' )',
131 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_image_desc\', \'\' )',
132 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_item_count\', \'15\' )',
133 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_rss_show_abstract\', \'1\' )',
134 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_base_url\', \'\' )',
135 => 'INSERT INTO phpbb_config ( config_name , config_value ) VALUES ( \'news_index_file\', \'news_index.php\' )',
);

@set_time_limit(0);
if(!@file_exists('config.php')) die('config.php not found. make sure you have uploaded file to your forum directory.');
include('config.php');
$connection = mysqli_connect($dbhost, $dbuser, $dbpasswd) or die("Cannot connect");
/*if(!$connection) die('Cannot connect: ' . mysqli_connect_error($connection));*/
$res = mysqli_select_db($connection, $dbname) or die("cannot select DB");
/*if(!$res) die('Cannot select database "' . $dbname . '": ' . @mysqli_error());*/
for($i=0; $i<count($sql); $i++)
{
 if($table_prefix !== 'phpbb_') $sql[$i] = preg_replace('/phpbb_/', $table_prefix, $sql[$i]);
 $res = mysqli_query($connection, $sql[$i]);
 if(!$res) { echo 'error in query ', ($i + 1), ': ', mysqli_error(), '<br />'; }
}
echo 'done (', count($sql), ' queries).';


foreach ( $sql AS $query ) 
{
	if ( !($result = $db->sql_query($query)) )
	{ 
		$error = $db->sql_error();
		echo '<li>' . nl2br($query) . '<br /> !!! <font color="#FF0000"><b>Error:</b></font> ' . $error['message'] . '</li><br />';
		$errored = TRUE;
	} 
	else 
	{ 
		echo '<li>' . nl2br($query) . '<br /> +++ <font color="#00AA00"><b>Successfull</b></font></li><br />';
	} 
}

$forum_url = append_sid($phpbb_root_path . "index.$phpEx");
$phpbb_url = "http://integramod.com/forum/viewforum.php?f=32";
$my_url = "http://www.integramod.com/";

echo '
		</ul>
		</span>
	  </td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center"><span class="gen">Completed ' . ( ( $errored ) ? 'with' : 'without' ) . ' errors!</span></td>
	</tr>
</table>

<br />
<br />

<table width="100%" cellspacing="1" cellpadding="2" border="0" class="forumline">
  <tr>
    <th class="thHead">SQL Installation complete</th>
  </tr>
  <tr>
    <td class="row1">
      <span class="genmed">Please delete this file (install_imp.' . $phpEx . ').<br />
      If you have any problems, please visit <a href="' . $phpbb_url . '" target="_new">integramod.com (IM Portal Support Thread)</a> and ask for help.</span>
    </td>
  </tr>

  <tr>
    <td class="catBottom" height="28" align="center">
      <span class="genmed"><a href="' . $forum_url . '">Click Here to return to your forum.</a>
      </span>
    </td>
  </tr>
</table>';

include($phpbb_root_path . 'includes/page_tail.'.$phpEx); 

?>