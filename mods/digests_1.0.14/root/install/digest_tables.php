<?php
/***************************************************************************
                                digest_tables.php
                             -------------------
    begin                : Sat Oct 4 2003
    copyright            : (C) 2000 The phpBB Group
    email                : support@phpBB.com

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

// Written by Mark D. Hamill, mhamill@computer.org
// This software is designed to work with phpBB Version 2.0.20

// This is a "run once" program that creates two tables needed for this modification. Make sure you have
// defined the names of the tables in the digest_constants include file. The include file needs to be 
// installed before this can be run.

// Modified 8/6/06 to work with MySQL as well as Postgres and MS SQL databases. 

if (!defined('IN_PHPBB'))
{
    define( 'IN_PHPBB', true);
}
$phpbb_root_path = '../';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/digest_constants.' . $phpEx); 

switch ($dbms) 

{

	case 'mysq4':
	case 'mysqli':

		// create subscriptions table
		$sql='CREATE TABLE ' . DIGEST_SUBSCRIPTIONS_TABLE . " (
			user_id INTEGER NOT NULL DEFAULT 0,
			digest_type CHAR(4) NOT NULL DEFAULT 'DAY',
			format CHAR(4) NOT NULL DEFAULT 'TEXT',
			show_text CHAR(3) NOT NULL DEFAULT 'YES',
			show_mine CHAR(3) NOT NULL DEFAULT 'YES',
			new_only CHAR(5) NOT NULL DEFAULT 'TRUE',
			send_on_no_messages CHAR(3) NOT NULL DEFAULT 'NO',
			send_hour SMALLINT NOT NULL DEFAULT 0,
			text_length INTEGER NOT NULL DEFAULT 0,
			CONSTRAINT " . DIGEST_SUBSCRIPTIONS_TABLE . '_pk PRIMARY KEY (user_id)
		)';

		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create '. DIGEST_SUBSCRIPTIONS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		// create subscribed forums table
		$sql='CREATE TABLE ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' (
			user_id MEDIUMINT(8) NOT NULL DEFAULT 0,
			forum_id SMALLINT(5) NOT NULL DEFAULT 0,
			UNIQUE user_id (user_id, forum_id)
			)';

		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create '. DIGEST_SUBSCRIBED_FORUMS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		break;

	case 'postgres':

		// create subscriptions table
		$sql='CREATE TABLE ' . DIGEST_SUBSCRIPTIONS_TABLE . " (
			user_id INTEGER NOT NULL DEFAULT 0,
			digest_type CHAR(4) NOT NULL DEFAULT 'DAY',
			format CHAR(4) NOT NULL DEFAULT 'TEXT',
			show_text CHAR(3) NOT NULL DEFAULT 'YES',
			show_mine CHAR(3) NOT NULL DEFAULT 'YES',
			new_only CHAR(5) NOT NULL DEFAULT 'TRUE',
			send_on_no_messages CHAR(3) NOT NULL DEFAULT 'NO',
			send_hour SMALLINT NOT NULL DEFAULT 0,
			text_length INTEGER NOT NULL DEFAULT 0,
			CONSTRAINT " . DIGEST_SUBSCRIPTIONS_TABLE . '_pk PRIMARY KEY (user_id))';

		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create '. DIGEST_SUBSCRIPTIONS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		// create subscribed forums table
          $sql='CREATE TABLE ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' (
              user_id INTEGER NOT NULL DEFAULT 0,
              forum_id SMALLINT NOT NULL DEFAULT 0)';


		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		// create the subscribed forums table index
          $sql='CREATE UNIQUE INDEX ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . 'us ON ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' (user_id, forum_id)';

		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create index on '. DIGEST_SUBSCRIBED_FORUMS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		break;

	case 'mssql':

		// create subscriptions table
		$sql='CREATE TABLE ' . DIGEST_SUBSCRIPTIONS_TABLE . " (
			user_id INTEGER NOT NULL DEFAULT 0,
			digest_type CHAR(4) NOT NULL DEFAULT 'DAY',
			format CHAR(4) NOT NULL DEFAULT 'TEXT',
			show_text CHAR(3) NOT NULL DEFAULT 'YES',
			show_mine CHAR(3) NOT NULL DEFAULT 'YES',
			new_only CHAR(5) NOT NULL DEFAULT 'TRUE',
			send_on_no_messages CHAR(3) NOT NULL DEFAULT 'NO',
			send_hour SMALLINT NOT NULL DEFAULT 0,
			text_length INTEGER NOT NULL DEFAULT 0,
			CONSTRAINT " . DIGEST_SUBSCRIPTIONS_TABLE. '_pk PRIMARY KEY (user_id))';


		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create '. DIGEST_SUBSCRIPTIONS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		// create subscribed forums table
		$sql='CREATE TABLE ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' (
			user_id INTEGER NOT NULL DEFAULT 0,
			forum_id SMALLINT NOT NULL DEFAULT 0
		)  ON [PRIMARY]';


		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		// create the subscribed forums table index
		$sql='CREATE UNIQUE INDEX ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . 'us ON ' . DIGEST_SUBSCRIBED_FORUMS_TABLE . ' (user_id, forum_id) ON [PRIMARY]';

		if ( !($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Unable to create index on '. DIGEST_SUBSCRIBED_FORUMS_TABLE . ' table', '', __LINE__, __FILE__, $sql);
		}

		break;

	default:

		message_die(GENERAL_ERROR, 'Only MySQL, Postgres and MS SQL digest tables can be created with this script.', '', __LINE__, __FILE__, $sql);

}
		
?>
<html>
<head>
<title>Create Digest Tables</title>
</head>
<body>
<p>If you see this message, then all digest database tables and indexes were successfully created!</p>
<p>Please delete this file and remove the install directory, since your forum will not be accessible until it is removed.</p>
</body>
</html>



