<?php

    $header = '<div style="background-color: #365C9A; width:90%; margin-top:20px; margin-left:5%; border-radius:7px;z-index:2;"><img src="../../img/logoTMFBranco.png" style="height:70px;height:70px;margin:8px 0 8px 50%;"></div>';
    $rodape = '<div style="width:80%; margin-left:10%; margin-top:15px;padding: 15px; text-align:center;">
                <a href="" target="_blank" style="text-decoration:none">
                    <img src="../../img/fb.png" style="height:20px;">
                </a>
                <a href="https://www.usinagemtmf.com.br" target="_blank" style="text-decoration:none">
                    <img src="../../img/site.png" style="height:20px;">
                </a>
                <a href="" target="_blank" style="text-decoration:none">
                    <img src="../../img/linkedin.png" style="height:20px;">
                </a>
            </div>';
    $corpo ='<div style="background-color: white; width:90%; margin-top:-5px; margin-left:5%; border-radius:3px; padding: 15px;z-index:1;box-sizing:border-box">
                <h3> Olá,</h3>
                <p style="text-align:justify;">
                    &emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b> Aenean ut ex molestie </b>, euismod enim fringilla, consequat ante. <br>&emsp;Pellentesque consequat convallis orci. Donec eget eleifend erat. Praesent eget pretium ipsum. Sed vitae commodo eros. Nunc bibendum porta lectus, vel aliquet justo hendrerit interdum. Nam iaculis velit in sollicitudin ullamcorper. Vivamus consectetur mi et erat scelerisque dictum.
                    <br><br>
                </p>
                <span style="text-align:center;width:100%;">
                    Abraços,<br>
                    Equipe TMF
                </span>
            </div>';
    echo $header.$corpo.$rodape;
    die();
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