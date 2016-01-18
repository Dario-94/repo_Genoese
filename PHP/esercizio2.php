<?php

include "libreria.php";

class MyString{

	private $testo;

	function __construct($s){

		$this->testo=$s;

	}

	public function ribalta(){

		return ribaltastringa($this->testo);

	}

	public function dividi($s){
			$inizio=strpos($this->testo, $s);
			if($inizio > -1) {
				$prima=substr($this->testo, 0, $inizio);
				$terza=substr($this->testo, $inizio + strlen($s));
				return array($prima, $terza);				
			}

		}

	public function evidenzia($s){

		$a = $this->dividi($s);
		return $a[0] . "<b>" . $s . "</b>" . $a [1];
	}

	}


?>