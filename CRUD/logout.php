<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'crud');
if(!isset($_SESSION['email'])){

    header('location:login.php');

    session_destroy();
    

}

?>

