<?php 
	
	require 'conexionDB.php';
	session_start();

	$cuenta=$_REQUEST['cuenta'];
	$contrasenia=$_REQUEST['contrasenia'];

	if (isset($cuenta)&&isset($contrasenia)) {
		# code...
		$query="SELECT registrarSession('$cuenta','$contrasenia')";
		$respuesta_q=pg_query($conection,$query);
		//$nfilas=pg_num_rows($respuesta_q);
		$nfilas=pg_fetch_result($respuesta_q,0);


		$queryUser="SELECT * FROM usuario WHERE cuenta='$cuenta' AND contrasenia='$contrasenia'";
		$respuesta_user=pg_query($conection,$queryUser);
		$usuario=pg_fetch_array($respuesta_user,null, PGSQL_ASSOC);

		if ($nfilas==1) {
			$_SESSION['login_usr']=$usuario['nombre'];
		}

		if (isset($_SESSION['login_usr'])) {
			header('location: ../index.php');
		}

	} else {

		header('location: ../views/login.php');

	}

 ?>