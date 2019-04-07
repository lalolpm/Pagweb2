
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
			data: {action: action, cliente: cl},

			success: function(response)
			{
				console.log(response); 
			},
			error: function(error)
			{

			}
		});


	}); 


	
});
