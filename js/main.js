$(document).ready(function(){

    var $doc = $('html, body');
    
    $('.linkMenu ').click(function() {
        $('.navbar-collapse').collapse("hide");
        
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 140
        }, 500);
        return false;
    });
    
    var alturas = {};
    var i=1;

    $('.secaoSite').each(function () {
        alturas[i] = this.id; // ex: alturas['section_2'] = 600
        i++;
    });

    var numSecoes=parseInt(i) + 1;
    i=parseInt(i);

    var seccao;
    var alturaSecaoI;
    var windowTop;
    
    $(window).on('scroll', function() {
        for(i=1;i < numSecoes; i++){
            alturaSecaoI = $('#'+alturas[i]).offset().top;
            windowTop = $(window).scrollTop() + 200;
            if(windowTop <= 400 ){
                $('.linkMenu').removeClass("link_ativo");
                $('#link_secaoSobre').addClass("link_ativo");
            }
            if(windowTop >= alturaSecaoI ){
                $('.linkMenu').removeClass("link_ativo");
                seccao = alturas[i].replace("secao","link_secao");
                $('#'+seccao).addClass("link_ativo");
            }
        }
    });

    //Carregando as informações da página principal
    $.ajax({  
		url:"sistema/Sobre/carregaDados.php",
		dataType:"json",
		success:function(data){
            $('#indicador1qt').html(data.indicador1qt);
            $('#indicador2qt').html(data.indicador2qt);
            $('#indicador3qt').html(data.indicador3qt);
            $('#indicador4qt').html(data.indicador4qt);

            $('#indicador1').html(data.indicador1);  
            $('#indicador2').html(data.indicador2);  
            $('#indicador3').html(data.indicador3);  
			$('#indicador4').html(data.indicador4);
			$('#textoSobre').html(data.textoSobre);
		}  
	});

    //Envio de e-mail com AJAX e PHP
    $('#enviar').click(function(){
        $('.alert').css('display','none');
        var nome= $('#nome').val();
        var telefone= $('#telefone').val();
        var email= validaEmail($('#email').val());
        var mensagem= $('#mensagem').val();

        if(nome != '' &&  telefone != '' && email && mensagem != ''){
            $.ajax({
                url:'contato.php',
                method: 'post',
                data: $('#formularioContato').serialize(),
                success: function(data){
                    if(data  == '1'){
                        alert(data);
                        $('.inpForm').val('');
                        $('#sucesso').css('display','block');
                    }
                    else{
                        alert(data);
                        $('#fracasso').css('display','block');
                    }
                }
            });
        }
        else{
            $('#incompleto').css('display','block');  
        }
    });

    $('.btn_port').click(function(){
        $('.img_btn_port').attr("src","../img/circulo.png");
        $("img",this).attr("src","../img/circulo2.png");
    });
});

//Função para testar se o e-mail é válido
function validaEmail(email) {
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return regex.test(email);
}