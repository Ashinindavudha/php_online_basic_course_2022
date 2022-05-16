<?php 
class Auth{
static function check()
{
    session_start();
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    } else {
        header('location: ../index.php');
    }
}
}