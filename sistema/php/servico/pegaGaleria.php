<?php 

include ('../../db.class.php');
$objDB = new db();
$conn = $objDB->conecta_mysql();
$codServico = isset($_POST['codServico']) ? $_POST['codServico'] : '';
$sql = "SELECT * FROM imagemservico where codServico ='$codServico';";
$result = mysqli_query($conn, $sql);  
      while($resultado = mysqli_fetch_assoc($result)){
 
        $vetor[] = array_map('utf8_encode', $resultado); 
    }
      
      // $vetor["data"] =  $vetor; // junta o vetor com o DATA para ser do tipo json 
    
       
    
  echo json_encode($vetor);


  
  ?>          