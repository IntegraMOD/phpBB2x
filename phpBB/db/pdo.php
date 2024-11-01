	<?php
	/***************************************************************************
	 *                                 pdo.php
	 *                            -------------------
	 *   begin                : Friday, Nov 01, 2024
	 *   copyright            : (C) 2001 IntegraTeam
	 *   email                : Helter@integramod.com
	 *
	 *   $Id: pdo.php,v 2 2024/11/01 12:05:41 Helter $
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
	    define("SQL_LAYER","pdo");
	 
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
	        public $cache, $cached, $caching;
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
	            $this->server = $sqlserver;
	            $this->dbname = $database;
	            $port = (!$port) ? 3306 : $port;
	 
	            $dsn = "mysql:host={$this->server};dbname={$this->dbname};port={$port};charset=utf8";
	            $options = [
	                PDO::ATTR_PERSISTENT => $this->persistency,
	                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
	            ];
	 
	            try {
	                $this->db_connect_id = new PDO($dsn, $this->user, $this->password, $options);
	                return $this->db_connect_id;
	            } catch (PDOException $e) {
	                return false;
	            }
	        }
	 
	        //
	        // Other base methods
	        //
	 
	        public function sql_close()
	        {
	            if($this->db_connect_id)
	            {
	                //
	                // Commit any remaining transactions
	                //
	                if($this->in_transaction)
	                {
	                    $this->db_connect_id->commit();
	                }
	 
	                $this->db_connect_id = null;
	                return true;
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
	            if($query != "")
	            {
	                $this->num_queries++;
	                if($transaction == BEGIN_TRANSACTION && !$this->in_transaction)
	                {
	                    $this->db_connect_id->beginTransaction();
	                    $this->in_transaction = true;
	                }
	 
	                $qstart = microtime(true);
	                try {
	                        $this->count++;
	                        $this->query_result = $this->db_connect_id->query($query);
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
	                if($transaction == END_TRANSACTION && $this->in_transaction)
	                {
	                    $this->db_connect_id->commit();
	                }
	            }
	 
	            $this->query_result = (isset($this->query_result)) ? $this->query_result : false;
	            if ($this->query_result)
	            {
	                unset($this->row[(bool)$this->query_result]);
	                unset($this->rowset[(bool)$this->query_result]);
	 
	                if($transaction == END_TRANSACTION && $this->in_transaction)
	                {
	                    $this->in_transaction = false;
	 
	                    if (!$this->db_connect_id->commit())
	                    {
	                        $this->db_connect_id->rollBack();
	                        return false;
	                    }
	                }
	 
	                return $this->query_result;
	            }
	            else
	            {
	                if($this->in_transaction)
	                {
	                    $this->db_connect_id->rollBack();
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
	            $result = ($query_id) ? $query_id->rowCount() : false;
	            $qend = microtime(true);
	            $this->sql_time += $qend - $qstart;
	            return $result;
	        }
	 
	        public function sql_affectedrows()
	        {
	            return ($this->db_connect_id && $this->query_result instanceof PDOStatement) ? $this->query_result->rowCount() : false;
	        }
	 
	        public function sql_numfields($query_id = 0)
	        {
	            if ($query_id === false)
	            {
	                $query_id = $this->query_result;
	            }
	 
	            return ($query_id) ? $query_id->columnCount() : false;
	        }
	 
	        public function sql_fieldname($offset, $query_id = 0)
	        {
	            if ($query_id === false)
	            {
	                $query_id = $this->query_result;
	            }
	 
	            $meta = $query_id->getColumnMeta($offset);
	 
	            return ($query_id) ? $meta['name'] : false;
	        }
	 
	        public function sql_fieldtype($offset, $query_id = 0)
	        {
	            if ($query_id === false)
	            {
	                $query_id = $this->query_result;
	            }
	 
	            $meta = $query_id->getColumnMeta($offset);
	 
	            return ($query_id) ? $meta['native_type'] : false;
	        }
	 
	        public function sql_fetchrow($query_id = 0)
	        {           
	            if ($query_id === false)
	            {
	                $query_id = $this->query_result;
	            }
	 
	            if($query_id)
	            {
	                $qstart = microtime(true);
	                $this->row[(bool)$query_id] = $query_id->fetch(PDO::FETCH_ASSOC);
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
	 
	            if($query_id)
	            {
	                $qstart = microtime(true);
	                $result = $query_id->fetchAll(PDO::FETCH_ASSOC);
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
	            while ($row = $query_id->fetch(PDO::FETCH_BOTH)) 
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
	 
	            if($query_id)
	            {
	                if($rownum > -1)
	                {
	                    $result = $query_id->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, $rownum);
	                    return isset($result[$field]) ? $result[$field] : false;
	                }
	                else
	                {
	                    if(empty($this->row[(bool)$query_id]) && empty($this->rowset[(bool)$query_id]))
	                    {
	                        if($this->sql_fetchrow())
	                        {
	                            $result = $this->row[(bool)$query_id][$field];
	                        }
	                    }
	                    else
	                    {
	                        if($this->rowset[(bool)$query_id])
	                        {
	                            $result = $this->rowset[(bool)$query_id][0][$field];
	                        }
	                        else if($this->row[(bool)$query_id])
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
	            return ($query_id) ? $query_id->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, $rownum) : false;
	        }
	 
	        public function sql_nextid()
	        {
	            return ($this->db_connect_id) ? $this->db_connect_id->lastInsertId() : false;
	        }
	 
	        public function sql_freeresult($query_id = 0)
	        {           
	            if ($query_id === false)
	            {
	                $query_id = $this->query_result;
	            }
	 
	            if ($query_id === true)
	            {
	                unset($this->row[(bool)$query_id]);
	                unset($this->rowset[(bool)$query_id]);
	 
	                $query_id = null;
	 
	                return true;
	            }
	            else
	            {
	                return false;
	            }
	        }
	 
	        public function sql_error()
	        {
	            $error = $this->db_connect_id->errorInfo();
	            $result['message'] = $error[2];
	            $result['code'] = $error[1];
	 
	            return $result;
	        }
	 
	    } // class sql_db
	 
	} // if ... define