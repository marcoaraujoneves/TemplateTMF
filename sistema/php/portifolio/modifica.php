<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$modificacodigo = isset($_POST['modificacodigoPortifolio']) ? $_POST['modificacodigoPortifolio'] : '';
$modificanome = isset($_POST['modificanomePortifolio']) ? $_POST['modificanomePortifolio'] : '';
$modificadescription = isset($_POST['modificadescricaoPortifolio']) ? $_POST['modificadescricaoPortifolio'] : '';
$modificaLink = isset($_POST['modificalinkYoutube']) ? $_POST['modificalinkYoutube'] : '';
$query = "update portifolio set nome = '$modificanome',linkYoutube ='$modificaLink', descricao ='$modificadescription' where codPortifolio = '$modificacodigo' ;";
$resultado = mysqli_query($conn, $query);  
echo $query;

?>          