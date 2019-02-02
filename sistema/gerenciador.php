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
                            <a href="sair.php" style="text-decoration:none">
                                <li class="itemMenuSistema" >
                                    <img src="../img/location.png">
                                    <span> Sair </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-9" id="painelSistema">
                
                </div>
           </div>
       </div>

    </body>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/Sistema.js"></script>
</html>