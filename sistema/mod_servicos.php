<style type="text/css" media="screen">

img{
  max-width:100px;
  max-height: :100px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}

</style>

<h1 class="titulo_secoes"> Serviços </h1>
<p>
    <br>
    A tabela abaixo contém todos os serviços cadastrados no sistema! 
    Para Inserir, Deletar ou Editar basta clicar no respectivo botão e inserir as informações necessárias 
    para cada procedimento.
</p>


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <button data-toggle="modal" data-target="#cadastrarServico" id="services" class="mx-auto d-block btn btn-lg BotaoCadastra">Cadastrar Serviço</button>
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
	<table  class="table table-striped table-hover Tabela" style="width:1000px;" id="tb1">
		<thead >
			<tr >
				<th width='50px' >Imagem</th>
				<th>Código</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Estatus</th>
				<th style="text-align:center;">Operação</th>
			</tr>
		</thead>
		<tbody>
		<!-- Foi utilizado um foreach para pegar e gerar os dados de cada slide. O fechamento de aspas e . são utilizados para concatenar o php com html-->
		<?php 
		include ('db.class.php');
		$objDB = new db();
		$conn = $objDB->conecta_mysql();
		$query_select = "SELECT * FROM servico;";
		$result_select = mysqli_query($conn,$query_select) or die(mysql_error());
		$rows = array();
		while($row = mysqli_fetch_array($result_select))
			$rows[] = $row;
		foreach($rows as $row){ 
			$codServico = $row['codServico'];
			$nome = $row['nome'];
			$descricao = $row['descricao'];
			$estatus = $row['estatus'];
			echo '<tr class="odd gradeX">';
			echo '<td><img src="Img/Servicos/'.$codServico.'.jpg" class="ImgTd"></td>';
			echo '<td>'.$codServico.'</td>';
			echo '<td>'.$nome.'</td>';
			echo '<td>'.$descricao.'</td>';
			if($estatus){
				echo '<td >
				<input id="estatus" name="estatus"  value="'.$codServico.'" type="checkbox" checked>
				</td>';}else{
					echo $estatus;
					echo '<td >
					<input id="estatus" name="estatus"  value="'.$codServico.'" type="checkbox" >
					</td>';


				}
				echo '<td><button class="btn Botao" data-toggle="modal" id="modificaServico" data-target="#modificarServicos" value="'.$codServico.'" type="button">Modificar</button><button class="btn Botao" data-toggle="modal" id="deletaServico" data-target="#exlcuirServico" value="'.$codServico.'" type="button">Excluir</button>';
				echo '</tr>';
				unset($estatus);
			}
			?>
		</tbody>
	</table>
</div>

<div  class="modal" id="cadastrarServico" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Cadastramento de Serviço:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data"  id="formServico" >
					<input  type='file' name="arquivo" id="arquivo" />
					<img id="blah" src="#" alt="your image" />
					<div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" required  class="form-control"/>
                                  </div>
                                  <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <input type="text" name="description" id="description" required class="form-control"/>
                                  </div>
                                  <div>
                                        <input type="submit" class="btn btn-success" id="batatas" name="batatas" value="Enviar"/>
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


<div  class="modal" id="modificarServicos" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Cadastramento de Serviço:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data"  id="formModifica" >
					<div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="modificanome" id="modificanome" required  class="form-control"/>
                                  </div>
                                  <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <input type="text" name="modificadescription" id="modificadescription" required class="form-control"/>
                                  </div>
                                  <div>
                                  	<input type="hidden" name="modificacodigo" id="modificacodigo" >
                                        <input type="submit" class="btn btn-success" id="modificabatatas" name="modificabatatas" value="Enviar"/>
                                        <button type="button" class="btn btn-secondary" id="modificareturnServico" data-dismiss="modal"> Cancelar </button>
                                  </div>
							</form>
						</div>
					</div>
				</div>
			</div>				

		</div>
	</div>
</div>

<div style="margin-top:12%;" class="modal" id="exlcuirServico" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(99,00,33);">
				<h5 class="modal-title" style="color:white;">Deseja Excluir este serviço?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<input type="button" name="excluiServ" id="excluiServ" value="Excluir" class="btn BotaoModal"">
				<button type="button" class="btn btn-secondary" id="returnExcluir" data-dismiss="modal"> Retornar </button>
			</div>
		</div>
	</div>
</div>


 
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.validate.min.js"></script>









