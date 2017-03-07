<?php 
	require 'conexionDB.php';

	$id_autor_eliminar = $_REQUEST['id_autor_eliminar'];

	$query_delete = "DELETE FROM autor WHERE id_autor=$id_autor_eliminar";

	pg_query($conection, $query_delete) or die('Revise su consulta de eliminacion');
	pg_close($conection);

	echo "<script language='javascript'>alert('Se elimino exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/autor/listado.php'</script>";
?>