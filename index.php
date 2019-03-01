<?php 
    require ('back/autor.php');
    require ('back/recursos.php');
    /*Obteniendo variables, solo se usa name*/
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <title>SASI</title>
</head>
<body>
    <header class="presentacion">
        <div>
            <h1>
            <strong>Bienvenido a SASI</strong> <br>
            
            </h1>
            <h3>Sistema Administrativo de Servicios Informáticos &reg;</h3>
        </div>
    </header>
    <main>
        <section class="login">
            <form method="post">
                <fieldset>
                    <legend><h2>Ingresos</h2></legend>
                    <label for="usuario"><strong>Usuario:</strong> </label>
                    <input id="usuario" name="txtUsuario" type="text" placeholder="Nombre de usuario" autocomplete="off" required>
                    <br><br>
                    <label for="password"><strong>Contraseña: </strong></label>
                    <input id="password" name="txtPassword" type="password" placeholder="Contraseña" autocomplete="off" required>
                    <br><br>
                    <!-- <input type="submit" value="Ingresar" name="btnEnviar" id="btnEnviar"> -->
                    <button class="boton" type="submit" name="btnEnviar" >Ingresar</button>
                </fieldset>
            </form>
        </section>
        <br>
        <section class="resultados">
            <div>
                <span class="mensaje">
                    <?php
                            //funcion de coneccion
                            if(isset($_POST['btnEnviar'])){
                            $_SESSION['usuario'] = $_POST['txtUsuario'];
                            $_SESSION['password'] = $_POST['txtPassword'];
                            $usuario = $_SESSION['usuario'];
                            $pass = $_SESSION['password'];
                            inicio($usuario,$pass);
                        }
                    ?>
                </span>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <h3>Para: <?php echo $para; ?> &reg; </h3>
            <p>Por: <?php echo $autor; ?> &copy; 2019</p>
        </div>
        
    </footer>
</body>
</html>