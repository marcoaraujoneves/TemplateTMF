<?php

    include_once('../db.class.php');

    $tag = $_POST['tagEmail']=='' ? $_POST['tagEmailRadio'] : $_POST['tagEmail'] ;
    $assunto = $_POST['assunto'];
    $msg = $_POST['msg'];
    $listaClientes = 0;

    $objDB = new db();
    $conexao = $objDB->conecta_mysql();
    
    $sql = "INSERT INTO campanha(tag,assunto,mensagem,data) VALUES(?,?,?,CURRENT_TIMESTAMP())";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('sss',$tag,$assunto,$msg);
    if($stmt->execute()){
        echo 1;
    } else {
        echo 0;
    }   
?>