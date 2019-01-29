<?php

    session_start();

    include ('db.class.php');
    
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    $sql = "SELECT codUsuario,login,nome,cargo FROM usuario WHERE login=? AND senha=?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('ss',$login,$senha);
    $stmt->execute();
    $resultado_id = $stmt->get_result();
    
    if($resultado_id->num_rows){
        $resultado_id = $resultado_id->fetch_assoc();
        
        if(isset($resultado_id['login']) && isset($resultado_id['cargo'])) {
            $_SESSION['nome'] = $resultado_id['nome'];
            $_SESSION['cargo'] = $resultado_id['cargo'];
            header('Location: gerenciador.php');
        }else{
            //header('Location: index.php?erro=1');
        }
    }else{
        header('Location: index.php?erro=1');
    }

?>