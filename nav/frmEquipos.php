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
 <html>
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
 	<title>SASI | Registro equipos</title>
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
    	<h1>Formulario de Equipos</h1>
    	<form method="POST">
    		<fieldset>
	    		<div class="contenedorPrincipal">
	    			<div class="contenedor izq">
	    				<label for="num_eq">Número de equipo: </label>
	    				<input type="text" name="num_eq" id="num_eq" placeholder="EQ19XXXX" required>
	    				<br>
	    				<label for="cliente">Id de cliente: </label>
	    				<input type="text" name="cliente" id="cliente" placeholder="CI19XXXX" required>
	    				<br>
	    				<label for="marca">Marca: </label>
	    				<input type="text" name="marca" id="marca" required>
	    				<br>
	    				<label for="modelo">Modelo: </label>
	    				<input type="text" name="modelo" id="modelo" placeholder="CI19XXXX" required>
	    				<br>
	    				<label for="procesador">Procesador: </label>
	    				<input type="text" id="procesador" placeholder="CI19XXXX" name="procesador" required>
	    				<br>
	    				<label for="ram">RAM: </label>
	    				<input type="number" max="16" name="ram" id="ram" placeholder="en GB" required>
	    				<br>
	    				<label for="disco">Disco: </label>
	    				<input type="number" max="2048" id="disco" placeholder="en GB" name="disco" required>
	    				<br>
	    				<label >Sistema operativo: </label>
	    				<select name="so">
	    					<option>Windows 10</option>
	    					<option>Windows 8</option>
	    					<option>Windows 7</option>
	    					<option>Windows Vista</option>
	    					<option>Windows XP</option>
	    					<option>Windows Server 2016</option>
	    					<option>Windows Server 2012</option>
	    					<option>Windows Server 2008</option>
	    				</select>
	    				<label id="bits">Bits: </label>
	    				<select>
	    					<option>x64</option>
	    					<option>x86</option>
	    				</select>
	    				<label for="lic_so">Licencia del S.O:</label>
	    				<input type="text" id="lic_so" placeholder="si no, en blanco" name="lic_so">
	    			</div>
	    			<div class="contenedor">
	    				<label >Actualizaciones: </label>
	    				<select name="updates">
	    					<option>Activadas</option>
	    					<option>Desactivadas</option>
	    				</select>
	    				<label >Antivirus: </label>
	    				<select name="antivirus">
	    					<option>Avast</option>
	    					<option>AVG</option>
	    					<option>SNET</option>
	    					<option>Kaspersky</option>
	    					<option>Otro</option>
	    				</select>
	    				<label>Se detecta virus:</label>
	    				<select name="virus">
	    					<option>No</option>
	    					<option>Sí</option>
	    				</select>
	    				<label>Office:</label>
	    				<select name="office">
	    					<option>2016</option>
	    					<option>365</option>
	    					<option>2013</option>
	    					<option>2010</option>
	    					<option>2007</option>
	    				</select>
	    				<label for="licencia">Licencia: </label>
	    				<input type="text" name="licencia" placeholder="completa">
	    				<label for="notas">Notas:</label>
	    				<textarea id="notas" name="notas" placeholder="comportamiento, detalles físicos, etc."></textarea>
	    				<br>
	    				<span class="botones">
	    					<input type="reset" name="reset" value="Limpiar">
	    					<input type="submit" name="enviar" value="Enviar">
	    				</span>
	    			</div>
	    		</div>
    		</fieldset>
    	</form>
    </section>
 </body>
 </html>