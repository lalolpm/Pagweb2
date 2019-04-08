
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

	$('#txt_cod_producto').keyup(function(e)
	{
		e.preventDefault(); 

		var codigo_producto = $(this).val();
		//var cantidad = $('#txt_cant_producto').val(); 
		var action = 'searchProducto'; 

		$.ajax({

			url: 'ajax.php',
			type: "POST",
			async : true,
			data: {action:action,producto:codigo_producto},

			success: function(response)
			{
				//console.log(response); 

					var data= $.parseJSON(response); 
					$('#txt_descripcion').html(data.producto); 
					$('#txt_existencia').html(data.cantidad_existente); 
					$('#txt_precio').html(data.precio_venta); 
					$('#txt_cant_producto').val('1'); 
					

					$('#txt_cant_producto').removeAttr('disabled');	

					$('#add_product_venta').slideDown();	

			},
			error: function(error)
			{

			}
		});


	});

	$('#txt_cant_producto').keyup(function(e)
	{
		e.preventDefault();

		var precio_total = $(this).val() * $('#txt_precio').html();
		$('#txt_precio_total').html(precio_total);

	});


	
});
