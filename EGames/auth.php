<?php 
session_start();
if ($_SESSION['loggedin']!= true) {
    // The username session key does not exist or it's empty.
    header('location: login.php');
    exit;
}
?>