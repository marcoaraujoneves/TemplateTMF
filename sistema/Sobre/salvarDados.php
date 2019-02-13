<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "UPDATE sobre SET indicador1='".$_POST['indicador1']."', indicador2='".$_POST['indicador2']."', indicador3='".$_POST['indicador3']."', indicador4='".$_POST['indicador4']."', indicador1qt=".$_POST['indicador1qt'].", indicador2qt=".$_POST['indicador2qt'].", indicador3qt=".$_POST['indicador3qt'].", indicador4qt=".$_POST['indicador4qt'].", textoSobre='".$_POST['textoSobre']."'";

    $resultado = mysqli_query($link, $sql);
    
    echo($resultado);
?>