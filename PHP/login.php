<?php
include "authentication.php";
session_start();

$errore="false";
if(isset($_POST["user"]) && isset($_POST["pass"]) && $_POST["user"] != "" && $_POST["pass"] != ""){
	if(verifica($_POST["user"], $_POST["pass"])){
		$_SESSION["login_user"] = $_POST["user"];
	} else {
		$errore=true;
	}
}

if(isLogged()){
	header("Location: /repo_Genoese/PHP/privata.php");
}
?>

<html>
<body>
	<?php if(isLogged()) : ?>
		Buongiorno amico mio!!
	<?php else : ?>
	<form method="post" style="border:4px solid red; padding:4px;  text-align:center; width:30%; 
	background-color:yellow; height:50%; margin-left:500px;">
		<input type="text" name="user" style="border:2px solid red; width:90%;"></input><br/><br/><br/>
		<input type="password" name="pass" style="border:2px solid red; width:90%;"></input> <br/><br/><br/>
		<?php if($errore) :?>
		username e password errati;
		<?endif; ?>
		<input type="submit" value="Login" style="width:90%; background-color:red; 	
		font-weight:bold; color:yellow; margin-top:60%;"></input>
	</form>
	<?endif; ?>
</body>
</html>