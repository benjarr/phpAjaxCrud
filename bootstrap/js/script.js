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
    $.post("ajax/addRecord.php",
        {
            first_name: first_name,
            last_name :  last_name,
            email     :      email
        },
        function (data, status) {
            // close the modal
            $("#modal_add").modal("hide") ;
            // read records again
            readRecords() ;
            // clear fields from modal
            $("#first_name").val("") ;
            $("#last_name").val("") ;
            $("#email").val("") ;
        }
    ) ;
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

// DELETE User function
function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?") ;
    if (conf == true) {
        $.post("ajax/deleteUser.php", {id: id}, function (data, status) {
            // reload Users by using readRecords() ;
            readRecords() ;
        }) ;
    }
}

function GetUserDetails(id) {
    // Add User Id to the hidden field
    $("#hidden_user_id").val(id) ;
    $.post("ajax/readUserDetails.php", {id: id}, function (data, status) {
        // PARSE json data
        var user = JSON.parse(data) ;
        // Assign existing values to the modal
        $("#update_first_name").val(user.first_name) ;
        $("#update_last_name").val(user.last_name) ;
        $("#update_email").val(user.email) ;
    }) ;
    // Open Update modal
    $("#modal_update").modal({backdrop: "static"}) ;
}

// Function UpdateUserDetails see in modal button
function UpdateUserDetails() {
    // get values
    var first_name = $("#update_first_name").val() ;
    var last_name  = $("#update_last_name").val() ;
    var email      = $("#update_email").val() ;
    var id         = $("#hidden_user_id").val() ;

    // Update details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php",
        {
            id        : id,
            first_name: first_name,
            last_name : last_name,
            email     : email
        },
        function (data, status) {
            // hide modal with jQuery method
            $("#modal_update").modal("hide") ;
            // reload Users by using readRecords function
            readRecords() ;
        }
    ) ;
}