$(document).ready(function(){
    //Os blocos a seguir manipulam os dados da div PREVIEW, baseado nos eventos de edição dos parâmetros pelo usuário
    $('.inpFormRadio').click(function(){
        $('#tagPre').html('['+this.value+']');
        $('#tagEmail').val('');
    });

    $('#tagEmail').keyup(function(){
        $(".inpFormRadio").prop("checked", false);
        $('#tagPre').html('['+this.value.toUpperCase()+']');
    });

    $('#assunto').keyup(function(){
        $('#assuntoPre').html(this.value.charAt(0).toUpperCase() + this.value.slice(1));
    });

    $('#msg').keyup(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == 13){
            //$(this).val(this.value+'\r\n')
        }
        $('#msgPre').html('&emsp;'+this.value.charAt(0).toUpperCase() + this.value.slice(1));
    });
    
    //Carrega a tabela de clientes
    carregaClientes();

    //Eventos associados aos botões da tabela de clientes
    $(document).on('click','.btnDeleta',function(){
        $('#confirmaDeletarMsg').attr("data-id",$(this).attr('data-id'));
        $('#modalDeleteCliente').modal('show');
    });

    $(document).on('click','#confirmaDeletarMsg',function(){
        deletarCliente($(this).attr("data-id"));
    });

    $(document).on('click','.btnEdita',function(){
        $('#codigoCliente').val($(this).attr('data-id'));
        carregaCliente($(this).attr('data-id'));
        $('#modalEditaCliente').modal('show');
    });

    $(document).on('click','#salvarCliente',function(){
        editarCliente($("#codigoCliente").val());
    });

    $(document).on('click','.btnStatus',function(){
        statusCliente($(this).attr('data-id'),$(this).attr('data-status'));
    });

    $(document).on('click','#campanhas',function(){
        carregaCampanhas();
    });
    
    $(document).on('click','.linhaCampanha',function(){
        carregaCampanha($(this).attr('data-id'));
        $('#modalCampanha').modal('show');
    });

    $(document).on('click','#enviaCampanha',function(){
        enviaCampanha();
        //console.log($('#formCampanha').serialize());
    });

});

function carregaClientes(){
    $.ajax({
        url:'Newsletter/carregaClientes.php',
        success:function(data){
            $('#corpoTbClientes').html(data);
        },
        error:function(){
            $('#corpoTbClientes').html('<tr> <td colspan="5" style="text-align:center;">Houve um erro na requisição, por favor, tente novamente mais tarde!</td></tr>');
        }
    });
}

function carregaCliente(codCliente){
    $.ajax({
        url:'Newsletter/carregaCliente.php',
        method:'POST',
        data:{codigo:codCliente},
        dataType:"json",
        success:function(data){
            console.log(data);
            $('#nome').val(data.nome);
            $('#email').val(data.email);
            $('#status option').each(function(){
                if($(this).val() == data.status){
                    $(this).attr("selected",true);
                }
            });
        },
        error:function(){
            $('#corpoTbClientes').html('<tr> <td colspan="5" style="text-align:center;">Houve um erro na requisição, por favor, tente novamente mais tarde!</td></tr>');
        }
    });
}

function statusCliente(codCliente,statusAtual){
    $.ajax({
        url:'Newsletter/statusCliente.php',
        method:'POST',
        data:{codigo:codCliente,status:statusAtual},
        success: function(data){
            carregaClientes();
        },
        error: function(data){

        }
    });
}

function editarCliente(codCliente){
    $.ajax({
        url:'Newsletter/editarCliente.php',
        method:'POST',
        data:$('#formCliente').serialize(),
        success: function(data){
            carregaClientes();
        },
        error: function(data){

        }
    });
}

function deletarCliente(codCliente){
    $.ajax({
        url:'Newsletter/deletarCliente.php',
        method:'POST',
        data:{codigo:codCliente},
        success: function(data){
            carregaClientes();
        },
        error: function(data){

        }
    });
}

function carregaCampanhas(){
    $.ajax({
        url:'Newsletter/carregaCampanhas.php',
        success:function(data){
            $('#corpoCampanhas').html(data);
        },
        error:function(){

        }
    });
}

function carregaCampanha(codCampanha){
    $.ajax({
        url:'Newsletter/carregaCampanha.php',
        method:'POST',
        data:{codigo:codCampanha},
        dataType:"json",
        success:function(data){
            $('#tagDetalheCampanha').html(data.tag);
            $('#assuntoDetalheCampanha').html(data.assunto);
            $('#dataDetalheCampanha').html(data.data);
            $('#mensagemDetalheCampanha').html(data.mensagem);
        },
        error:function(){

        }
    });
}

function enviaCampanha(){
    $.ajax({
        url:'Newsletter/enviaCampanha.php',
        method:'POST',
        data:$('#formCampanha').serialize(),
        success: function(data){
            alert(data);
        },
        error: function(){

        }
    });
}