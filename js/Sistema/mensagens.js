$(document).ready(function(){
    carregaMensagens();

    var codMsg;
    $(document).on('click', '.linhaMensagem', function(){
        codMsg = $(this).attr("data-id");
        carregaMensagem(codMsg);
    });

    $(document).on('click', '#modalDeletaMsg', function(){
        $('#deletaCod').attr("data-idmsg",$('#codigo').attr("data-idmsg"));
    });

    $('#confirmaDeletarMsg').click(function(){
        deletaMensagem($('#deletaCod').attr("data-idmsg"));
    });

    $(document).on('click','#mudaStatus',function(){
        trocaStatus($('#codigo').attr("data-idmsg"));
    });
});

function carregaMensagens(){
    $.ajax({
        url:'Mensagens/carregaMensagens.php',
        success:function(data){
            $('#corpoMensagens').html(data);
        },
        error:function(){
            $('#corpoMensagens').html('<td colspan="5" style="text-align:center"> Houve um erro na requisição, favor tentar novamente mais tarde! </td>');
        }
    });
}

function carregaMensagem(codMsg){
    $.ajax({
        url:'Mensagens/carregaMensagem.php',
        method:'POST',
        data:{codigo:codMsg},
        success:function(data){
            $('#corpoModalMsg').html(data);
        },
        error:function(){
            $('#corpoModalMsg').html('<h3 style="text-align:center"> Houve um erro na requisição, favor tentar novamente mais tarde! </h3>');
        }
    });
}

function deletaMensagem(codMsg){
    $.ajax({
        url:'Mensagens/deletaMensagem.php',
        method:'POST',
        data:{codigo:codMsg},
        success:function(data){
            carregaMensagens();
        },
        error:function(){
            $('#corpoModalMsg').html('<h3 style="text-align:center"> Houve um erro na requisição, favor tentar novamente mais tarde! </h3>');
        }
    });
}

function trocaStatus(codMsg){
    $.ajax({
        url:'Mensagens/atualizaMensagem.php',
        method:'POST',
        data:{codigo:codMsg,status:$("#mudaStatus").attr('data-status')},
        success:function(data){
            carregaMensagens();
            carregaMensagem(codMsg);
        },
        error:function(){
            $('#corpoModalMsg').html('<h3 style="text-align:center"> Houve um erro na requisição, favor tentar novamente mais tarde! </h3>');
        }
    });
}