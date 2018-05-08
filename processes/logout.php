<?php 

	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/configurations/connection.php");
	if (!isset($_SESSION['USER'])) {
		header("location: ../login.php");
	}else {
		unset($_SESSION['USER']);
		session_destroy();

		header("location: ../login.php");	
	}
	
	
?>