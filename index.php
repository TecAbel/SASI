<?php 
    $autor = "Abelardo Aqui";
    $año = "2019";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <title>SASI</title>
</head>
<body>
    <header>
        <h1>
            <strong>Bienvenido a SASI</strong> <br>
            
        </h1>
        <h3>Sistema Administrativo de Servicios Informáticos &reg;</h3>
    </header>
    <main>
        <section class="login">
            <form action="">
                <fieldset>
                    <legend><h2>Ingreso</h2></legend>
                    <label for="usuario"><strong>Usuario:</strong> </label>
                    <input id="usuario" type="text" placeholder="Nombre de usuario" autocomplete="off" required>
                    <br><br>
                    <label for="password"><strong>Contraseña: </strong></label>
                    <input id="password" type="password" placeholder="Contraseña" autocomplete="off" required>
                    <br><br>
                    <input type="submit" value="Ingresar">
                </fieldset>
            </form>
        </section>

        <footer>
            <h3 class="autor"><?php echo $autor;?> &copy; <?php echo $año?></h3>
        </footer>
    </main>
</body>
</html>