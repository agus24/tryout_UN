<?php
require ('db_con.php');

class Query extends Database
{

	function select($table,$field,$cond)
	{
		$condition='1=1';
		$condition.=$cond;

		$sql="SELECT $field FROM $table WHERE $cond";

		try
		{
			$stmt 	= $this->db->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	function custQry($qry)
	{
		try
		{
			$stmt 	= $this->db->prepare($qry);
			$stmt->execute();
			$result	= $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	function selectAll($table,$cond)
	{
		$condition 		= '1=1';
		$condition 		.= $cond;

		$sql    = "SELECT * FROM $table WHERE $cond";
		// return $sql;
		try
		{
			$stmt   = $this->db->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			return die($e->getMessage());
		}
	}

	function update($table,$set_value,$cond)
	{

		$query		="UPDATE $table SET $set_value WHERE $cond";
		// return $query;

		try
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			return die($e->getMessage());
		}
	}

	function insert($table,$set_value)
	{
		$query = "INSERT INTO $table set $set_value";
 		// return $query;
		try
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			return die($e->getMessage());
		}
	}

	function delete($table,$cond)
	{
		$query = "DELETE FROM $table WHERE $cond";
 		// return $query;
		try
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			return die($e->getMessage());
		}
	}
}
?>
