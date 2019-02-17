<?php
// Deletar.php pega o codigo do produto e deleta ele da lista de produtos no banco de dados
include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$nome = $_POST['nomeProduto'];
$descricao = $_POST['descricaoProduto'];

if(isset($_POST['nomeProduto'])){
	$sql = "  
    INSERT INTO produto(nome,descricao)
    VALUES ('$nome','$descricao') ";
    $results = mysqli_query($conn, $sql);
    $batata = $conn->insert_id;
    echo $sql;



    foreach ($_FILES['filesToUpload']['tmp_name'] as $key => $val ) {
        $filename = $_FILES['filesToUpload']['name'][$key];
        $filesize = $_FILES['filesToUpload']['size'][$key];
        $filetempname = $_FILES['filesToUpload']['tmp_name'][$key];


        $fileext = strtolower($filename);


        // Concatena a pasta com o nome
        $destino = '../../Img/Produtos/' . $fileext;
        echo $destino;
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $filetempname, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
            $sql = "  
            INSERT INTO imagemproduto(nome,codProduto)
            VALUES ('$filename','$batata') ";
            $results = mysqli_query($conn, $sql);
            echo $sql;

        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
}




?>