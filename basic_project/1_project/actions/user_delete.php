<?php 

include("../config/db_connection.php");

// user delete

include("../function.php");
// user delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = delete_data_user($conn, $id);
    if ($table) {
        header("Location: display_data.php");
    }else{ 
        echo "Failed to delete data";
    }
}