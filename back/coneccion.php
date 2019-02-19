<?php
    $servidor="127.0.0.1";
    $base="sasi";
    mysqli_report(MYSQLI_REPORT_STRICT); //necesario
    function inicio($usuario,$password){
        $connected = false;
        try {
            $mysqli = new mysqli($servidor,$usuario,$password,$base);
            header('Location: frmClientes.php');
        }
          catch (Exception $e) {
            echo 'Error: '.$e ->getMessage();
        } 
               
    }
?>