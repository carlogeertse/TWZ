$(function() {
    $('input[type="checkbox"]').on('change', function() {
        var checked = $(this).prop('checked');
        var value = $(this).val();
        var attrName = $(this).prop('name');
        var data = {isChecked: checked, uid: value, rank: attrName};

        $.ajax({	url: "updateBeschikbaarheid.php",
            type: "POST",
            data: data,
            success: function(result){
                if(result == 'success') {
                    $("<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>User with UID: " + value + " succesfully updated.</div>").insertAfter('.lead');
                } else {
                    $("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>User with UID: " + value + " could not be updated.</div>").insertAfter('.lead');
                }

            }
        });

    });
});