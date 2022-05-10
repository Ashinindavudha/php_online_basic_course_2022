<?php 
include("db_connect.php");
include("function.php");
if (isset($_POST['submit'])) {

    $data = [
        'id' => $_GET['id'],
        'username' => $_POST['name'],
        'password' => $_POST['password'],
        'email' => $_POST['email']
    ];
    $table = update_data_user($conn, $data);
    if ($table) {
        header("Location: display_data.php");
    }else{

        echo "Failed to insert data";
    } 
}

// $data = [
    
//     'username' => $_POST['name'],
//     'password' => $_POST['password'],
//     'email' => $_POST['email']
// ];

// $table = update_data_user($conn, $data);
// if ($table) {
//     header("Location: display_data.php");
// }else{
//     echo "Failed to insert data";
// }