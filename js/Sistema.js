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
        $('#painelSistema').empty();
        if(this.id != 'sair'){
            var url_mod = 0;
            var id = this.id;
            url_mod = this.id+'.php';
            $.ajax({
                url : url_mod,
                success: function(data){
                    $('#painelSistema').empty();
                    $('#painelSistema').html(data);
                    $('.itemMenuSistema').removeClass('itemMenuSistemaAtivo');
                    $('#'+id).addClass('itemMenuSistemaAtivo');
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

