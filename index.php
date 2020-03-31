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

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="./assets/engine1/style.css" />
	<script type="text/javascript" src="./assets/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
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
	<?php require_once root."app/views/header.php"; ?>

	<div id="start" class="content-slider">
		<!-- Start WOWSlider.com BODY section -->
		<div id="wowslider-container1">
		<div class="ws_images"><ul>
				<li><img src="./assets/data1/images/1.png" alt="Desarrollo Web Responsive" title="Desarrollo Web Responsive" id="wows1_0"/>Nuestro trabajo siempre esta orientado a la adaptabilidad móvil</li>
				<li><img src="./assets/data1/images/2.png" alt="Totalmente intuitivo" title="Totalmente intuitivo" id="wows1_1"/>Desarrollamos tu software de manera fácil e intuitiva para tí.</li>
				<li><img src="./assets/data1/images/3.jpg" alt="Desarrollo Profesional" title="Desarrollo Profesional" id="wows1_2"/>Somos profesionales en el área dispuesto a brindarte el mejor servicio</li>
				<li><img src="./assets/data1/images/4.jpg" alt="Lo último en Tecnología" title="Lo último en Tecnología" id="wows1_3"/>Trabajamos con los últimos stacks en tecnología, ofreciendo siempre el mejor servicio</li>
				<li><a href="http://wowslider.net"><img src="./assets/data1/images/5.png" alt="slideshow javascript" title="Diseño web adaptable a tí" id="wows1_4"/></a>Desarrollo multiplataforma para lograr la máxima interación con el usuario</li>
				<li><img src="./assets/data1/images/6.jpg" alt="El mejor equipo de trabajo" title="El mejor equipo de trabajo" id="wows1_5"/>Tenemos a los mejores desarrolladores esperandote</li>
			</ul></div>
			<div class="ws_bullets"><div>
				<a href="#" title="Desarrollo Web Responsive"><span><img src="./assets/data1/tooltips/1.png" alt="Desarrollo Web Responsive"/>1</span></a>
				<a href="#" title="Totalmente intuitivo"><span><img src="./assets/data1/tooltips/2.png" alt="Totalmente intuitivo"/>2</span></a>
				<a href="#" title="Desarrollo Profesional"><span><img src="./assets/data1/tooltips/3.jpg" alt="Desarrollo Profesional"/>3</span></a>
				<a href="#" title="Lo último en Tecnología"><span><img src="./assets/data1/tooltips/4.jpg" alt="Lo último en Tecnología"/>4</span></a>
				<a href="#" title="Diseño web adaptable a tí"><span><img src="./assets/data1/tooltips/5.png" alt="Diseño web adaptable a tí"/>5</span></a>
				<a href="#" title="El mejor equipo de trabajo"><span><img src="./assets/data1/tooltips/6.jpg" alt="El mejor equipo de trabajo"/>6</span></a>
			</div></div>
		<div class="ws_shadow"></div>
		</div>
	</div>

	<section id="about" class="grey lighten-3">
		<div class="container">
			<div class="row py-5">
				<div class="col-12 mb-5 pb-2">
					<h1>¿Quiénes somos?</h1>
					<h5>Información básica sobre nosotros</h5>
				</div>
				<div data-aos="zoom-in-right" class="col-sm-12 col-lg-6 pb-5">
					<img src="./assets/img/business-people-1572059_1920.jpg" alt="empresa" class="img-fluid">
				</div>
				<div data-aos="zoom-in-left" class="col-md-12 col-lg-6 text-justify">
					<p>Soy un joven programador full-stack, me especializo en la parte del backend. Trabajo con diseño gráfico y en la parte de SEO y Marketing Digital. Trabajo bajo presión y soy capaz de desenvolverme en casi cualquier campo laboral.</p>
					<p>Como persona tengo múltiples habilidades y destrezas que he desarrollado y perfeccionado como estudiante y profesional en el campo laboral. Actualmente soy estudiante universitario cursando la carrera de Informática en El IUTA...</p>
				</div>
				<div class="col-6 offset-3">
					<a href="./nosotros.php" data-aos="fade-up-right" class="btn btn-block second">Descubre más </a>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="services-area area-padding">
		<div class="container">
			<div class="row">
			    <div class="col-md-12 col-sm-12 col-xs-12">
			    	<div class="section-headline services-head text-center">
			        	<h1>Servicios</h1>
						<h5>Disfruta de todos nuestros servicios que tenemos para tí.</h5>
			    	</div>
			    </div>
			</div>
			<div class="row text-center">

		    	<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-down-right">
			        <div class="about-move">
			          	<div class="services-details">
			            	<div class="single-services">
				             	<a class="services-icon" href="#"> <i class="fa fa-code"></i> </a>
				             	<h4>Código Experto</h4>
				             	<p> Tenemos a los más expertos programadores, para cumplir cualquiera de tus expetativa, somos 100% profesionales </p>
				             </div>
			          	</div>
			        </div>
		    	</div>

				<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up-left">
			        <div class="about-move">
			          	<div class="services-details">
			            	<div class="single-services">
				             	<a class="services-icon" href="#"> <i class="fa fa-camera-retro"></i> </a>
				             	<h4>Diseño Interactivo</h4>
				             	<p> Gracias a muestro equipo de trabajo podrás difrutar de un diseño limpio, rápido, sencillo e interactivo </p>
				             </div>
			          	</div>
			        </div>
		    	</div>

				<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-down-left">
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#"> <i class="fa fa-wordpress"></i> </a>
								<h4>Wordpress</h4>
								<p> Nuestros programadores también trabajan con Wordpress, una de las plataforma más utilizada en el mundo. </p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-down-right">
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#"> <i class="fa fa-android"></i> </a>
								<h4>Programación en Android </h4>
								<p> Tenemos a los mejores profesionales en el área de programación móvil esperando, ven con nosotros. </p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up-left">
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#"> <i class="fa fa-bar-chart"></i> </a>
								<h4>Expertos en Seo</h4>
								<p> Contamos con especialista en Search Enginer Optimizer (SEO), posiciona tu sitio web con nuestra ayuda </p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-down-left">
					<div class=" about-move">
						<div class="services-details">
							<div class="single-services">
								<a class="services-icon" href="#"> <i class="fa fa-ticket"></i> </a>
								<h4>Soporte 24/7</h4>
								<p> Tenemos soporte de atensión al cliente las 24/7 todos los días del año, ven y disfruta de los beneficios. </p>
							</div>
						</div>
					</div>
				</div>

		  	</div>
		</div>
	</section>
	<section id="parallax">
		<div class="background"></div>
		<div class="container">
			<div class="row pt-5">
				<div class="col-12">
					<h2>Suscribete</h2>
					<h5>Recibe notificaciónes sobre las últimas promociones que tenemos para tí.</h5>
					<div class="col-8 offset-2">
						<div class="input-group mt-5 mb-2">
				        	<input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
					        <div class="input-group-prepend">
					          	<div class="input-group-text btn primary text-white"><i class="fi fi-paper-plane"></i></div>
					        </div>
				      	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<secton id="gallery" class="gallery">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Galería de Fotos</h1>
					<h5>Ve aquí algunos de nuestros trabajos más reciente</h5>
				</div>
				<div class="py-5 col-sm-12">
					<div class="row">
						<div class="col-sm-12 col-md-4" data-aos="flip-left">
							<div class="gallery-img">
								<img src="./assets/img/portafolio/web/1.png" alt="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4" data-aos="flip-right">
							<div class="gallery-img">
								<img src="./assets/img/portafolio/web/2.png" alt="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4" data-aos="flip-left">
							<div class="gallery-img">
								<img src="./assets/img/portafolio/web/3.png" alt="">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</secton>

	<section id="contact">
		<div class="row p-0 m-0">
			<div class="col-md-6 p-0 m-0">
				<img src="./assets/img/analysis-3853119_1920.jpg" alt="analisis" class="img-fluid">
			</div>
			<div class="col-md-6 p-0 m-0">
				<div id="parallax-2">
					<div class="background"></div>
					<div class="container text-center pt-5" style="z-index: 1;position: relative;">
						<h2 class="py-2">Trabajando contigo</h2>
						<h3 class="pt-4">Somos un grupo de trabajo certificado</h3>
						<a href="./nosotros.php#contacto" class="mt-5 btn primary ripple">Contactamos</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-0 pt-0">
		<div class="container py-5">
			<div class="row pt-5">
				<div class="col-lg-12">
					<h1>Stack de Tecnología</h1>
					<h5 class="mb-5">Trabajamos con lo último en stack tecnologíco de mercado</h5>
					<div data-aos="zoom-in" class="col-12 d-inline-flex small-card">
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-html5 red-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="red-text text-darken-1 pb-3"><strong>HTML 5</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-css3 blue-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="blue-text text-darken-1 pb-3"><strong>CSS 3</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-mongodb green-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="green-text text-darken-1 pb-3"><strong>Mongo DB</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-nodejs amber-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="amber-text text-darken-3 pb-3"><strong>Node.js</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-php blue-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="blue-text text-darken-3 pb-3"><strong>PHP</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-mysql green-text text-darken-2"></i>
									</div>
									<div class="card-content">
										<h4 class="green-text text-darken-2 pb-3"><strong>MySQL</strong></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-aos="zoom-in" class="col-12 d-inline-flex small-card">
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-shopify green-text text-darken-4"></i>
									</div>
									<div class="card-content">
										<h4 class="green-text text-darken-4 pb-3"><strong>Shopify</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-magento indigo-text text-darken-2"></i>
									</div>
									<div class="card-content">
										<h4 class="indigo-text text-darken-2 pb-3"><strong>Magento</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-sass pink-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="pink-text text-darken-1 pb-3"><strong>SASS</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-laravel red-text text-darken-2"></i>
									</div>
									<div class="card-content">
										<h4 class="red-text text-darken-2 pb-3"><strong>Laravel</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-less blue-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="blue-text text-darken-1 pb-3"><strong>Less</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-vuejs green-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="green-text text-darken-3 pb-3"><strong>Vue.js</strong></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-aos="zoom-in" class="col-12 d-inline-flex small-card">
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-angularjs red-text text-darken-2"></i>
									</div>
									<div class="card-content">
										<h4 class="red-text text-darken-2 pb-3"><strong>Angular</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-android green-text text-darken-4"></i>
									</div>
									<div class="card-content">
										<h4 class="green-text text-darken-4 pb-3"><strong>Android</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-python yellow-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="yellow-text text-darken-3 pb-3"><strong>Python</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-linux grey-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="grey-text text-darken-3 pb-3"><strong>Linux</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-java red-text text-darken-1"></i>
									</div>
									<div class="card-content">
										<h4 class="red-text text-darken-1 pb-3"><strong>Java</strong></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="card">
								<div class="card-container">
									<div class="content-icono">
										<i class="fi fi-ruby red-text text-darken-3"></i>
									</div>
									<div class="card-content">
										<h4 class="red-text text-darken-3 pb-3"><strong>Ruby</strong></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php require_once root."app/views/menuFloating.php"; ?>
	<?php require_once root."app/views/footer.php"; ?>


    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/engine1/wowslider.js"></script>
	<script src="./assets/engine1/script.js"></script>
    <script src="./assets/js/aos.js"></script>
	<script src="./assets/js/main.js"></script>

  </body>
</html>