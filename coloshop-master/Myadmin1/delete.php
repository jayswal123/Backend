<?php

include "connection.php";

    $id=$_GET['ID'];
    $sql="DELETE FROM `product` WHERE  id='$id'";
    $query1=mysqli_query($con,$sql);
    if($query1)
    {
        header("Location:all-product.php");
    }
?>