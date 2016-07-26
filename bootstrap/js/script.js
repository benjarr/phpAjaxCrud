// Loading bootstrap modal to add new record
$(function () {
    $('#button_add').click(function () {
        $("#modal_add").modal({backdrop: "static"}) ;
    }) ;
}) ;

// ADD new record
function addRecord() {
    // get values
    var first_name = $("#first_name").val() ;
    var last_name  = $("#last_name").val() ;
    var email      = $("#email").val() ;
    // Add record with ajax post function
    $.post("ajax/addRecord.php", {
        first_name: first_name,
        last_name:  last_name,
        email:      email
    }, function (data, status) {
        // close the modal
        $("#modal_add").modal("hide") ;
        // read records again
        readRecords() ;
        // clear fields from modal
        $("#first_name").val("") ;
        $("#last_name").val("") ;
        $("#email").val("") ;
    }) ;
}

// READ records
function readRecords() {
    // Read records with ajax get function
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data) ;
    }) ;
}

// read records on page load
$(function () {
    readRecords() ; // calling function
}) ;