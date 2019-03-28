$(document.body).ready(function(){
var codProduto;


	$(document.body).on('click', '#potato', function(){
		$('#formProduto').validate({
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
			    var form = $('#formProduto')[0]; //  [0], because you need to use standart javascript object here
			    var formData = new FormData(form);
			    $.ajax({
			    	type: "POST",
			    	url: "php/produto/cadastrarProduto.php",
			    	data: formData,

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

	 	    					$('#painelSistema').empty();
	 	    					$('#painelSistema').html(data);
	 	    				}
	 	    			});

	 	    		}
	 	    	});

			return false;
		}
	});
	});




	
$(document.body).on('click', '#deletaProduto', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codProduto = $(this).attr("value"); 
});



	$(document.body).on('click', '#excluidProd', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/produto/excluirProduto.php",  
 	method:"POST",  
 	data:{codProduto:codProduto}, 


 	success:function(data)
 	{	
						$('#excluirProduto').hide(); // esconde o modal
	 	    			$("#returnProdExcluir").click(); // fecha o modal de fato
	 	    			$.ajax({
	 	    				url : 'mod_produtos.php',
	 	    				success: function(data){
	 	    					$('#painelSistema').html(data);
	 	    				}
	 	    			});

	 	    		}




	 	    	}); 
});


	$(document).on('click', '#previewImagens', function(){
		$( "#galeria" ).empty();
		var codProdutos = $(this).attr("value");
 // retorna os dados do fetch.php para preencher a tabela via ajax 
 $.ajax({  
 	url:"php/produto/pegaGaleria.php",  
 	method:"POST",
 	data:{codProdutos:codProdutos},
 	dataType:"json",   
 	beforeSend:function(){  
 	},
 	success:function(data){  
 		$.each(data, function(r) {
 
 			
 				$('#galeria').append('<img  src="Img/Produtos/'+data[r].nome+'" />')

 		});


 		


 	}  
 });



}); 



















});

