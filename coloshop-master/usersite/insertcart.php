<?php
include 'connection.php';

$id=$_GET['id'];
   
 $selectq="select * from product where id=$id";
    $result=mysqli_query($con,$selectq);

while($row=mysqli_fetch_assoc($result))
{
    $name=$row['pname'];
    $price=$row['pprice'];
    $desc=$row['pdesc'];
    $img=$row['pimage'];
    
}

       
    $q = "INSERT INTO cart (pname, pprice, pdesc,pimage) VALUES ('$name','$price','$desc','$img')";

    
    $check = mysqli_query($con,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        header("Location:cart.php");
    }




?>