	var count = <?php echo $_GET['count'] ?>;
	var inputs = [];

	for (var i = 1; i < count; i++ ){
		$('#image_file_' + i).on('change', function() {
		    var file_data = $(this).prop('files')[0];   
		    var form_data = new FormData();                  
		    form_data.append('file', file_data);
		    alert(form_data);                             
		    $.ajax({
		        url: '../processes/image-upload.php', // point to server-side PHP script 
		        dataType: 'text',  // what to expect back from the PHP script, if anything
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: form_data,                         
		        type: 'post',
		        success: function(php_script_response){
		        	alert(file_data.name);
		        }
		     });
		});
	}