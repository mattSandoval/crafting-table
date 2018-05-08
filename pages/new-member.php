<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Crafting Table | Add Member</title>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/layout.php'); ?>
	
</head>
<body>
	
	<div class="container">
		
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/navigation.php'); ?>
		
		<div class="row">
			
			<?php if (!isset($_SESSION['add_member_count'])): ?>
					
				<div class="col-md-4">
					
					<div class="panel panel-info">
							
						<div class="panel-heading">
							
							<b>Provide number of members to add :</b>

						</div>

						<div class="panel-body">
							
							<div class="form-group">
		              
				        
				                <input type="number" name="age" class="form-control" id="age" placeholder="type here" data-error="Please fill this up." required>
				            
				               <div class="new-style help-block with-errors"></div>
				            
				            </div>

							<form data-toggle="validator" role="form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

								<button type="submit" class="btn btn-block" name="count_submit">
									
									ENTER
								
								</button>

							</form>

						</div>

					</div>

				</div>

			<?php endif ?>

			<?php if (isset($_SESSION['add_member_count'])): ?>
				
			<?php endif ?>

		</div>


		<div class="row" style="padding: 20px;">
			
			<?php if (isset($_SESSION['message']['success'])): ?>
				
				<div class="col-md-8 alert alert-success">				
					<p>
					Operation Successful.</p>
					<a href="new-member.php">
						<span class="glyphicon glyphicon-cross"></span>
					</a>
				</div>	


			<?php unset($_SESSION['message']['success']);
			endif ?>	

			<div class="col-md-8 panel panel-default" style="background: rgba(255, 255, 255, 1); color: black ">

				<div class="col-md-12">

					<h3>PERSONAL INFORMATION</h3>
				
				</div>

				<form data-toggle="validator" role="form" method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/crafting-table/processes/add-new-member.php">

		          <div>
		    
		            <div class="form-group col-md-4">
		              
		              <label for="fName" class="control-label">First Name :</label>
		              <input type="text" name="firstName" class="form-control" id="fName" placeholder="First Name" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="mName" class="control-label">Middle Name :</label>
		              <input type="text" name="middleName" class="form-control" id="mName" placeholder="Middle Name" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="lName" class="control-label">Last Name :</label>
		              <input type="text" name="lastName" class="form-control" id="lName" placeholder="Last Name" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="birthDate" class="control-label">Date of Birth :</label>
		              <input type="date" name="date_of_birth" class="form-control" id="birthDate" placeholder="First Name" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-8">
		              <label for="birthPlace" class="control-label">Place of Birth :</label>
		              <textarea type="text" class="form-control" id="birthPlace" placeholder="Place of Birth"  name="placeOfBirth" data-error="Please fill this up." required></textarea>

		              <div class="new-style help-block with-errors"></div>  
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="gender" class="control-label">Gender :</label>
		              <input type="text" name="gender" class="form-control" id="gender" placeholder="Male or Female" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-8">
		              
		              <label for="languages" class="control-label">Languages :</label>
		              <input type="text" name="language" class="form-control" id="languages" placeholder="Languages" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="civilStatus" class="control-label">Civil Status :</label>
		              <input type="text" name="civilStatus" class="form-control" id="civilStatus" placeholder="Civil Status" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="age" class="control-label">Age :</label>
		              <input type="number" name="age" class="form-control" id="age" placeholder="Age" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="job" class="control-label">Job :</label>
		              <input type="text" name="job" class="form-control" id="job" placeholder="Job" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="skills" class="control-label">Skills :</label>
		              <input type="text" name="skills" class="form-control" id="skills" placeholder="Skills" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		            <div class="form-group col-md-8">
		              <label for="address" class="control-label">Address :</label>
		              <textarea type="text" class="form-control" id="address" placeholder="Adress"  name="homeAddress" data-error="Please fill this up." required></textarea>

		              <div class="new-style help-block with-errors"></div>  
		            </div>

		            <div class="form-group col-md-8">
		              <label for="education" class="control-label">Educational Attainment :</label>
		              <textarea type="text" class="form-control" id="education" placeholder="Educational Attainment"  name="education" data-error="Please fill this up." required></textarea>

		              <div class="new-style help-block with-errors"></div>  
		            </div>

		            <div class="form-group col-md-4">
		              
		              <label for="contact" class="control-label">Contact Number :</label>
		              <input type="text" name="contactNumber" class="form-control" id="contact" placeholder="Contact number" data-error="Please fill this up." required>
		            
		              <div class="new-style help-block with-errors"></div>
		            
		            </div>

		          </div>
		  
		          <div class="col-md-12">

		            <h3>CHURCH INFORMATION</h3>
		          
		          </div>

		          <div>
		            
		            <div class="form-group">
		            
		              <div class="form-group col-md-4">
		              
		                <label for="baptismDate" class="control-label">Date of Baptism :</label>
		                <input type="date" name="date_of_baptism" class="form-control" id="baptismDate" placeholder="Date of Baptism" data-error="Please fill this up." required>
		              
		                <div class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-8">
		                <label for="baptismPlace" class="control-label">Place of Baptism :</label>
		                <textarea type="text" class="form-control" id="baptismPlace" placeholder="Place of Baptism"  name="placeOfBaptism" data-error="Please fill this up." required></textarea>

		                <div class="new-style help-block with-errors"></div>  
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="baptizer" class="control-label">Baptizer :</label>
		                <input type="text" name="baptizer" class="form-control" id="baptizer" placeholder="Baptizer" data-error="Please fill this up." required>
		              
		                <div class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="locale" class="control-label">Current Locale :</label>
		                <input type="text" name="localeOf" class="form-control" id="locale" placeholder="Current Locale" data-error="Please fill this up." required>
		              
		                <div class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="currentGroup" class="control-label">Current Group :</label>
		                <input type="text" name="churchGroup" class="form-control" id="currentGroup" placeholder="Group" data-error="Please fill this up." required>
		              
		                <div class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="chatSauce" class="control-label">Chatsauce account :</label>
		                <input type="text" name="chatsauce" class="form-control" id="chatSauce" placeholder="chatSauce" data-error="Please fill this up." required>
		              
		                <div class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="email" class="control-label">EMAIL :</label>
		                <input type="text" name="email_optional" class="form-control" id="email" placeholder="email" data-error="Please fill this up." required>
		              
		                <div id="txtHint" class="new-style help-block with-errors"></div>
		              
		              </div>

		              <div class="form-group col-md-4">
		              
		                <label for="churchId" class="control-label">Church ID :</label>
		                  <input type="text" name="churchId" class="form-control" id="churchId" placeholder="ID" data-error="Please fill this up." required>
		              
		                <div  class="new-style help-block with-errors"></div>
		              
		              </div>

		            </div>

		          </div>

		          <div class="form-group col-md-4 col-md-offset-4">
		              
		            <br /> 

		            <button type="submit" class="btn btn-block" style="background: #222; color: white" value="Not given">SUBMIT NEW MEMBER INFO</button>
		          
		            <br />
		            <br />
		            <br />
		          </div>

		        </form>

			</div>

		</div>

	</div>

</body>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/crafting-table/layout/scripts.php'); ?>

</html>