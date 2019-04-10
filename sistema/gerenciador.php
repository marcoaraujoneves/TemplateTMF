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
                        <ul type="none">
                            <li class="itemMenuSistema itemMenuSistemaAtivo mx-auto" id="mod_servicos">
                                <i class="fa fa-flag" aria-hidden="true"></i>
                                <span> Serviços </span>
                            </li>
                            <li class="itemMenuSistema" id="mod_produtos">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                <span> Produtos </span>
                            </li>
                            <li class="itemMenuSistema" id="mod_portifolio">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span> Portifólio </span>
                            </li>
                            <li class="itemMenuSistema" id="mod_mensagens">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> Mensagens </span>
                            </li>
                            <li class="itemMenuSistema" id="mod_conteudo">
                                <i class="fa fa-gears" aria-hidden="true"></i>
                                <span> Conteúdo </span>
                            </li>
                            <li class="itemMenuSistema" id="mod_newsletter">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                <span> Newsletter </span>
                            </li>
                            <a href="sair.php" style="text-decoration:none">
                                <li class="itemMenuSistema" id="sair">
                                    <i class="fa fa-user-times" aria-hidden="true"></i>
                                    <span> Sair </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-9" id="painelSistema">
                    <center>
                        <img src="../img/loader.gif" style="margin-top:150px; display:none;" id="loader">
                    </center>
                </div>
            </div>
        </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/servico.js"></script>
    <script src="../js/parceiros.js"></script>
    <script src="../js/clientes.js"></script>
    <script src="../js/produto.js"></script>
    <script src="../js/portifolio.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/Sistema.js"></script>
    </html>