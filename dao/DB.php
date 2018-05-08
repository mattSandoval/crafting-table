<?php
class DB extends PDO
{
	protected $conn;
	private $dsn;
	private $user;
	private $pass;

	public function __construct($database, $user, $password)
	{
		$this->dsn = 'mysql:host=127.0.0.1;dbname=' . $database;
		$this->user = $user;
		$this->passwd = $password;
		$this->conn == parent::__construct(
			$this->dsn,
			$this->user,
			$this->pass);
	}
	
}