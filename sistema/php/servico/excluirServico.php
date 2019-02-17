<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$codigo = isset($_POST['codServico']) ? $_POST['codServico'] : '';
$query = "DELETE FROM servico WHERE codServico = '$codigo';";
$resultado = mysqli_query($conn, $query);  
 echo unlink('../../Img/Servicos/'.$codigo.'.jpg');

?>          