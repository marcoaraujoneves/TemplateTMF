<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT * FROM produto";
    $produtos = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($produtos);
    
    if($rowcount>0){
        while($resultado = mysqli_fetch_array($produtos,MYSQLI_ASSOC)){
            echo ("<option value=".$resultado['codProduto']."> ".$resultado['nome']." </option>");
        }
    }else{
        echo "Erro ao carregar os dados!";
    }
 ?>