<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$modificacodigo = isset($_POST['modificacodigoProduto']) ? $_POST['modificacodigoProduto'] : '';
$modificanome = isset($_POST['modificanomeProduto']) ? $_POST['modificanomeProduto'] : '';
$modificadescription = isset($_POST['modificadescricaoProduto']) ? $_POST['modificadescricaoProduto'] : '';
$query = "update produto set nome = '$modificanome', descricao ='$modificadescription' where codProduto = '$modificacodigo'  ;";
$resultado = mysqli_query($conn, $query);  
echo $query;

?>          