	//tramite il ready prima ci assucuriamo che la pagina sia carica completamente.
	$().ready(function(){
		//var listItem = $('li');
		//var listItem = $('p');
		//var listItem = $(document.body.children[0]) selezioniamo il primo figlio dopo body;
		var first = $('h1');
		var second = $('h2');

		first.addClass('red');
		second.addClass('green');

		//var first = listItem[0];
		//first.remove();
		//console.log(first);

		//var first = listItem.eq(0);
		//first.remove();

	})