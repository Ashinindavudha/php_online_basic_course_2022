<?php
include('db_connect.php');
include('function.php');
$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

$table = insert_data_user($conn, $data);
if ($table) {
    header("Location: display_data.php");
}else{
    echo "Failed to insert data";
}
 

// fucntion to insert data into users table
// function insert_data($data){
//     $conn = $data['conn'];
//     $name = $data['name'];
//     $email = $data['email'];
//     $password = $data['password'];
//     $insert_user_data = "INSERT INTO `users` (`username`, `password`, `email`, `created_at`, `updated_at`) VALUES
//     ('$name', '$password', '$email', Now(), Now());";
//     $insert_user_data_result = mysqli_query($conn, $insert_user_data);
//     if ($insert_user_data_result) {
//         echo "Data inserted successfully";
//     }else{
//         echo "Failed to insert data";
//     }

// }