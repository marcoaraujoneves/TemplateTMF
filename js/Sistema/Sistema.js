$(document).ready(function(){
    //Atribuindo a classe Ativo à opção do menu correspondente ao módulo atual
    var menuAtivo = $('#menuAtivo').html();
    $('#'+menuAtivo).addClass('itemMenuSistemaAtivo');
    //Requisição dos módulos utilizando JQuery e PHP, passando o número ID do módulo através de uma variável disponível por GET
    $('.itemMenuSistema').click(function(){
        if(this.id != 'sair'){
            var modID = this.id;
            window.location.href = "gerenciador.php?mod="+modID;
        }
    });
});

var dissmissAlert = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
var mensagem = '';
var alertSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">';
var alertDanger = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
var alertWarning = '<div class="alert alert-warning alert-dismissible fade show" role="alert">';

function ativaAlerta(texto,classe){
    mensagem = '<strong>'+ texto +'</strong>';
    switch(classe){
        case 1:
            $('#containerAlert').html(alertSuccess+mensagem+dissmissAlert+'</div>');
            break;
        case 2:
            $('#containerAlert').html(alertDanger+mensagem+dissmissAlert+'</div>');
            break;
        case 3:
            $('#containerAlert').html(alertWarning+mensagem+dissmissAlert+'</div>');
            break;
        default:
            $('#containerAlert').html(alertWarning+mensagem+dissmissAlert+'</div>');
            break;
    }
}

