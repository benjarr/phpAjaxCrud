<?php

include("../db/dbConnexion.php") ;

if (isset($_POST)) {
    // get values
    $id         = $_POST['id'] ;
    $first_name = $_POST['first_name'] ;
    $last_name  = $_POST['last_name'] ;
    $email      = $_POST['email'] ;

    // Update user
    $query = "
        UPDATE users SET 
        first_name = '$first_name',
        last_name  = '$last_name',
        email      = '$email'
        WHERE id   = '$id'
    " ;
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con)) ;
    }
}