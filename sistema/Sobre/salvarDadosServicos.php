<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "UPDATE sobre SET servico1=".$_POST['servico1'].", servico2=".$_POST['servico2'].", servico3=".$_POST['servico3'].", servico4=".$_POST['servico4'].", textoServicos='".$_POST['textoServicos']."'";

    $resultado = mysqli_query($link, $sql);
    
    echo($sql);
?>