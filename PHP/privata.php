<?php
include "authentication.php";
session_start();

?>

<html>
<body>

<?php if(isLogged()) : ?>
Questa è una pagina privata
<?php else : ?>
	devi fare il login;
<?php endif ?>
</body>
</html>