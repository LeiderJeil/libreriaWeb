<?php 

	require 'conexionDB.php';


	if (isset($_REQUEST['registrar'])) {
		$nombres = $_REQUEST['nombre'];

		

		registrarAutor($nombres);

	} elseif (isset($_REQUEST['editar'])) {
		$nombres = $_REQUEST['nombre'];
		$id_autor = $_REQUEST['id_autor'];
		actualizarAutor($id_autor, $nombres);
	}

	function registrarAutor($nombres) {
		global $conection;
		//$query_insert = "INSERT INTO usuario (id_tipo_usuario,nombre, apellido, cuenta, contrasenia) 
		//				 VALUES(2,'$nombres', '$apellidos', '$cuenta', '$contrasenia')";
		$query_insert = "SELECT registrarAutor('$nombres')";
		$res=pg_query($conection, $query_insert) or die('Revise su consulta de insercion');
		$rrr=pg_fetch_result($res,0);
		pg_close($conection);

		if ($rrr=="registrado") {
			echo "<script language='javascript'>window.location='../views/autor/listado.php'</script>";
			
		} else {
			echo "<script language='javascript'>alert('Error: La cuenta ya esta registrada por otro usuario');</script>";
			echo "<script language='javascript'>window.location='../views/autor/registrar.php'</script>";

		}
	}

	function listaAutor() {
		global $conection;
		$query_select = "SELECT id_autor,nombre_autor FROM autor ORDER BY id_autor";

		$res_query_select = pg_query($conection, $query_select)or die('Revise su consulta SELECT');
		pg_close($conection);

		for($i = 0; $i < pg_num_rows($res_query_select); $i++) {
		    $lista[$i] =  pg_fetch_array($res_query_select,NULL, PGSQL_ASSOC);
		}

		return $lista;
	}

	function buscarAutor($id_autor) {
		global $conection;
		$query = "SELECT * FROM autor WHERE id_autor=$id_autor";

		$res_query = pg_query($conection, $query) or die('Revise su consulta de busqueda');
		pg_close($conection);

		return pg_fetch_array($res_query,null, PGSQL_ASSOC);
	}

	function actualizarAutor($id, $nombres) {
		global $conection;

		$query_update="SELECT actualizarAutor($id,'$nombres')";

		$res=pg_query($conection, $query_update) or die('Revise su consulta de actualizacion');
		$result=$rrr=pg_fetch_result($res,0);
		pg_close($conection);

		if ($result=="Actualizado") {
			echo "<script language='javascript'>alert('Correcto: Datos actualizados correctamente')</script>";
			
		} else {
			echo "<script language='javascript'>alert('Sin Cambios');</script>";
	

		}
		echo "<script language='javascript'>window.location='../views/autor/listado.php'</script>";
		
	}

		
	    
	

 ?>