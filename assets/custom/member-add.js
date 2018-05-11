
	function clickEdit( card ) 
	{
		var if_editting = document.getElementById('if_editting').inneHTML = "true";
		var btn = 'edit_card' + card;
		var stat = 'status' + card;
		var formName = 'card_form' + card;
		var inputs = document.getElementById(formName).elements;
		var i = 0;
		var completed = 0;

		for (i = 0; i < inputs.length - 2; i++)
		{
			if(inputs[i].value !== "") {
			
				completed += 1;

			}

		}

		document.getElementById(stat).innerHTML = "<small> Completed " + completed + " / 22   . Please finish and <b> SAVE </b>. </small>";
	
		$('#card_modal'+card).on('hidden.bs.modal', function () {
			clickEdit( card );    
		});

		if(completed == inputs.length - 2)
		{
			
			document.getElementById(stat).innerHTML = "Completed ! <button class='btn btn-success btn-xs' type='button' onclick='saveNewMember("+ card +")' >Save</button>";		
		}

	}

	function saveNewMember( card )
	{
		alert(card);
	}





















