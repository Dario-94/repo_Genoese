//tramite il ready prima ci assucuriamo che la pagina sia carica completamente.
$().ready(function(){
	//var listItem = $('li');
	//var listItem = $('p');
	//var listItem = $(document.body.children[0]) selezioniamo il primo figlio dopo body;
	var listItem = $('li');

	//var first = listItem[0];
	//first.remove();
	//console.log(first);

	//var first = listItem.eq(0);
	//first.remove();

	for (var i=0; i<listItem.length; i++) {

		var elem = listItem.eq(i);

		if (elem.is('.special')) {
			elem.removeClass('special');
			elem.addClass('bomba');
		}
	};


})


