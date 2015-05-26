$(document).on('click','.ajax-use',function(){
    $.ajax({
        type: "POST",
        url: "index.php?module=real_reality&action=ajaxtest",
        data: { name: "John", location: "Boston" }
    }).done(function( msg ) {
        var t = $.parseJSON(msg);
        $('.mycontent').html(t.name);
            console.log(t);
    });
});