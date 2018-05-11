<?php session_start();
	$count = 0;
	if (isset($_GET['count']))
	{
		$count = $_GET['count'];
		$_SESSION['add_member_count'] = $count;
	}else{
		unset($_SESSION['add_member_count']);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crafting Table | Add Member</title>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/layout.php'); ?>

</head>
<body>
	
	<div class="container">
		
		<input id="if_editting" value="false" hidden></input>

		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/navigation.php'); ?>
		
		<div class="row">
			
			<?php if (!isset($_SESSION['add_member_count'])): ?>
						
				<div class="col-md-8">
					
					<div class="panel panel-info">
							
						<div class="panel-heading">
							
							<b>Provide number of members to add :</b>

						</div>
						
						<div class="panel-body">
							
							

							<form data-toggle="validator" role="form" method="get" action="<?php $_SERVER['PHP_SELF'] ?>">

								<div class="form-group">
		              
				        
					                <input type="number" name="count" class="form-control" id="age" placeholder="type here" data-error="Please fill this up." required>
					            
					               <div class="new-style help-block with-errors"></div>
					            
					            </div>

								<button type="submit" class="btn btn-primary">
									
									ENTER
								
								</button>

							</form>

						</div>

					</div>

				</div>

			<?php endif ?>

			<div class="col-md-4">
					
				<div class="panel panel-default">
					
					<div class="panel-heading">
						
						recently added

					</div>

					<div class="panel-body">
						
						<div class="alert alert-info">
							
							Raymart Sandoval Bonilla 	

							<button class="btn btn-success btn-xs pull-right" type="button">view</button>

						</div>

					</div>

				</div>

			</div>

			<?php if (isset($_SESSION['add_member_count'])): ?>
				
				<div class="col-md-8">
					
					<div class="panel panel-default" style="box-shadow: 0 10px 10px #222;">
						
						<div class="panel-heading">
							<?php echo $_SESSION['add_member_count'] ?> adding cards generated.
						</div>

						<div class="panel-body">
							
							<?php for($i = 1; $i <= $count; $i++): ?>

								<div class="col-md-12 card_div<?php echo $i ?>">
									
									<form data-toggle="validator" role="form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

										<div class="panel panel-info">
											
											<div class="panel-heading">
											
												CARD <?php echo $i ?>

												<button class="btn btn-xs btn-primary pull-right" type="button" data-toggle="modal" data-target="#card_modal<?php echo $i ?>" onclick="clickEdit(<?php echo $i ?>)" id="edit_card<?php echo $i ?>" >edit</button>
											
											</div>

											<div class="panel-body">
												
												<div class="col-md-3">
													
													<b  id="add_img<?php echo $i ?>">
														<img src="../assets/images/user.png" class="img-responsive" style="max-height: 100px " />
													</b>

												</div>

												<div class="col-md-9">
													
													<div class="alert alert-success" style="padding: 40px;">
														
														<b style="color: maroon">Status : 

															<i id="status<?php echo $i ?>"> 

																<small> not yet editted </small>

															</i> 
														</b>	

													</div>

												</div>

											</div>


										</div>

									</form>

								</div>

							<?php endfor ?>

						</div>

					</div>

				</div>

				<!-- modals -->

				<?php for($x = 1; $x <= $count; $x++): ?>

					<div class="modal fade" id="card_modal<?php echo $x ?>" role="dialog" aria-labelledby="cardLabel<?php echo $x ?>">
    
					    <div class="modal-dialog" role="document">
					      
					      <div class="modal-content">
					        
					        <div class="modal-header">
					        
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					            <span aria-hidden="true" >&times;</span>
					          </button>

					          <h4 class="modal-title" id="cardLabel<?php echo $i ?>"> CARD <?php echo $x ?> </h4>


					        </div>

							<form data-toggle="validator" role="form" method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/processes/add-new-member.php" enctype="multipart/form-data" id="card_form<?php echo $x ?>">

						        <div class="modal-body">
						        
					        		<?php include('../layout/add-form.php'); ?>


						        </div>

						        <div class="modal-footer">
						        	
						        	<button id="close_modal<?php echo $x ?>" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						        </div>

				        	</form>

					      </div>

					    </div>

					</div>

				<?php endfor ?>

		<?php endif ?>

		</div>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/scripts.php'); ?>
	<script src="../assets/custom/insert-member-script.js"></script>
	<script>		
		$(window).bind("beforeunload", function(){
		
	        return confirm("Do you really want to refresh?"); 
			
		});
	</script>

</body>

</html>