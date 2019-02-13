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
    <script type="text/javascript">
        /* Máscara Para digitação do número de telefone no formulário de contato */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('telefone').onkeypress = function(){
                mascara( this, mtel );
            }
        }
    </script>
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
                        <div class="col-md-6 my-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="texto"> XX projetos entregues </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="texto"> XX anos no mercado </p>
                                </div>
                            </div>
                                <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="texto"> Mais de XX produtos próprios </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="texto"> Mais de XX opções de serviço </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Texto com até 700 caracteres, minimo 530 -->
                            <h3 style="text-align:right;" id="subTituloSobre"> Conheça a TMF </h3>
                            <p class="texto" style="text-align:justify;">
                                &emsp;
                                <span id="textoSobre">
                                    Lorem ipsum dolor sit amet, consecttur adipiscing elit. Donec rutrum feugiat augue. Aenean ac laoreet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, ligula vel sagittis dignissim, odio lectus porta mauris, non sagittis velit arcu nec eros. Etiam non dui eu diam blandit mattis sit amet eu diam!
                                </span>
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
                        <div class="col-md-5">
                            <p class="texto" style="text-align:justify;">
                                &emsp;
                                <span id="textoServicos">
                                Lorem ipsum dolor sit amet, consecttur adipiscing elit. Done c rutrum feugiat augue. Aenean ac laoreet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, marcoligula vel sagittis 
                                </span>
                            </p>
                            <a id="vermais">Ver mais...</a>
                        </div>

                        <div class="col-md-7 my-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="img/usinagem.png" style="height" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="nomeServicos">Usinagem</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/usinagem.png" class="imagem">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="img/manutencao.png" class="imagem">
                                </div>
                                <div class="col-md-6">
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
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/prod.png" alt="Avatar" class="img_prod">
                                                <h2 class="animate-text">Nome do Produto 1</h2><!--Suporta 29 caracteres. Nome do produto-->
                                                <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p><!--Suporta até 168 caracteres. Descrição-->
                                </div>
                            </div>
                            <div class="col-md-6 text-center wrap">
                                <div class="card tile">
                                    <img src="img/prod.png" alt="Avatar" class="img_prod">
                                                <h2 class="animate-text">Nome do Produto 2</h2><!--Suporta 29 caracteres papap-->
                                                <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p><!--Suporta até 168 caracteres-->         
                                </div>
                            </div>
                        </div>
                    </div>
                        
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 text-center wrap">
                        <div class="card tile">
                            <img src="img/prod.png" alt="Avatar" class="img_prod">
                                            <h2 class="animate-text">Nome do Produto 3</h2>
                                            <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>          
                        </div>
                    </div>
                    <div class="col-md-6 text-center wrap">
                        <div class="card tile">
                            <img src="img/prod.png" alt="Avatar" class="img_prod">
                                            <h2 class="animate-text">Nome do Produto 4</h2>
                                            <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>   
                                            <br>
                                            <div class="container" id="con_prod">
                                            <p><h5><b style="color:#365C9A">Nome do Produto 3</b></h5></p>
                                            </div>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                            
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
                            <center>
                                <button class="btn btn-primary btn_port" onClick="mudar(1)"> <center> <img src="img/circulo.png" class="img_btn_port"> </center> </button>
                                <button class="btn btn-primary btn_port" onClick="mudar(2)"> <center> <img src="img/circulo.png" class="img_btn_port"> </center> </button>
                                <button class="btn btn-primary btn_port" onClick="mudar(3)"> <center> <img src="img/circulo.png" class="img_btn_port"> </center> </button>
                            </center>
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
                            <br>
                            <div id="sucesso" class="alert alert-success" role="alert" style="display:none;">
                                Mensagem enviada com sucesso!
                            </div>
                            <div id="fracasso" class="alert alert-danger" role="alert" style="display:none;">
                                Houve um erro ao enviar sua mensagem, por favor, tente novamente mais tarde ou entre em contato diretamente pelos canais ao lado!
                            </div>
                            <div id="incompleto" class="alert alert-secondary" role="alert" style="display:none;">
                                Por favor, informe todos os dados necessários!
                            </div>
                            <form id="formularioContato" method="post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="txtForm" for="nome"> &ensp;Nome </label> <br>
                                            <input type="text" class="inpForm" id="nome" name="nome" autocomplete="off">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="txtForm" for="telefone"> &ensp;Telefone </label> <br>
                                            <input type="text" class="inpForm" id="telefone" name="telefone" autocomplete="off" maxlength="15">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="email"> &ensp;E-mail </label> <br>
                                            <input type="email" class="inpForm" id="email" name="email" autocomplete="off">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="mensagem"> &ensp;Mensagem </label> <br>
                                            <textarea class="inpForm" id="mensagem" name="mensagem" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-primary" id="enviar" name="enviar"> Enviar </button>
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