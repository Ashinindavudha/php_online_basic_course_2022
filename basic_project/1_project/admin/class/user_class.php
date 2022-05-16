<?php 
//include('../config/db_connect.php');
class UserTable {
// private $db = null;
// public function __construct($db) {
// $this->db = $db;
// }
function get_users_table_data($conn)
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users_table_data;
}
}