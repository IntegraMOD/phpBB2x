<?php
/***************************************************************************
 *                                 mysqli.php
 *                            -------------------
 *   begin                : Saturday, Jul 23, 2023
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: mysqli.php,v 2 2023/10/31 03:18:41 Helter $
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
 
if(!defined("SQL_LAYER"))
{
	define("SQL_LAYER","mysqli");
 
	class sql_db
	{
		public $db_connect_id;
		public $query_result;
		public $num_queries = 0;
		public $in_transaction = 0;
		public $row = array();
		public $rowset = array();		
		public $queries;
		public $sql_time;
        public $count = 0;
		private $user, $password, $persistency, $server, $dbname;

		//
		// Constructor
		//
		public function __construct($sqlserver, $sqluser, $sqlpassword, $database, $port = false, $persistency = false)
		{
            $this->persistency = $persistency;
			$this->user = $sqluser;

			$this->password = $sqlpassword;

			if ($this->persistency) 
			{
				$this->server = 'p:' . (($sqlserver) ? $sqlserver : 'localhost');
			} 
			else 
			{
				$this->server = $sqlserver;
			}

			$this->dbname = $database;
			$port = (!$port) ? NULL : $port;
 
			$this->db_connect_id = mysqli_connect($this->server, $this->user, $this->password, $this->dbname, $port);
			
			if( $this->db_connect_id && $database != '')
			{
				mysqli_query($this->db_connect_id, "SET NAMES 'utf8'");
				
				$this->dbname = $database;
				$dbselect = mysqli_select_db($this->db_connect_id, $this->dbname);
 
				if( $dbselect === false )
				{
					mysqli_close($this->db_connect_id);
					$this->db_connect_id = null; // Set to null to avoid using a closed connection
				}
 
				return $this->db_connect_id;
			}
			else
			{
				return false;
			}
		}
 
		//
		// Other base methods
		//
		
		public function sql_close()
		{
			if( $this->db_connect_id )
			{
				//
				// Commit any remaining transactions
				//
				if( $this->in_transaction )
				{
					mysqli_commit($this->db_connect_id);
				}
 
				$result = mysqli_close($this->db_connect_id);
				$this->db_connect_id = null; // Set to null after closing
				return $result;
			}
			else
			{
				return false;
			}
		}
 
		//
		// Base query method
		//
		public function sql_query($query = "", $transaction = false)
		{
			//
			// Remove any pre-existing queries
			//
            $this->count++;
			unset($this->query_result);
			if( $query != "" )
			{
				$this->num_queries++;
				if( $transaction == BEGIN_TRANSACTION && !$this->in_transaction )
				{
					$result = mysqli_commit($this->db_connect_id);
					if(!$result)
					{
						return false;
					}
					$this->in_transaction = true;
				}
			
				$qstart = microtime(true);
				try {
						$this->count++;
						$this->query_result = mysqli_query($this->db_connect_id, $query);
					} 
					catch (\Throwable $th) 
					{
						exit;
					}
				$qend = microtime(true);
				$this->sql_time += $qend - $qstart;
 
				if (defined('DEV_MODE') && DEV_MODE)
				{
					ob_start();
					debug_print_backtrace();
					$backtrace = ob_get_clean();
					$this->queries[] = array($query, $backtrace, $qend - $qstart);
				}
			}
			else
			{
				if( $transaction == END_TRANSACTION && $this->in_transaction )
				{
					$result = mysqli_commit($this->db_connect_id);
				}
			}
 
			$this->query_result = (isset($this->query_result)) ? $this->query_result : false;
			if ($this->query_result)
			{
				unset($this->row[(bool)$this->query_result]);
				unset($this->rowset[(bool)$this->query_result]);
 
				if( $transaction == END_TRANSACTION && $this->in_transaction )
				{
					$this->in_transaction = false;
 
					if ( !mysqli_commit($this->db_connect_id) )
					{
						mysqli_rollback($this->db_connect_id);
						return false;
					}
				}
				
				return $this->query_result;
			}
			else
			{
				if( $this->in_transaction )
				{
					mysqli_rollback($this->db_connect_id);
					$this->in_transaction = false;
				}
				return false;
			}
		}
 
		//
		// Other query methods
		//
		public function sql_numrows($query_id = 0)
		{			
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
			
			$qstart = microtime(true);
			$result = ( $query_id ) ? mysqli_num_rows($query_id) : false;
			$qend = microtime(true);
			$this->sql_time += $qend - $qstart;
			return $result;
		}
 
		public function sql_affectedrows()
		{
			return ( $this->db_connect_id ) ? mysqli_affected_rows($this->db_connect_id) : false;
		}
 
		public function sql_numfields($query_id = 0)
		{
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
		 
			if ($query_id instanceof mysqli_result) {
				return $query_id->field_count;
			} elseif ($query_id instanceof mysqli) {
				return mysqli_field_count($query_id);
			}
		 
			return false;
		}
		 
		public function sql_fieldname($offset, $query_id = 0)
		{
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
			
			$field_info = mysqli_fetch_field_direct($query_id, $offset);
			
			return ( $query_id ) ? $field_info->name : false;
		}
 
		public function sql_fieldtype($offset, $query_id = 0)
		{
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
 
			$field_info = mysqli_fetch_field_direct($query_id, $offset);
			
			return ( $query_id ) ? $field_info->type : false;
		}
		
		public function sql_fetchrow($query_id = 0)
		{			
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
 
			if( $query_id )
			{
				$qstart = microtime(true);
				$this->row[(bool)$query_id] = mysqli_fetch_array($query_id, MYSQLI_ASSOC);
				$qend = microtime(true);
				$this->sql_time += $qend - $qstart;
				return $this->row[(bool)$query_id];
			}
			else
			{
				return false;
			}
		}
 
		public function sql_fetchrowset($query_id = 0)
		{			
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
 
			if( $query_id )
			{
				$qstart = microtime(true);
				$result = [];
				while($row = mysqli_fetch_array($query_id))
				{
				$result[] = $row;
				}
				$qend = microtime(true);
				$this->sql_time += $qend - $qstart;
 
        		return $result;
			}
			else
			{
				return false;
			}
		}
		
		public function mysqlx_result($query_id, $rownum, $field) 
		{
			$i = 0;
			$retval = '';
			while ($row = $query_id->fetch_array(MYSQLI_BOTH)) 
			{
				if ($i == $rownum)
				{
					$retval = $row[$field];
				}
				$i++;
			}
			return $retval;
		} 
 
		public function sql_fetchfield($field, $rownum = -1, $query_id = 0)
		{
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
 
			if( $query_id )
			{
				if( $rownum > -1 )
				{
					mysqli_data_seek($query_id, $rownum);
					$resrow = (is_numeric($col)) ? mysqli_fetch_row($query_id) : mysqli_fetch_assoc($query_id);
					if (isset($resrow[$field])){
						return $resrow[$field];
					} else {
						return false;
					}
				}
				else
				{
					if( empty($this->row[(bool)$query_id]) && empty($this->rowset[(bool)$query_id]) )
					{
						if( $this->sql_fetchrow() )
						{
							$result = $this->row[(bool)$query_id][$field];
						}
					}
					else
					{
						if( $this->rowset[(bool)$query_id] )
						{
							$result = $this->rowset[(bool)$query_id][0][$field];
						}
						else if( $this->row[(bool)$query_id] )
						{
							$result = $this->row[(bool)$query_id][$field];
						}
					}
				}
 
				return $result;
			}
			else
			{
				return false;
			}
		}
 
		public function sql_rowseek($rownum, $query_id = 0)
		{
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
			return ( $query_id ) ? mysqli_data_seek($query_id, $rownum) : false;
		}
 
		public function sql_nextid()
		{
			return ( $this->db_connect_id ) ? mysqli_insert_id($this->db_connect_id) : false;
		}
 
		public function sql_freeresult($query_id = 0)
		{			
			if ($query_id === false)
			{
				$query_id = $this->query_result;
			}
 
			if ( $query_id === true)
			{
				unset($this->row[(bool)$query_id]);
				unset($this->rowset[(bool)$query_id]);
 
				mysqli_free_result($query_id);
 
				return true;
			}
			else
			{
				return false;
			}
		}
 
		public function sql_error()
		{
			$result['message'] = mysqli_error($this->db_connect_id);
			$result['code'] = mysqli_errno($this->db_connect_id);
 
			return $result;
		}
 
	} // class sql_db
 
} // if ... define