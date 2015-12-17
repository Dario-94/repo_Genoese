Classi

Una classe definisce la struttura di un oggetto

Un oggetto è una struttura che contiene:
	dati (proprietà)
	funzioni (metodi)

Definire una classe

Concetti fondamentali:
-dati e funzioni
-new per instanziare un oggetto
-> per accedere a una proprietà oppure per richiamare un metodo, se il nome ha le parentesi è un metodo
$this, all'interno di un metodo,serve ad acceder alle proprietà e ai metodi dell'oggetto su cui il metodo è stato chiamato.
extends per creare una classe derivata da una classe esistente
parent:: per richiamare un metodo della classe padre

<?php
	//classe solo con proprietà 
	//senza metodi
	class Indirizzo {
		public $name;
		public $cognome;
		public $indirizzo;
		public $tel;
}

?>
