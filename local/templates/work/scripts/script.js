$(document).ready(function(){

    var $menu = $("#menu");
    var $header = $("#header");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 150 && $menu.hasClass("default") ){
            $menu.removeClass("default").addClass("scroll");
            $header.removeClass("default").addClass("scroll");
        } else if($(this).scrollTop() <= 150 && $menu.hasClass("scroll")) {
            $menu.removeClass("scroll").addClass("default");
            $header.removeClass("scroll").addClass("default");
        }
    });

var $body = $('body');
$body.on('click', 'button', function () {
    var id = $('.ajax-sale').attr('id');
    add2basket(id);
    refreshbasket();
});
    $body.on('click', 'a.plus', function () {
        refreshbasket();
    });
    $body.on('click', 'a.minus', function () {
        refreshbasket();
    });
function add2basket(ID) {
    $.ajax({
        type: 'POST',
        url: "/local/ajax/basket.php",
        data: {id: ID},
        success: function(data) {
            console.log(data);}

    });}
function refreshbasket() {
        $.ajax({
            url: "/local/ajax/minibasket.php",
            success: function(answer) {
                $('.mbasket').replaceWith(answer);}

        });}
});
