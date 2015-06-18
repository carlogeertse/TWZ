$( document ).ready(function() {
    $(".submit").hide();
    $( ".picker" ).change(function() {
        $(".submit").show();
    });
});