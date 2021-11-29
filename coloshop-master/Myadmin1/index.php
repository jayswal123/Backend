<?php
session_start();
include "connection.php";

if ($_SESSION['username'] == '') {
  header('Location:login.php');
} else {


  include "header.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="img/banner_2.jpg" alt="" >
  
</body>
</html>
