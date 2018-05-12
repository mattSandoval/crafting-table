<script>
  
  function uploadImage() {
    
    $('#image_file').on('change', function() {

        var file_data = $(this).prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('file', file_data);

        $.ajax({

            url: 'processes/image-upload.php', // point to server-side PHP script 
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(php_script_response){

              document.getElementById('add_img').innerHTML = '<img src="assets/images/' + file_data.name + '" class="img-responsive" style="min-height: 100px ;max-height: 100px;min-width:100px; max-width: 100px; border-radius: 100% " />';
            
            }

         });

    });

  }

</script>

<div class="row" style="padding: 0px;">
			
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

		<div class="col-md-12">

			<h3>PERSONAL INFORMATION</h3>

      <br />
      <br />
		
		</div>

          <div>
            
            <div class="form-group col-md-6">
              
              <input class="form-control" type="file" id="image_file" onclick="uploadImage();" data-error="Please upload an image." required />
              <label for="image_file" class="control-label">Upload an image </label>
            
              <div class="new-style help-block with-errors"></div>
            
            </div>

            <div class="col-md-12">
              
              <hr />

            </div>  

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
</div>