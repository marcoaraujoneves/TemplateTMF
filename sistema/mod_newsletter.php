<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link active" href="#listaEmails" role="tab" data-toggle="tab"> E-mails Cadastrados </a></li>
    <li class="nav-item"><a class="nav-link" href="#enviarEmail" role="tab" data-toggle="tab"> Enviar e-mail </a></li>
    <li class="nav-item"><a class="nav-link" href="#emailsEnviados" role="tab" data-toggle="tab"> Enviados </a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active"  role="tabpanel" id="listaEmails">
        <p>
            <br>
            A lista abaixo contém uma relação completa de todos os e-mails que foram cadastrados no site
            para receber notificações de Promoções, Produtos, Serviços, Avisos, entre outros, bem como o 
            status do cadastro, ou seja, se o e-mail está Ativo ou Inativo na lista de destinatários, e opções para Deletar 
            o e-mail, Editar ou alternar o Status.
        </p>

        <div class="table-responsive">
            <table id="listaEmail" class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th style="width:6%;"> # </th>
                        <th style="width:24%;"> Nome </th>
                        <th style="width:40%;"> E-mail </th>
                        <th style="width:10%;"> Status </th>
                        <th style="width:15%;">  </th>
                    </tr>
                </thead>
                <tbody style="vertical-align:center">
                    <tr>
                        <th> 1 </th>
                        <td> Marco </td>
                        <td> marcoaraujoneves@gmail.com </td>
                        <td> Inativo </td>
                        <td>
                            <center>
                                <button class="botaoEmail" id="deletarEmail"> </button>
                                <button class="botaoEmail" id="editarEmail"> </button>
                                <button class="botaoEmail" id="statusEmail"> </button>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th> 2 </th>
                        <td> Marco </td>
                        <td> marcoaraujoneves@gmail.com </td>
                        <td> Ativo </td>
                        <td>
                            <center>
                                <button class="botaoEmail" id="deletarEmail"> </button>
                                <button class="botaoEmail" id="editarEmail"> </button>
                                <button class="botaoEmail" id="statusEmail"> </button>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th> 3 </th>
                        <td> Marco </td>
                        <td> marcoaraujoneves@gmail.com </td>
                        <td> Ativo </td>
                        <td>
                            <center>
                                <button class="botaoEmail" id="deletarEmail"> </button>
                                <button class="botaoEmail" id="editarEmail"> </button>
                                <button class="botaoEmail" id="statusEmail"> </button>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        
    <div class="tab-pane fade"  role="tabpanel" id="enviarEmail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7" id="configEmail">
                    <br>
                    <form>
                        <div class"container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio" class="inpFormRadio" id="promocao" value="PROMOÇÃO" name="tagEmailRadio">
                                    <label class="txtForm" for="promocao">[PROMOÇÃO]</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="inpFormRadio" id="aviso" value="AVISO" name="tagEmailRadio">
                                    <label class="txtForm" for="aviso">[AVISO]</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" class="inpFormRadio" id="novidade" value="NOVIDADE" name="tagEmailRadio">
                                    <label class="txtForm" for="novidade">[NOVIDADE]</label>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" id="outro" data-toggle="collapse" data-target="#tagEmailContainer" aria-expanded="false" aria-controls="tagEmailContainer"> Outro </button>
                        <div class="collapse" id="tagEmailContainer">
                            <br>
                            <input type="text" class="inpForm text-uppercase" id="tagEmail" name="tagEmail">
                        </div>
                        <br><br>
                        <label class="txtForm" for="assunto">Assunto</label>
                        <br>
                        <input type="text" class="inpForm" id="assunto" name="assunto">
                        <br><br>
                        <label class="txtForm" for="msg">Mensagem</label>
                        <br>
                        <textarea class="inpForm" rows="10" id="msg" name="msg"></textarea>
                        <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar">
                        <br><br>
                    </form>
                </div>

                <div class="col-md-5" id="preview">
                    <div id="emailAssunto" style="background-color:white; width:100%; padding:5px;">
                        <span id="tagPre"> [PROMOÇÃO]</span>
                        <span id="assuntoPre"> Desconto de 10% na compra da sua máquina </span>
                    </div>
                    <div style="background-color: #365C9A; width:90%; margin-top:20px; border-radius:7px;z-index:2;" id="emailCabecalho" class="mx-auto">
                        <img src="../img/logoTMFBranco.png" class="img-responsive rounded mx-auto d-block" style="height:70px;margin:8px;">
                    </div>

                    <div style="background-color: white; width:90%; margin-top:-5px; border-radius:3px; padding: 15px;z-index:1;" id="emailCorpo" class="mx-auto">
                        <h6> Olá CLIENTE,</h6>
                        <p style="text-align:justify; font-size:10px;" id="msgPre">
                            &emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b> Aenean ut ex molestie </b>, euismod enim fringilla, consequat ante. <br>&emsp; Pellentesque consequat convallis orci. Donec eget eleifend erat. Praesent eget pretium ipsum. Sed vitae commodo eros. Nunc bibendum porta lectus, vel aliquet justo hendrerit interdum. Nam iaculis velit in sollicitudin ullamcorper. Vivamus consectetur mi et erat scelerisque dictum.
                            <br><br>
                        </p>
                        <span style="text-align:center;width:100%;">
                                Abraços,<br>
                                Equipe TMF
                        </span>
                    </div>

                    <div style="width:80%; margin-top:15px;padding: 15px; text-align:center;" id="emailRedes" class="mx-auto">
                        <a href="" target="_blank">
                            <img src="../img/fb.png" style="height:10px;">
                        </a>
                        <a href="" target="_blank">
                            <img src="../img/ig.png" style="height:10px;">
                        </a>
                        <a href="" target="_blank">
                            <img src="../img/fb.png" style="height:10px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="tab-pane fade"  role="tabpanel" id="emailsEnviados">
        <p>
            <br>
            A lista abaixo contém uma relação completa de todas as campanhas já realizadas. 
            Nos detalhes de cada uma é possível obter uma lista dos clientes para os quais a campanha foi enviada!
        </p>
        <div class="table-responsive">
            <table id="listaEmail" class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th style="width:6%;"> # </th>
                        <th style="width:15%;"> Tag </th>
                        <th style="width:28%;"> Assunto </th>
                        <th style="width:36%; text-align:justify;"> Mensagem </th>
                        <th style="width:15%; text-align:center;">  Data</th>
                    </tr>
                </thead>
                <tbody style="vertical-align:center">
                    <tr data-toggle="modal" data-target="#modalCampanha">
                        <th> 1 </th>
                        <td> PROMOÇÃO </td>
                        <td> 10% de desconto na compra da máquina </td>
                        <td style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean... </td>
                        <td>
                            <center>
                                12/12/2020
                            </center>
                        </td>
                    </tr>
                    <tr data-toggle="modal" data-target="#modalCampanha">
                        <th> 2 </th>
                        <td> NOVIDADE </td>
                        <td> Nova máquina de colagem </td>
                        <td style="text-align:justify;"> Donec hendrerit erat a metus tempor elementum. Aenean convallis... </td>
                        <td>
                            <center>
                                25/12/2019
                            </center>
                        </td>
                    </tr>
                    <tr data-toggle="modal" data-target="#modalCampanha">
                        <th> 3 </th>
                        <td> AVISO </td>
                        <td> Recesso de ano novo </td>
                        <td style="text-align:justify;"> Morbi venenatis, est venenatis egesta, lorem ante euismod lacus... </td>
                        <td>
                            <center>
                                01/01/2020
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal de detalhamento das campanhas -->
<div class="modal fade" id="modalCampanha" tabindex="-1" role="dialog" aria-labelledby="modalCampanhaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Detalhes da Campanha </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="corpoModal">
                <span> Tag: </span>
                <label id="tagDetalheCampanha"> PROMOÇÃO </label>
                <br><hr>
                <span> Assunto: </span>
                <label id="assuntoDetalheCampanha"> 10% de desconto na compra da máquina </label>
                <br><hr>
                <span> Data: </span>
                <label id="dataDetalheCampanha"> 12/12/2020 </label>
                <br><hr>
                <span> Mensagem: </span>
                <label id="mensagemDetalheCampanha" style="text-align:justify;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim sem, gravida vel orci faucibus, mattis vehicula magna. In eu commodo lorem. Suspendisse non velit ut erat fringilla commodo. Phasellus nec rhoncus libero, ac elementum sem. Nullam tristique nulla eu facilisis dignissim.  </label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
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
</script>