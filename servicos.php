<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="css/produtos_servico.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
        <title> Indústria TMF | Serviços </title> 
        <!-- ---------------------------------------slider link e metas ---------------------------------------------->
        <noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
        </script>
        <!--------------------------------------------/slider links e metas  ------------------------------------------>
    </head>
    <body>
        <!------------------------------------------ Inclusão do cabeçalho do site ----------------------------------->
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <!--------------------------------------------- Corpo principal ---------------------------------------------->
        <main>
        <section id="secaoProdutos" class="secaoSite" style="margin-top:110px;" >
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12 container-titulos pb-2">
                        <h1 class="titulo_secoes">
                            Serviços
                        </h1>
                    </div>
                </div>
            </div> 
            <div class="container d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col order-sm-12 mt-2 mb-4 mx-auto ">
                        <div class="container caixa_texto">
                            <div class="row">
                                <div class="col-12 mt-2 mb-0 text-center">
                                    <h4 style="font-size: 27px;font-weight: 600;color: rgb(41, 70, 117);">Nome serviço</h4>
                                </div>
                            </div>
                            <div class="row mr-4 ml-4">
                                <div class="caixa_card_texto ">
                                    <div class="col-12">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor elit sed vulputate mi. Vitae et leo duis ut diam quam nulla. Turpis egestas sed tempus urna et pharetra pharetra massa massa.
                                            Lectus urna duis convallis convallis tellus id interdum velit laoreet. Eget duis at tellus at urna condimentum mattis pellentesque id. Blandit volutpat maecenas volutpat blandit aliquam. Augue ut lectus arcu bibendum at.
                                            Vehicula ipsum a arcu cursus vitae congue mauris. Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Vitae ultricies leo integer malesuada nunc. Eu volutpat odio facilisis mauris sit amet. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit.
                                            Morbi tincidunt augue interdum velit. At in tellus integer feugiat scelerisque varius morbi. Porttitor massa id neque aliquam. Pellentesque massa placerat duis ultricies lacus sed. Blandit libero volutpat sed cras ornare arcu dui vivamus arcu.
                                            Mattis nunc sed blandit libero volutpat sed cras ornare. Sem viverra aliquet eget sit amet tellus cras adipiscing. Scelerisque in dictum non consectetur a. Rhoncus mattis rhoncus urna neque. Adipiscing commodo elit at imperdiet. Placerat vestibulum lectus mauris ultrices eros in.
                                            Orci sagittis eu volutpat odio facilisis. Est ultricies integer quis auctor. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Erat nam at lectus urna duis convallis convallis tellus. Tincidunt eget nullam non nisi est sit. Mauris nunc congue nisi vitae suscipit tellus mauris.
                                            Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Urna et pharetra pharetra massa massa ultricies.Faucibus scelerisque eleifend donec pretium. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet.
                                            Pretium nibh ipsum consequat nisl vel pretium lectus quam. Placerat orci nulla pellentesque dignissim. Et magnis dis parturient montes. Eu lobortis elementum nibh tellus molestie nunc non blandit. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Auctor eu augue ut lectus arcu. Elementum integer enim neque volutpat ac tincidunt vitae. Ut eu sem integer vitae justo.
                                        </p>
                                    </div>
                                </div>  
                            </div>
                            <div class="row text-center mt-3 pb-3">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalProd" id="enviar" name="contratar" value="Contratar">
                                    <!---------------------------------- Modal ------------------------------------------->
                                    <div class="modal fade" id="ModalProd" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                                    <h5 class="modal-title" style="color: white;">Contato</h5>
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
                    <div class="col  order-sm-1 mt-2 mb-4 d-flex">
                        <div class="Conteudo_slider mx-auto my-auto">
                            <div id="rg-gallery1" class="rg-gallery">
                                <div class="rg-thumbs">
                                    <div class="es-carousel-wrapper">
                                        <div class="es-nav">
                                            <span class="es-nav-prev">Previous</span>
                                            <span class="es-nav-next">Next</span>
                                        </div>
                                        <div class="es-carousel">
                                            <ul class="lista_imagens ">                                
                                                <li><a href="#"><img src="img/tornearia-2.jpg" data-large="img/tornearia-2.jpg" data-description="" /></a></li>
                                                <li><a href="#"><img src="img/usinagem-2.jpg" data-large="img/usinagem-2.jpg"  data-description="" /></a></li>
                                                <li><a href="#"><img src="img/tornearia-2.jpg" data-large="img/tornearia-2.jpg" data-description="" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col mx-auto mt-2 mb-4">
                        <div class="container caixa_texto">
                            <div class="row">
                                <div class="col-12 mt-2 mb-0 text-center">
                                    <h4 style="font-size: 27px;font-weight: 600;color: rgb(41, 70, 117);">Nome serviço</h4>
                                </div>
                            </div>
                            <div class="row mr-4 ml-4">
                                <div class="caixa_card_texto ">
                                    <div class="col-12">
                                        <p class="card-text">
                                             parturient montes
                                        </p>
                                    </div>
                                </div>  
                            </div>
                            <div class="row text-center mt-3 pb-3">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalProd" id="enviar" name="contratar" value="Contratar">
                                    <!---------------------------------- Modal ------------------------------------------->
                                    <div class="modal fade" id="ModalProd" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                                                    <h5 class="modal-title" style="color: white;">Contato</h5>
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
                    <div class="col mt-2 mb-4 d-flex">
                        <div class="Conteudo_slider mx-auto my-auto">
                            <div id="rg-gallery2" class="rg-gallery">
                                <div class="rg-thumbs">
                                    <div class="es-carousel-wrapper">
                                        <div class="es-nav">
                                            <span class="es-nav-prev">Previous</span>
                                            <span class="es-nav-next">Next</span>
                                        </div>
                                        <div class="es-carousel">
                                            <ul class="lista_imagens ">
                                                <li><a href="#"><img src="img/tornearia-1.gif" data-large="img/tornearia-1.gif"  data-description="" /></a></li>
                                                <li><a href="#"><img src="img/usinagem-1.jpg" data-large="img/usinagem-1.jpg"  data-description="" /></a></li>
                                            </ul>
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
    <!------------------------------------- bootstrap/jquery/popper scripts----------------------------------------------------->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/header.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <!------------------------------------- adicionar galerias nesse script (#rg-galleryNUM) ------------------------------------>
    <script>
            jQuery(document).ready(function ($) {
            SelectRgGallery("#rg-gallery1");
            SelectRgGallery("#rg-gallery2");
            });
    </script>
     <!-- ---------------------------------------slider scripts --------------------------------------------------------------- -->
    <script type="text/javascript" src="js/Slider/ajax.libs.jquery.mim.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/Slider/gallery.js"></script>
    <!-- ---------------------------------------slider scripts ---------------------------------------------------------------- -->
</html>