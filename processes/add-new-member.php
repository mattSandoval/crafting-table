<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/configurations/connection.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/sqlDAO.php"); 
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/membersDAO.php"); 
	

		$member = new membersDAO($db);		
		$event = $member->insertRecord($_POST, 'members');

		header('location: ../pages/new-member.php');
		$_SESSION['message']['success'] = "Operation Successful";
?>