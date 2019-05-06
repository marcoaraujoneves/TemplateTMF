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
    <link rel="stylesheet" href="css/produtos_servico.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">

    <title> Indústria TMF | Home </title> 
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
                            <br>
                            Portifólio
                        </h1>
                    </div>
                </div>

                <?php 
                include ('sistema/db.class.php');
                $objDB = new db();
                $conn = $objDB->conecta_mysql();
                $query_select = "SELECT * from portifolio where status ='1';";
                $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
                $rows = array();
                $contadorPortifolio = 0;
                while($row = mysqli_fetch_array($result_select))
                    $rows[] = $row;
                foreach($rows as $row){
                    $contadorPortifolio = $contadorPortifolio + 1;
                    $codPortifolio = $row['codPortifolio'];
                    $nome = $row['nome'];
                    $link = $row['linkYoutube'];
                    $descricao = $row['descricao'];
                    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $link, $matches);
                    $newlink = $matches[1];
                    echo '<div class="container d-flex justify-content-center">';
                    echo '<div class="row d-flex justify-content-center">';
                    if ($contadorPortifolio%2 == 0) {
                        echo '<div class="col  mt-2 mb-4 mx-auto ">';
                    }else{
                        echo '<div class="col order-sm-12 mt-2 mb-4 mx-auto ">';
                    }
                    echo '<div class="container caixa_texto">';
                    echo '<div class="row">';
                    echo '<div class="col-12 mt-2 mb-0 text-center">';
                    echo '<h4 style="font-size: 27px;font-weight: 600;color: rgb(41, 70, 117);">'.$nome.'</h4>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row mr-4 ml-4">';
                    echo '<div class="caixa_card_texto ">';
                    echo '<div class="col-12">';
                    echo '<p class="card-text">';
                    echo $descricao;
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row text-center mt-3 pb-3">';
                    echo '<div class="col-12">';
                    echo '<input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalProd" id="enviar" name="contratar" value="Contratar">';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col  order-sm-1 mt-2 mb-4 d-flex">';
                    echo '<div class="Conteudo_slider mx-auto my-auto">';
                    echo '<div id="rg-gallery'.$contadorPortifolio.'" class="rg-gallery">';
                    echo '<div class="rg-thumbs">';
                    echo '<div class="es-carousel-wrapper">';
                    echo '<div class="es-nav">';
                    echo '<span class="es-nav-prev">Previous</span>';
                    echo '<span class="es-nav-next">Next</span>';
                    echo '</div>';
                    echo '<div class="es-carousel">';
                    echo '<ul class="lista_imagens ">  ';
                    $query_select = "SELECT nome from imagemportifolio where codPortifolio = '$codPortifolio';";
                    $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
                    $linhas = array();

                    while($linha = mysqli_fetch_array($result_select))
                        $linhas[] = $linha;
                    foreach($linhas as $linha){
                        $nomeImagem = $linha['nome'];
                        echo '<li><a href="#"><img src="sistema/Img/Portifolio/'.$nomeImagem.' " data-large="sistema/Img/Portifolio/'.$nomeImagem.'  " data-description="" /></a></li>';
                    }
                    echo '<li><a href="#"><img src="img/Slider/play.png" data-large="img/usinagem-1.jpg" data-description="" data-iframe="<iframe width=\'100%\' height=\'260\' src=\'https://www.youtube.com/embed/'.$newlink.'\' frameborder=\'0\' allow=\'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>"/></a></li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<br>';
                }

                ?>  

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
    <script src="js/header.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <!------------------------------------- adicionar galerias nesse script (#rg-galleryNUM) ------------------------------------>
    <script>
        jQuery(document).ready(function ($) {
            <?php   

            for ($i = 1; $i <= $contadorPortifolio ; $i++) {
                echo 'SelectRgGallery("#rg-gallery'.$i.'");';
            }

            ?>


        });
    </script>

    <script type="text/javascript" src="js/Slider/ajax.libs.jquery.mim.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/Slider/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/Slider/gallery.js"></script>
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