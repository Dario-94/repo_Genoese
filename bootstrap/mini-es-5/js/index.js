$(document).ready(function(){
	$(document).keydown(function(key){
		switch(parseInt(key.which,10)){
			case 37:
				$('img').animate({left: "-=10px"}, 'fast');
				break;
			case 38:
				$('img').animate({bottom: "+=10px"}, 'fast');
				break;
			case 39:
				$('img').animate({left: "+=10px"}, 'fast');
				break;
			case 40:
				$('img').animate({bottom: "-=10px"}, 'fast');
				break;
		}
	})

});