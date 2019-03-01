<?php 
    require("../back/recursos.php");
	session_start();
	$varsesion = $_SESSION['usuario'];
	validarInicio($varsesion);
    $passSesion = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SASI | Registro de Servicios</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/general.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="../css/frmClientes.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <?php getHeader($varsesion);?>

    <section class="registros">
        <h2>Formulario de Servicios</h2>
        <form method="POST">
            <section class="resultados">
                <div>
                    <span class="mensaje">
                        <?php 
                            if (isset($_POST['btnEnviar'])) {
                                $num_ser = $_POST['txt_num_ser'];
                                $nombre = $_POST['txt_nom_ser'];
                                $descripcion = $_POST['txt_desc'];
                                $precio = $_POST['txt_precio'];
                                $costo = $_POST['txt_costo'];
                                registroServicio($passSesion,$varsesion,$num_ser,$nombre,$descripcion,$precio,$costo);
                            }
                         ?>
                    </span>
                </div>
            </section>
            <fieldset>
                <legend><h3>Información del servicio</h3></legend>
                <div class="contenedorPrincipal">
                    <div class="contenedor">
                        <label for="">Identificación:</label>
                        <input type="text" name="txt_num_ser" value="<?php getUltimoRegistro($passSesion,$varsesion,'sr_gc_ser','servicios'); ?>" readonly required >
                        <br>
                        <label for="nombre">Nombre de servicio:</label>
                        <input type="text" id="nombre" name="txt_nom_ser" placeholder="máx 20" required>
                        <br>
                        <label for="descripcion">Descripción: </label>
                        <textarea id="descripcion" name="txt_desc" placeholder="Sé preciso" required></textarea>
                        <br>
                        <label for="precio">Precio: </label>
                        <input type="number" name="txt_precio" min="0.00" max="9999999.99" required>
                        <br>
                        <label for="costo">Costo: </label>
                        <input type="number" name="txt_costo" value="0.00" min="0.00" placeholder="En caso de haber">
                        <span class="botones">
                            <input class="limpiar boton" type="reset" value="Limpiar">
                            <input class="enviar boton" name="btnEnviar" type="submit" value="Enviar">
                        </span>
                    </div>
                    
                </div>
            </fieldset>
        </form>
    </section>
</body>
</html>