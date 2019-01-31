$(document).ready(function(){


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