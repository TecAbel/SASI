<?php
    function sesion($usuario){
        session_start();
        $varSesion = $_SESSION['usuario'];
        if($varSesion == null || $varSesion == ''){
            $_SESSION['usuario'] = $usuario;
        }
    }
?>