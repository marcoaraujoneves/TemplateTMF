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
            echo("<tr>
                    <th>".$counter."</th>
                    <td>".$cliente['nome']."</td>
                    <td>".$cliente['email']."</td>
                    <td>".($cliente['status'] ? 'Ativo': 'Inativo')."</td>
                    <td>
                        <center>
                            <button class='botaoEmail btnDeleta' data-id='".$cliente['codCliente']."' id='deletarEmail' data-toggle='modal' data-target='#modalDeleteCliente' > d </button>
                            <button class='botaoEmail btnEdita' data-id='".$cliente['codCliente']."' id='editarEmail' data-toggle='modal' data-target='#modalEditaCliente' > e </button>
                            <button class='botaoEmail btnStatus' data-id='".$cliente['codCliente']."' data-status='".$cliente['status']."' id='statusEmail'> s </button>
                        </center>
                    </td>
                </tr>");
        }

    } else {
        echo('Erro ao realizar consulta no banco de dados');
    }
?>