<html>
dividi stringa: <br />
<form method = "get">
	dividi:<input name="dividi" type="text" size="5"></input>
	testo da dividere: <input name="testo" type="text" size="5"></input>
	<input type="submit" value="value"/>
</form>
</html>

<?php

include "esercizio2.php";

$s=new MyString($_GET["testo"]);
$stringadivisa = $s->dividi($_GET["dividi"]);

echo $stringadivisa[0];
echo $stringadivisa[1] . "<br>" . "stringa evidenzia:" . ($_GET["dividi"]) . "</br>";
echo $s->evidenzia($_GET["dividi"]);

?>