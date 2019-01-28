<?php

    session_start();

    include ('db.class.php');
    
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        
        if(isset($dados_usuario['login'])){
            $_SESSION['nome'] = $dados_usuario['nome'];
            $_SESSION['cargo'] = $dados_usuario['cargo'];
            header('Location: gerenciador.php');
        }else{
            header('Location: index.php?erro=1');
        }
    }else{
        echo 'Erro ao buscar o usuário no Banco de Dados';
    }

?>