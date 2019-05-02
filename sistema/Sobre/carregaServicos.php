<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql="SELECT S.nome AS nomeservico,I.nome AS imgservico
          FROM servico S INNER JOIN imagemservico I
          ON S.codServico = I.codServico
          WHERE S.codServico =".$_GET['ser1']." OR S.codServico=".$_GET['ser2']." OR S.codServico=".$_GET['ser3']." OR S.codServico=".$_GET['ser4'];
    
    $resultado = mysqli_query($link,$sql);
    $rowcount = mysqli_num_rows($resultado);
    
    if($rowcount>0){
        $row = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        
        foreach($row as $servico){
            echo $servico;
            // echo $servico['nomeservico']."   ".$servico['imgservico'];
        }
        //var_dump($row);
        //die();
        // echo json_encode($row); // retorna os dados para conferir o json
    }else{
        echo 0;
    }
 ?>