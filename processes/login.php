<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/configurations/connection.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/UsersDAO.php");

	if (isset($_POST['login'])) {
		// 
		// 
		// Check if there's an existing user, using class UsersDAO on testUser function
		$user = new UsersDAO($db);
		$result = $user->testUser($_POST['username'], $_POST['password']);
		// 
		// 
		// If not found, return to login page with error.
		if ($result == false) {
			var_dump($result);
			$_SESSION['LOGIN_ERROR'] = "Invalid User.";
			header("location: ../login.php");
		}else {
		// 
		// 
		// If existing, redirect to homepage and set active user
			$_SESSION['USER'] = $_POST['username'];
			$_SESSION['LOGIN_ERROR'] == "Please login.";
			header("location: ../");
		}


	}else{
		header("location: ../");
	}


?>