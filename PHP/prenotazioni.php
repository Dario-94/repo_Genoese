<?php
	include "database_prenotazioni.php";
?>

<html>
<body>
	<table width="50%" border="4px solid black" cellpadding="10" cellspacing="5"><!--creazione di una table-->
			<tr> <!--creazione di una riga-->
				<td></td>
				<?php for($i=1; $i<=10; $i++) : ?> <!--cicla $i da 1 a 10-->
					<td> <!--crea una colonna-->
						<?php echo $i; ?>
					</td>
				<?php endfor; ?>
			</tr>

		<?php foreach($posti as $fila => $postioccupati) :?>
			<tr>
				<td>
					<?php echo $fila;?>
				</td>
				<?php for($i=1; $i<=10; $i++) : ?> <!--cicla $i da 1 a 10-->
					<td>
						<?php
						if(isset($postioccupati[$i])) //controllo sui posti occupati, se sono occupati "x" sennò "-".
 							echo "x"; 
						else
							echo "-";
						?>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endforeach; ?>
	</table>