<?php 
// db connection
$host = 'localhost';
$user = 'root';
//$pass = 'admin123';
$pass = '';
$db = 'basic_project';

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}else{
    echo "Connected successfully";
}