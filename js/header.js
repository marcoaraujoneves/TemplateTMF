$(document).ready(function(){
    var windowTop;
    $(window).on('scroll', function() {
        windowTop = $(window).scrollTop() + 100 ;
        if(windowTop >= 250 || innerWidth < 838){
            $('#logo_Menu').addClass("img_pequena");
        } else if(windowTop < 250 && innerWidth > 838){
            $('#logo_Menu').removeClass("img_pequena");
        }
    });
});