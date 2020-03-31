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
    <link rel="stylesheet" href="./assets/css/lib_color.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/nosotros.css">
    <link rel="stylesheet" href="./assets/css/ripple.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php require_once root."app/views/header.php"; ?>

    <section id="start" class="banner">
        <div class="parallax"></div>
        <div class="intro-content">
            <div class="content">
                <h3>Bienvenidos Todos, yo soy:</h3>
                <h1 class="text-white">Nelson Portillo</h1>
                <p class="intro-position">
                    <span>Diseño &</span>
                    <span>Desarrollo Web</span>
                </p>
                <a href="#infor" class="deslisable" title="Saber sobre nosotros...">Saber sobre nosotros...</a>
            </div>
        </div>
    </section>

    <!-- nelson -->
    <section id="nelson" class="animated">
        <section class="">
            <div class="row infor" id="infor">

                <div class="col-twelve">
                    <h5>Información general</h5>
                    <h1>Introducción sobre mí</h1>
                    <div class="intro-info">
                        <img src="./assets/img/nelson.jpg" alt="Foto">
                        <p>Soy un joven programador full-stack, me especializo en la parte del backend. Trabajo con diseño gráfico y en la parte de SEO y Marketing Digital. Trabajo bajo presión y soy capaz de desenvolverme en casi cualquier campo laboral.</p>
                    </div>
                </div>
            </div>
            <div class="row perfil" id="perfil">
                <div class="col-six tab-full">
                    <h5>Perfil</h5>
                    <ul class="info-list">
                        <li>
                            <strong>Nombre completo:</strong>
                            <span>Nelson David Portillo Lovera</span>
                        </li>
                        <li>
                            <strong>sexo:</strong>
                            <span>Masculino</span>
                        </li>
                        <li>
                            <strong>nacionalidad:</strong>
                            <span>Veneolano</span>
                        </li>
                        <li>
                            <strong>dirección:</strong>
                            <span>Guatires, El Marquez</span>
                        </li>
                        <li>
                            <strong>Job & Trabajo</strong>
                            <span>Desarrollador Web</span>
                        </li>
                        <li>
                            <strong>sitio web:</strong>
                            <span>www.compitweb.com/portafolio/1893/</span>
                        </li>
                        <li>
                            <strong>correo electrónico</strong>
                            <span>nelsonportillo982@gmail.com</span>
                        </li>
                        <li>
                            <strong>teléfono:</strong>
                            <span>04164117637</span>
                        </li>
                        <li>
                            <strong>Edad:</strong>
                            <span>19 años</span>
                        </li>
                    </ul>
                </div>
                <div class="col-six tab-full">
                    <h5>Principales Habilidades</h5>
                    <ul class="skill-bars">
                        <li>
                            <div class="progress percent100"><span>100%</span></div>
                            <strong>PHP</strong>
                        </li>
                        <li>
                            <div class="progress percent100"><span>100%</span></div>
                            <strong>Javascript</strong>
                        </li>
                        <li>
                            <div class="progress percent80"><span>80%</span></div>
                            <strong>TypeScript</strong>
                        </li>
                        <li>
                            <div class="progress percent90"><span>90%</span></div>
                            <strong>Mysql</strong>
                        </li>
                        <li>
                            <div class="progress percent50"><span>50%</span></div>
                            <strong>C/C+/C#</strong>
                        </li>
                        <li>
                            <div class="progress percent20"><span>20%</span></div>
                            <strong>Java</strong>
                        </li>
                        <li>
                            <div class="progress percent85"><span>85%</span></div>
                            <strong>Go</strong>
                        </li>
                        <li>
                            <div class="progress percent80"><span>80%</span></div>
                            <strong>Python</strong>
                        </li>
                        <li>
                            <div class="progress percent80"><span>80%</span></div>
                            <strong>NodeJS</strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row button-section" id="button-section">
                <div class="col-twelve">
                    <a href="#skill" class="btn deslisable" style="margin-right: 1em"><i class="fa fa-eye" style="margin-right: 1em"></i>Leer más</a>
                    <a href="#" onclick="print1('nelson')" class="btn outline downloader-cv"><i class="fa fa-download" style="margin-right: 1em"></i>Descargar Curriculum</a>
                </div>
            </div>
            <div id="resumen" class="resumen grey-section">
                <div class="row section-intro">
                    <div class="col-twelve">
                        <h5>resumen</h5>
                        <h1>Más sobre mi fomación</h1>
                        <p>Como persona tengo múltiples habilidades y destrezas que he desarrollado y perfeccionado como estudiante y profesional en el campo laboral, aquí destaco algunas de mis formaciones y experiencia.</p>
                        <br>
                    </div>
                </div>
                <div class="row resumen-timeline">
                    <!-- Experiencia laboral -->
                    <div class="col-twelve">
                        <h5>experiencia laboral</h5>
                        <br>
                        <div class="timeline-wrap">
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3>Point Tech Pro</h3>
                                    <p>Febrero 2019</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Black end / Desarrollo Web</h4>
                                    <p class="l2">Para dicha empresa de desarrollo web, realice trabajos de desarrollo web a distancia, donde desarrolle proyectos basados en Node.js y Go.</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3>Atomy</h3>
                                    <p>Junio 2018 - Julio 2019</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Black end / Desarrollo Web</h4>
                                    <p class="l2">Para aumentar las ventas de una empresa surcoreana de cosméticos se requirió la creación de una tienda online de un grupo de promotores, especialistas en marketing digital, que se encargaran de atraer clientes en diversas áreas ofreciéndoles servicios y/o producto para su respectiva compra.</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3>Black-end Developer</h3>
                                    <p>Febrero 2018 - Abril 2018</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Black end / Desarrollo Web</h4>
                                    <p class="l2">Para un grupo de emprendedores, el trabajo de parte de font-end no era suficiente, por tanto tome el rol de desarrollador web, donde abarque lenguajes como php para la elaboración de una aplicación web. La aplicación en sí se trata de un sitio de citas en internet, que toma en cuenta los gustos de las personas.</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3>Font-end Desing</h3>
                                    <p>Noviembre 2017 - Dicciembre 2017</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Font-end / Diseñador de Interfaz</h4>
                                    <p class="l2">Mi primer trabajo fue realizar un diseño de interfaz para un grupo de personas, el proyecto se llamó Icarus, en este trabajo fui el responsable de crear toda la interfaz del usuario de manera interactiva que entrara en contacto con el visitante. Para este trabajo se requirió tanto, habilidades de diseño gráfico para diseño web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Educacion -->
                    <div class="col-twelve">
                        <h5>Educación</h5>
                        <div class="timeline-wrap">
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><small>Instituto Universitario de Tecnología de Administracion Industrial (IUTA)</small></h3>
                                    <p>sectiembre 2019 - Actualmente</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Informática</h4>
                                    <p class="l2">Actualmente cursando el 3er trimestre de la carrera</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><small>Universidad Experimental Politécnica Antonio José de Sucre (UNEXPO)</small></h3>
                                    <p>Enero 2017 - Julio 2019</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Ingeniería en Sistema</h4>
                                    <p class="l2">Actualmente congelado, sin completar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cursos -->
                    <div class="col-twelve">
                        <h5>Cursos</h5>
                        <div class="timeline-wrap">
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><small>Instituto De Capacitación Profesional Simón Bolívar</small></h3>
                                    <p>Junio 2019 - Agosto 2019</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Curso de Inglés nivel Básico</h4>
                                    <p class="l2">Finalizado</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><small>Instituto De Capacitación Profesional Simón Bolívar</small></h3>
                                    <p>Junio 2019 - Agosto 2019</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Curso de Electrónica</h4>
                                    <p class="l2">Finalizado</p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><small>Instituto De Capacitación Profesional Simón Bolívar</small></h3>
                                    <p>Marzo 2016 - Junio 2016</p>
                                </div>
                                <div class="timeline-content">
                                    <h4>Curso de Reparación de Computadoras</h4>
                                    <p class="l2">Finalizado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portafolio" class="portafolio">
            <div class="row">
                <div class="center">
                    <h5>Muestra de trabajo</h5>
                    <h1>Portafolio</h1>
                </div>
                <div class="awesome-project-content" style="position: relative; height: 529.312px; margin-top: 5em">
                    <div class="col-md-4 col-sm-4 col-xs-12" style="">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="././assets/img/portafolio/web/1.png" alt=""></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a href="#">
                                            <h4>Tema html5</h4>
                                            <span>Desarrolo Web - Diseño Web</span>
                                        </a>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12" style="">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="./assets/img/portafolio/web/2.png" alt=""></a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a href="#">
                                            <h4>Tema para Blog html5</h4>
                                            <span>Desarrolo Web - Diseño Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12" style="">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="./assets/img/portafolio/web/3.png" alt=""></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a href="#">
                                            <h4>Tema Html5 - Empresa</h4>
                                            <span>Desarrolo Web - Diseño Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="aptitudes" class="aptitudes">
            <div class="row">
                <div class="section-intro">
                    <div class="col-twelve">
                        <h5>Aptitudes</h5>
                    </div>
                    <div class="col-six tab-full">
                        <ul class="list-full">
                            <li>Gestión de proyectos</li>
                            <li>Capaz de desarrollar varias tareas a la vez</li>
                            <li>Adaptabilidad</li>
                            <li>Trabajo en Equipo</li>
                        </ul>
                    </div>
                    <div class="col-six tab-full">
                        <ul class="list-full">
                            <li>Creatividad</li>
                            <li>Gran capacidad de Aprendizaje</li>
                            <li>Liderazgo</li>
                            <li>Capacidad de análisis y resolución de problemas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="skill" class="skill">
            <div class="row">
                <div style="max-width: 900px; margin: 0 auto;">
                    <div class="col-twelve" style="margin-bottom: 5em">
                        <h5>Mis Concimientos</h5>
                        <h1>Tecnologías</h1>
                    </div>

                </div>
                <div class="col-twelve">
                    <div class="col-four tab-full">
                        <h5 class="left">Lenguajes de Programación</h5>
                        <ul class="list-full plus">
                            <li>PHP</li>
                            <li>Java</li>
                            <li>Javascript</li>
                            <li>AJAX</li>
                            <li>Go</li>
                            <li>C/C+/C#</li>
                            <li>Python</li>
                            <li>TypeScript</li>
                            <li>Ruby</li>
                            <li>Perl</li>
                        </ul>
                    </div>
                    <div class="col-four tab-full">
                        <h5 class="left">Frameworks</h5>
                        <ul class="list-full plus">
                            <li>Materialize.css</li>
                            <li>Bootstrap 3/4</li>
                            <li>Laravel</li>
                            <li>Jquery</li>
                            <li>Angular.js</li>
                            <li>CodeIgniter</li>
                            <li>Ionic 3/4</li>
                            <li>Vue.js</li>
                            <li>Node.js</li>
                            <li>Electron.js</li>
                        </ul>
                    </div>
                    <div class="col-four tab-full">
                        <h5 class="left">Otras Tecnologías</h5>
                        <ul class="list-full plus">
                            <li>Html 5</li>
                            <li>CSS 3</li>
                            <li>Sass</li>
                            <li>Less</li>
                            <li>Wordpress</li>
                            <li>Prestashop</li>
                            <li>Joomla</li>
                            <li>Wocommerce</li>
                        </ul>
                    </div>
                </div>
                <div class="col-twelve" style="margin-top: 5em;">
                    <div class="col-four tab-full">
                        <h5 class="left">Bases de Datos</h5>
                        <ul class="list-full plus">
                            <li>Mysql</li>
                            <li>ProstgreSQL</li>
                            <li>SQLite</li>
                            <li>MongoDB</li>
                            <li>Firebase</li>
                        </ul>
                    </div>
                    <div class="col-four tab-full">
                        <h5 class="left">APIs</h5>
                        <ul class="list-full plus">
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Google</li>
                            <li>Paypal</li>
                            <li>Mercado Libre</li>
                        </ul>
                    </div>
                    <div class="col-four tab-full">
                        <h5 class="left">Otras Habilidades</h5>
                        <ul class="list-full plus">
                            <li>SEO</li>
                            <li>Content Marketing</li>
                            <li>Social Media</li>
                            <li>Diseño Gráfico</li>
                            <li>Animaciones</li>
                            <li>Project Manajer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- / nelson -->

    <section id="contacto" class="contacto grey lighten-5">
        <div class="contenedor">
            <div class="center">
                <h5>Formulario de</h5>
                <h1>Contacto</h1>
            </div>
            <form action="" method="get" class="contacto-form">
                <div class="w-100 d-inline-flex">
                    <div class="w-50">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" placeholder="Introduce la respuesta">
                    </div>
                    <div class="w-50">
                        <label for="name-2">Apellido:</label>
                        <input type="text" id="name-2" name="name-2" placeholder="Introduce la respuesta">
                    </div>
                </div>
                <div class="w-100 mt-0">
                    <label for="ci">Cédula:</label>
                    <input type="text" id="ci" name="ci" placeholder="Introduce la respuesta">
                </div>
                <div class="w-100">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Introduce la respuesta">
                </div>
                <div class="w-100">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Introduce la respuesta">
                </div>
                <div class="w-100">
                    <button type="submit" class="ripple btn outline"><i class="fa fa-send" style="margin-right: .5em"></i>Enviar</button>
                    <button type="reset" class="ripple btn"><i class="fa fa-remove" style="margin-right: .5em"></i>Limpiar</button>
                </div>
            </form>
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