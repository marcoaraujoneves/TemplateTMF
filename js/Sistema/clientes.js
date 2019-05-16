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

			success: function( data ){	
				if(data.indexOf("Erro") == -1){
					ativaAlerta('Cliente cadastrado com sucesso!',1);
					$('#modalCadastroCliente').hide(); // esconde o modal
					$("#returnCliente").click(); // fecha o modal de fato
					$('#formCliente').each (function(){
						this.reset();
					});
				} else {
					ativaAlerta(data,3);
				}
			 },
			 error: function(){
				ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
			 }
	 	});
	});
});
