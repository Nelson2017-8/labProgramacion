function emptyInput (input) {
	if ( input.values != "" ) {
		return true;
	}else{
		return false;
	}
}

function minLength (input, min) {
	if ( input.length >  min) {
		return true;
	}else{
		return false;
	}
}
function maxLength (input, max) {
	if ( input.length <  max) {
		return true;
	}else{
		return false;
	}
}
function checkInput (input, min = 0, max = null) {
	if ( emptyInput(input) == true ) {
		if ( minLength(input, min) == true ) {
			if ( max != null ) {
				if ( maxLength(input, max) == true ) {
					return true;
				}
			}else{
				return true;
			}
		}
	}
	return false;
}

function allInputs (form) {
	let inputs = document.querySelectorAll(form + " input");
	let tmp;
	for(let i = 0; i < inputs.length; i++){
		let min = inputs[i].minLength
		let max = inputs[i].maxLength
		tmp = checkInput(inputs[i], min, max);
		if ( tmp == false ) {
			break;
		}
	}
	return true;
}
AOS.init({easing: 'ease-in-out-sine'});
$(document).ready(function() {
	$("a[href='#']").click(function(e) {
		e.preventDefault();
	});
	$("#wowslider_engine").remove();

	// button flotante
	let menuButton = $(".menu-float li a:lt(3)");
	$(".menu-float").hover(function() {
		menuButton.fadeIn(300).addClass('active');
		$(".btn-float i").addClass("fi-angle-up").removeClass("fi-player-settings")
	}, function() {
		$(".btn-float i").removeClass("fi-angle-up").addClass("fi-player-settings")
		menuButton.fadeOut(300).removeClass('active');
	});
	// deslisable
	$(".deslisable").click(function (e) {
		e.preventDefault();
		var target = this.hash, // href="infor"
			$target = $(target); // $("#infor")
		// console.log($target)
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 1000, 'swing', function() {
			// window.location.hash = "";
		});
	});
	// animaciones
	let padreAnimate = document.querySelectorAll(".bucleAnimated")
	for (let i = 0; i < padreAnimate.length; i++) {

		const padreI = $(padreAnimate[i])
		let interval = padreI.data("interval")
		let animated = padreI.data("animated")
		padreI.addClass("animated")

		setInterval(function(){
			padreI.toggleClass("pulse")
		} , interval);
	}
	$(window).scroll(function(){
		let top = window.pageYOffset;
		if ( $(".scrollAnimated")[0] != undefined ) {
			let padreAnimatedScroll = $(".scrollAnimated")
			let element = padreAnimatedScroll.offset().top
			let animated = padreAnimatedScroll.data('animated')
			padreAnimatedScroll.addClass("animated")
			// console.log("window: " + top + " element: "  + element + " suma: " + (top + 200) )
			if ( (top + 200) >= element && (top + 200) <= (element + 200) ) {
				padreAnimatedScroll.addClass(animated)
				// console.log("añadido")
			}
			else if( (top - 200 ) <= element ){
				padreAnimatedScroll.removeClass(animated)
				// console.log("eliminado")
			}
			else if( (top + 200 ) > element ){
				padreAnimatedScroll.removeClass(animated)
				// console.log("eliminado")
			}
			else{
				padreAnimatedScroll.removeClass(animated)
				// console.log("eliminado")
			}
		}
	})
	$(".hoverAnimated").hover(function() {
		let animated = $(this).data('animated')
		$(this).addClass('animated').addClass(animated)
	}, function() {
		let animated = $(this).data('animated')
		$(this).removeClass(animated)
	});
	$(window).scroll(function() {
		let top = window.pageYOffset;

		// header
		if ( $("header").data("disabled") != true ) {
			if ( top > 450 ) {
				$("header").addClass("slideInDown active");
			}else{
				$("header").removeClass("slideInDown active");
			}
		}
	});

	// modal register-login

	$(".tab").click(function () {
		let has = $(this).data('tab');
		$("#tab-1, #tab-2").hide();
		$(has).fadeIn(600);
	});

	$("form.login").submit(function(e) {
		e.preventDefault();
		let data = $(this).serialize();
		let url = "./app/model/logearUsuario.php";
		if ( allInputs(".login") == true ) {
			$.ajax({
				url: url,
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				if ( data == "Usuario logeado" ) {
					location.reload();
				}else{
					$("#respuesta-login").html('<div class="alert alert-danger" role="alert">Error: verifique sus credenciales de seguridad </div>');
				}
			})
			.fail(function(data) {
				$("#respuesta-login").html('<div class="alert alert-danger" role="alert">Error: ha ocurrido un error en el servidor, revise la consola para más información </div>');
				console.log("error");
				console.log(data);
			})
		}

	});

	$("form.register").submit(function(e) {
		e.preventDefault();
		let data = $(this).serialize();
		let url = "./app/model/agregarUsuario.php";
		if ( allInputs(".register") == true ) {
			$.ajax({
				url: url,
				type: 'POST',
				data: data,
			})
			.done(function(data) {
				let content = $("#respuesta-register");
				switch (data) {
					case "Error usuario no registrado":
						content.html('<div class="alert alert-danger" role="alert">Error: El usuario no se ha podido registrar </div>');
						break;
					case "El usuario ya existe":
						content.html('<div class="alert alert-danger" role="alert">Error: El usuario ya existe </div>');
						break;
					case "Usuario logeado":
						location.reload();
						break;
					case "Error":
						content.html('<div class="alert alert-danger" role="alert">Error: Lo siento ha ocurrido un error </div>');
						break;
					default:
						content.html('<div class="alert alert-danger" role="alert">Error: El usuario no se ha podido registrar </div>');
						break;
				}
			})
			.fail(function(data) {
				$("#respuesta-register").html('<div class="alert alert-danger" role="alert">Error: ha ocurrido un error en el servidor, revise la consola para más información </div>');
				console.log("error");
				console.log(data);
			})
		}
	});
});
