<?php 
    include_once('sistema/db.class.php');
    $objDB = new db();
    $conexao = $objDB->conecta_mysql();

    //Dados do formulário
    $emailSender = 'usinagemtmf@gmail.com'; //"atendimento@serrajr.eng.br";
    $emailSenderNome = 'TMF Usinagem';
    $emailDestinatario = 'usinagemtmf@gmail.com';//"comercial@serrajr.eng.br";
    $emailAssunto = 'Contato TMF Usinagem';
    $nomeRemetente = $_POST['nome'];
    $emailRemetente = $_POST['email'];
    $telRemetente = $_POST['telefone'];
    $msgRemetente = $_POST['mensagem'];
    $msgHTML = '<html><body style="font-family:"Verdana",sans-serif;"> <h2 style="color:#EE3B24;"> Mensagem recebida através do Site </h2>
    <table rules="all" style="border-color: #EE3B24;" cellpadding="10">
    <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong>Nome:</strong> </td><td> '.$nomeRemetente.' </td></tr>
    <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> E-mail: </strong> </td><td>'.$emailRemetente.' </td></tr>
    <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Telefone: </strong> </td><td>'.$telRemetente.'  </td></tr>
    <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Mensagem: </strong> </td><td><i> '.$msgRemetente.' </i></td></tr>
    </table>
    </body></html>';

    //Incialização do PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //Cria objeto mail
    $mail = new PHPMailer(true);

    //Controle de exceções (try/catch)
    try{

        //Configurações do Servidor SMTP (somente para teste em localhost xampp)
		
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        //$mail->isSMTP();                                            // Send using SMTP
        //$mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        //$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        //$mail->Username   = 'seuemail@serrajr.eng.br';              // SMTP username
        //$mail->Password   = 'suasenha';                             // SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        //$mail->Port       = 587;                                    // TCP port to connect to

        //Recipientes
        $mail->setFrom($emailSender, $emailSenderNome);
        $mail->addAddress($emailDestinatario);
        $mail->Subject = $emailAssunto;

        //Anexo

        //if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        //    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        //}
        
        //Anexo para múltiplos arquivos
        if (array_key_exists('file', $_FILES)) {
            for ($ct = 0; $ct < count($_FILES['file']['tmp_name']); $ct++) {
                $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['file']['name'][$ct]));
                $filename = $_FILES['file']['name'][$ct];
                if (move_uploaded_file($_FILES['file']['tmp_name'][$ct], $uploadfile)) {
                    $mail->addAttachment($uploadfile, $filename);
                } else {
                    echo 'Failed to move file to ' . $uploadfile;
                }
            }
        }

        //Conteúdo
        $mail->isHTML(true);
        $mail->Body = $msgHTML;

        //Envia email
        $mail->send();

        //Monta a query a ser executada
        $sql = "INSERT INTO mensagem(nome,telefone,email,mensagem,data,respondido) VALUES(?,?,?,?,CURRENT_TIMESTAMP(),0)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('ssss',$nomeRemetente,$telRemetente,$emailRemetente,$msgRemetente);

        //Executa a query no BD
        if($stmt->execute()){
            echo 'Cadastrado no BD com sucesso!';
        } else {
            echo 'Erro ao cadastrar no BD!';
        }

        echo 'A mensagem foi enviada com sucesso!';

    } catch (Exception $e){
        echo "A mensagem não pode ser enviada. Erro: {$mail->ErrorInfo}";
    }
    
?>