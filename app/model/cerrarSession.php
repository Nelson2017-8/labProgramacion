<?php

	session_start();

	session_destroy();
	session_unset();

	if ( @header("location: ".$_SERVER["HTTP_REFERER"]) ) {

	}else{
		@header("location: ../../");
	}
?>