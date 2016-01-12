<html>
	<form method="get">
		<input name="price" type="text"></input>
		<input name="tax" type="text"></input>
		<input name="receipt" type="text"></input>
		<input type="submit"/>
	</form>
</html>

<?php

//function iva($a, $b) {
	//$risultato = $a+(($a*$b)/100);
	//return $risultato;
}

function modulo($a, $b) {
	$risultato = $a % $b;
	return $risultato;
}

	$a = $_GET["price"];
	$b = $_GET["tax"];	

	echo $restodivisione = modulo($a, $b);
	 
	//$a = $_GET["price"];
	//$b = $_GET["tax"];
	//$c = $_GET["receipt"];

	//echo $prezzo = iva($a, $b)
	//echo $risultato = $a+(($a*$b)/100);
?>
