<?php
	include "database_prenotazioni.php";
?>

<html>
<body>
	<table width="50%" border="4px solid black" cellpadding="10" cellspacing="5">
			<tr>
				<?php for($i=1; $i<=10; $i++) : ?>
					<td>
						<?php echo $i; ?>
					</td>
				<?php endfor; ?>
			</tr>

		<?php foreach($posti as $postioccupati) :?>
			<tr>
				<?php for($i=1; $i<=10; $i++) : ?>
					<td>
						<?php
						if(isset($postioccupati[$i]))
							echo "x"; 
						else
							echo "-";
						?>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endforeach; ?>
	</table>