<?php

    include_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "DELETE FROM cliente WHERE codCliente=".$_POST['codigo'];
    $resultado = mysqli_query($link,$sql);

    if($resultado){
        echo('Cliente deletado com sucesso!');
    } else {
        echo('Erro ao deletar o cliente!');
    }
?>