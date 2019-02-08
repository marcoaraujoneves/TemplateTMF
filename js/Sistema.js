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
});