<?php
    require("../back/recursos.php");
    session_start();
    $varsesion = $_SESSION['usuario'];
    validarInicio($varsesion);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SASI | Menú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="main.js"></script>
</head>
<body>
    <?php getHeader($varsesion); ?>
    <section class="forms">
        <h1>Menú de opciones</h1>
        <fieldset>
            <div class="contenedorPrincipal">
                <div class="contenedor izq">
                    <div class="clientes" for="clientes">
                        <a href="frmClientes.php" id="clientes">Registro de <br> clientes</a>
                    </div>
                    <div class="tecnicos">
                        <a href="frmEquipos.php">Registro de <br>equipos</a>
                    </div>
                </div>
                <div class="contenedor">
                    <div>
                        <a href="frmServicios.php">Registro de <br> servicios</a>
                    </div>
                    <div>
                        <a href="frmTecnicos">Registro de <br> Técnicos</a>
                    </div>
                    <div>
                        <a href="">Registro de <br> Ticket</a>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
    </section>
</body>
</html>