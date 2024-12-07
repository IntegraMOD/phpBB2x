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


class pafiledb_sql {
	function query($db,$query,$type) {
		$result = mysql_query($query);
		$error = mysql_error();
		global $query_count;
		global $queries_used;
		$query_count++;
		$queries_used .= "<tr><td width=\"100%\" align=\"left\" class=\"datacell\">$query</td></tr>";
		if (!empty($error)) {
			$errno = mysql_errno();
			$this->error("Unable to successfully run a MySQL query.<br>MySQL Returned this error: <b>$error</b> Error number: <b>$errno</b><br>The query that caused this error was: <b>$query</b>");
		}
		if ($type == 0) {
			return $result;
		}
		if ($type == 1) {
			$array = mysql_fetch_array($result);
			return $array;
		}
		if ($type == 2) {
			$array = mysql_num_rows($result);
			return $array;
		}
		if ($type == 3) {
			$array = mysql_insert_id();
			return $array;
		}
		@mysql_free_result($result);
	}
	function error($error) {
		die($error);
	}
	function connect($db) {
		if(!($dbc = mysql_connect($db[host],$db[user],$db[pass]))) $this->error("Unable to successfully connect to the MySQL database. Check your settings including the MySQL server, username, and password and try again.");
                if(!(mysql_select_db($db[name],$dbc))) $this->error("Able to connect to the MySQL database, but was unable to select the database <b>$db[name]</b> to use.");
	}
}
$pafiledb_sql = new pafiledb_sql;
?>
