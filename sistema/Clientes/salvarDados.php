<?php

    include('../db.class.php');

    $counter = 1;
    $clientes = array();
    while(isset($_POST['cliente'.$counter])){
        $clientes[$counter] = $_POST['cliente'.$counter];
        $counter++;
    }

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql0 = "UPDATE clienteempresa SET estatus=0"; 
    $sql = "UPDATE clienteempresa SET estatus=1 WHERE codCliente=";
    
    $counter2 = 1;
    while(isset($clientes[$counter2])){
        if($counter2 != $counter-1){
            $sql.=$clientes[$counter2].' OR codCliente=';
        } else {
            $sql.=$clientes[$counter2].';';
        }
        $counter2++;
    }
    /* echo $sql;die(); */
    if(mysqli_query($link, $sql0)) {
        if(mysqli_query($link, $sql)) {
            echo "Dados salvos com sucesso!";
        } else {
            echo "Erro ao atualizar os dados! " . mysqli_error($link);
        }
    } else {
        echo "Erro ao atualizar os dados! " . mysqli_error($link);
    } 
 ?>