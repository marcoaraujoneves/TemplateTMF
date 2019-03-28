<?php
// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
        $objDB = new db();
		$conn = $objDB->conecta_mysql();

$codServico = $_POST['codServico'];
$sql = " 
SELECT * from servico where codServico = '$codServico'";
$results = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($results);  
      echo json_encode($row); // retorna os dados para conferir o json





      ?>