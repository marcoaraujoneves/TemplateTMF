<?php

    include('../db.class.php');

    $objDB = new db();
    $link = $objDB->conecta_mysql();
    
    //Query para retornar clientes ativos
    $sql2="SELECT codCliente FROM clienteempresa WHERE estatus=1";
    $clientes2 = mysqli_query($link,$sql2);
    $rowcount2 = mysqli_num_rows($clientes2);
    $lista2 = array();
    if($rowcount2>0){
        while($resultado2 = mysqli_fetch_array($clientes2,MYSQLI_ASSOC)){
            $codClienteAtivo=$resultado2['codCliente'];
            array_push($lista2,$codClienteAtivo);
        }

        $sql="SELECT * FROM clienteempresa";
        $clientes = mysqli_query($link,$sql);
        $rowcount = mysqli_num_rows($clientes);
        
        if($rowcount>0){
            $html = "";
            $listaoption = array();
            $counter = 1;
            while($resultado = mysqli_fetch_array($clientes,MYSQLI_ASSOC)){    
                $listaoption[$counter] = $resultado;
                $counter++;
            }
            $counter=1;
            foreach($lista2 as $codCliente){
                $html .= "<div class='row'> <div class='col-md-10'><label for='cliente".$counter."'> Cliente ".$counter.": </label><select class='inpForm' name='cliente".$counter."' id='cliente".$counter."'> <option value=0> - </option>";
                foreach($listaoption as $option){
                    $html.= "<option value=".$option['codCliente']." ".($option['codCliente']==$codCliente?'selected':'')."> ".$option['nome']." </option>";
                }
                $html .= "</select><br><hr></div><div class='col-md-2 my-auto mx-auto'>".($counter==$rowcount2?"<button type='button' class='btn btn-success btnAtivo' id='addCliente' data-count=".$rowcount2."> + </button>":"")."</div></div>";
                $counter = $counter + 1;
            }
            echo $html;
        }else{
            echo 0;
        }
    }else{
        echo '<div class="row"><div class="col-md-10"><label for="cliente1"> Cliente 1: </label><select class="inpForm" name="cliente1" id="cliente1"><option value="0"> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addCliente" data-count="1" data-vazio="1"> + </button></div></div>';
    }
 ?>