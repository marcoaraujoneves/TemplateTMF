<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "DELETE FROM mensagem WHERE codMsg=".$_POST['codigo'];

    $mensagem = mysqli_query($link, $sql);
    if($mensagem){
        echo "Mensagem deletada com sucesso!";
    } else {
        echo "Erro ao deletar a mensagem!";
    }
?>