<?php
    
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion == ''){
        header('Location: ../index.php');
    }
    else{
        $estado = $varsesion;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SASI | Menú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav class="estado">
            <ul>
                <li class="msgEstado"><?php echo "U: $estado"; ?></li>
                <span><li><a href="menu.php">Menú</a></li></span>
                <span><li><a href="../back/cerrarSesion.php">Cerrar sesión</a></li></span>
                <span><li><a href="">Contacto</a></li></span>
            </ul>
        </nav>
    </header>
    <section class="forms">
        <h1>Menú de opciones</h1>
        <fieldset>
            <div class="contenedorPrincipal">
                <div class="contenedor izq">
                    <div class="clientes" for="clientes">
                        <a href="frmClientes.php" id="clientes">Registro de <br> clientes</a>
                    </div>
                    <div class="tecnicos">
                        <a href="frmTecnicos.php">Registro de <br>equipos</a>
                    </div>
                </div>
                <div class="contenedor">
                    <div>
                        <a href="">Registro de <br> servicios</a>
                    </div>
                    <div>
                        <a href="">Registro de <br> Técnicos</a>
                    </div>
                    <div>
                        <a href="">Registro de <br> Ticket</a>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
        <fieldset>
            
        </fieldset>
    </section>
</body>
</html>