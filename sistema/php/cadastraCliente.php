<?php
include ('../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$nomeCliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : '';
$urlCliente = isset($_POST['urlCliente']) ? $_POST['urlCliente'] : '';
$nome = $_FILES[ 'imgCliente' ][ 'name' ];
$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
echo $extensao;
$sql = "  
INSERT INTO clienteempresa(nome,linkCliente,extensao)
VALUES ('$nomeCliente','$urlCliente','$extensao') ";
$results = mysqli_query($conn, $sql);
$batata = $conn->insert_id;



/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'imgCliente' ][ 'name' ] ) && $_FILES[ 'imgCliente' ][ 'error' ] == 0 ) {
    echo 'Você enviou o imgParceiro: <strong>' . $_FILES[ 'imgCliente' ][ 'name' ] . '</strong><br />';
    echo 'Este imgCliente é do tipo: <strong > ' . $_FILES[ 'imgCliente' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'imgCliente' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'imgCliente' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'imgCliente' ][ 'tmp_name' ];
    $nome = $_FILES[ 'imgCliente' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = $batata. '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../Img/Clientes/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';