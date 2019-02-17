$(document.body).ready(function(){

	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#blah').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#arquivo").change(function() {

		readURL(this);
	});


	$('#form_contato').validate({
		rules: {
			//nome: { required: true },
			//descricao: { required: true },
			//estatus: { required: true },
		},
		messages: {
			//nome: { required: 'Preencha o campo nome'},
			//descricao: { required: 'Preencha a descrição do serviço'},
			//arquivo: { required: 'Coloque uma imagem'},


		},
		submitHandler: function( form ){
			var dados = $( form ).serialize();
			$.ajax({
				type: "POST",
				url: "php/cadastrarServico.php",
				data: new FormData($('form')[0]),

        // Tell jQuery not to process data or worry about content-type
        // You *must* include these options!
        cache: false,
        contentType: false,
        processData: false,
        success: function( data )
        {	
						$('#cadastrarServico').hide(); // esconde o modal
	 	    			$("#returnServico").click(); // fecha o modal de fato
	 	    			$('#formServico').each (function(){
	 	    				this.reset();
	 	    			});
	 	    			$.ajax({
	 	    				url : 'mod_servicos.php',
	 	    				success: function(data){
	 	    					//$('#painelSistema').empty();
	 	    					//$('#painelSistema').html(data);
	 	    				}
	 	    			});

	 	    		}
	 	    	});

			return false;
		}
	});

$(document.body).on('click', '#estatus', function(){
 // retorna os dados do fetch.php para preencher a tabela via ajax
alert("batata");
codigo = $(this).attr("value"); 
$.ajax({  
		url:"php/mudaEstatus.php",  
		method:"POST",
		data:{codigo:codigo},  
		beforeSend:function(data){  



		},
		success:function(data){
		
			//$('#atracoesFesta').val(data.titulo);



		}  
	});
}); 
var codServico;
$(document.body).on('click', '#deletaServico', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codServico = $(this).attr("value"); 
});

$(document.body).on('click', '#excluiServ', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/excluirServico.php",  
 	method:"POST",  
 	data:{codServico:codServico}, 


 	success:function(data)
 	{	
						$('#excluirServico').hide(); // esconde o modal
	 	    			$("#returnExcluir").click(); // fecha o modal de fato
	 	    			$.ajax({
	 	    				url : 'mod_servicos.php',
	 	    				success: function(data){
	 	    					$('#painelSistema').html(data);
	 	    				}
	 	    			});

	 	    		}




	 	    	}); 
}); 






});