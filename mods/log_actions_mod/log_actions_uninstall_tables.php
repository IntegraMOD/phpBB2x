<?php
/***************************************************************************
 *                             install_tables.php
 *                            -------------------
 *   begin                : Wednesday, May 16, 2002
 *   copyright            : Morpheus
 *   email                : morpheus2matrix@yahoo.fr
 *
 *   $Id: install_tables.php,v 1.1.2.6 200/01/21 14:48:17 Morpheus Exp $
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
//include($phpbb_root_path . 'includes/db.'.$phpEx);

// 
// Start session management 
// 
$userdata = session_pagestart($user_ip, PAGE_INDEX); 
init_userprefs($userdata); 
// 
// End session management 
// 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<title>Install File for MOD's</title>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<meta http-equiv="Content-Style-Type" content="text/css">
<style type="text/css">
<!--

font,th,td,p,body { font-family: "Courier New", courier; font-size: 11pt }

a:link,a:active,a:visited { color : #006699; }
a:hover		{ text-decoration: underline; color : #DD6900;}

hr	{ height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}

.maintitle,h1,h2	{font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif; text-decoration: none; line-height : 120%; color : #000000;}

.ok {color:green}

.error {color:red}

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("./templates/subSilver/formIE.css"); 
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#006699" vlink="#5584AA">

<table width="100%" border="0" cellspacing="0" cellpadding="10" align="center"> 
	<tr>
		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><a href="./index.php"><img src="./templates/subSilver/images/logo_phpBB.gif" border="0" alt="Forum Home" vspace="1" /></a></td>
				<td align="center" width="100%" valign="middle"><span class="maintitle">Un-Installing Log Actions MOD</span></td>
			</tr>
		</table></td>
	</tr>
</table>

<br clear="all" />

<h2>Informations</h2>

<?php

// get the phpBB version
$sql = "SELECT config_value  
	FROM " . CONFIG_TABLE . " 
	WHERE config_name = 'version'";
if ( !($result = $db->sql_query($sql)) )
{
	die("Couldn't obtain version info");
}
$row = $db->sql_fetchrow($result);
$phpBB_version = $row['config_value'] ;
$sql = array();

// output some info
echo '<p>Database type &nbsp;  :: <b>' . SQL_LAYER . '</b><br />';

echo 'phpBB version &nbsp;  :: <b>2' . $phpBB_version . '</b><br />';

echo 'Log Actions MOD version  :: <b>' . LOG_ACTIONS_VERSION . '</b></p>' ."\n";

?>

<br clear="all" />

<h3>What are you going to do ?</h3>
This file is used to undo the changes to your database (adding/modifying a table) making by the Log Action MOD.
If you have any problem during this part, you can contact me to get support. Now, if you are ready, click on the button.

<br clear="all" />

<center>
	<form action="log_actions_uninstall_tables.php" method=POST>
		<input type="submit" name="submit" value="submit" class="liteoption" />
	</form>
</center>

<?php

$submit = ( isset($HTTP_POST_VARS['submit']) ) ? $HTTP_POST_VARS['submit'] : 0;

if ( $submit )
{
	switch ( SQL_LAYER )
	{
		case 'mysql':
		case 'mysql4':
		case 'mysqli':
			$sql[] = "DROP TABLE " . LOGS_TABLE;

			$sql[] = "DROP TABLE " . LOGS_CONFIG_TABLE;

			$sql[] = "ALTER TABLE " . USERS_TABLE . "
				DROP user_view_log";
			break;

		case 'postgresql':
			$sql[] = "DROP TABLE " . LOGS_TABLE;

			$sql[] = "DROP TABLE " . LOGS_CONFIG_TABLE;

			$sql[] = "ALTER TABLE " . USERS_TABLE . "
				DROP user_view_log";
			break;

		default:
			die("/!\ No Database Abstraction Layer (DBAL) found /!\\");
			break;
	}

	echo("<h2>Adding/modifying tables to your database</h2>\n");
	for ($i=0; $i < count($sql); $i++)
	{
		echo("Running query :: " . $sql[$i]);
		flush();

		if ( !($result = $db->sql_query($sql[$i])) )
		{
			$error_code = TRUE;
			$error = $db->sql_error();

			echo(" -> <b><span class=\"error\">ERROR - QUERY FAILED</span></b> ----> <u>" . $error['message'] . "</u><br /><br />\n\n");
		}
		else
		{
			echo(" -> <b><span class=\"ok\">GOOD - QUERY OK</span></b><br /><br />\n\n");
		}
	}

		$error_message = "";

		if ( $error_code )
		{
			$error_message .= "<br />At least one query failed : check the error message and contact me if you need help to resolve the problem. <br />";
		}
		else
		{
			$error_message .= "<br />All the queries have been successfully done - Enjoy. <br />";
		}

		echo("\n<br />\n<b>COMPLETE - INSTALLATION IS ENDED</b><br />\n");
		echo($error_message . "<br />");
		echo("<br /><b>NOW, DELETE THIS FILE FROM YOUR SERVER</b><br />\n");
}

?>
</body>
</html>