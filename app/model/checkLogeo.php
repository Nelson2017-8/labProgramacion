<?php


	session_start();

	function checkLogeo(){
		if ( isset($_SESSION['codUser']) && !empty($_SESSION['codUser']) ) {
			// echo 'usuario esta logeado';
			return true;
		}else{
			// echo "usuario NO esta logeado";
			return false;
		}
	}