<html>
	<form method="get">
		<input name="chiave" type="text"></input>
		<input type="submit"/>
	</form>
</html>

<?php
	include "databasecibi.php";
	if (isset($_GET["chiave"])) {
		// qui sonho sicuro che "chiave"
		// è definita
	foreach ($cibieingredienti as $cibo => $ingr) {
			if(strpos($ingr, $_GET["chiave"]) > -1)
			echo $cibo . "<br/>";
		}	
}
?>
