<?php
    require_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "SELECT * FROM mensagem WHERE codMsg=".$_POST['codigo'];

    $mensagem = mysqli_query($link, $sql);
    
    if($mensagem){
        $mensagem = mysqli_fetch_array($mensagem,MYSQLI_ASSOC);
        
        echo("  <input type='hidden' id='codigo' data-idmsg=".$mensagem['codMsg'].">
                <span> Nome: </span>
                <label>".$mensagem['nome']."</label>
                <br><hr>
                <span> Telefone: </span>
                <label>".$mensagem['telefone']."</label>
                <br><hr>
                <span> E-mail: </span>
                <label>".$mensagem['email']."</label>
                <br><hr>
                <span> Status: </span>
                <label data-status=".$mensagem['respondido']." style='font-weight:700;text-decoration:underline;' id='mudaStatus'>".($mensagem['respondido'] ? 'Respondido' : 'Não Respondido')."</label>
                <br><hr>
                <span> Mensagem: </span>
                <label style='text-align:justify;'>".$mensagem['mensagem']."</label>");
    }else{
        echo '<td colspan="5" style="text-align:center"> Nenhuma mensagem cadastrada no sistema! </td>';
    }
?>