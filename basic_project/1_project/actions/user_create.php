<?php
include('../db_connect.php');
include('../function.php');
$data = [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    //'password' => $_POST['password'],
    "password" => md5($_POST['password']),
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],

];

$table = insert_data_user($conn, $data);
if ($table) {
    header("Location: ../users/index.php");
}else{
    echo "Failed to insert data";
}
 

