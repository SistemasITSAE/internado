<?php
	include('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
</head>
<body>
	<h1>Bienvenido <?php echo $login_sesion; ?></h1>
	<h2><a href="logout.php">Salir</a></h2>
</body>
</html>