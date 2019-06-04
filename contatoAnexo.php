<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $name = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $message = $_POST['mensagem'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($telefone) && !empty($message)){
        
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            echo 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["_FILES"]["name"])){
                
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["_FILES"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["_FILES"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                       echo "Erro ao fazer upload da imagem.";
                    }
                }else{
                    $uploadStatus = 0;
                    echo 'Desculpa, apenas PDF, DOC, JPG, JPEG, & PNG são permitidos.';
                }
            }
            
            if($uploadStatus == 1){
                
                // Recipient
                $toEmail = 'presidente@serrajr.eng.br';

                // Sender
                $toEmail = 'presidente@serrajr.eng.br';
                $fromName = 'TMF';
                
                // Subject
                $emailSubject = 'Contato feito pelo site ao pedido de '.$name;
                
                // Message 
                $htmlContent = '<html><body style="font-family:"Verdana",sans-serif;"> <h2 style="color:#EE3B24;"> Mensagem recebida através do Site </h2>
     <table rules="all" style="border-color: #EE3B24;" cellpadding="10">
     <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong>Nome:</strong> </td><td> '.$name.' </td></tr>
     <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> E-mail: </strong> </td><td>'.$email.' </td></tr>
     <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Telefone: </strong> </td><td>'.$telefone.'  </td></tr>
     <tr style="border-bottom:1px solid #EE3B24;color:00172f;font-weight:700;"><td><strong> Mensagem: </strong> </td><td><i> '.$message.' </i></td></tr>
     </table>
     </body></html>';
                
                // Header for sender info
                $headers = "From: $fromName"." <>";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: anexo;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                    echo  'Mensagem enviada com sucesso!';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    echo  'Erro ao enviar a mensagem, por favor tente novamente.';
                }
            }
        }
    }else{
       echo 'Preencha todos os campos.';
    }
    echo 'Preencha todos os campos.';

?>