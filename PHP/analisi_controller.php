<?php 
	$testo="";
	if(isset($_POST["testo"])) {
		$testo=$_POST["testo"];
	}

//tramite explode conta le parole che ci sono nel testo inserito
	$testo_arr= explode(" ", $testo);
	echo "numero parole=" . count($testo_arr);
	
	$frequenzaparole=[];
	foreach($testo_arr as $parola) {
		if(isset($frequenzaparole[$parola])) {
			$frequenzaparole[$parola]++;

		} else {

			$frequenzaparole[$parola]=1;
		}

	}
	

	arsort($frequenzaparole);	

	foreach($frequenzaparole as $parola => $cont) {
	
		echo $parola . "=" . $cont . "<br />";
	
	}
//il comando action va a richiamare la pagina che abbiamo inserito.
//il secondo foreach è un foreach su array associativo.
//arsort stampa in ordine decrescente.
?>
