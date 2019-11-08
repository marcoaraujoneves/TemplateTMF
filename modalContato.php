<div class="col-lg-12 pt-3 pt-lg-2" id="mande_mensagem">
    <br>
    <div id="sucesso" class="alert alert-success" role="alert" style="display:none;">
        Mensagem enviada com sucesso!
    </div>
    <div id="fracasso" class="alert alert-danger" role="alert" style="display:none;">
        Houve um erro ao enviar sua mensagem, por favor, tente novamente mais tarde ou entre em contato pelos nossos canais alternativos!
    </div>
    <div id="incompleto" class="alert alert-warning" role="alert" style="display:none;">
        Por favor, verifique se há informações faltando ou incorretas e tente novamente!
    </div>
    <form id="formularioContato" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <label class="txtForm" for="nome"> &ensp;Nome </label> <br>
                    <input type="text" class="inpForm" id="nome" name="nome" autocomplete="off">
                </div>
                <div class="col-md-6 pt-3 pt-md-0">
                    <label class="txtForm" for="telefone"> &ensp;Telefone </label> <br>
                    <input type="text" class="inpForm" id="telefone" name="telefone" autocomplete="off" maxlength="15">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label class="txtForm" for="email"> &ensp;E-mail </label> <br>
                    <input type="email" class="inpForm" id="email" name="email" autocomplete="off">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label class="txtForm" for="mensagem"> &ensp;Mensagem </label> <br>
                    <textarea class="inpForm" id="mensagem" name="mensagem" rows="6"></textarea>
                </div>
            </div>
            <br>
            <input type="hidden" name="pagina" id="pagina" value="Principal">

            <!-- Limite de 32MB para envio de arquivos -->
            <input type="hidden" name="MAX_FILE_SIZE" value="33554432">
            <div class="float-left  p-2">
                <input type="file"  class="form-control jfilestyle" id="file" name="file[]" accept="image/*,.pdf" multiple="multiple"> 
            </div>
            <div class="float-right p-2">
                <button type="button" class="btn btn-primary inpForm" id="enviar" name="enviar"> Enviar </button>
            </div>
        </div>
    </form>
</div>