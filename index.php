<?php require_once('configurations/connection.php');
	  require_once('dao/sqlDAO.php');
	  require_once('dao/membersDAO.php');

$fields = ['name', 'age', 'gender'];		
$values = ['john', '12', 'male'];		

if (!isset($_SESSION['USER'])) {
	$_SESSION['LOGIN_ERROR'] = "You must login first.";
	header("location: login.php");
}

$members = new membersDAO($db);
$result1 = $members->getRecord('members');
$result2 = $members->getRecord('members');?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<?php require_once('layout/layout.php'); ?>

<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css">


<body>
	<div class="container">
	
	<input id="if_editting" value="false" hidden></input>


	<?php require_once('layout/navigation.php'); ?>		

		<div class="row">		

			<div class="col-md-8">
			
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						add members

						<button class="btn btn-xs btn-success pull-right" type="button" data-toggle="modal" data-target="#card_modal" id="edit_card" >
							<span class="glyphicon glyphicon-plus"></span>
							add a new member information
						</button>
					</div>

					<div class="panel-body">
					
						<div class="col-md-12 card_div">
									
							<div class="col-md-3">
								
								<b  id="add_img">
									<img src="assets/images/user.png" class="img-responsive" style="max-height: 100px " />
								</b>

							</div>

							<div class="col-md-9">
								
								<div class="alert alert-success">
									
									<b style="color: green">Status : 

										<i id="status"> 

											<b> Modal not active. </b>

										</i> 
									</b>	

								</div>

							</div>

						</div>

					</div>

				</div>	

			</div>
			<!--  -->

			<div class="col-md-4">
				
				<div class="panel panel-default">
					
					<div class="panel-heading">
						
						recently added

					</div>

					<div class="panel-body">
						
						<div>
							
							Raymart Sandoval Bonilla 	

							<button class="btn btn-success btn-xs pull-right" type="button">view</button>

						</div>

					</div>

				</div>

			</div>	



			<!--  -->
			<div class="col-md-8">
				
				<div class="panel panel-default">
					
					<div class="panel-heading">
						
						<h4>Members</h4>
					
					</div>

					<div class="panel-body">
						
						<b style="color: green">
							
							Save this list as :

						</b>

						<table id="example" class="table table-bordered	table-hover table-striped" class="display" style="width:100%">
					        <thead>
					            <tr>
					                <th>Name</th>
					                <th>Age</th>
					                <th>Gender</th>
					                <th>Baptism</th>
					                <th>Church ID</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<?php foreach ($result1 as $member): ?>
					        		<tr>
					        			
					        			<td><?= $member['firstName']." ".$member['lastName']." ".$member['middleName'] ?></td>
						        		<td><?= $member['age'] ?></td>
						        		<td><?= $member['gender'] ?></td>
						        		<td><?= $member['date_of_baptism'] ?></td>
						        		<td><?= $member['churchId'] ?></td>

					        		</tr>
					        	<?php endforeach ?>
					        </tbody>
					        <tfoot>
					            <tr>
					                <th>Name</th>
					                <th>Age</th>
					                <th>Gender</th>
					                <th>Baptism</th>
					                <th>Church ID</th>
					            </tr>
					        </tfoot>
					    </table>

					</div>


				</div>

			</div>

		</div>

	</div>
    

	<!-- MODAL -->



		<div class="modal fade" id="card_modal" role="dialog" aria-labelledby="cardLabel">
    
		    <div class="modal-dialog" role="document">
		      
		      <div class="modal-content">
		        
		        <div class="modal-header">
		        
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true" >&times;</span>
		          </button>

		          <h4 class="modal-title" id="cardLabel"> CARD  </h4>


		        </div>

				<form data-toggle="validator" role="form" method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/processes/add-new-member.php" enctype="multipart/form-data" id="card_form">

			        <div class="modal-body">
			        
		        		<?php include('layout/add-form.php'); ?>


			        </div>

			        <div class="modal-footer">
			        	
			        	<button id="close_modal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

			        </div>

	        	</form>

		      </div>

		    </div>

		</div>



	<!-- MODAL -->




    <script src="assets/jquery/jquery-1.12.4.js"></script>
    <script src="assets/bootstrap/js/validator.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="DataTables/Buttons-1.5.1/js/dataTables.buttons.min.js"></script>
    <!-- <script src="DataTables/Buttons-1.5.1/js/buttons.flash.min.js"></script> -->
    <script src="DataTables/jszip.min.js"></script>
    <script src="DataTables/pdfmake.min.js"></script>
    <script src="DataTables/vfs_fonts.js"></script>
    <script src="DataTables/Buttons-1.5.1/js/buttons.html5.min.js"></script>
    <script src="DataTables/Buttons-1.5.1/js/buttons.print.min.js"></script>
    <script src="assets/custom/insert-member-script.js"></script>
    <script>
        $(document).ready(function() {
		    var printCounter = 0;
		 
		    // Append a caption to the table before the DataTables initialisation
		    $('#example').append('<caption style="caption-side: bottom">Locale of Mariveles, Bataan Attendance Sheet.</caption>');
		 
		    $('#example').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                messageTop: 'Date of the Gathering',
		                title: '<?php echo "PMPMPM" ?>'
		            },
		            {
		                extend: 'pdf',
		                messageBottom: null
		            },
		            {
		                extend: 'print',
		                messageTop: function () {
		                    printCounter++;
		 
		                    if ( printCounter === 1 ) {
		                        return 'This is the first time you have printed this document.';
		                    }
		                    else {
		                        return 'You have printed this document '+printCounter+' times';
		                    }
		                },
		                messageBottom: null
		            }
		        ]
		    } );
		} );
    </script>
    <script>
    	$(document).ready(function(){
    		$('.dt-buttons button').addClass('btn btn-primary btn-sm');

    	});
    </script>
    <!-- adding members script -->
    <script src="assets/custom/insert-member-script.js"></script>
	<script>
		// $(window).bind("beforeunload", function(){
		
	 //        return confirm("Do you really want to refresh?"); 
			
		// });

		var modalFunction = function() {
			
			var inputs = document.getElementById('card_form').elements;
			var completed = 0;
			var count = inputs.length - 1;
			var if_editting = document.getElementById('if_editting').innerHTML = "true";
					

				for (i = 0; i < inputs.length - 1; i++)
				{
					if(inputs[i].value !== "") {
					
						completed += 1;

					}

				}

				$('i#status').val("<small> Completed " + completed + " / " + count + "   . Please finish and <b> SAVE </b>. </small>");

				if(completed == inputs.length - 1)
				{
					
					document.getElementById('status').innerHTML = "<b style='color: green'>Completed ! <button class='btn btn-primary btn-sm pull-right' type='button' onclick='saveNewMember("+ card +")' >Click here to <b> SAVE </b></button></b>";		
				}

		}

		$('#edit_card').on('click', modalFunction);

	</script>
</body>
</html>