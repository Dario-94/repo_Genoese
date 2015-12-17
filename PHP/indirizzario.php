<html>
	<form method="post">
		<p>Nome:</p>
		<input name="nome" type="text"/>

		<p>Cognome:</p>
    		<input name="cognome" type="text"/>

		<p>Indirizzo:</p>
		<input name="indirizzo" type="text"/>

		<p>Tel:</p>
		<input name="tel" type="text"/>
		<input type="submit" value="GO"/>
	</form>
</html>
<?php
//&&=and
//con new si prende una classe e si crea un oggetto di quel tipo
	include "libreria_classi.php";
	if (isset($_POST["nome"]) &&
	isset($_POST["cognome"]) &&
	isset($_POST["indirizzo"]) &&
	isset($_POST["tel"]) ) {
		$indirizzo = new Indirizzo();
		$indirizzo->nome=$_POST["nome"];
		$indirizzo->cognome=$_POST["cognome"];
		$indirizzo->indirizzo=$_POST["indirizzo"];
		$indirizzo->tel=$_POST["tel"];

		echo $indirizzo->nome;
		echo $indirizzo->cognome;
		echo $indirizzo->indirizzo;
		echo $indirizzo->tel;
}

?>
