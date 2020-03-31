<?php


	require_once "./app/model/checkLogeo.php";
	$login = checklogeo();
	if ( checklogeo() == true ) {
		$nombre = $_SESSION['firstName'];
		$apellido = $_SESSION['lastName'];
		$nameFull = $nombre. " ".$apellido;
		$correo = $_SESSION['email'];
		$codUser = $_SESSION['codUser'];
	}

