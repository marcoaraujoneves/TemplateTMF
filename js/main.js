$(document).ready(function(){
    
});

function mudar(op) {
    if (op == 1) {
    document.getElementById('img').src = '../img/tornearia.png'
    }else if (op == 2) {
    document.getElementById('img').src = '../img/usinagem.png'
    }else {
    document.getElementById('img').src = '../img/manutencao.png'
    }
}