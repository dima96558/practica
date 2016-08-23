
var $body = $('body');
$body.on('click', 'button', function () {
    var id = $('.ajax-sale').attr('id');
    add2basket(id);
});
function add2basket(ID) {
    $.ajax({
        type: 'POST',
        url: "/local/ajax/basket.php",
        data: {id: ID},
        success: function(data) {
            console.log(data);}
    });

}
