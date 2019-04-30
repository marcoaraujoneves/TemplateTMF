<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT * FROM parceiros";
    $parceiros = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($parceiros);
    
    if($rowcount>0){
        while($resultado = mysqli_fetch_array($parceiros,MYSQLI_ASSOC)){
            echo ("<option value=".$resultado['codParceiro']."> ".$resultado['nome']." </option>");
        }
    }else{
        echo 0;
    }
 ?>