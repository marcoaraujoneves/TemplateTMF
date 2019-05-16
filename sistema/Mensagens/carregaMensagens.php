<?php
    require_once('../db.class.php');
    $counter = 1;

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "SELECT codMsg,nome,email,mensagem,respondido FROM mensagem";

    $mensagens = mysqli_query($link, $sql);

    if($mensagens){
        while($mensagem = mysqli_fetch_array($mensagens,MYSQLI_ASSOC)){
            echo(" <tr data-id='".$mensagem['codMsg']."' class='linhaMensagem' data-toggle='modal' data-target='#modalMsg'>
            <td> $counter </td>
            <td>".$mensagem['nome']."</td>
            <td>".$mensagem['email']."</td>
            <td style='text-align:justify;'>".substr($mensagem['mensagem'],0,100)."...</td>
            <td style='text-align:center;'>".($mensagem['respondido'] ? 'Sim' : 'Não')."</td></tr>");
            $counter++;
        }
    }else{
        echo "Erro ao carregar os dados!";
    }
?>