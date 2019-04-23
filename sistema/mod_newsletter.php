<?php
    session_start();
    
    if(!isset($_SESSION['nome'])){
        header('Location: index.php?erro=1');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/Sistema.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsividade.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!------------------------------- link para puxar os icones  ---------------------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <title> Sistema de Gerenciamento | TMF </title>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" id="menu-lateral">
                    <div id="usuarioSistema">
                        <h3> <?= isset($_SESSION['nome'])? $_SESSION['nome'] : 'Nome usuário' ?>  </h3>
                        <h4> <?= isset($_SESSION['cargo'])? $_SESSION['cargo'] : 'cargo' ?> </h4>
                    </div>

                    <div id="menuSistema">
                        <?php require_once('menuLateral.php'); ?>
                    </div>
                </div>

                <div class="col-9" id="painelSistema">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#listaEmails" role="tab" data-toggle="tab"> E-mails Cadastrados </a></li>
                        <li class="nav-item"><a class="nav-link" href="#enviarEmail" role="tab" data-toggle="tab"> Enviar e-mail </a></li>
                        <li class="nav-item"><a class="nav-link" href="#emailsEnviados" role="tab" data-toggle="tab" id="campanhas"> Enviados </a></li>
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <button data-toggle="modal" data-target="#modalCadastroCliente" id="addCliente" class="btn btn-lg">Cadastrar Cliente</button>
                                    </div>
                                </div>
                            </div>
                            <br>
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
                                    <tbody style="vertical-align:center" id="corpoTbClientes">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                        <div class="tab-pane fade"  role="tabpanel" id="enviarEmail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7" id="configEmail">
                                        <br>
                                        <form id="formCampanha">
                                            <div class"container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="inpFormRadio" id="promocao" value="PROMOÇÃO" name="tagEmailRadio" checked>
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
                                                <input type="text" class="inpForm text-uppercase" value="" id="tagEmail" name="tagEmail">
                                            </div>
                                            <br><br>
                                            <label class="txtForm" for="assunto">Assunto</label>
                                            <br>
                                            <input type="text" class="inpForm" id="assunto" name="assunto">
                                            <br><br>
                                            <label class="txtForm" for="msg">Mensagem</label>
                                            <br>
                                            <textarea class="inpForm" rows="10" id="msg" name="msg"></textarea>
                                            <button type="button" class="btn btn-primary" id="enviaCampanha"> Enviar </button>
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
                                    <tbody style="vertical-align:center" id="corpoCampanhas">
                                        
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

                    <!-- Modal de cadastro dos clientes -->
                    <div class="modal fade" id="modalCadastroCliente" tabindex="-1" role="dialog" aria-labelledby="modalCadastroClienteTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle"> Cadastro de Cliente </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="cadastraCliente">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="nome"> Nome: </label>
                                                    <input type="text" class="inpForm" id="nome" name="nome">
                                                    <br><hr>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="email"> E-mail: </label>
                                                    <input type="email" class="inpForm" id="email" name="email">
                                                    <br><hr>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="status"> Status: </label>
                                                    <select class="inpForm" id="status" name="status">
                                                        <option value="1"> Ativo </option>
                                                        <option value="0"> Inativo </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" id="cadastrarCliente" data-dismiss="modal">Salvar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de delete dos clientes -->
                    <div class="modal fade" id="modalDeleteCliente" tabindex="-1" role="dialog" aria-labelledby="modalDeleteClienteTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle"> Deseja mesmo deletar este cliente da lista de e-mails? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <input type='hidden' id='deletaCod' data-id="">
                                    <button type="button" class="btn btn-danger" id="confirmaDeletarMsg" data-dismiss="modal">Sim</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de Edição do Cliente -->
                    <div class="modal fade" id="modalEditaCliente" tabindex="-1" role="dialog" aria-labelledby="modalEditaClienteTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle"> Editar Cliente </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="bodyEditaCliente">
                                    <form id="formCliente">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <input type="hidden" id="codigoCliente" name="codigo">
                                                <div class="col-md-12">
                                                    <label for="nome"> Nome: </label>
                                                    <input type="text" class="inpForm" id="nome" name="nome">
                                                    <br><hr>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="email"> E-mail: </label>
                                                    <input type="email" class="inpForm" id="email" name="email">
                                                    <br><hr>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="status"> Status: </label>
                                                    <select class="inpForm" id="status" name="status">
                                                        <option value="1"> Ativo </option>
                                                        <option value="0"> Inativo </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="salvarCliente" data-dismiss="modal">Salvar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/Sistema/Sistema.js"></script>
    <script src="../js/Sistema/newsletter.js"></script>
</html>