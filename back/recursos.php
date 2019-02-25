<?php 
	//Conexión 

	$servidor="127.0.0.1";
    $base="sasi";
    mysqli_report(MYSQLI_REPORT_STRICT); //necesario
    function inicio($usuario,$password){
        try {

            //$conn = new mysqli($servidor,$usuario,$password,$base);
            $conn = mysqli_connect($servidor, $usuario, $password, $base);
            if (!$conn) {
      			die("Conexión falló: " . mysqli_connect_error());
			}
			else{
				header('Location: nav/menu.php');
			}
            
        }
          catch (Exception $e) {
            //echo 'Error: '.$e ->getMessage();
            echo 'Usuario y/o contraseña inválidos';
            session_start();
            session_destroy();
        }     
    }

    function cerrarConexion(){
    	mysqli_close($conn);
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
        echo "no ha iniciado sesion";
        //die(); //mata la aplicacion
        header('Location: ../index.php');
	    }
	    else{
	        $estado = $varsesion;
	    }
	}
 ?>