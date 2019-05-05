<?php
    
    include_once('../db.class.php');

    $nome = $_POST['nome'] ;
    $email = $_POST['email'] ;
    $status = $_POST['status'] ;

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "INSERT INTO cliente(nome,email,status) VALUES(?,?,?)";
    
    $stmt = $link->prepare($sql);
    $stmt->bind_param('ssi',$nome,$email,$status);
    
    if($stmt->execute()){
        echo 1;
    } else {
        echo 0;
    }   
?>