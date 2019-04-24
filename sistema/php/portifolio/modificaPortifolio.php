<?php
// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
        $objDB = new db();
		$conn = $objDB->conecta_mysql();

$codPortifolio = $_POST['codPortifolio'];
$sql = " 
SELECT * from portifolio where codPortifolio = '$codPortifolio'";
$results = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($results);  
      echo json_encode($row); // retorna os dados para conferir o json





      ?>