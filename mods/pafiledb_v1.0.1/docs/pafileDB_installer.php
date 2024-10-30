	<?php
	if (!defined('IN_PHPBB'))
	{
	    define('IN_PHPBB', true);
	}
	$phpbb_root_path = './';
	include($phpbb_root_path . 'extension.inc');
	include($phpbb_root_path . 'common.'.$phpEx);
	include($phpbb_root_path . 'includes/functions_selects.'.$phpEx);

	ini_set('display_startup_errors',1); 
	ini_set('display_errors',1);
	error_reporting(-1);
	 
	/// BEFORE RUNNING THIS FILE BESURE THAT YOU EDITED THE FILE "includes/constants.php"
	 
	$sql = array(
	'CREATE TABLE '.PA_CATEGORY_TABLE.' (cat_id INT(10) not null auto_increment, cat_name TEXT, cat_desc TEXT, cat_files INT(10) DEFAULT NULL, cat_1xid INT(10) DEFAULT NULL, cat_parent INT(50) DEFAULT NULL, cat_order INT(50) DEFAULT NULL, PRIMARY KEY (cat_id)) ENGINE=MyISAM',
	'CREATE TABLE '.PA_COMMENTS_TABLE.' (comments_id INT(10) not null auto_increment, file_id INT(10) DEFAULT "0" not null, comments_text TEXT not null, comments_title TEXT not null, comments_time INT(50) DEFAULT "0" not null, comment_bbcode_uid VARCHAR(10) DEFAULT NULL, poster_id MEDIUMINT(8) DEFAULT "0" not null, PRIMARY KEY (comments_id), FULLTEXT KEY comment_bbcode_uid (comment_bbcode_uid)) ENGINE=MyISAM',
	'CREATE TABLE '.PA_CUSTOM_TABLE.' (custom_id INT(50) not null auto_increment, custom_name TEXT not null, custom_description TEXT not null, PRIMARY KEY (custom_id)) ENGINE=MyISAM',
	'CREATE TABLE '.PA_CUSTOM_DATA_TABLE.' (customdata_file INT(50) DEFAULT "0" not null, customdata_custom INT(50) DEFAULT "0" not null, data TEXT not null) ENGINE=MyISAM',
	'CREATE TABLE '.PA_FILES_TABLE.' (file_id INT(10) not null auto_increment, file_name TEXT, file_desc TEXT, file_creator TEXT, file_version TEXT, file_longdesc TEXT, file_ssurl TEXT, file_dlurl TEXT, file_time INT(50) DEFAULT NULL, file_catid INT(10) DEFAULT NULL, file_posticon TEXT, file_license INT(10) DEFAULT NULL, file_dls INT(10) DEFAULT NULL, file_last INT(50) DEFAULT NULL, file_pin INT(2) DEFAULT NULL, file_docsurl TEXT, file_rating DOUBLE(6,4) DEFAULT "0.0000" not null, file_totalvotes TEXT not null, PRIMARY KEY (file_id)) ENGINE=MyISAM',
	'CREATE TABLE '.PA_LICENSE_TABLE.' (license_id INT(10) not null auto_increment, license_name TEXT, license_text TEXT, PRIMARY KEY (license_id)) ENGINE=MyISAM',
	'CREATE TABLE '.PA_SETTINGS_TABLE.' (settings_id INT(1) DEFAULT "1" not null, settings_dbname TEXT not null, settings_sitename TEXT not null, settings_dburl TEXT not null, settings_topnumber INT(5) DEFAULT "0" not null, settings_homeurl TEXT not null, settings_newdays INT(5) DEFAULT "0" not null, settings_stats INT(5) DEFAULT "0" not null, settings_viewall INT(5) DEFAULT "0" not null, settings_showss INT(5) DEFAULT "0" not null, settings_disable INT(5) DEFAULT "0" not null, allow_html INT(5) DEFAULT "0" not null, allow_bbcode INT(5) DEFAULT "0" not null, allow_smilies INT(5) DEFAULT "0" not null, allow_comment_links INT(5) DEFAULT "0" not null, no_comment_link_message VARCHAR(255) DEFAULT "" not null, allow_comment_images INT(5) DEFAULT "0" not null, no_comment_image_message VARCHAR(255) DEFAULT "" not null, max_comment_chars INT(255) DEFAULT "0" not null) ENGINE=MyISAM',
	'CREATE TABLE '.PA_VOTES_TABLE.' (votes_ip VARCHAR(50) DEFAULT "0" not null, votes_file INT(50) DEFAULT "0" not null) ENGINE=MyISAM',
	'INSERT INTO '.PA_SETTINGS_TABLE.' (settings_id, settings_dbname, settings_sitename, settings_dburl, settings_topnumber, settings_homeurl, settings_newdays, settings_stats, settings_viewall, settings_showss, settings_disable, allow_html, allow_bbcode, allow_smilies, allow_comment_links, no_comment_link_message, allow_comment_images, no_comment_image_message, max_comment_chars) VALUES ("1", "Download Index", "My Site", "http://yoursite_URL/phpBB2", "10", "http://yoursite_URL", "5", "0", "1", "1", "0", "0", "1", "1", "0", "No links please", "0", "No images please", "1000")',
	'INSERT INTO '.PA_CATEGORY_TABLE.' (cat_id, cat_name, cat_desc, cat_files, cat_1xid, cat_parent, cat_order) VALUES (1, "Test Category", "Test category", 0, 0, 0, 1)',
	);
	 
	//
	// Start session management
	//
	$userdata = session_pagestart($user_ip, PAGE_INDEX);
	init_userprefs($userdata);
	//
	// End session management
	//
	 
	$n = 0;
	$message = "This list is a result of the SQL queries needed for the <b>paFileDB v0.0.6 MOD</b><br /><font color=red><b>DELETE THIS FILE NOW!</b></font><br /><br />";
	foreach ($sql as $query)
	{
	    if (!$result = $db->sql_query($query)) 
	    {
	        $message .= '<b><font color=#FF0000>[Already Added]</font></b> Line: '.($n+1).' - '.$query.'<br />';
	    }
	    else 
	    {
	        $message .= '<b><font color=#0000fF>[Successfully Added/Updated]</font></b> Line: '.($n+1).' - '.$query.'<br />';
	    }
	    $n++;
	}
	message_die(GENERAL_MESSAGE, $message);