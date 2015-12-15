<?php

	include "databasecibi.php";

	$cibo="Biscottix";

	if (isset($cibieingredienti[$cibo])) {
		echo $cibieingredienti [$cibo];
	} else {
		echo $cibo . "non esistente";
		echo "<br />";		
		echo "$cibo non esistente";
		echo "<br />";		
		echo '$cibo non esistente';
	} 

//if isset serve per il controllo del programma.
//doppio apice interpreta la variabile all'interno.
//apice singolo non interpreta la variabile. 
?>


