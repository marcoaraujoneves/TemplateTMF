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

