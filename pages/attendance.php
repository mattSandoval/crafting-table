<?php require_once('../configurations/connection.php');
	  require_once('../dao/sqlDAO.php');
	  require_once('../dao/membersDAO.php');

if (!isset($_SESSION['USER'])) {
	$_SESSION['LOGIN_ERROR'] = "You must login first.";
	header("location: login.php");
}
// if (!isset($_COOKIE['user'])) {
// 	header('location: login.php');
// }

$gatherings = new membersDAO($db);
$gathering = $gatherings->getLastRecord('gathering');

	foreach ($gathering as $data) {
		$gathering_id = $data['id'];
		$gathering = $data['name'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ATTENDANCE</title>
</head>
<?php require_once('../layout/layout.php') ?>

<body>
		
	<div class="container" style="padding-left: -40px">

	<?php require_once('../layout/navigation.php'); ?>

		<div class="row">
			
			<div class="col-md-3"  style=" margin-top: -20px;padding-top: 20px">
				
				<div class="panel panel-default" style="box-shadow: 1px 3px gray">	
					
					<div class="panel-heading">
						
						Search by NAME :		
					
					</div>

					<div class="panel-body">
						
						<label>Search name :</label>
						<input class="form-control" type="text" id="search_name" onchange="checkName($('#search_name').val())" />

					</div>

				</div>

				<div class="panel panel-default" style="box-shadow: 1px 3px gray">	
					
					<div class="panel-heading">
						
						Search by CHURCH ID :		
					
					</div>

					<div class="panel-body">
						
						<label>Search name :</label>
						<input class="form-control" type="text" id="search_name" />

					</div>

				</div>

				<div class="panel panel-default" style="box-shadow: 1px 3px gray">	
					
					<div class="panel-heading">
						
						Search by NAME :		
					
					</div>

					<div class="panel-body">
						
						<label>Search name :</label>
						<input class="form-control" type="text" id="search_name" />

					</div>

				</div>

			</div>

			<div class="col-md-6" >
				
				<div class="panel panel-default" style="box-shadow: 1px 3px gray">	

					<div class="panel-body" style="min-height: 550px">
						
						<div id="show_result_name">
							<p></p>
						</div>

					</div>

				</div>

			</div>

			<div class="col-md-3">
				
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						
						<p><?php echo $gathering ?></p>

					</div>

					<div class="panel-body">
						
						<div id="show_current_task">
							
							<div class="col-md-12" id="show_member_info" style="width: 100%; padding: 0px">

							</div>	


						</div>

					</div>

				</div>

			</div>
		
		</div>

	</div>

	<script src="../assets/jquery/jquery-1.12.4.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/custom/attendance.js"></script>

</body>
</html>