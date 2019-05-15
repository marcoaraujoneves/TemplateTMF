<?php
    include_once('../db.class.php');
    
    if($_POST['status']){
        $statusNovo = 0;
    } else {
        $statusNovo = 1;
    }

    $objDB = new db();
    $link = $objDB->conecta_mysql();
  
    $sql = "UPDATE cliente SET status=$statusNovo WHERE codCliente=".$_POST['codigo'];
    $resultado = mysqli_query($link,$sql);
    if($resultado){
        echo('Status atualizado!');
    } else {
        echo('Erro ao atualizar o status do cliente!');
    }
?>