var listaParceiros;
$(document).ready(function(){

    $(document).on('click','#btnSobre', function(){
        $.ajax({
            url:'Sobre/carregaDados.php',
            dataType:"json",
            success:function(data){
                $('#indicador1qt').val(data.indicador1qt);
                $('#indicador2qt').val(data.indicador2qt);
                $('#indicador3qt').val(data.indicador3qt);
                $('#indicador4qt').val(data.indicador4qt);

                $('#indicador1').val(data.indicador1);  
                $('#indicador2').val(data.indicador2);  
                $('#indicador3').val(data.indicador3);  
                $('#indicador4').val(data.indicador4);
                $('#textoSobre').val(data.textoSobre);
            },
            error: function(){
                $('#bodySobre').html('Houve um erro na requisição, tente novamente mais tarde!');
            }
        });
    });
    $.ajax({
        url:'Servicos/carregaDados.php',
        success:function(data){
            $('#servico1').html(data);
            $('#servico2').html(data);
            $('#servico3').html(data);
            $('#servico4').html(data);
        },
        error: function(){
            $('#bodyServicos').html('Houve um erro na requisição, tente novamente mais tarde!');
        }
    });
    $(document).on('click','#btnServicos', function(){        
        $.ajax({
            url:'Sobre/carregaDados.php',
            dataType:"json",
            success:function(data){
                $('#textoServicos').val(data.textoServicos);
                $('#servico1').val(data.servico1);
                $('#servico2').val(data.servico2);
                $('#servico3').val(data.servico3);
                $('#servico4').val(data.servico4);
            },
            error: function(){

            }
        });
    });

    $.ajax({
        url:'Produtos/carregaDados.php',
        success:function(data){
            $('#produto1').html(data);
            $('#produto2').html(data);
            $('#produto3').html(data);
        },
        error: function(){
            $('#bodyProdutos').html('Houve um erro na requisição, tente novamente mais tarde!');
        }
    });

    $(document).on('click','#btnProdutos', function(){        
        $.ajax({
            url:'Sobre/carregaDados.php',
            dataType:"json",
            success:function(data){
                $('#produto1').val(data.produto1);
                $('#produto2').val(data.produto2);
                $('#produto3').val(data.produto3);
            },
            error: function(){
                
            }
        });
    });

    $(document).on('click','#salvarSobre', function(){
        $.ajax({
            url:'Sobre/salvarDadosSobre.php',
            method:'POST',
            data:$('#formSobre').serialize(),
            success:function(data){
                $('#bodySobre').html('Houve um sucesso na requisição!');
            },
            error: function(){
                $('#bodySobre').html('Houve um erro na requisição, tente novamente mais tarde!');
            }
        });
    });

    $(document).on('click','#salvarServicos', function(){
        $.ajax({
            url:'Sobre/salvarDadosServicos.php',
            method:'POST',
            data:$('#formServicos').serialize(),
            success:function(data){
                
            },
            error: function(){
                $('#bodyServicos').html('Houve um erro na requisição, tente novamente mais tarde!');
            }
        });
    });

    $(document).on('click','#salvarProdutos', function(){
        $.ajax({
            url:'Sobre/salvarDadosProdutos.php',
            method:'POST',
            data:$('#formProdutos').serialize(),
            success:function(data){
                
            },
            error: function(){
                $('#bodyProduto').html('Houve um erro na requisição, tente novamente mais tarde!');
            }
        });
    });



    $(document).on('click','.btnAtivo',function(){
        $(this).addClass('d-none');
        $(this).removeClass('btnAtivo');
    });

    $(document).on('click','#addPortifolio',function(){
        $('#listaPortifolio').append('<div class="row"><div class="col-md-10"><label for="portifolio_1"> Portifólio 2: </label><select class="inpForm" name="portifolio_1" id="portifolio_1"><option> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addPortifolio"> + </button></div></div>');
    });
    
    
    $.ajax({
        url:'Parceiros/carregaDados.php',
        success:function(data){
            listaParceiros = data;
        },
        error: function(){
            $('#bodyParceiros').html('Houve um erro na requisição, tente novamente mais tarde!');
        }
    });
    var contadorParceiros = 2;
    $(document).on('click','#btnParceiros', function(){
        $('#parceiro1').html(listaParceiros);
        
    });
    // $(document).on('click','#addParceiro',function(){
        
       /* $('#listaParceiros').append('<div class="row"><div class="col-md-10"><label for="parceiro_'+contadorParceiros+'"> Parceiro '+contadorParceiros+': </label><select class="inpForm" name="parceiro_'+contadorParceiros+'" id="parceiro_'+contadorParceiros+'"><?php 
                                
                                $query_select = "SELECT * FROM parceiros ;";
                                $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
                                $rows = array();
                                while($row = mysqli_fetch_array($result_select))
                                    $rows[] = $row;
                                foreach($rows as $row){ 
                                    $codEstatus = $row['codParceiro'];
                                    $nome = $row['nome'];
                                    echo '<option value="'.$codEstatus.'"> '.$nome.'<option>';
                                }
                                ?><option> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addParceiro"> + </button></div></div>');
        contadorParceiros = contadorParceiros +1;
    }); */

    $(document).on('click','#addCliente',function(){
        $('#listaClientes').append('<div class="row"><div class="col-md-10"><label for="parceiro_2"> Cliente 2: </label><select class="inpForm" name="cliente_2" id="cliente_2"><option> - </option></select><br><hr></div><div class="col-md-2 my-auto mx-auto"><button type="button" class="btn btn-success btnAtivo" id="addCliente"> + </button></div></div>');
    });
});