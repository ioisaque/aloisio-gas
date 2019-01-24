$(document).ready(function() {
	$("#contactForm").submit(function(){
		$.notify({
			// options
			message: 'Processando sua mensagem...',
		},{
			// settings
			element: 'body',
			position: null,
			type: "info",
			allow_dismiss: true,
			placement: {
				from: "top",
				align: "left"
			},
			offset: 20,
			spacing: 10,
			z_index: 1031,
			delay: 5000,
			timer: 1000,
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			}
		});			
		let dados = $( this ).serialize();
		
		$.ajax({
			type: "POST",
			url: "_PHPMailer/index.php",
			data: dados + "&sentMessage=1",
			success: function( response )
			{
				response = response.split('#')

				$.notify({
					// options
					message: response[1],
				},{
					// settings
					element: 'body',
					position: null,
					type: response[0],
					allow_dismiss: true,
					placement: {
						from: "top",
						align: "left"
					},
					offset: 20,
					spacing: 10,
					z_index: 1031,
					delay: 5000,
					timer: 1000,
					animate: {
						enter: 'animated fadeInDown',
						exit: 'animated fadeOutUp'
					}
				});
			}
		});
		
		return false;
	});
});