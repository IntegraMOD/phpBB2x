# phpMyAdmin MySQL-Dump
# version 2.3.0-rc2
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Generation Time: Feb 03, 2003 at 06:15 PM
# Server version: 4.00.01
# PHP Version: 4.2.2
# Database : `main`
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_cat`
#

CREATE TABLE phpbb_pa_cat (
  cat_id int(10) NOT NULL auto_increment,
  cat_name text,
  cat_desc text,
  cat_files int(10) default NULL,
  cat_1xid int(10) default NULL,
  cat_parent int(50) default NULL,
  cat_order int(50) default NULL,
  PRIMARY KEY  (cat_id)
) ENGINE=MyISAM;
# --------------------------------------------------------

INSERT INTO phpbb_pa_cat VALUES (1, 'Test Category', 'Test category', 0, 0, 0, 1);

#
# Table structure for table `phpbb_pa_comments`
#

CREATE TABLE phpbb_pa_comments (
  comments_id int(10) NOT NULL auto_increment,
  file_id int(10) NOT NULL default '0',
  comments_text text NOT NULL,
  comments_title text NOT NULL,
  comments_time int(50) NOT NULL default '0',
  comment_bbcode_uid varchar(10) default NULL,
  poster_id mediumint(8) NOT NULL default '0',
  PRIMARY KEY  (comments_id),
  KEY comments_id (comments_id),
  FULLTEXT KEY comment_bbcode_uid (comment_bbcode_uid)
) ENGINE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_custom`
#

CREATE TABLE phpbb_pa_custom (
  custom_id int(50) NOT NULL auto_increment,
  custom_name text NOT NULL,
  custom_description text NOT NULL,
  PRIMARY KEY  (custom_id)
) ENGINE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_customdata`
#

CREATE TABLE phpbb_pa_customdata (
  customdata_file int(50) NOT NULL default '0',
  customdata_custom int(50) NOT NULL default '0',
  data text NOT NULL
) ENGINE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_files`
#

CREATE TABLE phpbb_pa_files (
  file_id int(10) NOT NULL auto_increment,
  file_name text,
  file_desc text,
  file_creator text,
  file_version text,
  file_longdesc text,
  file_ssurl text,
  file_dlurl text,
  file_time int(50) default NULL,
  file_catid int(10) default NULL,
  file_posticon text,
  file_license int(10) default NULL,
  file_dls int(10) default NULL,
  file_last int(50) default NULL,
  file_pin int(2) default NULL,
  file_docsurl text,
  file_rating double(6,4) NOT NULL default '0.0000',
  file_totalvotes int(255) NOT NULL default '0',
  PRIMARY KEY  (file_id)
) ENGINE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_license`
#

CREATE TABLE phpbb_pa_license (
  license_id int(10) NOT NULL auto_increment,
  license_name text,
  license_text text,
  PRIMARY KEY  (license_id)
) ENGINE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `phpbb_pa_settings`
#

CREATE TABLE phpbb_pa_settings (
  settings_id int(1) NOT NULL default '1',
  settings_dbname text NOT NULL,
  settings_sitename text NOT NULL,
  settings_dbdescription text NOT NULL,
  settings_dburl text NOT NULL,
  settings_topnumber int(5) NOT NULL default '0',
  settings_homeurl text NOT NULL,
  settings_newdays int(5) NOT NULL default '0',
  settings_stats int(5) NOT NULL default '0',
  settings_viewall int(5) NOT NULL default '0',
  settings_showss int(5) NOT NULL default '0',
  settings_disable int(5) NOT NULL default '0',
  allow_html int(5) NOT NULL default '0',
  allow_bbcode int(5) NOT NULL default '0',
  allow_smilies int(5) NOT NULL default '0',
  allow_comment_links int(5) NOT NULL default '0',
  no_comment_link_message varchar(255) NOT NULL default '',
  allow_comment_images int(5) NOT NULL default '0',
  no_comment_image_message varchar(255) NOT NULL default '',
  max_comment_chars int(255) NOT NULL default '0'
) ENGINE=MyISAM;
# --------------------------------------------------------


INSERT INTO phpbb_pa_settings (settings_id, settings_dbname, settings_sitename, settings_dburl, settings_topnumber, settings_homeurl, settings_newdays, settings_stats, settings_viewall, settings_showss, settings_disable, allow_html, allow_bbcode, allow_smilies, allow_comment_links, no_comment_link_message, allow_comment_images, no_comment_image_message, max_comment_chars) VALUES ("1", "Download Index", "My Site", "http://yoursite_URL/phpBB2", "10", "http://yoursite_URL", "5", "0", "1", "1", "0", "0", "1", "1", "0", "No links please", "0", "No images please", "1000");

#
# Table structure for table `phpbb_pa_votes`
#

CREATE TABLE phpbb_pa_votes (
  votes_ip varchar(50) NOT NULL default '0',
  votes_file int(50) NOT NULL default '0'
) ENGINE=MyISAM;

