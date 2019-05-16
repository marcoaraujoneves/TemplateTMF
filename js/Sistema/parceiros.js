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
			
			success: function( data ) {
				if(data.indexOf("Erro") == -1){
					ativaAlerta('Parceiro cadastrado com sucesso!',1);
					$('#modalCadastroParceiro').hide(); // esconde o modal
					$("#returnParceiro").click(); // fecha o modal de fato
					$('#formParceiro').each (function(){
						this.reset();
					});
				} else {
					ativaAlerta(data,3);
				}
			},
			error: function() {
				ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
			}
		});
	});
});
