<?php

    include_once('sistema/db.class.php');

    $nome = $_POST['nome'];
    $numero = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $objDB = new db();
    $conexao = $objDB->conecta_mysql();
    
    $sql = "INSERT INTO mensagem(nome,telefone,email,mensagem,data,respondido) VALUES(?,?,?,?,CURRENT_TIMESTAMP(),0)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ssss',$nome,$numero,$email,$mensagem);
    if($stmt->execute()){
        echo 1;
    } else {
        echo 0;
    }   
?>