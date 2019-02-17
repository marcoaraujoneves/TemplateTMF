<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "UPDATE cliente SET nome='".$_POST['nome']."', email='".$_POST['email']."', status=".$_POST['status']." WHERE codCliente=".$_POST['codigo'];

    $resultado = mysqli_query($link, $sql);
    
    echo($resultado);
?>