<?php

include("../db/dbConnexion.php") ;

if (isset($_POST['id']) && isset($_POST['id']) != "") {
    // get User Id
    $user_id = $_POST['id'] ;

    // get User Details
    $query = "SELECT * FROM users WHERE id = '$user_id'" ;
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con)) ;
    }
    $response = array() ;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row ;
        }
    }
    else {
        $response['status'] = 200 ;
        $response['message'] = "Data not found!" ;
    }
    // display JSON data
    echo json_encode($response) ;
}
else {
    $response['status'] = 200 ;
    $response['message'] = "Invalid Request!" ;
}