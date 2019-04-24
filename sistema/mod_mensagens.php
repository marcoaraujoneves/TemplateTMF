<?php
    
    
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
                </div>
            </div>
        </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/Sistema/Sistema.js"></script>
    <script src="../js/Sistema/mensagens.js"></script>
</html>