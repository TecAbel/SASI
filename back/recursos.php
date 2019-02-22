<?php 

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