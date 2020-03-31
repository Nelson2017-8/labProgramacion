$(document).ready(function() {
	$("#tagenda").submit(function(e) {
		e.preventDefault();
		let data = $(this).serialize();
		let url = "./app/model/agregarContacto.php";
		if ( allInputs("#tagenda") == true ) {
			$.ajax({
				url: url,
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				let content = $("#respuesta-tagenda");
				switch (data) {
					case "Contacto registrado":
						content.html('<div class="alert alert-success" role="alert">Contacto guardado</div>');
						document.querySelector("#tagenda").reset();
						break;
					case "Error":
						content.html('<div class="alert alert-danger" role="alert">Error: No se pudo guardar el contacto </div>');
						break;
				}
			})
			.fail(function(data) {
				$("#respuesta-tagenda").html('<div class="alert alert-danger" role="alert">Error: ha ocurrido un error en el servidor, revise la consola para más información </div>');
				console.log("error");
				console.log(data);
			})
		}
	});
});