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
            if(data.indexOf("Erro") == -1){
                $('#corpoMensagens').html(data);
            }else {
                ativaAlerta(data,3);
            }
        },
        error:function(){
            ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
        }
    });
}

function carregaMensagem(codMsg){
    $.ajax({
        url:'Mensagens/carregaMensagem.php',
        method:'POST',
        data:{codigo:codMsg},
        success:function(data){
            if(data.indexOf("Erro") == -1){
                $('#corpoModalMsg').html(data);
            }else {
                ativaAlerta(data,3);
            }
        },
        error:function(){
            ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
        }
    });
}

function deletaMensagem(codMsg){
    $.ajax({
        url:'Mensagens/deletaMensagem.php',
        method:'POST',
        data:{codigo:codMsg},
        success:function(data){
            if(data.indexOf("Erro") == -1){
                carregaMensagens();
            }else {
                ativaAlerta(data,3);
            }
        },
        error:function(){
            ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
        }
    });
}

function trocaStatus(codMsg){
    $.ajax({
        url:'Mensagens/atualizaMensagem.php',
        method:'POST',
        data:{codigo:codMsg,status:$("#mudaStatus").attr('data-status')},
        success:function(data){
            if(data.indexOf("Erro") == -1){
                carregaMensagens();
                carregaMensagem(codMsg);
            }else {
                ativaAlerta(data,3);
            }
        },
        error:function(){
            ativaAlerta('Erro ao realizar a requisição, tente novamente mais tarde!',2);
        }
    });
}