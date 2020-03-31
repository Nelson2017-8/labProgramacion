<?php
	require_once "./conexion.php";


	// Recogo las variables del formulario
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$phone = $_POST['phone'];
	$genero = $_POST['genero'];
	$dateBrinday = $_POST['dateBrinday'];

	$veryEmail = mysqli_query(conexion(), "SELECT * FROM tusuarios WHERE email = '$email' ");
	if ( mysqli_fetch_array($veryEmail) == "" ) {
		$sql = "INSERT INTO tusuarios (email, pass, firstName, lastName, phone, genero, dateBrinday) VALUES ('$email', '$pass', '$firstName', '$lastName', '$phone', '$genero', '$dateBrinday') ";
		$query = mysqli_query(conexion(), $sql);
		// echo $sql;
		if ( $query ) {
			// echo "Usuario Registrado";
			require_once "logearUsuario.php";
		}else{
			echo "Error usuario no registrado";
		}

	}else{
		echo "El usuario ya existe";
	}


 ?>