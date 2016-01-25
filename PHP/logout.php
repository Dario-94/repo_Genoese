<?php
session_start();

$nomeutente ="Non hai una sessione attiva";
if (isset($_SESSION["login_user"]) && $_SESSION["login_user"] != ""){
	$nomeutente=$_SESSION["login_user"];
}

if(isset($_POST["logout"])){
	session_destroy();
}

?>

<html>
<body>
	Buongiorno <?php echo $nomeutente ?>
	<br/>
	<form method="post">
		<input type="submit" value="logout" name="logout"></input>
	</form>
</body>
</html>