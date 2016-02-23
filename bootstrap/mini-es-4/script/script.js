$(document).ready(function(){
	var maxLength = 140;
	$('textarea').keyup(function() {
  		var length = $(this).val().length;
  		var final_length = maxLength-length;
  		$('.counter').text(final_length);
  		if (length == 0 || length > maxLength) {
  			document.getElementById('button').disabled = true;
  		} else {
  			document.getElementById('button').disabled = false;
  		}
	});

	$('#button').click(function() {
  		var new_task = $('textarea[name="bomber"]').val();
  		$('textarea[name="bomber"]').val("");
  		$('.counter').html('140');
  		$('.posts').prepend('<li>'+new_task+'</li>');
	});
});