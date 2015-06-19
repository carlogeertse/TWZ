$(document).ready(function(){
    $('select').on('change', function() {
        var value = $(this).val();
        var data = {Name: value};

        console.log(value);

        $.ajax({
            url: "survAanTentamen.php",
            type: "POST",
            data: data
        });
    });
});