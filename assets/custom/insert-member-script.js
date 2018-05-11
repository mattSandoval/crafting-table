
	function clickEdit( card ) 
	{
		var if_editting = document.getElementById('if_editting').inneHTML = "true";
		var btn = 'edit_card' + card;
		var stat = 'status' + card;
		var formName = 'card_form' + card;
		var inputs = document.getElementById(formName).elements;
		var i = 0;
		var completed = 0;
		var count = inputs.length - 1;

		for (i = 0; i < inputs.length - 1; i++)
		{
			if(inputs[i].value !== "") {
			
				completed += 1;

			}

		}

		document.getElementById(stat).innerHTML = "<small> Completed " + completed + " / " + count + "   . Please finish and <b> SAVE </b>. </small>";
	
		$('#card_modal'+card).on('hidden.bs.modal', function () {
			clickEdit( card );    
		});

		if(completed == inputs.length - 1)
		{
			
			document.getElementById(stat).innerHTML = "<b style='color: green'>Completed ! <button class='btn btn-primary btn-sm pull-right' type='button' onclick='saveNewMember("+ card +")' >Click here to <b> SAVE </b></button></b>";		
		}

	}

	function saveNewMember( card )
	{
		alert(card);
	}





















