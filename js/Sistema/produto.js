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
	 	    			location.reload();

	 	    		}
	 	    	});

			    return false;
			}
		});
	});



	$(document.body).on('click', '#modificaProduto', function(){

$('#blah').attr('src', ''); // Clear the src
$("#formProduto").trigger('reset');

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
	 	    			location.reload();

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

	$(document).on('click', '#modificaProduto', function(){

		codProdutos = $(this).attr("value");
 // retorna os dados do fetch.php para preencher a tabela via ajax 
 $.ajax({  
 	url:"php/produto/modificaProduto.php",  
 	method:"POST",
 	data:{codProdutos:codProdutos},
 	dataType:"json",   
 	beforeSend:function(data){  



 	},
 	success:function(data){  
 		$('#modificanomeProduto').val(data.nome);
 		$('#modificadescricaoProduto').val(data.descricao);
 		$('#modificacodigoProduto').val(data.codProduto);


 	}  
 });



}); 


	$(document.body).on('click', '#modificapotato', function(){
		
		$('#formProdutoModifica').validate({
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
				url: "php/produto/modifica.php",
				data: new FormData($('form')[1]),

        // Tell jQuery not to process data or worry about content-type
        // You *must* include these options!
        cache: false,
        contentType: false,
        processData: false,
        success: function( data )
        {	
						$('#modificarProduto').hide(); // esconde o modal
	 	    			$("#modificareturnServico").click(); // fecha o modal de fato
	 	    			$('#formProdutoModifica').each (function(){
	 	    				this.reset();
	 	    			});
	 	    			location.reload();

	 	    		}
	 	    	});

			return false;
		}
	});
	});



});

