<?php
session_start();
include "connection.php";

if($_SESSION['username']=='')
{
    header('Location:login.php');
}
else{


 include "header.php"; 
}


?>


   <!-- < div class="container "> -->
<div class="container">
<div class="row">
<div class="col-md-10 m-auto">
   

<table class="table table-hover  border my-5">
    <thead class="bg-dark text-white fs-5 font-monospace text-center">
      <th>ID</th>
      <th>PRODUCT NAME</th>
      <th>PRICE</th>
      <th>DESCREPTION</th>
      <th>IMAGE</th>
      <th>CATEGORY</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </thead>

  

    <tbody class="text-center">
      <?php

      include 'connection.php';

      $record = mysqli_query($con, "SELECT * FROM `product`");

     while($row = mysqli_fetch_array($record)) 
      
      echo  "

      <tr>
      <td>$row[id]</td>
      <td>$row[pname]</td>
      <td>$row[pprice]</td>
      <td>$row[pdesc]</td>
      <td><img src = '$row[pimage]' height='90px' width='100px'></td>
      <td>$row[pcategory]</td>
      <td><a href='update.php? id=$row[id]' class='btn btn-success'>Edit</a></td>
      <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>


     </tr>
 
      
      "; 
     
      
      ?>
     </tbody>
</table>
</div>
</div>
</div>

