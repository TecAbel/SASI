<?php 
	require('../back/recursos.php');
	session_start();
	$varsesion = $_SESSION['usuario'];
	validarInicio($varsesion);
    $passSesion = $_SESSION['password'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>SASI | Técnicos</title>
 </head>
 <body>
 	<?php getHeader($varsesion); ?>
 </body>
 </html>