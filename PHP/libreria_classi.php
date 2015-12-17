<?php
	//classe solo con proprietà 
	//senza metodi
	//con this(etichetta PHP) si concatenano nome e cognome
	class Indirizzo {
		public $nome;
		public $cognome;
		public $indirizzo;
		public $tel;
		public $ncell;


		public function nomeCompleto() {
			$n=$this->nome . " " . $this->cognome; 
			return $n;
		
		}
		public function visualizza() {
		$n=$this->nomeCompleto();
		$n=$n."<br/>";
		$n=$n. $this->indirizzo;
		$n=$n."<br/>";
		$n=$n. $this->tel;

		return $n;
		}
	}

		class IndirizzoEsteso extends Indirizzo {
			public $ncell;

			public function visualizza() {
				$n=parent::visualizza();
				$n=$n . "<br/>n. cell: ".$this->ncell;

				return $n;
			}
			
		}

?>
