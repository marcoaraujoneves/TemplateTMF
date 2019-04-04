$(document.body).ready(function(){
	$(document.body).on('submit', '#formCliente', function(j){
		j.preventDefault(); 

		$.ajax({
			type: "POST",
			url: "php/cadastraCliente.php",
			data:new FormData(this),
			processData:false,
			contentType:false,
			cache:false,

			success: function( data )
			{	
	$('#modalCadastroCliente').hide(); // esconde o modal
	 	    			$("#returnCliente").click(); // fecha o modal de fato
	 	    			$('#formCliente').each (function(){
	 	    				this.reset();
	 	    			});

	 	    		}
	 	    	});
	});
});
