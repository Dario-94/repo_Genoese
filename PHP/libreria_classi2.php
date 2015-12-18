<?php
	class Animale {
		public $nome;
		const NZAMPE=0;

		public function verso() {
			return "non so...";
		}
}


		class Cane extends Animale {
			const NZAMPE=4;
			public function verso() {
				return "bau bau";
			
		}
}

		class Papero extends Animale {
			const NZAMPE=0;
			public function verso() {
				return "qua qua";
		}
}
		
		class Pesce extends Animale {
			const NZAMPE=0;
			public function verso() {
				return "non so";
		}

}

//costanti tutte maiuscole
//nomi delle classi con iniziale maiuscola
//nomi di variabili metodi ecc. iniziano con le minuscole

?>

