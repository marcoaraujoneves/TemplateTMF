<?php

    include_once('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    $counter = 0;

    $sql = "SELECT * from cliente";
    $resultado = mysqli_query($link,$sql);

    if($resultado){
        while($cliente = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $counter++;
            echo("<tr data-id='".$cliente['codCliente']."'>
                    <th>".$counter."</th>
                    <td>".$cliente['nome']."</td>
                    <td>".$cliente['email']."</td>
                    <td>".($cliente['status'] ? 'Ativo': 'Inativo')."</td>
                    <td>
                        <center>
                            <button class='botaoEmail' id='deletarEmail'> d </button>
                            <button class='botaoEmail' id='editarEmail'> e </button>
                            <button class='botaoEmail' id='statusEmail'> s </button>
                        </center>
                    </td>
                </tr>");
        }

    } else {
        echo('Erro ao realizar consulta no banco de dados');
    }
?>