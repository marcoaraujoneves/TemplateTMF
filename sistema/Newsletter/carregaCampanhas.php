<?php

    include_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    $counter = 0;

    $sql = "SELECT * from campanha";
    $resultado = mysqli_query($link,$sql);

    if($resultado){
        while($campanha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $counter++;
            echo("<tr data-id='".$campanha['codCampanha']."' data-toggle='modal' data-target='#modalCampanha' class='linhaCampanha'>
                    <td> $counter </td>
                    <td> ".$campanha['tag']." </td>
                    <td> ".$campanha['assunto']." </td>
                    <td style='text-align:justify;'> ".substr($campanha['mensagem'],0,100)."... </td>
                    <td>
                        <center>
                            ".date('d/m/Y', strtotime($campanha['data']))."
                        </center>
                    </td></tr>");
        }

    } else {
        echo('Erro ao realizar consulta no banco de dados');
    }
?>