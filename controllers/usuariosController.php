<?php
	require 'conexionDB.php';


	if (isset($_REQUEST['registrar'])) {
		$nombres = $_REQUEST['nombre'];
		$apellidos = $_REQUEST['apellido'];
		$cuenta = $_REQUEST['cuenta'];
		$contrasenia = $_REQUEST['contraseña'];

		

		registrarUsuario($nombres, $apellidos, $cuenta, $contrasenia);

	} elseif (isset($_REQUEST['editar'])) {
		$nombres = $_REQUEST['nombre'];
		$apellidos = $_REQUEST['apellido'];
		$cuenta = $_REQUEST['cuenta'];
		$contrasenia = $_REQUEST['contrasenia'];
		$id_usuario = $_REQUEST['id_usuario'];

		actualizarUsuario($id_usuario, $nombres, $apellidos, $cuenta, $contrasenia);
	}


	function listaUsuarios() {
		global $conection;
		$query_select = "SELECT id_usuario,nombre,apellido,cuenta,contrasenia FROM usuario ORDER BY id_usuario";

		$res_query_select = pg_query($conection, $query_select)or die('Revise su consulta SELECT');
		pg_close($conection);

		for($i = 0; $i < pg_num_rows($res_query_select); $i++) {
		    $lista[$i] =  pg_fetch_array($res_query_select,NULL, PGSQL_ASSOC);
		}

		return $lista;
	}

	function registrarUsuario($nombres, $apellidos, $cuenta, $contrasenia) {
		global $conection;
		//$query_insert = "INSERT INTO usuario (id_tipo_usuario,nombre, apellido, cuenta, contrasenia) 
		//				 VALUES(2,'$nombres', '$apellidos', '$cuenta', '$contrasenia')";
		$query_insert = "SELECT insertarUsuario('$nombres','$apellidos', '$cuenta','$contrasenia')";
		$res=pg_query($conection, $query_insert) or die('Revise su consulta de insercion');
		$rrr=pg_fetch_result($res,0);
		pg_close($conection);
		
	    echo "<script language='javascript'>window.location='../views/usuarios/listado.php'</script>";
	}

	function buscarUsuario($id_usuario) {
		global $conection;
		$query = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";

		$res_query = pg_query($conection, $query) or die('Revise su consulta de busqueda');
		pg_close($conection);

		return pg_fetch_array($res_query,null, PGSQL_ASSOC);
	}

	function actualizarUsuario($id, $nombres, $apellidos, $cuenta, $contrasenia) {
		global $conection;

		$query_update = "UPDATE usuario
						 SET nombre = '$nombres', apellido = '$apellidos', cuenta = '$cuenta', 
						     contrasenia = '$contrasenia'
        				 WHERE id_usuario=$id";

		pg_query($conection, $query_update) or die('Revise su consulta de actualizacion');
		pg_close($conection);

		echo "<script language='javascript'>window.location='../views/usuarios/listado.php'</script>";
	}

?>
