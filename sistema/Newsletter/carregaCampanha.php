<?php

    include_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    $counter = 0;

    $sql = "SELECT * FROM campanha WHERE codCampanha=".$_POST['codigo'];
    $resultado = mysqli_query($link,$sql);

    $campanha = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    $campanha['data'] = date('d/m/Y H:i:s', strtotime($campanha['data']));
    
    echo json_encode($campanha);
?>