<?php

	$mysqli = new MySQLi("localhost","root","102236","num_boletos");

	if (!$mysqli) die ("Error al conectar con el servidor -> ".mysqli_error());
	mysqli_query ($mysqli,"SET NAMES 'utf8'");

?>
