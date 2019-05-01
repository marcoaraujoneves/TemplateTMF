$(document.body).ready(function(){
	var codPortifolio;


	$(document.body).on('click', '#carai', function(){
		$('#formPortifolio').validate({
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
			    var form = $('#formPortifolio')[0]; //  [0], because you need to use standart javascript object here
			    var formData = new FormData(form);
			    $.ajax({
			    	type: "POST",
			    	url: "php/portifolio/cadastrarPortifolio.php",
			    	data: formData,

        // Tell jQuery not to process data or worry about content-type
        // You *must* include these options!
        cache: false,
        contentType: false,
        processData: false,
        success: function( data )
        {	
						$('#cadastrarPortifolio').hide(); // esconde o modal
	 	    			$("#returnServico").click(); // fecha o modal de fato
	 	    			$('#formPortifolio').each (function(){
	 	    				this.reset();
	 	    			});
	 	    			location.reload();

	 	    		}
	 	    	});

			    return false;
			}
		});
	});



	
	$(document.body).on('click', '#deletaPortifolio', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 codPortifolio = $(this).attr("value"); 
});



	$(document.body).on('click', '#excluidPort', function(){
 // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
 $.ajax({  
 	url:"php/portifolio/excluirPortifolio.php",  
 	method:"POST",  
 	data:{codPortifolio:codPortifolio}, 


 	success:function(data)
 	{	
						$('#excluirPortifolio').hide(); // esconde o modal
	 	    			$("#returnPortExcluir").click(); // fecha o modal de fato
	 	    			location.reload();

	 	    		}




	 	    	}); 
});

$(document.body).on('click', '#statusPortifolio', function(){
 // retorna os dados do fetch.php para preencher a tabela via ajax
 codigo = $(this).attr("value"); 
 $.ajax({  
 	url:"php/portifolio/mudaStatus.php",  
 	method:"POST",
 	data:{codigo:codigo},  
 	beforeSend:function(data){  



 	},
 	success:function(data){
 		
 		$('#onoff'+codigo).html(data);
 		$('#status'+codigo).html("Inativo");
 		teste = $('#status'+codigo).attr("value"); 
 		if(teste=='Ativo'){
 			$('#status'+codigo).html("Inativo");
 			$('#status'+codigo).attr("value","Inativo");
 			
			
 		}
 		if(teste=='Inativo'){
 			$('#status'+codigo).html("Ativo");
 			$('#status'+codigo).attr("value","Ativo");
 			
			
 		}



		}  
	});
}); 



	$(document).on('click', '#previewImagem', function(){
		$( "#galerias" ).empty();
		var codPortifolio = $(this).attr("value");
 // retorna os dados do fetch.php para preencher a tabela via ajax 
 $.ajax({  
 	url:"php/portifolio/pegaGaleria.php",  
 	method:"POST",
 	data:{codPortifolio:codPortifolio},
 	dataType:"json",   
 	beforeSend:function(){  
 	},
 	success:function(data){  
 		$.each(data, function(r) {

 			
 			$('#galerias').append('<img  src="Img/Portifolio/'+data[r].nome+'" />')

 		});


 		


 	}  
 });



}); 
	$(document).on('click', '#modificaPortifolio', function(){

		codPortifolio = $(this).attr("value");
 // retorna os dados do fetch.php para preencher a tabela via ajax 
 $.ajax({  
 	url:"php/portifolio/modificaPortifolio.php",  
 	method:"POST",
 	data:{codPortifolio:codPortifolio},
 	dataType:"json",   
 	beforeSend:function(data){  



 	},
 	success:function(data){  
 		$('#modificanomePortifolio').val(data.nome);
 		$('#modificadescricaoPortifolio').val(data.descricao);
 		$('#modificacodigoPortifolio').val(data.codPortifolio);
 		$('#modificalinkYoutube').val(data.linkYoutube);


 	}  
 });



}); 


	$(document.body).on('click', '#modificacarai', function(){
		
		$('#formPortifolioModifica').validate({
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
				url: "php/portifolio/modifica.php",
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