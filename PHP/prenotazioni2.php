<?php
include "database_prenotazioni.php";

$cinema = queryCinema(16);

$nfila="";
$nposto="";
$risultato="";
if (isset($_POST["nfila"]) && isset($_POST["nposto"])){
	$nfila=$_POST["nfila"];
	$nposto=$_POST["nposto"];

if (isset($_POST["libera"])){
	$cinema->libera($nfila, $nposto);
}

if (isset($_POST["prenota"])){
	$risultato=$cinema->prenota($nfila, $nposto);
}

}
?>

<html>
<body>
	<table  width="50%" border="2px solid black" cellpadding="20" cellspacing="2" >
		<?php foreach ($cinema->getFile() as $fila) : ?>
			<tr>
				<?php foreach ($cinema->getPosti() as $posto) : ?>
						<?php if($cinema->isPrenotato($fila, $posto) == 0) : ?>
							<td style="background-color:red"></td>
						<?php else : ?>
							<td style="background-color:green"></td>
						<?php endif; ?>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</table>

<form method="post">
	<select name="nfila">
		<?php foreach($cinema->getFile() as $f) : ?>
			<option value="<?php echo $f; ?>"> <?php echo $f; ?> </option>
		<?php endforeach; ?>
	</select>

	<select name="nposto">
		<?php foreach($cinema->getPosti() as $p) : ?>
			<option value="<?php echo $p; ?>"> <?php echo $p; ?> </option>
		<?php endforeach; ?>
	</select>

	<input type="submit" name="prenota" value="prenota"></input>
	<input type="submit" name="libera" value="libera"></input>

</form>

<?php if($risultato === 0) : ?>
	Il posto <?php echo $nfila; ?> - <?php echo $nposto; ?> e' stato prenotato con successo!!
<?php endif; ?>
<?php if($risultato === 1) : ?>
	Il posto <?php echo $nfila; ?> - <?php echo $nposto; ?> e' gia' occupato!!
<?php endif; ?>
<?php if($risultato === -1) : ?>
	Il posto <?php echo $nfila; ?> - <?php echo $nposto; ?> non e' valida!!
<?php endif; ?>
</body>
</html>