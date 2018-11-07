jQuery(document).on('submit','#inicio', function(event){
	event.preventDefault();
	jQuery.ajax({
		url:'cus.php',
		type: 'POST',
		dataType:'json',
		data: $(this).serialize(),
		beforeSend: function() {
			$('#boton').val('validar....');
		}
	})
	.done(function(respuesta){
		if (!respuesta['error']) {
			window.location.replace("inicio.php");
		}else{
			console.log("no existe el usuario");
		}
	})
	.fail(function(res){
		console.log(res.responseText);
	})
	.always(function(){
		setTimeout(function(){$('#boton').val('continuar')},3000);

	})
});