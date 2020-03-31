<?php

	require_once "./conexion.php";

	// Recogo las variables del formulario
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$query = mysqli_query(conexion(), "SELECT * FROM tusuarios WHERE email = '$email' AND pass= '$pass' ");
	if ( $row = mysqli_fetch_array($query) ) {
		session_start();
		$_SESSION['codUser'] = $row["codUser"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['firstName'] = $row["firstName"];
		$_SESSION['lastName'] = $row["lastName"];
		echo "Usuario logeado";
	}else{
		echo "Error";
	}