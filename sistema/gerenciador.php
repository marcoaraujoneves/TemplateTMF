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
                <div class="col-md-3" id="menu-lateral">
                    <div id="usuarioSistema">
                        <h3> Nome usuário </h3>
                        <h4> cargo </h4>
                    </div>

                    <div id="menuSistema">
                        <ul type="none">
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Serviços
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Produtos
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Portifólio
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Newsletter
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Mensagens
                            </li>
                            <li class="itemMenuSistema">
                                <img src="../img/location.png">
                                Sair
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-9" id="painelSistema">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#listaEmails" role="tab" data-toggle="tab"> E-mails Cadastrados </a></li>
                        <li class="nav-item"><a class="nav-link" href="#enviarEmail" role="tab" data-toggle="tab"> Enviar e-mail </a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active"  role="tabpanel" id="listaEmails">
                            teste 1
                        </div>
                            
                        <div class="tab-pane"  role="tabpanel" id="enviarEmail">
                            teste 2
                        </div>
                    </div>
                </div>
           </div>
       </div>

    </body>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.js"></script>
</html>