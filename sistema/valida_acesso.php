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






<?php
/*
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

    $resultado_id = $stmt->store_result();
    var_dump($resultado_id);
    //$resultado_id = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

//    if($resultado_id){
//        $dados_usuario = mysqli_fetch_array($resultado_id);
        
//        if(isset($dados_usuario['login'])){
//            $_SESSION['nome'] = $dados_usuario['nome'];
//            $_SESSION['cargo'] = $dados_usuario['cargo'];
//            header('Location: gerenciador.php');
//        }else{
//            header('Location: index.php?erro=1');
//        }
//    }else{
//        echo 'Erro ao buscar o usuário no Banco de Dados';
//    }
*/
?>