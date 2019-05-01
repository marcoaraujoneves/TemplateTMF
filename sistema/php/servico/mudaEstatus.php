<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
$query = "SELECT estatus FROM servico where codServico = '$codigo';";
$resultado = mysqli_query($conn, $query);  
$coluna = mysqli_fetch_array($resultado);
$bool =  $coluna[0];
if($bool=='0'){
	$sql = "update servico set estatus = '1' where codServico = '$codigo';";
	echo '<span id="onoff'.$codigo.'"><button value="'.$codigo.'" class="botaoEmail btnStatus" data-id="'.$codigo.'" data-status='.$codigo.' id="statusServico"> <i class="fa fa-toggle-on")"></i> </button></span>';
}else{
	$sql = "update servico set estatus = '0' where codServico = '$codigo';";
	echo '<span id="onoff'.$codigo.'"><button value="'.$codigo.'" class="botaoEmail btnStatus" data-id="'.$codigo.'" data-status='.$codigo.' id="statusServico"> <i class="fa fa-toggle-off")"></i> </button></span>';
}
$results = mysqli_query($conn, $sql);  


?>          