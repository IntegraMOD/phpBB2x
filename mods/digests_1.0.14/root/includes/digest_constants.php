<?php 
/***************************************************************************
                                digest_constants.php
                             -------------------
    begin                : Sun Aug 6 2006
    copyright            : (c) Mark D. Hamill
    email                : mhamill@computer.org
 
    $Id: $
 
 ***************************************************************************/
 
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// digest_constants.php
// Written by Mark D. Hamill, mhamill@computer.org
// This software is designed to work with phpBB Version 2.0.20
 
if ( !defined('IN_PHPBB') )
{
    die('Hacking attempt');
}
 
// Table names. Change if you prefer to use different table names. I used the mod_ prefix to make
// them stand out from other standard phpBB tables.
 
define('DIGEST_SUBSCRIPTIONS_TABLE', $table_prefix.'mod_subscriptions');
define('DIGEST_SUBSCRIBED_FORUMS_TABLE', $table_prefix.'mod_subscribed_forums');
 
// Various variables for digest
 
define('DIGEST_WEEKLY_DIGEST_DAY',0);   // Day of week to send weekly digest, use 0-6 where 0=Sunday, 6=Saturday etc.
define('DIGEST_USE_DEFAULT_STYLESHEET',true); // true if you want HTML digest to apply default theme stylesheet, otherwise false. Use of a custom stylesheet will override this setting.
define('DIGEST_USE_CUSTOM_STYLESHEET', false); // set to true to enable the stylesheet below
define('DIGEST_CUSTOM_STYLESHEET_PATH', 'templates/subSilver/digest_stylesheet.css'); // You will need to create this stylesheet, if you enable it
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
define('DIGEST_SITE_URL', $protocol . trim((string) $board_config['server_name']) . (( $board_config['server_port'] != 80 ) ? ':' . trim((string) $board_config['server_port']) : '') . preg_replace('/^\/?(.*?)\/?$/', "\\1", trim((string) $board_config['script_path'])) . '/'); // if this gives you trouble, simply substitute it for the full URL to your site, leaving on the trailing '/'
if (substr(DIGEST_SITE_URL,(strlen(DIGEST_SITE_URL)-1),1) != '/')
{
    define('DIGEST_SITE_URL', DIGEST_SITE_URL . '/');
}
define('DIGEST_VERSION','1.0.13'); // Don't change this; the mod author changes this.
define('DIGEST_DATE_FORMAT', 'd M Y h:i A '); // How post date will be displayed as text in the post. Use formats found at http://www.php.net/manual/en/function.date.php
define('DIGEST_SERVER_DATE_DISPLAY', 'm/d/Y'); // How server date will be displayed as text in mail digest summary. Use formats found at http://www.php.net/manual/en/function.date.php
define('DIGEST_SHOW_SUMMARY',true); // Shows a summary of who got a digest, how many digest were sent, etc. Useful when setting up the digests or if you want to collect statistics information, otherwise set to false.
define('DIGEST_SHOW_SUMMARY_TYPE','html'); // Only other allowed value is text. Text is best if capturing output to a file.
define('DIGEST_HTML_ENCODING','UTF-8'); // May need to change this if not using English.
define('DIGEST_TEXT_ENCODING','UTF-8'); // May need to change this if not inside the United States. Should be a plain text character set only.
unset ($protocol);