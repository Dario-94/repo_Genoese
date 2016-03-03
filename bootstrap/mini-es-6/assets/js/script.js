$(document).ready(function(){
	var status = $('#status').val();

	var selectiOption = {
		"status":{
			0:"stundent",1:"employed",2:"unemployed"
		},
		"gender":{
			3:"male",4:"female",5:"other"
		}
	}


//primo each mi posiziono su status e su gender
	$.each( selectiOption, function( key, value ) {
	//sul secondo each vado a vedere cosa ce dentro a status e gender quindi (0:student ,1:employed)
		$.each(value, function(secondKey ,secondValue){
			if(key=="status"){
				$('#status').append($('<option>',{
					value: secondKey,
					text: secondValue
				}));
			}
			if(key=="gender"){
				$('#gender').append($('<option>',{
					value: secondKey,
					text: secondValue
				}));
			}
		})
	});

	$("#gender").select2();

	$("#status").select2();

	$('select').select2({
  		placeholder: 'Select an option'
	});

	function isEmail(email){
		var $email = $('#Email1'); //change form to id or containment selector
		var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
		if ($email.val() == '' || !re.test($email.val())){
    		console.log('Please enter a valid email address.');
    		return false;
		} else {
			console.log('Valid email');
			return true;
		}
	}

	function IsNumeric(tel){  
  		if($.isNumeric(tel)){  
  			console.log('sono un numero');
      		return true;
        } else {
        	console.log('non sono un numero');
        	return false;
        }  
	}

	function sendTheMail(param, key){
		console.log('Ho fame');
		console.log(param);
		console.log(key);

		/*$.ajax({
			type: "POST",
 			url: "https://mandrillapp.com/api/1.0/messages/send.json",
  			data: {
  				'key': key,
  				'message': {
  					'from_email': param.message.from_email,
  					'to': param.message.to,
  					'subject': param.message.subject,
  					'text': param.message.textarea
  				}
  			}
		}).done(function (response){
			console.log('sono la risposta'+response);
		});*/
	}

	$('#button').click(function(){

		var key = "zY4amYJtRK9aaLvrMbiI4A";

		var name = $('#Input1').val();
		console.log(name);
		var status = $('#status').val();
		console.log(status);
		var gender = $('#gender').val();
		console.log(gender);
		var lName = $('#Input2').val();
		console.log(lName);
		var email = $('#Email1').val();
		console.log(email);
		var company = $('#Input3').val();
		console.log(company);
		var phone = $('#Input4').val();
		console.log(phone);
		var textarea = $('#Input5').val();
		console.log(textarea);

		if(name != "" && lName != "" && status != "" && gender != "" && email != "" && company != "" && phone != "" && textarea != "" && IsNumeric(phone) && isEmail(email)){
			var param = {
				"message":{
					"from_email":email,
					"to": [{
						"email":'andreaf.speziale@top-ix.org'
					}],
					"subject": "Super mega bomber",
					"text": textarea
				}
			};

		sendTheMail(param, key);

			console.log('Sei un bomber');
		} else {
			console.log('Sei un fallito');
		}
	})
});