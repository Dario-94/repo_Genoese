$().ready(function(){

	$('input[type="email"]').keyup(function(){
		console.log($(this).val()); //this equivale all'input.
		
		$('#text').html($(this).val());
	});
});

	