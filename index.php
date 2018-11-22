<!DOCTYPE html>
<html lang="pt-br">
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
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    </head>

    <body>

        <!-- Inclusão do cabeçalho do site -->
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <!-- Corpo principal -->
        <main>
            <!-- Modelo de seção a ser utilizado -->
            <section id="secao_modelo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Modelo
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-">

                        </div>
                    </div>
                </div>
            </section>

            <section id="secao_contato">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Contato
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4" id="contate-nos">
                            <h3> Contate-nos </h3>
                            <br><br>
                            <div style="position: relative;top: 30%;transform: translateY(-30%);">
                                <div class="icone-contatenos">
                                    <img class="img-responsive" src='img/location.png'>
                                </div>

                                <div class="info-contatenos">
                                    <span id="infendereco"> 
                                        Rua Prudente de Moraes, 200 <br>
                                        Duas Pedras, Nova Friburgo-RJ
                                    </span>
                                </div>
                                <br><br><br>
                                <div class="icone-contatenos">
                                    <img class="img-responsive" src='img/location.png'>
                                </div>

                                <div class="info-contatenos">
                                    <span id="inftelefones"> 
                                        (22) 2523-2525 <br>
                                        (22) 2528-9055
                                    </span>
                                </div>
                                <br><br><br>
                                <div class="icone-contatenos">
                                    <img class="img-responsive" src='img/location.png'>
                                </div>
                                
                                <div class="info-contatenos">
                                    <span id="infemail"> 
                                        industriatmf@gigalink.com.br
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8" id="mande_mensagem">
                            <h3> Mande uma mensagem </h3>
                            <br><br>

                            <form>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="txtForm" for="nome"> &ensp;Nome </label> <br>
                                            <input type="text" class="inpForm" id="nome" name="nome">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="txtForm" for="telefone"> &ensp;Telefone </label> <br>
                                            <input type="text" class="inpForm" id="telefone" name="telefone">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="email"> &ensp;E-mail </label> <br>
                                            <input type="email" class="inpForm" id="email" name="email">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="mensagem"> &ensp;Mensagem </label> <br>
                                            <textarea class="inpForm" id="mensagem" name="mensagem" rows="6"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="linha-mapa">
                        <div class="container-fluid" id="container-mapa">
                            <div id="mapa" style="height:450;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.3557553650658!2d-42.533161308407855!3d-22.26450980253507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x978ab7bdf4026d%3A0x202aa51e0d1b3d97!2sTmf+tornearia+e+usinagem!5e0!3m2!1spt-BR!2sbr!4v1542190577400" width="100%" height="450" frameborder="0" style="border:0;margin-top:20px;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Inclusão do rodapé do site -->
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    </body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/main.js"></script>
</html>