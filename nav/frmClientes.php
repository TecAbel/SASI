<?php
    session_start();
    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion == ''){
        echo "no ha iniciado sesion";
        //die(); //mata la aplicacion
        header('Location: index.php');
    }
    else{
        $estado = $varsesion;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/general.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="../css/frmClientes.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>SASI | Registro Clientes</title>
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
    <section class="registros">
        <form method="POST">
        <h1>Formulario de clientes</h1>
            <fieldset>
                <legend><h3>Información del cliente</h3></legend>
                <div class="contenedorPrincipal">
                    <div class="contenedor izq">
                        <label for="gc_cli">Identificación: </label>
                        <input type="text" id="gc_cli" placeholder="CI19XXXX" required>
                        <br>
                        <label for="cl_tipo_cliente">Tipo de cliente:</label>
                        <select name="" id="cl_tipo_cliente" required>
                            <option value="1">Empresa</option>
                            <option value="0">Físico</option>
                        </select>
                        <br> 
                        <label for="nombres">Nombre(s): </label>
                        <input type="text" id="nombres" placeholder="Nombres" required>
                        <br>
                        <label for="apPat">Apellido paterno: </label>
                        <input type="text" id="apPat" placeholder="Apellido Pat" required>
                        <br> 
                        <label for="apMat">Apellido paterno: </label>
                        <input type="text" id="apMat" placeholder="Apellido Mat" required>
                        <br>
                        <label for="tel">Teléfono: </label>
                        <input type="text" id="tel" placeholder="máx 13" required>
                        <br>
                    </div>
                    <div class="contenedor">
                        
                        <label for="fat">Factuar a: </label>
                        <input type="text" id="fact" placeholder="Opcional">
                        <br>
                        <label for="direccion">Dirección: </label>
                        <textarea id="direccion" placeholder="Dirección completa"></textarea>
                        <br>
                        <label for="rfc">RFC: </label>
                        <input type="text" id="rfc" placeholder="Opcional">
                        <br>
                        <span class="botones">
                            <input class="limpiar" type="reset" value="Limpiar">
                            <input class="enviar" type="submit" value="Enviar">
                        </span>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</body>
</html>