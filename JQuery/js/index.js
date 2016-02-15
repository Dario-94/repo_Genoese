$().ready(function() {

	var root = 'http://jsonplaceholder.typicode.com';
	//quando clicchiamo il pulsante col tag 
	//pressMe richiama questa funzione
	$('#pressMe').click(function(){
		var ajaxOptions = {
			url: root+'/posts',
			method: 'GET'
		};

	//esegui la chiamata e successivamente(then) esegui la callback.
	$.ajax(ajaxOptions).
	then(function(data){
		for(i = 0; i < 10; i++) {
			var row = '\
				<div class="list-group">\
				<a href="#" class="list-group-item">\
					<h4 class="list-group-item-heading">'+data[i].title+'</h4>\
					<p class="list-group-item-text">'+data[i].body+'</p>\
				</a>\
				</div>\
				';
			$('.text-center').append(row)
		};
	});
});	
});
