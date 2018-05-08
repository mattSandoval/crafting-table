<?php
session_start();
date_default_timezone_set('Asia/Manila');
require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/dao/DB.php');
define('DB_NAME', 'msystem');
define('USER', 'root');
define('PASSWORD', '');
$db = "";
try {
	$db = new DB(DB_NAME, USER, PASSWORD);
} catch (PDOException $e) {
	echo "Error conecting to the database ".$e->getMessage();
}
