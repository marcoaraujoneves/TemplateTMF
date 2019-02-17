<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$codigo = isset($_POST['codProduto']) ? $_POST['codProduto'] : '';

$query_select = "SELECT nome FROM imagemproduto where codProduto = '$codigo';";
echo $query_select;
        $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
        $rows = array();
        while($row = mysqli_fetch_array($result_select))
            $rows[] = $row;
        foreach($rows as $row){ 
            
            echo unlink('../../Img/Produtos/'.$row['nome']);
        }
$query = "DELETE FROM imagemproduto WHERE codProduto = '$codigo';";
$resultado = mysqli_query($conn, $query);  
$query = "DELETE FROM produto WHERE codProduto = '$codigo';";
$resultado = mysqli_query($conn, $query);  


?>          