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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/portifolio.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">

        <title> Indústria TMF | Home </title> 

    </head>
    
    <body>

        <!-- Inclusão do cabeçalho do site -->
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <!-- Corpo principal -->
        <main>
            <section style="margin-top:140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulo_secoes">
                                Portifólio
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row" id="barraCard">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" href="#imgPort" role="tab" data-toggle="tab"> Imagens e Descrição </a></li>
                                        <li class="nav-item"><a class="nav-link" href="#videoPort" role="tab" data-toggle="tab"> Vídeo </a></li>
                                    </ul>
                                </div>
                                <div class="row" style="padding:20px">
                                    <div class="col-md-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active"  role="tabpanel" id="imgPort">
                                                <div class="row">
                                                    <div class="col-md-5"> 
                                                        <img src="img/prod.png" alt="Avatar" class="img_ser">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h4 style="font-size: 27px;font-weight: 600;color: rgb(41, 70, 117);">Nome Serviço</h4>
                                                        <p class="card-text">Suspendisse sed nisi lacus sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius duis at consectetur lorem donec massa sapien faucibus et molestie</p>
                                                        <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalServ" id="enviar" name="contratar" value="Contratar">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="tab-pane fade"  role="tabpanel" id="videoPort">
                                                <div class="row">
                                                    <div class="col-md-12 mx-auto my-auto"> 
                                                        <iframe width="700" height="400" src="https://www.youtube.com/embed/TMZi25Pq3T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                </div>
            </section>
        </main>
        <!-- Inclusão do rodapé do site -->
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
        
        <!-- Modal -->
        <div class="modal fade" id="ModalServ" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" style="font-size: 27px;font-weight: 600;color: rgb(41, 70, 117);">Contato</h5>
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