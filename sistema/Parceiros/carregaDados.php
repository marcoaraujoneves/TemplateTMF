<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    //Query para retornar clientes ativos
    $sql2="SELECT codParceiro FROM parceiros WHERE estatus=1";
    $parceiros2 = mysqli_query($link,$sql2);
    $rowcount2 = mysqli_num_rows($parceiros2);
    $lista2 = array();
    if($rowcount2>0){
        while($resultado2 = mysqli_fetch_array($parceiros2,MYSQLI_ASSOC)){
            $codParceiroAtivo=$resultado2['codParceiro'];
            array_push($lista2,$codParceiroAtivo);
        }

        $sql="SELECT * FROM parceiros";
        $parceiros = mysqli_query($link,$sql);
        $rowcount = mysqli_num_rows($parceiros);
        
        if($rowcount>0){
            $html = "";
            $listaoption = array();
            $counter = 1;
            while($resultado = mysqli_fetch_array($parceiros,MYSQLI_ASSOC)){    
                $listaoption[$counter] = $resultado;
                $counter++;
            }
            $counter=1;
            foreach($lista2 as $codParceiro){
                $html .= "<div class='row'> <div class='col-md-10'><label for='parceiro".$counter."'> Parceiro ".$counter.": </label><select class='inpForm' name='parceiro".$counter."' id='parceiro".$counter."'> <option value=0> - </option>";
                foreach($listaoption as $option){
                    $html.= "<option value=".$option['codParceiro']." ".($option['codParceiro']==$codParceiro?'selected':'')."> ".$option['nome']." </option>";
                }
                $html .= "</select><br><hr></div><div class='col-md-2 my-auto mx-auto'>".($counter==$rowcount2?"<button type='button' class='btn btn-success btnAtivo' id='addParceiro'> + </button>":"")."</div></div>";
                $counter = $counter + 1;
            }
            echo $html;
        }else{
            echo 0;
        }
    }else{
        echo 0;
    }
 ?>