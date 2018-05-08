<?php require_once('configurations/connection.php');

// How to set cookie

// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// end ( How to set cookie )

// How to delete a cookie

// setcookie("user", "", time() - 3600);

// end ( How to delete a cookie )
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Crafting Table | Login</title>
	<?php require_once('layout/layout.php'); ?>
</head>
<style>
	
	input
	{
		font-size: 40px!important;
		padding: 10px!important;
	}

</style>
<body >
	<div class="container-fluid" style="height: 100%;">

		<div class="row" style="padding-top: 100px;">

			<div class="col-md-4 col-md-offset-4">

				<div class="panel panel-default">
					
					<div class="panel-heading" style="background: linear-gradient(to right, #eee 0%, teal 100%); color: teal">
						<h2>Login</h2>
					</div>

					<div class="panel-body">
				
						<form data-toggle="validator" role="form" method="post" action="processes/login.php">
							
							<div class="form-group">
								
								<?php if (isset($_SESSION['LOGIN_ERROR'])): ?>
									
									<div class="alert alert-danger fade in">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong>Warning!</strong> <?php echo $_SESSION['LOGIN_ERROR'] ?>
									</div>
									
									<?php unset($_SESSION['LOGIN_ERROR']);  ?>
								
								<?php endif ?>
								
								<label for="inputUsername" class="control-label">Username</label>
								<input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" data-error="Please complete the form." required>
							
								<div class="help-block with-errors"></div>
							
							</div>

							<div class="form-group">
							
								<label for="inputPassword" class="control-label">Password</label>
								<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" data-error="Please complete the form." required>
							
								<div class="help-block with-errors"></div>
							
							</div>

							<div class="form-group">
							
								<button type="submit" class="btn btn-block" style="background: linear-gradient(to right, #222 0%, teal 80%); color: white" name="login"> <b>Submit</b></button>
							
							</div>

						</form>

					</div>

				</div>

			</div>	

		</div>

	</div>
</body>
<?php require_once('layout/scripts.php'); ?>
</html>































































