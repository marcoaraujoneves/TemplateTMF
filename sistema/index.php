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
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-auto mx-auto">
                    
                    <form method="post" action="../sistema/valida_acesso.php">
                        <img src="../img/logoTMF.png" class="img-responsive" style="width:80%;margin-top:10%;margin-left:10%"><br>
                        <?= isset($_GET['erro']) ? '<span style="color:red;"> Usuário e/ou senha incorreto(s) </span> ' : "";?>
                        <br>
                        <label for="login" class="txtForm"> Login </label>
                        <input type="text" id="login" name="login" class="inpForm" required autocomplete="off"><br>

                        <label for="senha" class="txtForm"> Senha </label>
                        <input type="password" id="senha" name="senha" class="inpForm" required  autocomplete="off">
                        <br><br>
                        <input type="submit" class="btnForm" value="Entrar">
                    </form>
               </div>
           </div>
       </div>

    </body>
</html>