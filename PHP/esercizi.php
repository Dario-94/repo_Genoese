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
//}

//function modulo($a, $b) {
	//$risultato = $a % $b;
	//return $risultato;
//}

	//$a = $_GET["price"];
	//$b = $_GET["tax"];	

	//echo $restodivisione = modulo($a, $b);
	 
	//$a = $_GET["price"];
	//$b = $_GET["tax"];
	//$c = $_GET["receipt"];

	//echo $prezzo = iva($a, $b)
	//echo $risultato = $a+(($a*$b)/100);

/*function modulo($numero) {
	if ($numero < 0) {
		$numero = -$numero;
	}
	return $numero;
}

	$result = modulo(-5);
	echo 8 + $result;
	*/
?>

<?php

class Numero {

private $n;

public function __construct($numero) {

		$this->n = $numero;
	}

public function modulo() {

	if ($this->n < 0) {

			return -$this->n;

		}

		return $this->$n;

	}	

}

/*Istanzio nuovo oggetto di classe Numero*/
$a = new Numero(-5);
$b = new Numero(100);

/*eseguo modulo sull'oggetto di tipo numero*/
echo $a->modulo();