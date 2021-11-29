<?php

include "connection.php";

    $id=$_GET['id'];
    $sql="DELETE FROM `cart` WHERE  id='$id'";
    $query1=mysqli_query($con,$sql);
    if($query1)
    {
        header("Location:cart.php");
    }
?>