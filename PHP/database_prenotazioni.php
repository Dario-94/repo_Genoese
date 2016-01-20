<?php
$posti = array(
		"fila1" => array(1 => 1,
						 4 => 1,
						 9 => 1
		),

		"fila2" => array(5 => 1,
						 8 => 1,
						 9 => 1
		),

		"fila3" => array(8 => 1,
						 9 => 1,
						 10 => 1
		),

		"fila4" => array(1 => 1,
						 4 => 1,
						 5 => 1,
						 6 => 1,
						 9 => 1,
						 10 => 1
		),

);
?>

<?php
class Platea { 
	private $posti;
	private $postiperfila;

	//creazione del costrutto
	public function __construct($p, $n) { 
		$this->posti=$p;
		$this->postiperfila=$n;
	}


	//creazione di un metodo, restituisce un array 
	//con i nomi delle file presenti in platea
	public function getFile() { 
		return array_keys($this->posti);
	}

	//restituisce un array con i numeri dei posti
	//presenti in platea.
	public function getPosti() {
		$n = array();
		for ($i = 1; $i <= $this->postiperfila; $i++){ 			//cicla $i fino a quando non raggiunge 
		$n[]=$i;											   //il numero di posti che ci sono nella platea
	}
		return $n;
	}

	//controlla se il posto specificato è prenotato, ritorna intero
	//1 se il posto è prenotato, 0 se il posto è libero 
	//-1 se la fila o il numero di posto non sono validi.
	public function isPrenotato($f, $p){
		//controlla se la fila è valida
		if (isset($this->posti[$f])){
			//controlliamo se il posto è valido
			if($p >= 1 && $p <= $this->postiperfila){
				if(isset($this->posti[$f][$p])){
					return 1;
				} else{
					return 0;
				}
			}
				else {
					return -1;
				}
		} else {
			return -1;
		}
	}

	//prenota un posto, ritorna 0 se il posto viene prenotato con successo
	//1 se il posto è gia prenotato
	//-1 se la fila e il numero di posto non sono validi
	public function prenota($f, $p){
		$prenotato =$this->isPrenotato($f, $p);
		if($prenotato == 0){
			//prenota il posto
			$this->posti[$f][$p] = 1;
			return 0;
		} else{
			return $prenotato;
		}
	}

	public function libera($f, $p){
		$prenotato =$this->isPrenotato($f, $p);
		if($prenotato == 1){
			unset($this->posti[$f][$p]);
			//prenota il posto
			return 0;
		} else{
			return $prenotato;
		}
	}
}

function queryCinema($n){
	$posti = array(
		"fila1" => array(1 => 1,
						 4 => 1,
						 9 => 1
		),

		"fila2" => array(5 => 1,
						 8 => 1,
						 9 => 1
		),

		"fila3" => array(8 => 1,
						 9 => 1,
						 10 => 1
		),

		"fila4" => array(1 => 1,
						 4 => 1,
						 5 => 1,
						 6 => 1,
						 9 => 1,
						 10 => 1
		),

);
	return new Platea($posti, $n);
}

?>