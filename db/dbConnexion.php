<?php

$host = "localhost" ;
$user = "root" ;
$password = "root" ;
$database = "test" ;

$con = new mysqli($host, $user, $password, $database) ;

if ($con->connect_error) {
    die("Error: " . $con->connect_error) ;
}