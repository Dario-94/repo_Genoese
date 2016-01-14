<?php

class Numero {

private $n;

public function __construct($quadrato) {

	$this->n = $quadrato;

	}

public function quadrato() {

	return $this->n * $this->n;

	}


public function somma($n2) {

	return $this->n + $n2;

	}

public function sottrazione($n3) {

	return $this->n - $n3;

	}

public function moltiplicazione($n4) {

	return $this->n * $n4;

	}

public function divisione($n5) {

	return $this->n / $n5;

	}

}

?>
