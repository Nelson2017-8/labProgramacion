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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/servicios.css">
    <link rel="stylesheet" href="./assets/css/ripple.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php $active= true; require_once root."app/views/header.php"; ?>

    <section style="padding: 12em 0">
        <div class="row">
            <div class="col-full">
                <div class="center">
                    <h5>Ofrecemos</h5>
                    <h1>Servicios</h1>
                </div>
                <div id="cajas">
                    <div class="contenedor section w-100">
                        <div class="caja card ripple">
                            <div class="imagencita">
                                <img src="./assets/img/html5.jpg">
                            </div>
                            <h3 class="encabezado">HTML5</h3>
                            <p class="lorem">HTML (HyperText Markup Language), hace referencia al lenguaje de marcado para la elaboración de páginas web.</p>
                            <div style="margin-bottom: 2em"><a href="#html5" class="btn-outline deslisable">Leer más</a></div>
                        </div>
                        <div class="caja card ripple">
                            <div class="imagencita">
                                <img src="./assets/img/css3.jpg">
                            </div>
                            <h3 class="encabezado">CSS3</h3>
                            <p class="lorem">Es un lenguaje de diseño para definir y crear la presentación de un documento escrito en un lenguaje de marcado</p>
                            <div style="margin-bottom: 2em"><a href="#css3" class="btn-outline deslisable">Leer más</a></div>
                        </div>
                        <div class="caja card ripple">
                            <div class="imagencita">
                                <img src="./assets/img/javascript.jpg">
                            </div>
                            <h3 class="encabezado">JavaScript</h3>
                            <p class="lorem">Es un lenguaje de programación orientado a objetos, basado en prototipos, imperativo, débilmente tipado y dinámico.</p>
                            <div style="margin-bottom: 2em"><a href="#javascript" class="btn-outline deslisable">Leer más</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="contenedor">
            <div class="row">
                <div class="col-md-6">
                    <h5>Ofrecemos</h5>
                    <h1>Calidad en Servicios Web.</h1>
                    <p>Somos expertos desarolladores en el área de informática, capaz de cumplir cualquier espectativa del cliente brindando siempre el mejor servicio en tecnología web</p>
                    <p>Además contamos con los mejores precios del mercado, invierta lo mejor en tecnología web para su negocio ahora mismo.</p>
                    <div style="padding-bottom: 6em">
                        <a href="./nosotros.php#contacto" class="btn outline">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="row" style="padding: 5em 0">
            <!-- html5 -->
            <div class="col-md-10 col-md-offset-1 item-service" id="html5">
                <div class="col-md-3">
                    <img src="./assets/img/html5.jpg" alt="HTML5">
                </div>
                <div class="col-md-9">
                    <h5>servicio de</h5>
                    <h1>HTML 5</h1>
                    <div class="text">
                        <p>HTML (HyperText Markup Language) es un lenguaje de etiquetas que permite construir los documentos webs (páginas web) de forma que los navegadores puedan entender el contenido y mostrárselo al usuario.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text">
                        <p>HTML5 es la última versión de HTML. El término representa dos conceptos diferentes: Se trata de una nueva versión de HTML, con nuevos elementos, atributos y comportamientos. Contiene un conjunto más amplio de tecnologías que permite a los sitios Web y a las aplicaciones ser más diversas y de gran alcance.</p>
                    </div>
                </div>
            </div>
            <!-- /html5 -->
            <!-- css3 -->
            <div class="col-md-10 col-md-offset-1 item-service" id="css3">
                <div class="col-md-9">
                    <h5>servicio de</h5>
                    <h1>CSS 3</h1>
                    <div class="text">
                        <p>CSS es un lenguaje utilizado en la presentación de documentos HTML. Un documento HTML viene siendo coloquialmente “una página web”. Entonces podemos decir que el lenguaje CSS sirve para organizar la presentación y aspecto de una página web.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="./assets/img/css3.jpg" alt="css3">
                </div>
                <div class="col-md-12">
                    <div class="text">
                        <p>CSS funciona a base de reglas, es decir, declaraciones sobre el estilo de uno o más elementos. Las hojas de estilo están compuestas por una o más de esas reglas aplicadas a un documento HTML o XML. La regla tiene dos partes: un selector y la declaración.</p>
                    </div>
                </div>
            </div>
            <!-- / css3 -->
            <!-- javascript -->
            <div class="col-md-10 col-md-offset-1 item-service" id="javascript">
                <div class="col-md-3">
                    <img src="./assets/img/javascript.jpg" alt="javascript">
                </div>
                <div class="col-md-9">
                    <h5>servicio de</h5>
                    <h1>JavaScript</h1>
                    <div class="text">
                        <p>JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, ​ basado en prototipos, imperativo, débilmente tipado y dinámico.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text">
                        <p>JavaScript es un lenguaje de programación que se utiliza principalmente para crear páginas web dinámicas. Una página web dinámica es aquella que incorpora efectos como texto que aparece y desaparece, animaciones, acciones que se activan al pulsar botones y ventanas con mensajes de aviso al usuario.</p>
                    </div>
                </div>
            </div>
            <!-- / javascript -->

        </div>
    </section>

    <?php require_once root."app/views/menuFloating.php"; ?>
    <?php require_once root."app/views/footer.php"; ?>

    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/aos.js"></script>
	<script src="./assets/js/main.js"></script>

  </body>
</html>