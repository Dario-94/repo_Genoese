<html>
	<form method="post">
		<input type="text" name="cibo"/>
		<input type="submit" value="cerca"/>
	</form>
</html>
<?php

	include "databasecibi.php";

	if(isset($_POST["cibo"])) {
		$cibo=$_POST["cibo"];

	if (isset($cibieingredienti[$cibo])) {
		echo $cibieingredienti [$cibo];
	} else {
		echo $cibo . "non esistente";
		echo "<br />";		
		echo "$cibo non esistente";
		echo "<br />";		
		echo '$cibo non esistente';
	} 

	}

//if isset serve per il controllo del programma.
//doppio apice interpreta la variabile all'interno.
//apice singolo non interpreta la variabile.
//con post nasconde i parametri dall'url mentre col get li visualizza. 
?>
