<html>
	<form method="post" style="background-color:104EFF; width:50%; margin:auto; border:2px solid black; padding:5px; font-weight:900; color:FFEB00; text-align:center;">
		<p>Nome:</p>
		<input name="nome" type="text" style="border:2px solid black;"/>

		<p>Cognome:</p>
    		<input name="cognome" type="text" style="border:2px solid black;"/>

		<p>Indirizzo:</p>
		<input name="indirizzo" type="text" style="border:2px solid black;"/>

		<p>Tel:</p>
		<input name="tel" type="text" style="border:2px solid black;"/>

		<p>Cell:</p>
		<input name="ncell" type="text" style="border:2px solid black;"/>
		<br /><br />	
		<input type="submit" value="GO" style="background-color:FFEB00; font-weight:900; width:100%; border:2px solid black;"/>
	</form>
</html>
<?php
//&&=and
//con new si prende una classe e si crea un oggetto di quel tipo
	include "libreria_classi.php";
	if (isset($_POST["nome"]) &&
	isset($_POST["cognome"]) &&
	isset($_POST["indirizzo"]) &&
	isset($_POST["ncell"]) &&
	isset($_POST["tel"]) ) {
		$indirizzo = new IndirizzoEsteso();
		$indirizzo->nome=$_POST["nome"];
		$indirizzo->cognome=$_POST["cognome"];
		$indirizzo->indirizzo=$_POST["indirizzo"];
		$indirizzo->tel=$_POST["tel"];
		$indirizzo->ncell=$_POST["ncell"];

		//echo $indirizzo->nome;
		//echo $indirizzo->cognome;
		//echo $indirizzo->nomeCompleto();
		//echo $indirizzo->indirizzo;
		echo $indirizzo->visualizza();
}

?>
