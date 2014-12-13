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
                    if(response.status == 'OK')
                        var data = response.data
                        
                        $('#tabla-alumnos tbody')
                    
                    
		}).fail(function(){
			alert('Error al enviar datos')
		})
	})
	
	console.log('ssss')
})