$(document.body).ready(function(){
	$(document.body).on('submit', '#formParceiro', function(e){
		e.preventDefault(); 

		$.ajax({
			type: "POST",
			url: "php/cadastraParceiro.php",
			data:new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			
			success: function( data )
			{	
				$('#modalCadastroParceiro').hide(); // esconde o modal
	 	    			$("#returnParceiro").click(); // fecha o modal de fato
	 	    			$('#formParceiro').each (function(){
	 	    				this.reset();
	 	    			});
	 	    			
	 	    		}
	 	    	});
	});
});
