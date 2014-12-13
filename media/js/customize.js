$(document).ready(function($){
	
	$('#btn-save').click(function(e){
		
		e.preventDefault()
		console.log('wwww')
		
		$.ajax({
			url: 'alumno/save',
			type: 'POST',
			data: $('#formulario').serialize(),
			dataType: 'json'
		}).done(function(response){
			
			console.log(response)
			
		}).fail(function(){
			alert('Error al guardar datos')
		})
	})
	
	console.log('ssss')
})