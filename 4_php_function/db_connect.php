<?php
// db connection 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "project_db";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// if ($conn) {
//     echo "Connected to database";
// } else {
//     echo "Failed to connect to database";
// }