
$(document).ready(function(){

	$(".submenu").click(function()
	{
		$(this).children("ul").slideToggle(); 
	});

	$('#codigo').keyup(function(e)
	{
		e.preventDefault(); 

		var cl = $(this).val(); 
		var action = 'searchCliente'; 

		$.ajax({

			url: 'ajax.php',
			type: "POST",
			async : true,
			data: {action:action,cliente: cl},

			success: function(response)
			{
				console.log(response); 

					var data= $.parseJSON(response); 
					$('#nom_cli').val(data.nombre); 
					$('#tel_cli').val(data.telefono); 
					$('#sexo').val(data.sexo); 
					$('#ced_cli').val(data.DNI); 
					$('#ars_cli').val(data.codigo_seguro); 

				

			},
			error: function(error)
			{

			}
		});


	}); 


	
});
