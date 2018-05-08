<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/configurations/connection.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/sqlDAO.php"); 
	require_once($_SERVER['DOCUMENT_ROOT']."/crafting-table/dao/membersDAO.php"); 
	

	$member = new membersDAO($db);
	$columns = ['firstName', 'middleName', 'lastName'];

	$input = $member->compareSingleMemberData($_GET['name'], 'members', $columns);
	$result = $input;

?>

<?php if ($_SESSION['result'] == NULL): ?>
	
	<h4>Searching for <b style="color: teal"><?= $_GET['name'] ?></b></h4>

	<div class="alert alert-danger">
	
		<p>NOT FOUND.</p>
	
	</div>

<?php unset($_SESSION['result']);
endif; ?>


<?php if (isset($_SESSION['result']) && $_SESSION['result'] !== NULL): ?>
	
	<h4>Searching for <b style="color: teal"><?= $_GET['name'] ?></b></h4>

	<div class="alert alert-success">
	
		<p>FOUND.</p>
	
	</div>

<?php unset($_SESSION['result']);
endif; ?>

