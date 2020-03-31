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
                <h1>Consultar Contacto</h1>
                <h5>Busca un contacto dentro de tu agenda personal</h5>
            </div>

            <form id="consultar" class="mt-5 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <?php if ($login == false): ?>
                <div class="alert alert-danger" role="alert"> <strong>Lo siento para poder consultar datos primero debe de <a href="#" data-toggle="modal" data-target="#registrarUsuario">iniciar sesión.</strong></a></div>
                <?php endif ?>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Escribe un nombre para buscar" aria-label="Escribe un nombre para buscar" aria-describedby="btnGroupAddon" id="search"name="search" <?php if ($login === false) {echo 'disabled="true"'; } ?>>
                    <div class="input-group-prepend">
                        <div  class="input-group-text px-3 blue darken-3 text-white" id="btnGroupAddon"><i class="fi fi-search"></i></div>
                    </div>
                </div>
            </form>
            <div class="col-sm-10 offset-sm-1 mt-5">
            <?php

                if ($login === true) {
                    require_once "./app/model/conexion.php";
                    $query = mysqli_query(conexion(), "SELECT * FROM tagenda WHERE codUser = '$codUser' ");
                    if ( $row = mysqli_fetch_array($query) ) {
                        echo '
                        <table class="table" id="datos">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>

                        ';
                        $i = 1;
                        do {
                            echo '
                            <tr>
                                <th scope="row">'.$i.'</th>
                                <td>'.$row["firstName"].'</td>
                                <td>'.$row["lastName"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["phone"].'</td>
                            </tr>
                            <?php
                            ';
                            $i++;
                        } while ( $row = mysqli_fetch_array($query) );
                        echo '
                            <tr class="noSearch hide">
                               <td colspan="5"></td>
                            </tr>
                        </tbody>
                    </table>';
                    }else{
                        echo "<h5>No datos para mostrar una consulta</h5>";
                    }
                }

            ?>
            </div>


        </div>
    </section>





    <?php require_once root."app/views/menuFloating.php"; ?>
    <?php require_once root."app/views/footer.php"; ?>


    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/consultarContacto.js"></script>
  </body>
</html>