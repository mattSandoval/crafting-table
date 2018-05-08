<?php 
class sqlDAO
{
	protected $db;

	public function __construct(DB $db)
	{
		$this->db = $db;
	}


	public function getData(String $table_name)
	{
		
		$sqlGETALL = "SELECT * FROM $table_name";

		$results = $this->db->prepare($sqlGETALL);
		$results->execute();

		$results->fetch(PDO::FETCH_ASSOC);

		return $results;
	}

	// I want to build a function that requires fields to insert data to db
	// example : INSERT INTO $fields['table_name'] ($values[0], $values[1]) VALUES ($values[0], $values[1]);
	public function insertData(String $table, Array $fields,Array $values)
	{
		
		$bindFields = "";
		$bindValues = "";
		$i = 0;
		$fCount = count($fields);
		$vCount = count($values);
		$sqlINSERT = "";

		if ($fCount == $vCount) 
		{
			
			foreach ($fields as $key => $value) {

				if ($i == 0)
				{
					$bindFields = $bindFields."".$fields[$key];
					$bindValues = $bindValues.":".$value;

					$i+=1;
				}
				else if($i == $vCount-1)
				{

					$bindFields = "(".$bindFields.", ".$fields[$key].")";
					$bindValues = "(".$bindValues.", :".$fields[$key].")";

					$sqlINSERT = "INSERT INTO ".$table." ".$bindFields." "." VALUES ".$bindValues;
				}
				else
				{
					$bindFields = $bindFields.", ".$fields[$key];
					$bindValues = $bindValues.", :".$fields[$key];

					$i+=1;						
				
				}

			}

		}
		else
		{
			echo "Fields and values does'nt match";
		}

		$method = "INSERT";

		$this->pdoExecute($method,$sqlINSERT, $fields, $values);

	}

	// I want to create a function that can prepare and execute by passing some values to it
	public function pdoExecute(String $method,String $sql,Array $fields, $values)
	{
		if ($method == "INSERT") 
		{

			$INSERT = $this->db->prepare($sql);
			$count = count($fields);
			$executeArray = [];
			$sub = [];
			$i = 0;

			for($i = 0; $i < $count; $i++) {
				
				$sub[$i] = ':'.$fields[$i];
				$x = $sub[$i];

				$executeArray[$x] = $values[$i];
			}

				$INSERT->execute($executeArray);
		}
		
		else if($method == "SELECT")
		{
		
			$SELECT = $this->db->prepare($sql);
			
			$count = count($fields);
			$executeArray = [];
			$sub = [];
			$i = 0;

			for($i = 0; $i < $count; $i++) {
				
				$sub[$i] = ':'.$fields[$i];
				$x = $sub[$i];

				$executeArray[$x] = $values[$i];
			}			
		
			$SELECT->execute($executeArray);
			$result = $SELECT->fetch(PDO::FETCH_ASSOC);

			if ($result == false || $result == null)
			{
				$_SESSION['result'] = NULL;
			}
			else
			{
				$_SESSION['result'] = $result;
			}
		}
	}

}

























