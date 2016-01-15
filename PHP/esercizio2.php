<html>
	<form method="get">
		<input name="ribalta" type="text"></input> <br /> <br />
		<input name="dividi" type="text"></input>
		<input type="submit" value="Go"/>
	</form>
</html>

<?php

include "libreria.php";

class MyString{

	private $testo;

	function __construct($s){

		$this->testo=$s;

	}

	public function ribaltastringa(){

		return ribaltastringa($this->testo);

	}

	public function dividistringa($s){

			return array($prima, $terza);

		}

	}



$a = new MyString($_GET["ribalta"]);
$b = new MyString($_GET["dividi"]);
$stringadivisa->$s = dividistringa($_GET["dividi"]);

echo $a->ribaltastringa();
echo $stringadivisa[0];
echo $stringadivisa[2];

?>