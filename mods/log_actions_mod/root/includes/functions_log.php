<?php
/***************************************************************************
 *				functions_log.php
 *		               -------------------
 *     begin                : Jan 24 2003
 *     copyright            : Morpheus
 *     email                : morpheus@2037.biz
 *
 *     $Id: function_log.php,v 1.85.2.9 2003/01/24 18:31:54 Moprheus Exp $
 *
 *     Log user actions with improved security and PHP 5.4-8.3 compatibility
 *
 ****************************************************************************/

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
	die('Hacking attempt');
}

function log_action($action, $topic_id, $user_id, $username)
{
	global $db;

	// Validate input parameters
	if ( empty($action) || !is_numeric($topic_id) || !is_numeric($user_id) || empty($username) )
	{
		return false;
	}

	// Use prepared statement approach with mysqli or proper escaping
	$user_id = (int) $user_id;
	$topic_id = (int) $topic_id;
	
	$sql = "SELECT session_ip
		FROM " . SESSIONS_TABLE . "
		WHERE session_user_id = " . $user_id;

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not select session_ip', '', __LINE__, __FILE__, $sql);
	}
	
	$row = $db->sql_fetchrow($result);
	$user_ip = isset($row['session_ip']) ? $row['session_ip'] : '';
	
	// Properly escape strings for database insertion
	// Using db->sql_escape_string() method if available in phpBB 2.0.13
	if ( method_exists($db, 'sql_escape_string') )
	{
		$action = $db->sql_escape_string($action);
		$username = $db->sql_escape_string($username);
		$user_ip = $db->sql_escape_string($user_ip);
	}
	else
	{
		// Fallback to addslashes with additional validation
		$action = addslashes(htmlspecialchars($action, ENT_QUOTES, 'UTF-8'));
		$username = addslashes(htmlspecialchars($username, ENT_QUOTES, 'UTF-8'));
		$user_ip = addslashes($user_ip);
	}

	$time = time();

	$sql = "INSERT INTO " . LOGS_TABLE . " (mode, topic_id, user_id, username, user_ip, time)
		VALUES ('" . $action . "', " . $topic_id . ", " . $user_id . ", '" . $username . "', '" . $user_ip . "', " . $time . ")";

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not insert data into logs table', '', __LINE__, __FILE__, $sql);
	}
	
	return true;
}


function prune_logs($prune_days)
{
  global $db;

  if ( !is_numeric($prune_days) || $prune_days <= 0 )
  {
    return FALSE;
  }

  $prune = time() - ( (int)$prune_days * 86400 );

  // First, get count of logs to prune to avoid empty operations
  $sql = "SELECT COUNT(*) as log_count 
    FROM " . LOGS_TABLE . " 
    WHERE time < " . (int)$prune;

  if ( !($result = $db->sql_query($sql)) )
  {
    message_die(GENERAL_ERROR, 'Could not obtain count of logs to prune', '', __LINE__, __FILE__, $sql);
  }

  $row = $db->sql_fetchrow($result);
  $log_count = (int)$row['log_count'];
  $db->sql_freeresult($result);

  if ( $log_count == 0 )
  {
    return TRUE;
  }

  // Use direct DELETE with WHERE clause instead of building IN() list
  // This is more efficient and avoids potential issues with large result sets
  $sql = "DELETE FROM " . LOGS_TABLE . " 
    WHERE time < " . (int)$prune;

  if ( !$db->sql_query($sql) )
  {
    message_die(GENERAL_ERROR, 'Could not delete logs', '', __LINE__, __FILE__, $sql);
  }

  // Get number of affected rows if the database layer supports it
  $deleted_rows = 0;
  if ( method_exists($db, 'sql_affectedrows') )
  {
    $deleted_rows = $db->sql_affectedrows();
  }

  return TRUE;
}

/**
 * Alternative implementation using batched deletion for very large datasets
 * This prevents memory issues and timeouts on large log tables
 */
function prune_logs_batched($prune_days, $batch_size = 1000)
{
  global $db;

  if ( !is_numeric($prune_days) || $prune_days <= 0 )
  {
    return FALSE;
  }

  if ( !is_numeric($batch_size) || $batch_size <= 0 )
  {
    $batch_size = 1000;
  }

  $prune = time() - ( (int)$prune_days * 86400 );
  $total_deleted = 0;

  do
  {
    // Get a batch of log IDs to delete
    $sql = "SELECT id_log 
      FROM " . LOGS_TABLE . " 
      WHERE time < " . (int)$prune . " 
      LIMIT " . (int)$batch_size;

    if ( !($result = $db->sql_query($sql)) )
    {
      message_die(GENERAL_ERROR, 'Could not obtain list of logs to prune', '', __LINE__, __FILE__, $sql);
    }

    $logs = array();
    while ( $row = $db->sql_fetchrow($result) )
    {
      $logs[] = (int)$row['id_log'];
    }
    $db->sql_freeresult($result);

    $batch_count = count($logs);

    if ( $batch_count > 0 )
    {
      $logs_string = implode(', ', $logs);
      
      $sql = "DELETE FROM " . LOGS_TABLE . " 
        WHERE id_log IN (" . $logs_string . ")";

      if ( !$db->sql_query($sql) )
      {
        message_die(GENERAL_ERROR, 'Could not delete logs', '', __LINE__, __FILE__, $sql);
      }

      $total_deleted += $batch_count;
    }

  } while ( $batch_count == $batch_size );

  return TRUE;
}

function auto_prune_logs()
{
	global $db;

	// To do
}