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
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <title> Sistema de Gerenciamento | TMF </title>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" id="menu-lateral">
                    <div id="usuarioSistema">
                        <h3> Nome usuário </h3>
                        <h4> cargo </h4>
                    </div>

                    <div id="menuSistema">
                        <ul type="none">
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Serviços </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Produtos </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Portifólio </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Newsletter </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Mensagens </span>
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                <span> Sair </span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-9" id="painelSistema">
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
                                    <tbody>
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
                                    <div class="col-md-7">
                                        <br>
                                        <form>
                                            <div class"container-fluid">
                                               <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="radio" class="inpFormRadio" id="promocao" name="tagEmailRadio">
                                                        <label class="txtForm" for="promocao">[PROMOÇÃO]</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="inpFormRadio" id="aviso" name="tagEmailRadio">
                                                        <label class="txtForm" for="aviso">[AVISO]</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" class="inpFormRadio" id="novidade" name="tagEmailRadio">
                                                        <label class="txtForm" for="novidade">[NOVIDADE]</label>
                                                    </div>
                                               </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <br>
                                            <input type="radio" class="inpFormRadio" id="outro" name="tagEmailRadio">
                                            <label class="txtForm" for="outro">Outro</label>
                                            <input type="text" class="inpForm" id="tagEmail" name="tagEmail">
                                            <br><br>
                                            <label class="txtForm" for="assunto">Assunto</label>
                                            <br>
                                            <input type="text" class="inpForm" id="assunto" name="assunto">
                                            <br><br>
                                            <label class="txtForm" for="msg">Mensagem</label>
                                            <br>
                                            <textarea class="inpForm" rows="10" id="msg" name="msg"></textarea>
                                        </form>
                                    </div>
                                    <div class="col-md-5">

                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="tab-pane fade"  role="tabpanel" id="emailsEnviados">
                            teste 3
                        </div>
                    </div>
                </div>
           </div>
       </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>