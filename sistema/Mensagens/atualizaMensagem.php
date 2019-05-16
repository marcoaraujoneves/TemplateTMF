<?php
    require_once('../db.class.php');

    if($_POST['status']){
        $statusNovo = 0;
    } else {
        $statusNovo = 1;
    }

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "UPDATE mensagem SET respondido=$statusNovo WHERE codMsg=".$_POST['codigo'];

    $mensagem = mysqli_query($link, $sql);
    if($mensagem) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados!";
    }
?>