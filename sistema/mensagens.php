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
        <tbody style="vertical-align:center">
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 1 </th>
                <td> Marco Araujo </td>
                <td> marcoaraujoneves@gmail.com </td>
                <td style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 2 </th>
                <td> Marco Gomes </td>
                <td> marcogomes@gmail.com </td>
                <td style="text-align:justify;"> Donec hendrerit erat a metus tempor elementum. Aenean convallis... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
            <tr data-toggle="modal" data-target="#modalMsg">
                <th> 3 </th>
                <td> João Vitor </td>
                <td> buzzercorp@gmail.com </td>
                <td style="text-align:justify;"> Morbi venenatis, est venenatis egesta, lorem ante euismod lacus... </td>
                <td>
                    <center>
                        <img src="../img/check.png" class="img-responsive" style="width:45%;">
                    </center>
                </td>
            </tr>
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
                <span> Nome: </span>
                <label id="nomeDetalheMsg"> Marco Araujo </label>
                <br><hr>
                <span> Telefone: </span>
                <label id="telefoneDetalheMsg"> (22)99776-6801 </label>
                <br><hr>
                <span> E-mail: </span>
                <label id="emailDetalheMsg"> marcoaraujoneves@gmail.com </label>
                <br><hr>
                <span> Status: </span>
                <label id="statusDetalheMsg"> Respondido </label>
                <br><hr>
                <span> Mensagem: </span>
                <label id="mensagemDetalheMsg" style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim sem, gravida vel orci faucibus, mattis vehicula magna. In eu commodo lorem. Suspendisse non velit ut erat fringilla commodo. Phasellus nec rhoncus libero, ac elementum sem. Nullam tristique nulla eu facilisis dignissim.  </label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Deletar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>