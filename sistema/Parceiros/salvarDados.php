<?php

    include('../db.class.php');

    $counter = 1;
    $parceiros = array();
    while(isset($_POST['parceiro'.$counter])){
        $parceiros[$counter] = $_POST['parceiro'.$counter];
        $counter++;
    }

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql0 = "UPDATE parceiros SET estatus=0"; 
    $sql = "UPDATE parceiros SET estatus=1 WHERE codParceiro=";
    
    $counter2 = 1;
    while(isset($parceiros[$counter2])){
        if($counter2 != $counter-1){
            $sql.=$parceiros[$counter2].' OR codParceiro=';
        } else {
            $sql.=$parceiros[$counter2].';';
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