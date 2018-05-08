<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/configurations/connection.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/sqlDAO.php"); 
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/membersDAO.php"); 


	if (isset($_POST['run_attendance'])) {

		$data = [
			'name' => $_POST['attendance_type'], 
			'start_time' => $_POST['attendance_start_time'],
			'g_date' => $_POST['date']
		];

		$start_attendance = new membersDAO($db);
		$newRecord = $start_attendance->insertRecord($data,'gathering');
	
	}
	else
	{
		header('location: ../index.php');
	}

	header('location: ../pages/attendance.php');

?>