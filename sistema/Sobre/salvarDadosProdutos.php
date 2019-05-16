<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "UPDATE sobre SET produto1=".$_POST['produto1'].", produto2=".$_POST['produto2'].", produto3=".$_POST['produto3'];

    $resultado = mysqli_query($link, $sql);
    if($resultado) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados!";
    }
    
?>