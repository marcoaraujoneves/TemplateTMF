<?php
    include_once('../db.class.php');
            
    $objDB = new db();
    $conexao = $objDB->conecta_mysql();

    $listaEmailClientes = '';
    //$listaNomeClientes = '';

    $consultaEmailCliente = "SELECT email FROM cliente WHERE status=1";
    $resultadoEmailCliente = mysqli_query($conexao, $consultaEmailCliente);

    $consultaNomeCliente = "SELECT nome FROM cliente WHERE status=1";
    $resultadoNomeCliente = mysqli_query($conexao, $consultaNomeCliente);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../../PHPMailer/src/Exception.php';
    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';
    
    if($resultadoEmailCliente){
        
        while($email = mysqli_fetch_array($resultadoEmailCliente, MYSQLI_ASSOC)){
            $listaEmailClientes = $listaEmailClientes.$email['email'].',';
        }

        //while($nome = mysqli_fetch_array($resultadoNomeCliente, MYSQLI_ASSOC)){
        //    $listaNomeClientes = $listaNomeClientes.$nome['nome'].',';
        //}

        //$listaNomeClientes = explode(',', $listaNomeClientes);

        if($listaEmailClientes != ''){

            //Remetente e Destinatários
            $emailSender = "ariel@serrajr.eng.br";
            $emailSenderNome = 'TMF Usinagem';

            $listaEmailClientes = substr($listaEmailClientes, 0, -1);

            $listaEmailClientes = explode(',', $listaEmailClientes);
            
            //Assunto
            if(isset($_POST['tagEmailRadio'])){
                $tag = $_POST['tagEmailRadio'];
            }

            $tagTexto = strtoupper($_POST['tagEmail']);
            $assunto = $_POST['assunto'];
            $msg = $_POST['msg'];
            
            //Mensagem principal
            $cabecalho = '<body style="background-color:lightgray;padding-top:6px;padding-bottom:5px;"><div style="background-color: #365C9A; width:90%; margin-top:20px; margin-left:5%; border-radius:7px;z-index:2;padding:5px;box-sizing:border-box;"><img src="https://usinagemtmf.com.br/teste/teste/img/logoTMFBranco.png" style="height:70px;height:70px;display: block;margin-left: auto;margin-right: auto;"></div>';
            $rodape = '<div style="width:80%; margin-left:10%; margin-top:15px;padding: 15px; text-align:center;">
                    <a href="https://pt-br.facebook.com/TMF-Ind%C3%BAstria-Mec%C3%A2nica-225711750889313/" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/fb.png" style="height:20px;">
                    </a>
                    <a href="https://www.usinagemtmf.com.br" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/site.png" style="height:20px;">
                    </a>
                    <a href="https://br.linkedin.com/company/industria-mecanica-t-m-f" target="_blank" style="text-decoration:none">
                        <img src="https://usinagemtmf.com.br/teste/teste/img/linkedin.png" style="height:20px;">
                    </a>
                </div></body>';
            $corpo ='<div style="background-color: white; width:90%; margin-top:-5px; margin-left:5%; border-radius:3px; padding: 15px;z-index:1;box-sizing:border-box">
                    <h3> Olá, cliente!</h3>
                    <p style="text-align:justify;">
                        &emsp;'.$msg.'
                        <br><br>
                    </p>
                    <span style="text-align:center;width:100%;">
                        Abraços,<br>
                        Equipe TMF
                    </span>
                </div>';
            $msgHTML = $cabecalho.$corpo.$rodape;

            //Cria objeto mail
            $mail = new PHPMailer(true);

            try {

                //Configurações do Servidor SMTP (somente para teste em localhost xampp)

                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                //$mail->isSMTP();                                            // Send using SMTP
                //$mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
                //$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                //$mail->Username   = 'seuemail@serrajr.eng.br';              // SMTP username
                //$mail->Password   = 'suasenha';                             // SMTP password
                //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                //$mail->Port       = 587;                                    // TCP port to connect to

                //Codificação da mensagem
                $mail->Encoding = 'base64';
                $mail->CharSet = "UTF-8";

                //Recepientes
                $mail->setFrom($emailSender, $emailSenderNome);

                foreach($listaEmailClientes as $emailCliente){
                    $mail->addBCC($emailCliente);
                }

                //Tag da mensagem
                if(isset($tag)){
                    $mail->Subject = "[$tag] $assunto";
                } else {
                    $mail->Subject = "[$tagTexto] $assunto";
                }

                //Conteúdo
                $mail->isHTML(true);
                $mail->Body = $msgHTML;

                //Envia email
                $mail->send();

                //Monta a query a ser executada
                $sql = "INSERT INTO campanha(tag,assunto,mensagem,data) VALUES(?,?,?,CURRENT_TIMESTAMP())";
                $stmt = $conexao->prepare($sql);

                if(isset($tag)){
                    $stmt->bind_param('sss',$tag,$assunto,$msg);
                } else {
                    $stmt->bind_param('sss',$tagTexto,$assunto,$msg);
                }

                //Executa a query no BD
                if($stmt->execute()){
                    echo 'Campanha enviada e salva!';
                } else {
                    echo 'Campanha enviada! Porém, houve um erro ao salvar a campanha.';
                }

            } catch(Exception $e) {
                echo "A campanha não pode ser enviada. Erro: {$mail->ErrorInfo}";
            }
        } else {
            echo 'Erro! Lista de clientes ativos vazia.';
        }
    } else {
        echo 'Erro ao buscar clientes ativos na lista!';
    }
?>