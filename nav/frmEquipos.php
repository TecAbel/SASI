<?php 
	require("../back/recursos.php");
	session_start();
	$varsesion = $_SESSION['usuario'];
	validarInicio($varsesion);
    $passSesion = $_SESSION['password'];
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
 	<?php getHeader($varsesion); ?>
    <section class="registros">
    	<h1>Formulario de Equipos</h1>
    	<form method="POST">
    		<section class="resultados">
		 		<div>
		 			<span class="mensaje">
		 				<?php 
		 					//obtener variables
		 					if (isset($_POST['btnEnviar'])) {
		 						$gc_eq = $_POST['txt_num_eq'];
		 						$gc_cl = $_POST['txt_gc_cliente'];
		 						$marca = $_POST['txt_marca'];
		 						$modelo = $_POST['txt_modelo'];
		 						$procesador = $_POST['txt_procesador'];
		 						$ram = $_POST['txt_ram'];
		 						$disco = $_POST['txt_disco'];
		 						$so = $_POST['txt_so'];
		 						$so_lic = $_POST['txt_lic_so'];
		 						$bits = $_POST['txt_bits'];
		 						$so_act = $_POST['txt_so_act'];
		 						$antivirus = $_POST['txt_antivirus'];
		 						$virus = $_POST['txt_virus'];
		 						$office = $_POST['txt_office'];
		 						$office_lic = $_POST['txt_licencia_office'];
		 						$notas = $_POST['txt_notas'];
		 						//regsitro
		 						registroEquipo($passSesion,$varsesion,$gc_eq,$gc_cl,$marca,$modelo,$procesador,$ram,$disco,$so,$so_lic,$bits,$so_act,$antivirus,$virus,$office,$office_lic,$notas);
		 					}
		 				 ?>
		 			</span>
		 		</div> 		
 			</section>
    		<fieldset>
    			<legend><h3>Información del equipo</h3></legend>
	    		<div class="contenedorPrincipal">
	    			<div class="contenedor izq">
	    				<label for="num_eq">Número de equipo: </label>
	    				<input type="text" name="txt_num_eq" id="num_eq" value="<?php getUltimoRegistro($passSesion,$varsesion,'eq_gc_equipo','equipos'); ?>" readonly required>
	    				<br>
	    				<label for="cliente">Id de cliente: </label>
						<select name="txt_gc_cliente_s" id="cliente">
							<?php getClientesCombo($passSesion,$varsesion) ;?>
						</select>
						<br>
	    				<label for="marca">Marca: </label>
	    				<input type="text" name="txt_marca" id="marca" placeholder="necesario" required>
	    				<br>
	    				<label for="modelo">Modelo: </label>
	    				<input type="text" name="txt_modelo" id="modelo" placeholder="Necesario" required>
	    				<br>
	    				<label for="procesador">Procesador: </label>
	    				<input type="text" id="procesador" placeholder="Completo" name="txt_procesador" required>
	    				<br>
	    				<label for="ram">RAM: </label>
	    				<input type="number" max="16" name="txt_ram" id="ram" placeholder="en GB" required>
	    				<br>
	    				<label for="disco">Disco: </label>
	    				<input type="number" max="2048" id="disco" placeholder="en GB" name="txt_disco" required>
	    				<br>
	    				<label >Sistema operativo: </label>
	    				<select name="txt_so">
	    					<option>Windows 10</option>
	    					<option>Windows 8</option>
	    					<option>Windows 7</option>
	    					<option>Windows Vista</option>
	    					<option>Windows XP</option>
	    					<option>Windows Server 2016</option>
	    					<option>Windows Server 2012</option>
	    					<option>Windows Server 2008</option>
	    				</select>
	    				<label for="lic_so">Licencia del S.O:</label>
	    				<input type="text" id="lic_so" placeholder="si no, en blanco" name="txt_lic_so">
	    				<label id="bits">Bits: </label>
	    				<select name="txt_bits">
	    					<option value="64">x64</option>
	    					<option value="32">x86</option>
	    				</select>
	    			</div>
	    			<div class="contenedor">
	    				
	    				<label>Sistema activado: </label>
	    				<select name="txt_so_act">
	    					<option value="1">Activado</option>
	    					<option value="0">Desactivado</option>
	    				</select>
	    				<label >Actualizaciones: </label>
	    				<select name="txt_updates">
	    					<option value="1">Activadas</option>
	    					<option value="0">Desactivadas</option>
	    				</select>
	    				<label >Antivirus: </label>
	    				<select name="txt_antivirus">
	    					<option value="Avast">Avast</option>
	    					<option value="AVG">AVG</option>
	    					<option value="SNET">SNET</option>
	    					<option value="Kaspersky">Kaspersky</option>
	    					<option value="Otro">Otro</option>
	    				</select>
	    				<label>Se detecta virus:</label>
	    				<select name="txt_virus">
	    					<option value="1">No</option>
	    					<option value="0">Sí</option>
	    				</select>
	    				<label>Office:</label>
	    				<select name="txt_office">
	    					<option value="2016">2016</option>
	    					<option value="365">365</option>
	    					<option value="2013">2013</option>
	    					<option value="2010">2010</option>
	    					<option value="2007">2007</option>
	    				</select>
	    				<label for="txt_licencia">Licencia Office: </label>
	    				<input type="text" name="txt_licencia_office" placeholder="completa">
	    				<label for="notas">Notas:</label>
	    				<textarea id="notas" name="txt_notas" placeholder="comportamiento, detalles físicos, etc."></textarea>
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