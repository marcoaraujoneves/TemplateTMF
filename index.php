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
        <link rel="stylesheet" href="css/responsividade.css">

        <title> Indústria TMF | Home </title> 

    </head>
    
    <body>

        <!-- Inclusão do cabeçalho do site -->
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <!-- Corpo principal -->
        <main>
            <span id="secaoHome"></span>
            <!--SOBRE NÓS-->
            <section id="secaoSobre" class="secaoSite" style="margin-top:140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Sobre Nós
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5">
                                <p class="texto"> XX projetos entregues </p>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                <p class="texto"> XX anos no mercado </p>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>
                                <br>
                                <div class="row">
                                <div class="col-md-5">
                                <p class="texto"> Mais de XX produtos próprios </p>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                <p class="texto"> Mais de XX opções de serviço </p>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="texto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis a nibh et cursus. 
                            Aliquam lacinia sed mauris eget laoreet. 
                            Mauris accumsan lectus dignissim, volutpat nisi vitae, vestibulum odio. 
                            Quisque auctor lacus sed elit pulvinar vulputate. Vestibulum tristique nisi risus, in viverra lacus elementum non. 
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--/SOBRE NÓS-->

            <!--SERVICOS-->
            <section id="secaoServicos" class="secaoSite">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Serviços
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="texto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis a nibh et cursus. 
                            Aliquam lacinia sed mauris eget laoreet. 
                            Mauris accumsan lectus dignissim, volutpat nisi vitae, vestibulum odio. 
                            Quisque auctor lacus sed elit pulvinar vulputate. Vestibulum tristique nisi risus, in viverra lacus elementum non. 
                            </p>
                            <a id="vermais">Ver mais...</a>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-5">
                                <img src="img/tornearia.png" class="imagem">
                                </div>
                                <div class="col-md-5">
                                <img src="img/usinagem.png" class="imagem">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-5">
                                <img src="img/manutencao.png" class="imagem">
                                </div>
                                <div class="col-md-5">
                                <img src="img/maquinas.png" class="imagem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/SERVICOS-->
            <!--Produtos-->
            <section id="secaoProdutos" class="secaoSite">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Produtos
                            </h1>
                        </div>
                    </div>
                    <div class="container-fluid d-none d-md-block">
                        <div class="row">
                            <div class="col-md-6"><!--trocar pra col-md-3-->
                                <div class="row">
                                <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/logo.png" alt="Avatar" class="img_prod">
                                    <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2><!--Suporta 29 caracteres papap-->
                                    <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken.jdidmdldmdkdkd5555555 </p><!--Suporta até 168 caracteres-->
                                    <br>
                                    <div class="container" id="con_prod">
                                    <p><h4><b style="color:#365C9A">Nome do Produto 1</b></h4></p>
                                    <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/logo.png" alt="Avatar" class="img_prod">
                                    <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                                    <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                                    <br><br>
                                    <div class="container" id="con_prod">
                                    <p><h4><b style="color:#365C9A">Nome do Produto 2</b></h4></p>
                                    <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/logo.png" alt="Avatar" class="img_prod">
                                    <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                                    <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                                    <br><br>
                                    <div class="container" id="con_prod">
                                    <p><h4><b style="color:#365C9A">Nome do Produto 3</b></h4></p>
                                    <br><br>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/logo.png" alt="Avatar" class="img_prod">
                                    <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                                    <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                                    <br><br>
                                    <div class="container" id="con_prod">
                                    <p><h4><b style="color:#365C9A">Nome do Produto 3</b></h4></p>
                                    <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- DIV ANTIGA<div class="col-md-4 text-center">       
                        <div class="card">
                            <img src="img/logo.png" alt="Avatar" class="img_prod">
                            <div class="container" id="con_prod">
                            <p><h4><b style="color:#365C9A">Nome do Produto3</b></h4></p>
                            <br><br>
                            </div>
                        </div>
                    </div>-->
                   <!--/Quarta div para ser usado no for <div class="col-md-4 text-center wrap">
                        <div class="card tile">
                            <img src="img/logo.png" alt="Avatar" class="img_prod">
                            <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                            <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                            <br><br>
                            <div class="container" id="con_prod">
                            <p><h4><b style="color:#365C9A">Nome do Produto2</b></h4></p>
                            <br><br>
                            </div>
                        </div>
                    </div>-->
                    </div>
                </div>
                    </div>
                </div>
            </section>
            <br><br>
            <!--/PRODUTOS-->

            <!--PORTIFÓLIO-->
            <section id="secaoPortifolio" class="secaoSite">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Portifólio
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"> </div>
                        <div class="col-md-5">
                            <img src="img/tornearia.png" id="imagem_port">
                        </div>
                        <div class="col-md-5">
                                <p id ="texto_port" class="texto">
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vel lacus ut tellus fringilla imperdiet.
                                </p>                          
                        </div>
                        <div class="col-md-1"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"> </div>
                        <div class="col-md-4">
                            <input class="radio_port" id="radio1" type="button" onClick="mudar(1)">
                            <input class="radio_port" id="radio2" type="button" onClick="mudar(2)">
                            <input class="radio_port" id="radio3" type="button" onClick="mudar(3)">
                        </div>
                        <div class="col-md-4"> </div>
                    </div>
                </div>
            </section>
            <!--/PORTIFÓLIO-->

            <!--CONTATO-->
            <section id="secaoContato" class="secaoSite">
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
                                            <input type="text" class="inpForm" id="nome" name="nome" autocomplete="off" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="txtForm" for="telefone"> &ensp;Telefone </label> <br>
                                            <input type="text" class="inpForm" id="telefone" name="telefone" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="email"> &ensp;E-mail </label> <br>
                                            <input type="email" class="inpForm" id="email" name="email" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="mensagem"> &ensp;Mensagem </label> <br>
                                            <textarea class="inpForm" id="mensagem" name="mensagem" rows="6" required> </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" id="linha-mapa">
                        <div class="container-fluid" id="container-mapa">
                            <div id="mapa">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.3557553650658!2d-42.533161308407855!3d-22.26450980253507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x978ab7bdf4026d%3A0x202aa51e0d1b3d97!2sTmf+tornearia+e+usinagem!5e0!3m2!1spt-BR!2sbr!4v1542190577400" width="100%" height="450" frameborder="0" style="border:0;margin-top:20px;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--/CONTATO-->

        <!-- Inclusão do rodapé do site -->
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    </body>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</html>

<!-- MODELO

    <section id="secaoModelo">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 container-titulos">
                        <h1 class="titulo_secoes">
                            Modelo
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                <div class="col-md-6">

                </div>
                </div>
            </div>
    </section>

/MODELO --> 