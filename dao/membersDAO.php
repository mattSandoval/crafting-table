<?php 
class membersDAO extends sqlDAO
{
	protected $db;

	public function __construct(DB $db)
	{
		$this->db = $db;
	}

	/*
	* Insert new member
	*/
	public function insertRecord(Array $member, String $table)
	{

		$fields = [];
		$values = [];
		$i = 0;

		foreach ($member as $key => $value)
		{
			$fields[$i] = $key;
			$values[$i] = $value;

			$i+=1;
		}

		$insert = new sqlDAO($this->db);
		$insert->insertData($table, $fields, $values);
	}

	public function getRecord(String $table_name)
	{
		$sql = "SELECT * FROM ".$table_name;

		$result = $this->db->prepare($sql);
		$result->execute();

		return $result; 

	}

	public function getLastRecord(String $table_name)
	{
		$sql = "SELECT * FROM ".$table_name." ORDER BY id DESC LIMIT 1";

		$result = $this->db->prepare($sql);
		$result->execute();

		return $result;

	}

	public function compareSingleMemberData(String $data, String $table, Array $columns )
	{
		$count = count($columns);
		$concatOrStatement = "";
		

		for($i = 0; $i < $count; $i++)
		{
			$changer = ':'.$columns[$i];	
			
			if ($i == $count-	1)
			{
				$concatOrStatement = $concatOrStatement."$columns[$i] LIKE concat('%', $changer, '%')";
			}
		
			else
			{
				$concatOrStatement = $concatOrStatement."$columns[$i] LIKE concat('%', $changer, '%') OR ";
			}	
		
		}

		$sql = "SELECT * FROM $table WHERE ".$concatOrStatement;
		$method = "SELECT";
		$values = [$data, $data, $data];

		$this->pdoExecute($method, $sql, $columns, $values);


	}

}


	

