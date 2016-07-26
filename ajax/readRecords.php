<?php

// include DB connection file
include ("../db/dbConnexion.php");

// Design initial table header
$data = '
    <table class="table table-bordered table-striped">
        <tr>
            <th>N°</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email address</th>
            <th>Actions</th>
        </tr>' ;
$query = "SELECT * FROM users" ;

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con)) ;
}

if (mysqli_num_rows($result) > 0) {
    $number = 1 ;
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= '
        <tr>
            <td>' . $number . '</td>
            <td>' . $row['first_name'] . '</td>
            <td>' . $row['last_name'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>
                <button onclick="GetUserDetails(' . $row['id'] . ')" class="btn-sm btn-warning">Update</button>
                <button onclick="DeleteUser(' . $row['id'] . ')" class="btn-sm btn-danger">Delete</button>
            </td>
        </tr>' ;
        $number++ ;
    }
}
else {
    // records not found
    $data .= '
        <tr>
            <td colspan="6">Records not found!</td>
        </tr>
    ' ;
}
$data .= '</table>' ;
echo $data ;