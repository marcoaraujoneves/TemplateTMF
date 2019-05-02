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
            
            <link rel="stylesheet" href="../../css/main.css">
            <link rel="stylesheet" href="../../css/perguntasajuda.css">
            <link rel="stylesheet" href="../../css/normalize.css">
            <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../css/responsividade.css">
            <link rel="stylesheet" href="../../css/header.css">
            <link rel="stylesheet" href="../../css/footer.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">


            <title> Sistema de Gerenciamento | TMF </title>

        </head>


        <body>
            <nav class="navbar navbar-expand-md navbar-light" id="navbarTMF">
                    <div class="container">
                        <img src="../../img/logoTMFBranco.png" class="mx-auto" id="logo_Menu">

                    <div class="navbar-header">
                        <!-- Botao Toggle -->
                        <button type="button" class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#menu-navegacao" aria-expanded="true" aria-label="Alternar Navegação">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="menu-navegacao">
                        <ul class="navbar-nav mx-auto my-auto">
                            <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoSobre" href="#secaoSobre">Sobre nós</a></li>
                            <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoServicos" href="#secaoServicos">Serviços</a></li>
                            <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoProdutos" href="#secaoProdutos">Produtos</a></li>
                            <li class="nav-item navegacao"><a class="nav-link linkMenu" id="link_secaoPortifolio" href="#secaoPortifolio">Portifólio</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        
            <div id="accordion">
            
                <h1 class="titulos_ajuda" id="secaoServicos">
                    Serviços
                </h1>
            
                <div class="card mx-auto" >
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Como adicionar um serviço?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Para adicionar um serviço, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Serviço"; <br>
                            2. Digite o Nome e a Descrição para seu novo Serviço em suas respectivas caixas; <br>
                            3. Adicione uma imagem para representar esse novo Serviço; <br>
                            4. Clique no botão "Enviar";
                        </div>
                    </div>
                </div>

                <div class="card mx-auto">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Como remover um serviço?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Para remover um serviço, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Serviço"; <br>
                            2. Na parte inferior da página, haverá uma lista dos serviços já cadastrados; <br>
                            3. Encontre o serviço que gostaria de excluir; <br> 
                            4. Clique no botão "Excluir"; <br>
                        </div>
                    </div>
                </div>

                <div class="card mx-auto">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Como editar a Seção Serviços?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Para editar os textos da seção Serviços, siga os seguintes passos:  <br> 
                            1. Vá até o gerenciador do sistema e clique em "Textos";  <br> 
                            2. Escolha a página de serviços e clique no botão “Editar”  <br> 
                            3. Modifique o texto de serviços e selecione os serviços que deseja mostrar na página inicial <br> 
                            4. Clique no botão "Salvar"; <br>
                        </div>
                    </div>
                </div>
                
                <h1 class="titulos_ajuda" id="secaoProdutos">
                    Produtos
                </h1>

                <div class="card mx-auto">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Como adicionar um produto?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Para adicionar um produto, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Produtos"; <br>
                            2. Na parte superior da página, haverá um botão “Cadastrar Produto”; <br>
                            3. Escolha a imagem e preencha o nome do produto e sua descrição; <br> 
                        </div>
                    </div>
                </div>


                <div class="card mx-auto">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Como remover um produto?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Para remover um produto, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Produtos"; <br>
                            2. Na parte inferior da página, haverá uma lista dos produtos já cadastrados; <br>
                            3. Encontre o produto que gostaria de excluir; <br> 
                            4. Clique no botão "Excluir"; <br>
                        </div>
                    </div>
                </div>

                <div class="card mx-auto">
                    <div class="card-header" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Como editar a seção produtos?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            Para editar os textos da seção produtos, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Textos"; <br>
                            2. Escolha a página de produtos e clique no botão “Editar”; <br>
                            3. Escolha o produto que deseja exibir na página principal; <br> 
                            4. Clique no botão de “+” para adicionar produtos na página inicial; <br>
                            4. Clique no botão "Salvar"; <br>
                            - Observação: No caso das imagens, é necessário adicioná-las previamente na aba em questão.
                        </div>
                    </div>
                </div>

                <h1 class="titulos_ajuda" id="secaoSobre">
                    Sobre nós
                </h1>

                <div class="card mx-auto">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Como editar a seção Sobre Nós?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            Para editar os textos, siga os seguintes passos: <br>
                            1. Vá até o gerenciador do sistema e clique em "Textos"; <br>
                            2. Escolha a página que deseja editar e clique no botão “Editar”; <br>
                            3. Modifique os dados que deseja; <br> 
                            4. Clique no botão "Salvar". <br>
                        </div>
                    </div>
                </div>

                <h1 class="titulos_ajuda" id="secaoPortifolio">
                    Portifólio
                </h1>

                <div class="card mx-auto">
                    <div class="card-header" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Como editar a Seção Portifólio?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                        Para editar o conteúdo da Seção Portifólio, você pode seguir estes passos: <br>
                        1. Vá até o Gerenciador do Sistema e clique na opção "Conteúdo", do Menu Lateral; <br>
                        2. Role a página até Portifólio e clique no botão “Editar”; <br>
                        3. Escolha os projetos cujas imagens deseja exibir na página principal do site; <br> 
                        4. Caso queira adicionar mais projetos à exibição, clique no botão de “+” ao lado da caixa de seleção; <br>
                        5. Terminando a seleção, clique no botão "Salvar". <br>
                        - Observação: Para que o projeto apareça nas opções de seleção, é necessário que o mesmo tenha sido cadastrado no menu Portifólio previamente.
                        </div>
                    </div>
                </div>

                <h1 class="titulos_ajuda">
                    Senha
                </h1>

                <div class="card mx-auto">
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Perdeu sua senha?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            Para receber sua senha, clique no botão e enviaremos a senha para o seu email: <br>
                        
                        </div>
                    </div>
                </div>

                <h1 class="titulos_ajuda">
                    Newsletter
                </h1>

                <div class="card mx-auto">
                    <div class="card-header" id="headingEleven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                Insira pergunta 
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                        <div class="card-body">
                        Para editar o conteúdo da Seção Portifólio, você pode seguir estes passos: <br>
                        1. Vá até o Gerenciador do Sistema e clique na opção "Conteúdo", do Menu Lateral; <br>
                        2. Role a página até Portifólio e clique no botão “Editar”; <br>
                        3. Escolha os projetos cujas imagens deseja exibir na página principal do site; <br> 
                        4. Caso queira adicionar mais projetos à exibição, clique no botão de “+” ao lado da caixa de seleção; <br>
                        5. Terminando a seleção, clique no botão "Salvar". <br>
                        - Observação: Para que o projeto apareça nas opções de seleção, é necessário que o mesmo tenha sido cadastrado no menu Portifólio previamente.
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 container-titulos">
                            <h1 class="titulos_ajuda">
                                Não encontrou o que buscava?
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="    text-align: center; font-size: 33px; font-weight: 600; color: rgb(41, 70, 117);">
                            <h3> Mande uma mensagem </h3>               
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
                                        <div class="col-md-12">
                                            <label class="txtForm" for="nome"> &ensp;Nome </label> <br>
                                            <input type="text" class="inpForm" id="nome" name="nome" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="txtForm" for="mensagem"> &ensp;Mensagem </label> <br>
                                            <textarea class="inpForm" id="mensagem" name="mensagem" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="float-left">
                                        <input type="file" class="form-control" id="anexar" name="anexar"> 
                                    </div>
                                    <div class="float-right">
                                        <button type="button" class="btn btn-primary" id="enviar" name="enviar"> Enviar </button>
                                    </div>                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <footer style="margin-top:30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> 
                            <span id="texto_direitos">©2018. Todos os direitos reservados.</span>
                        </div>
                        <div class="col-md-6"> 
                            <img src="../../img/logo1.png" id="logo">
                        </div>
                    </div>
                </div>
            </footer>
         
        </body>
        <script src="../../js/jquery-3.3.1.js"> <script>
        <script src="../../js/popper.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
</html>