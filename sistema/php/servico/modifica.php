<?php 

// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$modificacodigo = isset($_POST['modificacodigo']) ? $_POST['modificacodigo'] : '';
$modificanome = isset($_POST['modificanome']) ? $_POST['modificanome'] : '';
$modificadescription = isset($_POST['modificadescription']) ? $_POST['modificadescription'] : '';
$query = "update servico set nome = '$modificanome', descricao ='$modificadescription' where codServico = '$modificacodigo'  ;";
$resultado = mysqli_query($conn, $query);  

if($resultado){
            echo json_encode(array('status' => 'success','message'=> 'Serviço alterado'));
        }else{
            echo json_encode(array('status' => 'error','message'=> 'Erro ao alterar serviço'));
            
        }

?>          