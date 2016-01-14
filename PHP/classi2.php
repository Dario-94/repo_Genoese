<html>
	<form method="get">
		<input name="quadrato" type="text"></input> <br /><br />
		<input name="numero1" type="text"></input>
		<input name="numero2" type="text"></input> <br /><br />
		<input name="numero3" type="text"></input>
		<input name="numero4" type="text"></input> <br /><br />
		<input name="numero5" type="text"></input>
		<input name="numero6" type="text"></input> <br /><br />
		<input name="numero7" type="text"></input>
		<input name="numero8" type="text"></input>
		<input type="submit" value="Go"/>
	</form>
</html>

<?php
include "libreria_mate.php";

$a = $_GET["quadrato"];
$a = new Numero($_GET["quadrato"]);
$b = new Numero($_GET["numero1"]);
$c = new Numero($_GET["numero3"]);
$d = new Numero($_GET["numero5"]);
$e = new Numero($_GET["numero7"]);
// $c = new Numero($_GET["numero2"]);

echo "quadrato = " . $a->quadrato() . "<br/>";
echo "somma = " . $b->somma($_GET["numero2"]) . "<br/>";
echo "sottrazione = " . $c->sottrazione($_GET["numero4"]) . "<br/>";
echo "moltiplicazione = " . $d->moltiplicazione($_GET["numero6"]) . "<br/>";
echo "divisione = " . $e->divisione($_GET["numero8"]) . "<br/>";


?>

