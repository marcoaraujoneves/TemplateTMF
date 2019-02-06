$(document).ready(function(){

    var $doc = $('html, body');
    
    $('.linkMenu ').click(function() {
        $('.navbar-collapse').collapse("hide");
        
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 140
        }, 500);
        return false;
    });
    
    var alturas = {};
    var i=1;

    $('.secaoSite').each(function () {
        alturas[i] = this.id; // ex: alturas['section_2'] = 600
        i++;
    });

    var numSecoes=parseInt(i) + 1;
    i=parseInt(i);

    var seccao;
    var alturaSecaoI;
    var windowTop;
    
    $(window).on('scroll', function() {
        for(i=1;i < numSecoes; i++){
            alturaSecaoI = $('#'+alturas[i]).offset().top;
            windowTop = $(window).scrollTop() + 200;
            if(windowTop <= 400 ){
                $('.linkMenu').removeClass("link_ativo");
                $('#link_secaoSobre').addClass("link_ativo");
            }
            if(windowTop >= alturaSecaoI ){
                $('.linkMenu').removeClass("link_ativo");
                seccao = alturas[i].replace("secao","link_secao");
                $('#'+seccao).addClass("link_ativo");
            }
        }
    });
});

function mudar(op) {
    if (op == 1) {
    document.getElementById('imagem_port').src = '../img/tornearia.png';
    document.getElementById('texto_port').innerHTML= "Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam vel lacus ut tellus fringilla imperdiet.";
    }else if (op == 2) {
    document.getElementById('imagem_port').src = '../img/usinagem.png';
    document.getElementById('texto_port').innerHTML= "Pellentesque nec sem non arcu fringilla mattis sed nec turpis.";
    }else {
    document.getElementById('imagem_port').src = '../img/manutencao.png';
    document.getElementById('texto_port').innerHTML= "Etiam ut consectetur lacus. Mauris sagittis orci ut odio pharetra, eget sagittis odio pharetra.";
    }
}