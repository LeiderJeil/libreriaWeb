<?php
	$server   = 'localhost';
	$username = 'postgres';
	$password = 'monitores07';
	$db 	  = 'libreriaweb';

	// PHP < 5.0
		/*
		$conection = mysql_connect($server, $username, $password) or die('Error en la conection de la DB: ' . mysql_error());
		mysql_select_db('cursophp') or die ('Error en la conection de la BD: ' . mysql_error());
		*/

	// PHP > 5.0 habilitando php_mysqli.dll
		/*
		$conection = mysqli_connect($server, $username, $password, $db) or 
			die('Error: No se pudo conectar a MySQL: ' . mysqli_connect_error());
			*/
		$conection = pg_connect("host=$server port=5432 user=$username password=$password dbname=$db") or 
			die('Error: No se pudo conectar a Postgres: ' . pg_last_error());
?>