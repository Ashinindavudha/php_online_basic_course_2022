<?php 
include("config/db_connection.php");
function get_users_table_data($conn)
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users_table_data;
}


// user insert data
function insert_data_user($conn, $data) {
    $name = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $address = $data['address'];
    $insert_user_data = "INSERT INTO `users` (`username`, `email`, `password`, `phone`, `address`,  `created_at`, `updated_at`) VALUES
    ('$name', '$email', '$password', '$phone', '$address', Now(), Now());";
    $insert_user_data_result = mysqli_query($conn, $insert_user_data);
    if ($insert_user_data_result) {
        //echo "Data inserted successfully";
        header("Location: ../users/index.php");
    }else{
        echo "Failed to insert data";
    }
}

// user update function
function update_data_user($conn, $data) {
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $address = $data['address'];
    $id = $_GET['id'];
    $update_user_data = "UPDATE `users` SET `username` = '$username', `email` = '$email', `password` = '$password', `phone` = '$phone', `address` = '$address' WHERE `id` = '$id';";
    $update_data = mysqli_query($conn, $update_user_data);
    if ($update_data) {
        //return true;
        header("Location: ../users/index.php");
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
        header("Location: ../users/index.php");
    }else{
        //return false;
        echo "Failed to delete data";
    }
}
