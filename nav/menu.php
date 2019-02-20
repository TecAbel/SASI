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
            </ul>
        </nav>
    </header>
    <section class="forms">
        <h1>Menú de opciones</h1>
        <div class="clientes">
            <a href="frmClientes.php">Registro de clientes</a>
        </div>
        <div class="">

        </div>
    </section>
</body>
</html>