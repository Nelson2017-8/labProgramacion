<!-- Modal -->
<div class="modal fade" id="registrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center pt-4">
					<div class="btn-group" role="group">
					  <button type="button" data-tab="#tab-1" class="tab ripple btn indigo darken-3 text-white px-3">Registrar Usuario</button>
					  <button type="button" data-tab="#tab-2" class="tab ripple btn indigo darken-1 text-white px-3">Iniciar Sessión</button>
					</div>
				</div>
				<div class="px-4 pt-4">
					<div id="tab-1" class="row">
						<form class="col-12 register">
							<div class="mb-5">
								<h5>Formulario de registro de usuario</h5>
								<h1>Registrar Usuario</h1>
							</div>
							<div class="form-group row">
							    <label for="firstName" class="col-sm-6 col-md-3 col-form-label">Nombre:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="text" name="firstName" class="form-control" id="firstName">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="lastName" class="col-sm-6 col-md-3 col-form-label">Apellido:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="text" name="lastName" class="form-control" id="lastName">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="email" class="col-sm-6 col-md-3 col-form-label">Correo:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="email" name="email" class="form-control" id="email">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="pass" class="col-sm-6 col-md-3 col-form-label">Contraseña:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="password" name="pass" class="form-control" id="pass">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="phone" class="col-sm-6 col-md-3 col-form-label">Teléfono:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="text" name="phone" class="form-control" id="phone">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="genero" class="col-sm-6 col-md-3 col-form-label">Genéro:</label>
							    <div class="col-sm-6 col-md-9">
							    	<select class="form-control" name="genero" id="genero">
								    	<option value="Masculino">Masculino</option>
								    	<option value="Femenino">Femenino</option>
								    </select>
							    </div>
							</div>
							<div class="form-group row">
							    <label for="dateBrinday" class="col-sm-6 col-md-3 col-form-label">Fecha de Nacimiento:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="date" name="dateBrinday" class="form-control" id="dateBrinday">
							    </div>
							</div>
							<div id="respuesta-register"> </div>
							<button type="submit" class="ripple my-5 btn btn-block text-white py-2 blue darken-4">Registrar <i class="mr-2 fi fi-person"></i></button>

						</form>
					</div>
					<div id="tab-2" class="hidden row">
						<form class="col-12 login">
							<div class="mb-5">
								<h5>Formulario de inicio de sesión</h5>
								<h1>Iniciar Sesión</h1>
							</div>
							<div class="form-group row">
							    <label for="email" class="col-sm-6 col-md-3 col-form-label">Correo:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="email" name="email" class="form-control" id="email">
							    </div>
							</div>
							<div class="form-group row">
							    <label for="pass" class="col-sm-6 col-md-3 col-form-label">Contraseña:</label>
							    <div class="col-sm-6 col-md-9">
									<input type="password" name="pass" class="form-control" id="pass">
							    </div>
							</div>
							<div id="respuesta-login"> </div>
							<button type="submit" class="ripple my-5 btn btn-block text-white py-2 blue darken-4">Iniciar <i class="mr-2 fi fi-paper-plane"></i></button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	<div class="btn-float-content">
		<ul class="menu-float">
			<li><a href="./agregar_contacto.php"><span class="grey darken-4 text-white py-2 px-3 rounded">Agregar</span><i class="fi fi-mysql fi-stack ellipse green-text text-darken-4"></i></a></li>
			<li><a href="./consultar_contacto.php"><span class="grey darken-4 text-white py-2 px-3 rounded">Consultar</span><i class="fi fi-mysql fi-stack ellipse amber-text text-darken-4"></i></a></li>
			<?php if ($login == false  ): ?>
				<?php if (pathname != "/proyecto/servicios.php" && pathname != "/proyecto/nosotros.php"): ?>
					<li><a href="#" data-toggle="modal" data-target="#registrarUsuario"><span class="grey darken-4 text-white py-2 px-3 rounded">Iniciar Sesión</span><i class="fi fi-person fi-stack ellipse teal-text text-darken-4"></i></a></li>
				<?php endif ?>
			<?php endif ?>
			<li><a href="#start" class="btn-float deslisable"><span class="grey darken-4 text-white py-2 px-3 rounded">Opciones / Subir</span><i class="fi fi-player-settings fi-stack ellipse"></i></a></li>
		</ul>
	</div>