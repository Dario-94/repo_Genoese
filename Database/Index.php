<?php 

//Connessione al DB
$link = mysql_connect("a22docente", "softuser", "_s0ft*");
mysql_select_db("fanqook");
/*
//Esecuzione query
$query = mysql_query("SELECT login, password FROM utente");

//Tabella con nomi utenti
echo "<table border=1>\n";

//iterazione dei record
while ($record = mysql_fetch_assoc($query)){
	echo "<tr>";
	echo "<td>".$record["login"]."</td>";
	echo "<td>".$record["password"]."</td>";
	echo "</tr>";
}

echo "</table>\n";
*/

//Controllo se l'utente ha inviato il form
if(isset($_REQUEST["azione"])) {
//Controllo se l'utente ha inviato il form
	if($_REQUEST["azione"] == "Invia"){
		mysql_query("INSERT INTO post(utente, titolo, testo) 
				 	 VALUES(".$_REQUEST["id_utente"].",". "'".$_REQUEST["titolo"]."',"."'".$_REQUEST["post"]."'".")")
	;
	}
}

//Esecuzione query
$query = mysql_query("SELECT "." post.id, date_format(dataora, '%e/%m/%Y %T') AS dataora,"." utente.login, titolo ".
					 " FROM post JOIN utente ON post.utente = utente.id "."ORDER BY dataora DESC LIMIT 10");

//Tabella con nomi utenti
echo "<table border=1>\n";
echo "<tr><th>Data e ora</th><th>Utente</th><th>Titolo</th></tr>\n";

//iterazione dei record
while ($record = mysql_fetch_assoc($query)){
	echo "<tr>";
	echo "<td>".$record["dataora"]."</td>";
	echo "<td>".$record["login"]."</td>";
	echo "<td><a href='?post=".$record["id"]."'>".$record['titolo']."</a></td>";
	echo "</tr>";
}

echo "</table>\n";


//Form per invio
echo "<form method='post'>\n";

//Menù con login e value=id
echo "<select name='id_utente'>\n";
$query = mysql_query("SELECT id, login FROM utente");



while ($record = mysql_fetch_assoc($query)){
	echo "<option value='".$record["id"]."'>";
	echo $record["login"];
	echo "</option>\n";
}

echo "</select>\n";

//Casella di testo per il titolo
echo "<input type='text' name='titolo' />\n";
echo "<br/>\n";

//Area di testo
echo "<textarea name='post' cols=80 rows=20></textarea>\n";
echo "<br/>\n";

//Tasto submit
echo "<input type='submit' name='azione' value='Invia'/>\n";

echo "</form>\n";

?>