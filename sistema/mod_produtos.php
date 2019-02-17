

<style type="text/css" media="screen">

img{
  max-width:100px;
  max-height: :100px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}

</style>

<h1 class="titulo_secoes"> Produtos </h1>
<p>
    <br>
    A tabela abaixo contém todos os produtos cadastrados no sistema! 
    Para Inserir, Deletar ou Editar basta clicar no respectivo botão e inserir as informações necessárias 
    para cada procedimento.
</p>


<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-4">
            <button data-toggle="modal" data-target="#cadastrarProduto" id="products" class="btn btn-lg BotaoCadastra">Cadastrar Produto</button>
        </div>
    </div>
</div>

<table  class="table table-striped table-bordered table-hover Tabela" style="width:1000px;" id="tb1">
    <thead >
        <tr >
            <th width='50px' >Imagens</th>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th style="text-align:center;">Operação</th>
        </tr>
    </thead>
    <tbody>
<!-- Foi utilizado um foreach para pegar e gerar os dados de cada slide. O fechamento de aspas e . são utilizados para concatenar o php com html-->
<?php 
include ('db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$query_select = "SELECT * FROM produto;";
$result_select = mysqli_query($conn,$query_select) or die(mysql_error());
$rows = array();
while($row = mysqli_fetch_array($result_select))
	$rows[] = $row;
foreach($rows as $row){ 
	$codProduto = $row['codProduto'];
	$nome = $row['nome'];
	$descricao = $row['descricao'];
	echo '<tr class="odd gradeX">';
	echo '<td><button class="btn Botao" data-toggle="modal" id="previewImagens" data-target="#mostrarImagens" value="'.$codProduto.'" type="button">Imagens</button></td>';
	echo '<td>'.$codProduto.'</td>';
	echo '<td>'.$nome.'</td>';
	echo '<td>'.$descricao.'</td>';
		echo '<td><button class="btn Botao" data-toggle="modal" id="deletaProduto" data-target="#excluirProduto" value="'.$codProduto.'" type="button">Excluir</button>';
		echo '</tr>';
		unset($estatus);
	}
	?>
</tbody>
</table>

<div  class="modal" id="cadastrarProduto" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Cadastramento de Serviço:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data"  id="formProduto" >
					<input name="filesToUpload[]" id="filesToUpload" type="file" multiple="" />
					<div class="form-group">
						<label for="nomeProduto">Nome</label>
						<input type="text" name="nomeProduto" id="nomeProduto" required  class="form-control"/>
					</div>
					<div class="form-group">
						<label for="descricaoProduto">Descrição</label>
						<input type="text" name="descricaoProduto" id="descricaoProduto" required  class="form-control"/>
					</div>
					<div>
						<input type="submit" class="btn btn-success" id="potato" name="potato" value="Enviar"/>
						<button type="button" class="btn btn-secondary" id="returnServico" data-dismiss="modal"> Cancelar </button>
						<input type="hidden" id="addremove">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>				

</div>
</div>
</div>



<div  class="modal" id="excluirProduto" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Deseja Excluir este produto?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<input type="button" name="excluidProd" id="excluidProd" value="Excluir" class="btn BotaoModal"">
				<button type="button" class="btn btn-secondary" id="returnProdExcluir" data-dismiss="modal"> Retornar </button>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="mostrarImagens" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Imagens</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="galeria"></div>
			</div>
		
		</div>
	</div>
</div>

 
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.validate.min.js"></script>






