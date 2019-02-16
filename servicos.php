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
        
        <link rel="stylesheet" href="css/servicos.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <title> Indústria TMF | Home </title> 

    </head>
    
    <body>

        <!-- Inclusão do cabeçalho do site -->
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <!-- Corpo principal -->
        <main>
        <section id="secaoServicos" class="secaoSite">
        <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12 container-titulos">
                        <h1 class="titulo_secoes">
                            Serviços
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="width: 100%; height: 400px; margin: 50px;background-color: rgba(109, 109, 109, 0.096);">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-5"> 
                                <img src="img/prod.png" alt="Avatar" class="img_ser">
                            </div>
                            <div class="col-md-7">
                                <h5 class="card-title">Nome Serviço</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla urna porttitor rhoncus dolor purus non. Parturient montes nascetur ridiculus mus mauris vitae ultricies. Etiam sit amet nisl purus. Vitae tortor condimentum lacinia quis vel eros donec. Sapien nec sagittis aliquam malesuada. Vitae nunc sed velit dignissim sodales. Consectetur adipiscing elit ut aliquam purus sit amet luctus venenatis. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies leo. Aliquam id diam maecenas ultricies mi. Interdum velit euismod in pellentesque massa placerat duis.</p>
                                <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalServ" id="enviar" name="contratar" value="Contratar">
                                <!-- Modal -->
                                <div class="modal fade" id="ModalServ" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color:#365C9A">Contato</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
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
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar">  
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
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