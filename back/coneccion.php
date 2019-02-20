<?php
    require ('usuario.php');
    $servidor="127.0.0.1";
    $base="sasi";
    mysqli_report(MYSQLI_REPORT_STRICT); //necesario
    function inicio($usuario,$password){
        $connected = false;
        try {
            session_start();
            session_destroy();
            $mysqli = new mysqli($servidor,$usuario,$password,$base);
            //header('Location: frmClientes.php');
            sesion($usuario);
            header('Location: nav/menu.php');
        }
          catch (Exception $e) {
            //echo 'Error: '.$e ->getMessage();
            echo 'Usuario y/o contraseña inválidos';
            session_start();
            session_destroy();
        }     
    }
?>