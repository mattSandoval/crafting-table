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
	<?php require_once('layout/navigation.php') ?>		

		<div class="row">
	
			<div class="col-md-8">
				
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
    		$('.dt-buttons button').addClass('btn btn-default btn-sm');
    		
    		$('.dt-buttons button').css({
    			'background-image' : 'url("assets/images/folder.png")',
    			'background-repeat' : 'no-repeat',
    			'background-position' : 'center',
    			'background-size' : '80% 100%',
    			'padding' : '10px',
    			'color' : 'teal',
    			'margin-bottom' : '10px',
    			'min-width' : '150px',
    			'min-height' : '150px',
    			'border-radius' : '50%',
    			'border' : 'solid teal 2px'
    		});

    	});
    </script>

</body>
</html>