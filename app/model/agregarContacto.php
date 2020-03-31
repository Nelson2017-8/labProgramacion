<?php

require_once "./conexion.php";
session_start();

// Recogo las variables del formulario
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$codUser = $_SESSION['codUser'];

$query = mysqli_query(conexion(), "INSERT INTO tagenda VALUES (NULL, '$firstName', '$lastName', '$email', '$phone', '$codUser') ");
if ( $query ) {
	echo "Contacto registrado";
}else{
	echo "Error";
}
