

<style type="text/css" media="screen">

img{
	max-width:100px;
	max-height: :100px;
}
input[type=file]{
	padding:10px;
	background:#2d2d2d;}

</style>
<h1 class="titulo_secoes"> Portifólio </h1>
<p>
	<br>
	A tabela abaixo contém todos os projetos cadastrados no portifólio! 
	Para Inserir, Deletar ou Editar basta clicar no respectivo botão e inserir as informações necessárias 
	para cada procedimento.
</p>

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-4">
            <button data-toggle="modal" data-target="#cadastrarPortifolio" id="products" class="btn btn-lg BotaoCadastra">Cadastrar Portifolio</button>
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
            <th>Youtube</th>
            <th style="text-align:center;">Operação</th>
        </tr>
    </thead>
    <tbody>
<!-- Foi utilizado um foreach para pegar e gerar os dados de cada slide. O fechamento de aspas e . são utilizados para concatenar o php com html-->
<?php 
include ('db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$query_select = "SELECT * FROM portifolio;";
$result_select = mysqli_query($conn,$query_select) or die(mysql_error());
$rows = array();
while($row = mysqli_fetch_array($result_select))
	$rows[] = $row;
foreach($rows as $row){ 
	$codPortifolio = $row['codPortifolio'];
	$nome = $row['nome'];
	$descricao = $row['descricao'];
	$linkYoutube = $row['linkYoutube'];
	echo '<tr class="odd gradeX">';
	echo '<td><button class="btn Botao" data-toggle="modal" id="previewImagem" data-target="#mostrarImagem" value="'.$codPortifolio.'" type="button">Imagens</button></td>';
	echo '<td>'.$codPortifolio.'</td>';
	echo '<td>'.$nome.'</td>';
	echo '<td>'.$descricao.'</td>';
	echo '<td>'.$linkYoutube.'</td>';
		echo '<td><button class="btn Botao" data-toggle="modal" id="deletaPortifolio" data-target="#excluirPortifolio" value="'.$codPortifolio.'" type="button">Excluir</button>';
		echo '</tr>';
		unset($estatus);
	}
	?>
</tbody>
</table>

<div  class="modal" id="cadastrarPortifolio" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Cadastramento de Portifolio:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data"  id="formPortifolio" >
					<input name="filesToUpload[]" id="filesToUpload" type="file" multiple="" />
					<div class="form-group">
						<label for="nomePortifolio">Nome</label>
						<input type="text" name="nomePortifolio" id="nomePortifolio"   class="form-control"/>
					</div>
					<div class="form-group">
						<label for="descricaoPortifolio">Descrição</label>
						<input type="text" name="descricaoPortifolio" id="descricaoPortifolio"   class="form-control"/>
					</div>
					<div class="form-group">
						<label for="linkYoutube">Youtube Link</label>
						<input type="text" name="linkYoutube" id="linkYoutube"   class="form-control"/>
					</div>
					<div>
						<input type="submit" class="btn btn-success" id="carai" name="carai" value="Enviar"/>
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



<div  class="modal" id="excluirPortifolio" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Deseja Excluir este portifolio?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<input type="button" name="excluidProd" id="excluidPort" value="Excluir" class="btn BotaoModal"">
				<button type="button" class="btn btn-secondary" id="returnPortExcluir" data-dismiss="modal"> Retornar </button>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="mostrarImagem" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Imagens</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="galerias"></div>
			</div>
		
		</div>
	</div>
</div>

 
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.validate.min.js"></script>






