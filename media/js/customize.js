$(document).ready(function($){
	
	$('#btn-save').click(function(){
		
		$.ajax({
			url: 'alumno/save',
			type: 'POST',
			data: $('#formulario').serialize(),
			dataType: 'json'
		}).done(function(response){
                    if(response.status == 'OK')
                    {
                        
                       location.reload()
                       /* var data = response.data
                        var tr = "<tr data-info='"+ data.id +"'><td>"+ data.codigo +"</td> " + 
                                "<td>"+ data.ape_paterno +"</td> " + 
                                "<td>"+ data.ape_materno +"</td> " + 
                                "<td>"+ data.nombres +"</td> " + 
                                "<td>"+ data.curso +"</td> " + 
                                "<td> " + 
                                    "<button data-id='"+ data.id +"' id='btn-editar' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button> " + 
                                    "<button data-id='"+ data.id +"' id='btn-delete' type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button> " + 
                                "</td></tr>";
                        $('#tabla-alumnos tbody').prepend(tr)
                        $('#formulario').each (function(){this.reset()})*/
                    }
                    else
                    {
                        alert('Error al guardar los datos')
                    }
		}).fail(function(){
			alert('Error al enviar datos')
		})
	})
        
        $('.btn-delete').click(function(){
            var id = $(this).data('id')
            
            $.ajax({
                    url: 'alumno/delete',
                    type: 'POST',
                    data: {id:id},
                    dataType: 'json'
            }).done(function(response){
                if(response.status == 'OK')
                {
                    location.reload()
                }
                else
                {
                    alert('Error al eliminar los datos')
                }
            }).fail(function(){
                    alert('Error al enviar datos')
            })
        })
        
        $('.btn-editar').click(function(){
            var id = $(this).data('id')
            
            $.ajax({
                    url: 'alumno/getAlumno',
                    type: 'POST',
                    data: {id:id},
                    dataType: 'json'
            }).done(function(response){
                if(response.status == 'OK')
                {
                    var data = response.data
                    $('#codigo').val(data.codigo)
                    $('#ape_paterno').val(data.ape_paterno)
                    $('#ape_materno').val(data.ape_materno)
                    $('#nombres').val(data.nombres)
                    $('#curso').val(data.curso)
                    $('#id').val(data.id)
                }
                else
                {
                    alert('Error al eliminar los datos')
                }
            }).fail(function(){
                    alert('Error al enviar datos')
            })
        })
	
	console.log('ssss')
})