$(document).ready(function(){
    $('input[type="checkbox"]').on('change', function() {
        var checked = $(this).prop('checked');
        var value = $(this).val();
        var attrName = $(this).prop('name');
        var data = {isChecked: checked, id: value, date: attrName};

        $.ajax({
            url: "updateBeschikbaarheid.php",
            type: "POST",
            data: data,
            success: function(result){
                if(result == 'success') {
                    console.log("hoi");
                } else {
                    console.log("doei");
                }
            }
        });

    });
});