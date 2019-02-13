$(document).ready(function(){

    //Requisição assíncrona inicial utilizando AJAX e JQuery
    $.ajax({
        url : 'mod_servicos.php',
        success: function(data){
            $('#painelSistema').html(data);
        }
    });

    //Requisição assíncrona dos módulos utilizando AJAX e JQuery
    $('.itemMenuSistema').click(function(){
        if(this.id != 'sair'){
            var url_mod = this.id+'.php';
            $.ajax({
                url : url_mod,
                success: function(data){
                    $('#painelSistema').html(data);
                },
                beforeSend: function(){
                    $('#loader').css({display:"block"});
                },
                complete: function(){
                    $('#loader').css({display:"none"});
                }
            });
        }
    });

    //Os blocos a seguir manipulam os dados da div PREVIEW, baseado nos eventos de edição dos parâmetros pelo usuário
    $('.inpFormRadio').click(function(){
        $('#tagPre').html('['+this.value+']');
    });

    $('#tagEmail').keyup(function(){
        $(".inpFormRadio").prop("checked", false);
        $('#tagPre').html('['+this.value.toUpperCase()+']');
    });

    $('#assunto').keyup(function(){
        $('#assuntoPre').html(this.value.charAt(0).toUpperCase() + this.value.slice(1));
    });

    $('#msg').keyup(function(){
        $('#msgPre').html('&emsp;'+this.value.charAt(0).toUpperCase() + this.value.slice(1));
    });
});