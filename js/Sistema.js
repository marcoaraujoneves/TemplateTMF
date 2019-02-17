$(document).ready(function(){

    //Requisição assíncrona inicial utilizando AJAX e JQuery
    $.ajax({
        url : 'mod_produtos.php',
        success: function(data){
            $('#painelSistema').html(data);
        }
    });

    //Requisição assíncrona dos módulos utilizando AJAX e JQuery
    $('.itemMenuSistema').click(function(){
        $('#painelSistema').empty();
        if(this.id != 'sair'){
            var url_mod = 0;
            url_mod = this.id+'.php';
            $.ajax({
                url : url_mod,
                success: function(data){
                    $('#painelSistema').empty();
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

