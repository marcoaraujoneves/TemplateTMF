<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT * FROM clienteempresa";
    $resultado = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($resultado);
    
    if($rowcount>0){
        while($row = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            echo '<option value='.($row['codCliente']).'> '.($row['nome']).' </option>';
        }
    }else{
        echo 0;
    }
 ?>