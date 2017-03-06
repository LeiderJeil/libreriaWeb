<?php 
	require 'conexionDB.php';

	$id_usuario_eliminar = $_REQUEST['id_usuario_eliminar'];

	$query_delete = "DELETE FROM usuario WHERE id_usuario=$id_usuario_eliminar";

	pg_query($conection, $query_delete) or die('Revise su consulta de eliminacion');
	pg_close($conection);

	echo "<script language='javascript'>alert('Se elimino el registro exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/usuarios/listado.php'</script>";
?>