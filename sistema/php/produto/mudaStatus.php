<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
$query = "SELECT status FROM produto where codProduto = '$codigo';";
$resultado = mysqli_query($conn, $query);  
$coluna = mysqli_fetch_array($resultado);
$bool =  $coluna[0];
if($bool=='0'){
	$sql = "update produto set status = '1' where codProduto = '$codigo';";
	echo '<span id="onoff'.$codigo.'"><button value="'.$codigo.'" class="botaoEmail btnStatus" data-id="'.$codigo.'" data-status='.$codigo.' id="statusProduto"> <i class="fa fa-toggle-on")"></i> </button></span>';
}else{
	$sql = "update produto set status = '0' where codProduto = '$codigo';";
	echo '<span id="onoff'.$codigo.'"><button value="'.$codigo.'" class="botaoEmail btnStatus" data-id="'.$codigo.'" data-status='.$codigo.' id="statusProduto"> <i class="fa fa-toggle-off")"></i> </button></span>';
}
$results = mysqli_query($conn, $sql);  


?>          