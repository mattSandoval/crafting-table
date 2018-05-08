<?php
class UsersDAO{
	protected $db;

	public function __construct(DB $db){
		$this->db = $db;
	}

	/*
	* User login function
	*/
	public function testUser(String $user,String $pass){
		
		$sql = "SELECT * FROM users
				WHERE email = :user
				AND password = :pass";	
		$result = $this->db->prepare($sql);
		$result->execute([
				':user' => $user,
				':pass' => $pass]);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	/*
	* Insert new member
	*/
	public function insertRecord(Array $member) {

		$sql = "INSERT INTO 
				members(
					fName, 
					mName, 
					lName, 
					birthDate, 
					birthPlace, 
					gender, 
					languages, 
					civilStatus, 
					age, 
					job, 
					skills, 
					address, 
					education, 
					contact, 
					baptismDate, 
					baptismPlace, 
					baptizer, 
					locale, 
					currentGroup, 
				churchId)
				VALUES (
					:fName, 
					:mName, 
					:lName, 
					:birthDate, 
					:birthPlace, 
					:gender, 
					:languages, 
					:civilStatus, 
					:age, 
					:job, 
					:skills, 
					:address, 
					:education, 
					:contact, 
					:baptismDate, 
					:baptismPlace, 
					:baptizer, 
					:locale, 
					:currentGroup, 
					:churchId)";
		$insert = $this->db->prepare($sql);
		$result = $insert->execute([
			':fName' => $member['fName'], 
			':mName' => $member['mName'], 
			':lName' => $member['lName'], 
			':birthDate' => $member['birthDate'], 
			':birthPlace' => $member['birthPlace'], 
			':gender' => $member['gender'], 
			':languages' => $member['languages'], 
			':civilStatus' => $member['civilStatus'], 
			':age' => $member['age'], 
			':job' => $member['job'], 
			':skills' => $member['skills'], 
			':address' => $member['address'], 
			':education' => $member['education'], 
			':contact' => $member['contact'], 
			':baptismDate' => $member['baptismDate'], 
			':baptismPlace' => $member['baptismPlace'], 
			':baptizer' => $member['baptizer'], 
			':locale' => $member['locale'], 
			':currentGroup' => $member['currentGroup'], 
			':churchId' => $member['churchId']
		]);
	}
	
}