<h1 class="titulo_secoes"> Mensagens </h1>
<p>
    <br>
    A lista abaixo contém uma relação completa de todas mensagens que foram recebidas
    através do website. Com tais dados é possível que, mesmo após um contato inicial 
    sem fechamento de um serviço, novas possibilidades futuras possam ser mais 
    facilmente verificadas!
</p>
<div class="table-responsive">
    <table id="listaEmail" class="table table-striped table-hover ">
        <thead>
            <tr>
                <th style="width:6%;"> # </th>
                <th style="width:22%;"> Nome </th>
                <th style="width:30%;"> E-mail </th>
                <th style="width:36%; text-align:justify;"> Mensagem </th>
                <th style="width:6%;">  Respondido?</th>
            </tr>
        </thead>
        <tbody style="vertical-align:center" id="corpoMensagens">
            
        </tbody>
    </table>
</div>

<!-- Modal de detalhamento das mensagens -->
<div class="modal fade" id="modalMsg" tabindex="-1" role="dialog" aria-labelledby="modalMsgTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Detalhes da Mensagem </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="corpoModalMsg">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="modalDeletaMsg"  data-dismiss="modal" data-toggle='modal' data-target='#modalDeleteMsg'>Deletar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de delete das mensagens -->
<div class="modal fade" id="modalDeleteMsg" tabindex="-1" role="dialog" aria-labelledby="modalDeleteMsgTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Deseja mesmo deletar a mensagem? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <input type='hidden' id='deletaCod' data-idmsg="">
                <button type="button" class="btn btn-danger" id="confirmaDeletarMsg" data-dismiss="modal">Sim</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
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
</script>