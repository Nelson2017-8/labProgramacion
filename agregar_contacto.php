<?php require_once "./config.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="Nelson Portillo">
    <link rel="shortcut icon" href="<?php echo favicon; ?>">

    <!-- Le styles -->
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/fontisto/fontisto.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/ripple.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php $active = true; require_once root."app/views/header.php"; ?>

	<section id="start" class="container mt-5 py-5">
		<div class="row py-5 mt-2">
			<div class="col-sm-12">
				<h1>Agregar Contacto</h1>
				<h5>Formulario para agregar un nuevo contacto a la base de datos</h5>
			</div>
			<form id="tagenda" class="mt-5 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
				<?php if ($login == false): ?>
				<div class="alert alert-danger" role="alert"> <strong>Lo siento para poder consultar datos primero debe de <a href="#" data-toggle="modal" data-target="#registrarUsuario">iniciar sesión.</strong></a></div>
				<?php endif ?>
				<div class="form-group">
					<label for="fisrtName">Nombre</label>
					<input type="text" class="form-control" <?php if ($login === false) {echo 'disabled="true"'; } ?> id="fisrtName" name="firstName"  placeholder="Nombre del Contacto">
				</div>
				<div class="form-group">
					<label for="lastName">Apellido</label>
					<input type="text" class="form-control" <?php if ($login === false) {echo 'disabled="true"'; } ?> id="lastName" name="lastName" placeholder="Apellido del Contacto">
				</div>
				<div class="form-group">
					<label for="email">Correo:</label>
					<input type="email" class="form-control" <?php if ($login === false) {echo 'disabled="true"'; } ?> id="email" name="email" placeholder="Correo del Contacto">
				</div>
				<div class="form-group">
					<label for="phone">Teléfono</label>
					<input type="text" class="form-control" <?php if ($login === false) {echo 'disabled="true"'; } ?> id="phone" name="phone" placeholder="Teléfono del Contacto">
				</div>
				<div id="respuesta-tagenda"> </div>
				<button type="submit" class="ripple btn-block btn text-white px-5 blue darken-4">Agregar <i class="mr-2 fi fi-paper-plane"></i></button>
			</form>


		</div>
	</section>



	<?php require_once root."app/views/menuFloating.php"; ?>
	<?php require_once root."app/views/footer.php"; ?>


    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/aos.js"></script>
	<script src="./assets/js/main.js"></script>
	<script src="./assets/js/agregarContacto.js"></script>
  </body>
</html>