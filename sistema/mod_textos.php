<h1 class="titulo_secoes"> Textos </h1>
<p>
    <br>
    Neste módulo você poderá editar os textos que são exibidos no website!
</p>
<center>
	<div class="card-deck">

		<div class="card" style="width: 17rem;display:inline-block; height:auto;">
			<img class="card-img-top" src="../img/Sistema/sobreCard.png" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Sobre Nós</h5>
				<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSobre">Editar</button>
			</div>
		</div>
		<div class="card" style="width: 17rem;display:inline-block; height:auto;">
			<img class="card-img-top" src="../img/Sistema/servicosCard.png" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Serviços</h5>
				<p class="card-text">Clique no botão abaixo para editar as informações desta seção!</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalServicos">Editar</button>
			</div>
		</div>
		
	</div>
</center>

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
            <div class="modal-body">
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
							<input type="text" class="inpForm" id="indicador2" name="indicador1">
							<label for="indicador2qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador2qt" name="indicador1qt">
							<br><hr>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6" style="border-right:1px solid lightgray;">
							<label for="indicador3"> Indicador 3: </label>
							<input type="text" class="inpForm" id="indicador3" name="indicador1">
							<label for="indicador3qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador3qt" name="indicador1qt">
							<br><hr>
						</div>
						<div class="col-md-6">
							<label for="indicador4"> Indicador 4: </label>
							<input type="text" class="inpForm" id="indicador4" name="indicador1">
							<label for="indicador4qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador4qt" name="indicador1qt">
							<br><hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="msgSobre"> Texto Sobre a TMF: </label>
							<textarea class="inpForm" id="msgSobre" name="msgSobre" rows="10" maxlength="720" placeholder="Máximo de 720 caracteres"></textarea>
						</div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
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
							<input type="text" class="inpForm" id="indicador2" name="indicador1">
							<label for="indicador2qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador2qt" name="indicador1qt">
							<br><hr>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6" style="border-right:1px solid lightgray;">
							<label for="indicador3"> Indicador 3: </label>
							<input type="text" class="inpForm" id="indicador3" name="indicador1">
							<label for="indicador3qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador3qt" name="indicador1qt">
							<br><hr>
						</div>
						<div class="col-md-6">
							<label for="indicador4"> Indicador 4: </label>
							<input type="text" class="inpForm" id="indicador4" name="indicador1">
							<label for="indicador4qt"> Quantidade: </label>
							<input type="number" step="1" min="0" class="inpForm" id="indicador4qt" name="indicador1qt">
							<br><hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="msgSobre"> Mensagem: </label>
							<textarea class="inpForm" id="msgSobre" name="msgSobre" rows="10"></textarea>
						</div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>