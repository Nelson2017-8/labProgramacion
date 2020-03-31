<?php
	require_once "./app/controller/getUsuario.php";
	$home = ( pathname == "/proyecto/" || pathname == "/proyecto/index.php") ? "active" : "";
	$nost = ( pathname == "/proyecto/nosotros.php") ? "active" : "";
	$service = ( pathname == "/proyecto/servicios.php") ? "active" : "";

?>
	<header class="animated header fixed-top <?php if (isset($active)) {echo ' active" data-disabled="true"';}?>">
		<nav class="navbar navbar-expand-lg container">
		  <a class="navbar-brand" href="./index.php"><img class="logo" src="<?php echo logo; ?>" alt="Focashop"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <i class="fa fa-navicon text-white"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="nav justify-content-center w-100">
			  <li class="nav-item"> <a class="nav-link <?php echo $home; ?>" href="./index.php">Inicio</a> </li>
			  <li class="nav-item"> <a class="nav-link <?php echo $nost; ?>" href="./nosotros.php">Nosotros</a> </li>
			  <li class="nav-item"> <a class="nav-link <?php echo $service; ?>" href="./servicios.php">Servicios</a> </li>

			  <?php if ( $login == false ): ?>
			  <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contacto <i class="fi fi-caret-down ml-2"></i></a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="./agregar_contacto.php">Agregar contacto</a>
		          <a class="dropdown-item" href="./consultar_contacto.php">Consulta</a>
		        </div>
		      </li>
			  <?php endif ?>

		      <?php if ( $login == true ): ?>
		      <li class="nav-item dropdown">
		      	<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="purple-text text-darken-3 fi fi-person fi-stack ellipse"></i></a>

		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		        	<a class="dropdown-item" href="#"><i class="fi fi-person mr-2"></i><?php echo $nameFull; ?></a>
		        	<a class="dropdown-item" href="#"><i class="fi fi-email mr-2"></i><?php echo $correo; ?></a>
		        	<div class="dropdown-divider"></div>
		        	<a class="dropdown-item" href="./agregar_contacto.php">Agregar contacto</a>
		        	<a class="dropdown-item" href="./consultar_contacto.php">Consulta</a>
		        	<div class="dropdown-divider"></div>
    				<a class="dropdown-item" href="./app/model/cerrarSession.php"><i class="fi fi-power mr-2"></i>Cerrar sessión</a>
		        </div>
		      </li>
		      <?php endif ?>
			</ul>
		  </div>
		</nav>
	</header>
