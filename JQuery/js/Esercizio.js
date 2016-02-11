$().ready(function(){
	var first = $('h1');
	var second = $('h2');

	$("#toggle").click(function(){
		if(first.is('.red')){
			UncolorMe();
		} else {
			ColorMe();
		}
	});

	function ColorMe(){
		first.addClass('red');
		second.addClass('green');
		$('h1').html('Ciao sono rosso');
		$('h2').html('Ciao sono verde');
	}

	function UncolorMe(){
		first.removeClass('red');
		second.removeClass('green');
		$('h1').html('Ciao sono H1');
		$('h2').html('Ciao sono H2');
	}

	})