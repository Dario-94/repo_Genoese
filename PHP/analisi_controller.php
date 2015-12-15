<?php 
	$testo="";
	if(isset($_POST["testo"])) {
		$testo=$_POST["testo"];
	}

//tramite explode conta le parole che ci sono nel testo inserito
	$testo_arr= explode("", $testo);
	echo "numero parole=" . count($testo_arr);

	
	
//il comando action va a richiamare la pagina che abbiamo inserito
?>
