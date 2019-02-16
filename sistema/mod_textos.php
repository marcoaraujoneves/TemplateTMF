<h1 class="titulo_secoes"> Textos </h1>
<p style="text-align:center">
    <br>
    Neste módulo você poderá editar os textos que são exibidos no website!
</p>
<div class="container">
	<center>
	<div class="card-deck">
		<div class="row">
			<div class="col-md-6">
				<div class="card" style="width: auto;display:inline-block; height:auto;">
					<img class="card-img-top" src="../img/Sistema/sobreCard.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Sobre Nós</h5>
						<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
						<button type="button" class="btn btn-primary" id="btnSobre" data-toggle="modal" data-target="#modalSobre">Editar</button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card" style="width: auto;display:inline-block; height:auto;">
					<img class="card-img-top" src="../img/Sistema/servicosCard.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Serviços</h5>
						<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
						<button type="button" class="btn btn-primary" id="btnServicos" data-toggle="modal" data-target="#modalServicos">Editar</button>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-6">
				<div class="card" style="width: auto;display:inline-block; height:auto;">
					<img class="card-img-top" src="../img/Sistema/produtosCard.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Produtos</h5>
						<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
						<button type="button" class="btn btn-primary" id="btnProdutos" data-toggle="modal" data-target="#modalProdutos">Editar</button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card" style="width: auto;display:inline-block; height:auto;">
					<img class="card-img-top" src="../img/Sistema/portifolioCard.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Portifólio</h5>
						<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
						<button type="button" class="btn btn-primary" id="btnPortiflio" data-toggle="modal" data-target="#modalPortifolio">Editar</button>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	</center>
</div>

<!-- Modal de Edição da Seção Sobre Nós -->
<div class="modal fade" id="modalSobre" tabindex="-1" role="dialog" aria-labelledby="modalSobreTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Sobre Nós </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodySobre">
				<form id="formSobre">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="indicador1"> Indicador 1: </label>
								<input type="text" class="inpForm" id="indicador1" name="indicador1">
								<label for="indicador1qt"> Quantidade: </label>
								<input type="number" step="1" min="0" class="inpForm" id="indicador1qt" name="indicador1qt">
								<br><hr>
							</div>
							<div class="col-md-6">
								<label for="indicador2"> Indicador 2: </label>
								<input type="text" class="inpForm" id="indicador2" name="indicador2">
								<label for="indicador2qt"> Quantidade: </label>
								<input type="number" step="1" min="0" class="inpForm" id="indicador2qt" name="indicador2qt">
								<br><hr>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="indicador3"> Indicador 3: </label>
								<input type="text" class="inpForm" id="indicador3" name="indicador3">
								<label for="indicador3qt"> Quantidade: </label>
								<input type="number" step="1" min="0" class="inpForm" id="indicador3qt" name="indicador3qt">
								<br><hr>
							</div>
							<div class="col-md-6">
								<label for="indicador4"> Indicador 4: </label>
								<input type="text" class="inpForm" id="indicador4" name="indicador4">
								<label for="indicador4qt"> Quantidade: </label>
								<input type="number" step="1" min="0" class="inpForm" id="indicador4qt" name="indicador4qt">
								<br><hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="textoSobre"> Texto Sobre a TMF: </label>
								<textarea class="inpForm" id="textoSobre" name="textoSobre" rows="10" maxlength="720" placeholder="Máximo de 720 caracteres"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="salvarSobre" data-dismiss="modal">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div> 
</div>

<!-- Modal de Edição da Seção Serviços -->
<div class="modal fade" id="modalServicos" tabindex="-1" role="dialog" aria-labelledby="modalServicosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Serviços </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form id="formServicos">	
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="servico1"> Serviço 1: </label>
								<select class="inpForm" id="servico1" name="servico1">
									<option> - </option>
								</select>
								<br><hr>
							</div>
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="servico2"> Serviço 2: </label>
								<select class="inpForm" id="servico2" name="servico2">
									<option> - </option>
								</select>
								<br><hr>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="servico3"> Serviço 3: </label>
								<select class="inpForm" id="servico3" name="servico3">
									<option> - </option>
								</select>
								<br><hr>
							</div>
							<div class="col-md-6" style="border-right:1px solid lightgray;">
								<label for="servico4"> Serviço 4: </label>
								<select class="inpForm" id="servico4" name="servico4">
									<option> - </option>
								</select>
								<br><hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="textoServicos"> Texto Serviços: </label>
								<textarea class="inpForm" id="textoServicos" name="textoServicos" rows="10" maxlength="780" placeholder="Máximo de 780 caracteres"></textarea>
							</div>
						</div>
					</div>
				</form>	
			</div>
            <div class="modal-footer">
				<button type="button" class="btn btn-primary" id="salvarServicos" data-dismiss="modal">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Edição da Seção Produtos -->
<div class="modal fade" id="modalProdutos" tabindex="-1" role="dialog" aria-labelledby="modalProdutosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Produtos </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form id="formProdutos">	
					<div class="container-fluid" id="listaProdutos">
						<div class="row">
							<div class="col-md-10">
								<label for="produto_1"> Produto 1: </label>
								<select class="inpForm" name="produto_1" id="produto_1">
									<option> - </option>
								</select>
								<br><hr>
							</div>
							<div class="col-md-2 my-auto mx-auto">
								<button type="button" class="btn btn-success btnAtivo" id="addProduto"> + </button>
							</div>
						</div>
					</div>
				</form>	
			</div>
            <div class="modal-footer">
				<button type="button" class="btn btn-primary" id="salvarProdutos" data-dismiss="modal">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Edição da Seção Produtos -->
<div class="modal fade" id="modalPortifolio" tabindex="-1" role="dialog" aria-labelledby="modalPortifolioTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(8, 21, 43);color: white;">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Portifólio </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form id="formPortifolio">	
					<div class="container-fluid" id="listaPortifolio">
						<div class="row">
							<div class="col-md-10">
								<label for="portifolio_1"> Portifólio 1: </label>
								<select class="inpForm" name="portifolio_1" id="portifolio_1">
									<option> - </option>
								</select>
								<br><hr>
							</div>
							<div class="col-md-2 my-auto mx-auto">
								<button type="button" class="btn btn-success btnAtivo" id="addPortifolio"> + </button>
							</div>
						</div>
					</div>
				</form>	
			</div>
            <div class="modal-footer">
				<button type="button" class="btn btn-primary" id="salvaraPortifolio" data-dismiss="modal">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('click','#btnSobre', function(){
			$.ajax({
				url:'Sobre/carregaDados.php',
				dataType:"json",
				success:function(data){
					$('#indicador1qt').val(data.indicador1qt);
					$('#indicador2qt').val(data.indicador2qt);
					$('#indicador3qt').val(data.indicador3qt);
					$('#indicador4qt').val(data.indicador4qt);

					$('#indicador1').val(data.indicador1);  
					$('#indicador2').val(data.indicador2);  
					$('#indicador3').val(data.indicador3);  
					$('#indicador4').val(data.indicador4);
					$('#textoSobre').val(data.textoSobre);
				},
				error: function(){
					$('#bodySobre').html('Houve um erro na requisição, tente novamente mais tarde!');
				}
			});
		});

		$(document).on('click','#salvarSobre', function(){
			$.ajax({
				url:'Sobre/salvarDados.php',
				method:'POST',
				data:$('#formSobre').serialize(),
				success:function(data){
					
				},
				error: function(){
					$('#bodySobre').html('Houve um erro na requisição, tente novamente mais tarde!');
				}
			});
		});

		$(document).on('click','.btnAtivo',function(){
			$(this).addClass('d-none');
			$(this).removeClass('btnAtivo');
		});

		$(document).on('click','#addProduto',function(){
			$('#listaProdutos').append('<div class="row"><div class="col-md-10"><label for="produto_1"> Produto 1: </label><select class="inpForm" name="produto_1" id="produto_1"><option> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addProduto"> + </button></div></div>');
		});

		$(document).on('click','#addPortifolio',function(){
			$('#listaPortifolio').append('<div class="row"><div class="col-md-10"><label for="portifolio_1"> Produto 1: </label><select class="inpForm" name="portifolio_1" id="portifolio_1"><option> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addPortifolio"> + </button></div></div>');
		});
	});
</script>