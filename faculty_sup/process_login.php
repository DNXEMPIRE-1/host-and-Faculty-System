<?php
include_once 'sample/config.php';
include_once 'function.php';

sec_session_start(); 

if (isset($_POST['email'], $_POST['p'])) {
$email = $_POST['email'];
$password = $_POST['p']; 

if (login($username, $password, $mysqli) == true) {
    // Login success 
    header('Location: protected_page.php');
} else {
    // Login failed 
    header('Location: admin_login.php?error=1');
}
} else {

echo 'Invalid Request';
}
?>