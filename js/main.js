$(document).ready(function(){
    
});

function mudar(op) {
    if (op == 1) {
    document.getElementById('imagem_port').src = '../img/tornearia.png';
    document.getElementById('radio2').checked = false;
    document.getElementById('radio3').checked = false;
    document.getElementById('texto_port').innerHTML= "Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vel lacus ut tellus fringilla imperdiet.";
    }else if (op == 2) {
    document.getElementById('imagem_port').src = '../img/usinagem.png';
    document.getElementById('radio1').checked = false;
    document.getElementById('radio3').checked = false;
    document.getElementById('texto_port').innerHTML= "Pellentesque nec sem non arcu fringilla mattis sed nec turpis.";
    }else {
    document.getElementById('imagem_port').src = '../img/manutencao.png';
    document.getElementById('radio1').checked = false;
    document.getElementById('radio2').checked = false;
    document.getElementById('texto_port').innerHTML= "Etiam ut consectetur lacus. Mauris sagittis orci ut odio pharetra, eget sagittis odio pharetra.";
    }
}