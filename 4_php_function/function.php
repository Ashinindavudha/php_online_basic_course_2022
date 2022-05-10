<?php
// insert into users table
include("db_connect.php");
// fucntion to insert data into users table
function insert_data_user($conn, $data) {
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $insert_user_data = "INSERT INTO `users` (`username`, `email`, `password`, `created_at`, `updated_at`) VALUES
    ('$name', '$email', '$password', Now(), Now());";
    $insert_user_data_result = mysqli_query($conn, $insert_user_data);
    if ($insert_user_data_result) {
        //echo "Data inserted successfully";
        header("Location: display_data.php");
    }else{
        echo "Failed to insert data";
    }
}

// user update function
function update_data_user($conn, $data) {
    $name = $data['username'];
    $password = $data['password'];
    $email = $data['email'];
    $id = $_GET['id'];
    $update_user_data = "UPDATE `users` SET `username` = '$name', `email` = '$email', `password` = '$password' WHERE `id` = '$id';";
    $update_data = mysqli_query($conn, $update_user_data);
    if ($update_data) {
        //return true;
        header("Location: display_data.php");
    }else{
        //return false;
        echo "Failed to update data";
    }

}

// user delete fucntion
function delete_data_user($conn, $id) {
    $delete_user_data = "DELETE FROM `users` WHERE `id` = '$id';";
    $delete_data = mysqli_query($conn, $delete_user_data);
    if ($delete_data) {
        //return true;
        header("Location: display_data.php");
    }else{
        //return false;
        echo "Failed to delete data";
    }
}