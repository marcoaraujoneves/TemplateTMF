<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT * FROM sobre";
    $resultado = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($resultado);
    
    if($rowcount>0){
        $row = mysqli_fetch_array($resultado,MYSQLI_ASSOC);  
        echo json_encode($row); // retorna os dados para conferir o json
    }else{
        echo 0;
    }
 ?>