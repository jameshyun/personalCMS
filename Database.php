<?php

require_once('config.php');

/*
 *	Database CLASS
 *	- creates instance in the constructor using configuratiions from "config.php"
 *	- handles CRUD ( create, read, update, delete) for database
 *
 */
class Database{

	private $_mysqli; // holds db handler

	public function __construct()
	{
		// Connect to DB
		$this->_mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

		if(mysqli_connect_errno()) {

		echo "Error: Could not connect to database.";

		exit;

		}
	}

	// closes connection
	public function Close()
	{		
		return $this->_mysqli->close();
	}


	// inserts a data to DB
	public function insert($table,$values)
	{
		foreach($values as $key => $val) {
			$keys.= '`'.$key.'`,'; $value.= "'".$val."',";
		}

		$query = 'INSERT INTO '.$table. "(".substr("".$keys."",0, -1).")values(".substr("".$value."",0, -1).")";		
		$sql = $this->_mysqli->query($query);

		return $sql;
	}


	// returns a list of data from database
	public function select($table, $where=null, $order = null)
	{	
		if($where!="") {
			$where =' where '.$where;
		}

		if($order!="") {
			$order =' order by '.$order;
		}

		$query = "select * from ".$table.$where.$order;
		$sql = $this->_mysqli->query($query);

		return $sql;
	}


	// runs a query
	public function myquery($query) 
	{
		
		$res = $this->_mysqli->query($query);

		return $res;

	}


	// updates existing data
	public function update($table,$values,$where=null) 
	{
		foreach($values as $key => $val) {
			$keys.= '`'.$key.'`='."'".$val."',";
		}

		if($where!="") {
			$where =' where '.$where;
		}

		$query = "UPDATE `".$table."` SET ".substr("".$keys."",0, -1).$where;

		//global $mysqli;

		return $this->_mysqliquery($query);
	}


	// deletes existing data
	public function delete($table, $where = null)
	{
		$query = "DELETE FROM `".$table."` WHERE ".$where;

		//global $mysqli;

		return $this->_mysqli->query($query);
	}



}
/*
$db = new Database();
$table = 'blog_entries';
$where = 'cat_id=3';

$res = $db->select($table, $where);

if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo stripslashes($row['blog_entry']);	
		}
	}
	else {
		echo 'NO RESULTS';	
	}
*/
