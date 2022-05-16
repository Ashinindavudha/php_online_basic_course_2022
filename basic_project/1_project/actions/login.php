<?php 
// user login
session_start();
include('../config/db_connection.php');
include('../function.php');
$email = $_POST['email'];
$password = md5($_POST['password']);

$user = findByEmailAndPassword($conn, $email, $password);

// if ($table) {
//     $_SESSION['user'] = $table;
//  header("Location: ../admin/admin_dashboard.php");

// }else{
//     echo "Failed to Login";
// }

if ($user) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    header("Location: ../admin/admin_dashboard.php");
}else{
    echo "Failed to Login";

}

