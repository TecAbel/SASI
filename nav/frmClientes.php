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
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/general.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="../css/frmClientes.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <title>SASI | Registro Clientes</title>
</head>
<body>
    <?php getHeader($varsesion); ?>
    <section class="registros">
         <h1>Formulario de clientes</h1>
        <form method="POST">
            <section class="resultados">
                <div>
                    <span class="mensaje">
                        <?php 
                        if(isset($_POST['btnEnviar'])){
                            //inicializar variables
                            $gc_cli = $_POST['txt_gc_cli'];
                            $tipoCliente = $_POST['txt_cl_tipo_cliente'];
                            $nombres = $_POST['txt_Nombres'];
                            $apPat = $_POST['txt_Ap_Pat'];
                            $apMat = $_POST['txt_Ap_Mat'];
                            $tel = $_POST['txt_Tel'];
                            $factA = $_POST['txt_Fact_a'];
                            $direccion = $_POST['txt_Direccion'];
                            $rfc = $_POST['txt_RFC'];
                            //llama función
                            registroCliente($passSesion,$varsesion,$gc_cli,$tipoCliente,$nombres,$apPat,$apMat,$tel,$factA,$direccion,$rfc);
                            }
                        ?>  
                    </span>
                </div>
            </section>    
            <fieldset>
                <legend><h3>Información del cliente</h3></legend>
                <div class="contenedorPrincipal">
                    <div class="contenedor izq">
                        <label for="gc_cli">Identificación: </label>
                        <input type="text" id="gc_cli" name="txt_gc_cli" value='<?php getUltimoCliente($passSesion,$varsesion); ?>' readonly required>
                        <br>
                        <label for="cl_tipo_cliente">Tipo de cliente:</label>
                        <select name="txt_cl_tipo_cliente" id="cl_tipo_cliente" required>
                            <option value="1">EMPRESA</option>
                            <option value="0">FÍSICO</option>
                        </select>
                        <br> 
                        <label for="nombres">Nombre(s): </label>
                        <input type="text" name="txt_Nombres" id="nombres" placeholder="Nombres" required>
                        <br>
                        <label for="apPat">Apellido paterno: </label>
                        <input type="text" name="txt_Ap_Pat" id="apPat" placeholder="Apellido Pat" required>
                        <br> 
                        <label for="apMat">Apellido materno: </label>
                        <input type="text" name="txt_Ap_Mat" id="apMat" placeholder="Apellido Mat" required>
                        <br>
                        <label for="tel">Teléfono: </label>
                        <input type="text" name="txt_Tel" id="tel" placeholder="máx 13" required>
                        <br>
                    </div>
                    <div class="contenedor">
                        
                        <label for="fat">Factuar a: </label>
                        <input type="text" name="txt_Fact_a" id="fact" placeholder="Opcional">
                        <br>
                        <label for="direccion">Dirección: </label>
                        <textarea id="direccion" placeholder="Dirección completa" name="txt_Direccion"></textarea>
                        <br>
                        <label for="rfc">RFC: </label>
                        <input type="text" id="rfc" placeholder="Opcional" name="txt_RFC">
                        <br>
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