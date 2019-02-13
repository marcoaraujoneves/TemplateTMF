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
        <link rel="stylesheet" href="css/main.css">

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
        <div class="container">
                <div class="row">
                    <div class="col-md-12 container-titulos">
                        <h1 class="titulo_secoes">
                            Serviços
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="width: 100%; height: 400px; margin: 50px;">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-5"> 
                                <img src="img/prod.png" alt="Avatar" class="img_ser">
                            </div>
                            <div class="col-md-7">
                                <h5 class="card-title">Nome Serviço</h5>
                                <p class="card-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken.</p>
                                <a href="#" class="card-link">Contratar</a>
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