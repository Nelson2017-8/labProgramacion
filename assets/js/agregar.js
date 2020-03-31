window.onload = function () {
	document.querySelector("form").reset()
};
$(document).ready(function() {
	$("#consulta").change(function() {
		$("#tproductos, #tproveedor").hide();
		var x = $(this).val();
		console.log(x)
		$("#"+x).fadeIn(500);

		$.post('ajaxInputProv.php', function(data, textStatus, xhr) {
			if (textStatus == "success") {
				$("#proveedor").html(data)
			}else{
				console.log("Ha ocurrido un error");
				console.log(data);
			}
		});

	});
	$("form").submit(function(e) {
		e.preventDefault();
		var data = $(this).serialize();
		let respuestaContainer = $("#respuesta");
		$.ajax({
			url: 'agregarModel.php',
			type: 'POST',
			data: data
		})
		.done(function(respuesta) {
			if ( respuesta == "exito" ) {
				respuestaContainer.html('<div class="alert alert-success" role="alert"> Campo Insertado con éxito</div>')
				document.querySelector("form").reset()
			}else{
				respuestaContainer.html('<div class="alert alert-danger" role="alert"> Error al insertar campo. Recuerde no duplicar los campos únicos.</div>')
			}
		})
		.fail(function(respuesta) {
			console.log("Ha ocurrido un error");
			console.log(respuesta);
			respuestaContainer.html('<div class="alert alert-danger" role="alert">Ha ocurrido un error. Puede que sea un problema del servido, revisa la consola de depuración para más detalles.</div>')
		})
	});

});