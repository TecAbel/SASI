<?php 
	//Conexión 

	$servidor="127.0.0.1";
    $base="sasi";
    $connG;
    mysqli_report(MYSQLI_REPORT_STRICT); //necesario
    function inicio($usuario,$password){
        try {
            //$conn = new mysqli($servidor,$usuario,$password,$base);
            $conn = mysqli_connect($servidor, $usuario, $password, $GLOBALS['base']);
            if (!$conn) {
      			die("Conexión falló: " . mysqli_connect_error());
      			$conexion = $conn;
			}
			else{
				$GLOBALS['connG'] = $conn;
				header('Location: nav/menu.php');
			}
        }
          catch (Exception $e) {
            //echo 'Error: '.$e ->getMessage();
            echo "<p class='fail'>Usuario y / o contraseña inválidos</p>";
            session_start();
            session_destroy();
        }     
    }

    function cerrarConexion(){
    	mysqli_close($conexion);
    }

    //HEADER

	function getHeader($usuario){
		echo "
			<header>
		        <nav class='estado'>
		            <ul>
		                <li class='msgEstado'>U: " . $usuario ."</li>
		                <span><li><a href='menu.php'>Menú</a></li></span>
		                <span><li><a href='../back/cerrarSesion.php'>Cerrar sesión</a></li></span>
		                <span><li><a href=''>Contacto</a></li></span>
		            </ul>
		        </nav>
		    </header>
		";
	}

	//Login

	function validarInicio($sesion){
		if($sesion == null || $sesion == ''){
        //die(); //mata la aplicacion
        header('Location: ../index.php');
	    }
	}

	//Registros

	//Clientes

	function registroCliente($contraseña,$usuario,$gc,$tipo,$nombres,$apPat,$apMat,$tel,$facta,$dir,$rfc){
		$conn = mysqli_connect($servidor, $usuario, $contraseña, $GLOBALS['base']);
		$sql = "INSERT INTO clientes (cl_gc_cli,cl_tipo_cliente,cl_nom,cl_ap_pat,cl_ap_mat,cl_tel,cl_fac_a,cl_dir,cl_rfc) VALUES ('$gc','$tipo','$nombres','$apPat','$apMat','$tel','$facta' ,'$dir','$rfc');";
		if (mysqli_query($conn,$sql)) {
			echo "<p class='exito'>Registro exitoso</p>";
		}
		else{
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "<p class='fail'>Error : ". mysqli_error($conn) . "</p>";
		}
	}
	//obtener últimos registros
	
	function getUltimoRegistro($contraseña, $usuario,$gc,$tabla){
		$conn = mysqli_connect($servidor, $usuario, $contraseña, $GLOBALS['base']);
		$sql="SELECT max($gc) as Último_registro FROM $tabla;";
		$resultado = mysqli_query($conn,$sql);
		$res = $resultado->fetch_assoc();
		$currentReg = $res['Último_registro'];
		$ultimos4 = substr($currentReg, -4);
		$primeros4 = substr($currentReg, 0,4);
		//echo $primeros4;
		printf($primeros4."%04d\n", $ultimos4+1);
	}
	//Equipos
	function registroEquipo($contraseña, $usuario,$gc_eq,$gc_cl,$eq_marca,$eq_modelo,$eq_procesador,$ram,$disco,$so,$so_lic,$bits,$so_act,$antivirus,$virus,$office,$office_lic,$notas){
		$conn = mysqli_connect($servidor, $usuario, $contraseña, $GLOBALS['base']);
		$sql = "INSERT INTO equipos VALUES('$gc_eq','$gc_cl','$eq_marca','$eq_modelo','$eq_procesador','$ram','$disco','$so','$so_lic','$bits','$so_act','$antivirus','$virus','$office','$office_lic','$notas');";
		if (mysqli_query($conn,$sql)) {
			echo "<p class='exito'>Registro exitoso</p>";
		}
		else{
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "<p class='fail'>Error : ". mysqli_error($conn) . "</p>";
		}
	}

	function getClientesCombo($contraseña,$usuario){
		$conn = mysqli_connect($servidor, $usuario, $contraseña, $GLOBALS['base']);
		$sql = "SELECT cl_gc_cli,cl_nom,cl_ap_pat FROM clientes ORDER BY cl_nom asc;";
		$resultado = mysqli_query($conn,$sql);
		

		if($resultado->num_rows>0){
			
			while($row=$resultado->fetch_array(MYSQLI_ASSOC)){
				$combo .="<option value='". $row['cl_gc_cli'] ."'>". $row['cl_nom']." ". $row['cl_ap_pat'] ."</option>";
				
			}
			echo $combo;
		}
		else{
			echo "<option>Sin resultados</option>";
		}
	}

	function registroServicio($contraseña,$usuario,$gc_ser,$nombre_ser,$desc,$precio,$costo){
		$conn = mysqli_connect($servidor, $usuario, $contraseña, $GLOBALS['base']);
		$sql = "INSERT INTO servicios VALUES('$gc_ser','$nombre_ser','$desc','$precio','$costo');";
		if (mysqli_query($conn,$sql)) {
			echo "<p class='exito'>Registro exitoso</p>";
		}
		else{
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "<p class='fail'>Error : ". mysqli_error($conn) . "</p>";
		}
	}
 ?>