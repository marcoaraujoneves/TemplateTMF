<?php

include('../db.class.php');

$objDB = new db();
$link = $objDB->conecta_mysql();


$servico1 =$_POST['servico1'];
$servico2 =$_POST['servico2'];
$servico3 =$_POST['servico3'];
$servico4 =$_POST['servico4'];

$sql="select servico.nome, imagemservico.nome as imagem from servico inner join imagemservico on servico.codServico = imagemservico.codServico where servico.codServico = $servico1 or servico.codServico = $servico2 or servico.codServico = $servico3 or servico.codServico = $servico4";
$result = mysqli_query($link,$sql);
$rowcount = mysqli_num_rows($result);

if($rowcount>0){
 while($resultado = mysqli_fetch_assoc($result)){
    $vetor[] = array_map('utf8_encode', $resultado); 
}
    echo json_encode($vetor); // retorna os dados para conferir o json
}else{
   echo 0;
}

?>