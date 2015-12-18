<?php
	include "libreria_classi2.php";
	
	function presenta($animale){
		$r="Sono " . $animale->nome;
		$r.="<br/>ho " . $animale::NZAMPE ."zampe";
		$r.="<br/>" . $animale->verso();

		return $r;
	}
	//CREIAMO UN ARRAY DI ANIMALI

	$animali=array(); 
	
  	$a=new Cane();
	$a->nome="Fido";
	$animali[]=$a;

	$a=new Cane();
	$a->nome="Wolf";
	$animali[]=$a;

	$a=new Papero();
	$a->nome="Paperino";
	$animali[]=$a;

	$a=new Pesce();
	$a->nome="Nemo";
	$animali[]=$a;

	foreach ($animali as $a) {
		echo presenta($a);
		echo "<br/><br/>";
	}

?>

class ruota{
	public $pressione;
}

class Automobile {
	function __construct() {
		$this->ruotaAD=new Ruota();
		...
}

	public $ruotaAD;
	public $ruotaAS;
	public $ruotaPD;
	public $ruotaPS;

-> ti tira fuori la proprietà classe che vai a definire.
