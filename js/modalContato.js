$(document).ready(function(){
    //Envio de e-mail com AJAX e PHP
    
    $('form').get(0).reset();       //Limpa formulário

    var envia = function(){
        
        var postData = new FormData($('form')[0]);

        var nome= $('#nome').val();
        var telefone= $('#telefone').val();
        var email= validaEmail($('#email').val());
        var mensagem= $('#mensagem').val();

        if(nome.length != 0 &&  telefone.length != 0 && email != 0  && mensagem.length != 0){

            $('#enviar').off('click');
            $('#enviar').addClass('disabled');
            $('#enviar').prepend('<img id="spinner" src="img/spinner.gif" width="20">');

            $.ajax({
                type: 'POST',
                url: 'mailer.php',
                data: postData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if(data.indexOf('Erro') == -1){
                        $('.inpForm').val('');
                        $('#sucesso').fadeIn(500);
                        setTimeout(function() {
                            $('#sucesso').fadeOut(1500);
                        }, 5000);
                        $('#enviar').removeClass('disabled');
                        $('#spinner').remove();
                        $('#enviar').on('click', envia);
                    } else {
                        $('#fracasso').fadeIn(500);
                        setTimeout(function() {
                            $('#fracasso').fadeOut(1500);
                        }, 5000);
                        $('#enviar').removeClass('disabled');
                        $('#spinner').remove();
                        $('#enviar').on('click', envia);
                    }
                }

            });
        } else {
            $('#incompleto').fadeIn(500);
            setTimeout(function() {
                $('#incompleto').fadeOut(1500);
            }, 5000);
        }
    }

    $('#enviar').on('click', envia);
    
});

function validaEmail(email) {
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return regex.test(email);
}

/* Máscara Para digitação do número de telefone no formulário de contato */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('telefone').onkeypress = function(){
        mascara( this, mtel );
    }
}