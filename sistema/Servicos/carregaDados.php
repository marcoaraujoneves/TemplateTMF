<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT * FROM servico";
    $servicos = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($servicos);
    
    if($rowcount>0){
        while($resultado = mysqli_fetch_array($servicos,MYSQLI_ASSOC)){
            echo ("<option value=".$resultado['codServico']."> ".$resultado['nome']." </option>");
        }
    }else{
        echo "Erro ao carregar os dados!";
    }
 ?>