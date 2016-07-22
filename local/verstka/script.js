$(document).ready(function(){

    var $menu = $("#menu");
    var $header = $("#header");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 220 && $menu.hasClass("default") ){
            $menu.removeClass("default").addClass("scroll");
            $header.removeClass("default").addClass("scroll");
        } else if($(this).scrollTop() <= 220 && $menu.hasClass("scroll")) {
            $menu.removeClass("scroll").addClass("default");
            $header.removeClass("scroll").addClass("default");
        }
    });
});