<?php
	require("recursos.php");

    session_start();
    session_destroy();
    cerrarConexion();
    header('Location: ../index.php');
?>