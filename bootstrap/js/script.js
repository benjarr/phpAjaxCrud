// Loading bootstrap modal to add new record
$(function () {
    $('#button_add').click(function () {
        $("#modal_add").modal({backdrop: "static"}) ;
    }) ;
}) ;