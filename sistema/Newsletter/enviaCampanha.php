<?php
    include_once('../db.class.php');
            
    $objDB = new db();
    $conexao = $objDB->conecta_mysql();

    $listaClientes = '';

    $consulta = "SELECT email from cliente WHERE status=1";
    $resultado = mysqli_query($conexao,$consulta);
    
    if($resultado){
        
        while($email = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $listaClientes = $listaClientes.$email['email'].',';
        }

        if($listaClientes != ''){
            $listaClientes = substr($listaClientes, 0, -1);
            $tag = "[PROMOÇÃO]";//$_POST['tagEmail']=='' ? $_POST['tagEmailRadio'] : $_POST['tagEmail'] ;
            $assunto = "Desconto de 10% na compra da sua máquina";//$_POST['assunto'];
            $msg = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut ex molestie , euismod enim fringilla, consequat ante. ";//$_POST['msg'];

            $cabecalho = '<div style="background-color: #365C9A; width:90%; margin-top:20px; margin-left:5%; border-radius:7px;z-index:2;"><img src="https://usinagemtmf.com.br/teste/teste/img/logoTMFBranco.png" style="height:70px;height:70px;margin:8px 0 8px 50%;"></div>';
            $rodape = '<div style="width:80%; margin-left:10%; margin-top:15px;padding: 15px; text-align:center;">
                    <a href="" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/fb.png" style="height:20px;">
                    </a>
                    <a href="https://www.usinagemtmf.com.br" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/site.png" style="height:20px;">
                    </a>
                    <a href="" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/linkedin.png" style="height:20px;">
                    </a>
                </div>';
            $corpo ='<div style="background-color: white; width:90%; margin-top:-5px; margin-left:5%; border-radius:3px; padding: 15px;z-index:1;box-sizing:border-box">
                    <h3> Olá,</h3>
                    <p style="text-align:justify;">
                        &emsp;'.$msg.'
                        <br><br>
                    </p>
                    <span style="text-align:center;width:100%;">
                        Abraços,<br>
                        Equipe TMF
                    </span>
                </div>';

            $emailSender = "marcoaraujoneves@gmail.com";
            //$emailDestinatario = "marcoaraujo@serrajr.eng.br";

            $emailRemetente = "Usinagem TMF";
            $msgHTML = $cabecalho.$corpo.$rodape;
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "From: ".$emailSender."\r\n";
            $headers .= "Return-Path: ".$emailSender."\r\n";
            $headers .= "Reply-To: ".$emailRemetente."\r\n";
            $envio = mail($listaClientes, "$tag $assunto", $msgHTML, $headers,$emailSender);

            if($envio) {
                echo 'Campanha enviada';
                die();    
                $sql = "INSERT INTO campanha(tag,assunto,mensagem,data) VALUES(?,?,?,CURRENT_TIMESTAMP())";
                $stmt = $conexao->prepare($sql);
                $stmt->bind_param('sss',$tag,$assunto,$msg);
                if($stmt->execute()){
                    echo 'Campanha enviada e salva!';
                } else {
                    echo 'Campanha enviada! Erro ao salvar a campanha.';
                }
            } else {
                echo 'Erro ao enviar a campanha para os clientes ativos!';
            }
        } else {
            echo 'Erro! Lista de clientes ativos vazia.';
        }
    } else {
        echo 'Erro ao buscar clientes ativos na lista!';
    }
?>