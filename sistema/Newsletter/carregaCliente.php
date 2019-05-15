<?php

    include_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    $counter = 0;

    $sql = "SELECT * FROM cliente WHERE codCliente=".$_POST['codigo'];
    $resultado = mysqli_query($link,$sql);
    if($resultado){
        $cliente = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        echo json_encode($cliente);
    } else {
        echo 'Erro ao carregar os dados cliente!';
    }
    
?>