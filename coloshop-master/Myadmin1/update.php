<?php include "header.php"; ?>



<?php
$id = $_GET['id'];
include "connection.php";

$record = mysqli_query($con, "SELECT * FROM `product` WHERE id = $id");
$data = mysqli_fetch_array($record);


?>


<br>
<br>
<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto border border-primary mt-3">




      <form action="update.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <p class="text-center fw-bold fs-3 text-warning">Product Update:</p>
        </div>

        <div class="mb-3">
          <label class="form-label">Product Name:</label>
          <input type="text"    value="<?php echo $data['pname'] ?>" class="form-control" name="pname" >
        </div>

        <div class="mb-3">
          <label class="form-label">Product price:</label>
          <input type="text"  value="<?php echo $data['pprice'] ?>" class="form-control" name="pprice" >
        </div>

        <div class="mb-3">
          <label class="form-label">Product descreption:</label>
          <input type="text"   value="<?php echo $data['pdesc'] ?>" class="form-control" name="pdesc" >
        </div>

        <div class="mb-3">
          <label class="form-label">Add product image:</label>
          <input type="file" class="form-control" name="pimage">
          <img src="<?php echo $data['pimage'] ?>" alt="" style="height:100px;">
        </div>

        <div class="mb-3">
          <label class="form-label">Product Category:</label>
          <select class="form-select"  value="<?php echo $data['pages'] ?>" aria-label="Default select example" name="pages" >

            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="accessories">Accessories</option>
          </select>
        </div>
        <input type="hidden"  name="id" value="<?php echo $data['id']?>">
        <button class="bg-success fs-4 fw-bold my-3 form-control text-white" name="update">Update</button>


      </form>
    </div>

  </div>

</div>



<?php

if (isset($_POST['update'])) {
    $id  = $_POST['id'];
    $pr_name  = $_POST['pname'];
    $pr_price = $_POST['pprice'];
    $pr_desc  = $_POST['pdesc'];
    $pr_image = $_FILES['pimage'];
    $pr_category = $_POST['pages'];
    $image_loc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
  
    $img_des = "uploadimage/" . $image_name;
  
  
    move_uploaded_file($image_loc, "uploadimage/" . $image_name);


    include "connection.php";

    $sql2="UPDATE product SET pname='$pr_name', pprice='$pr_price', pdesc='$pr_desc', pimage='$img_des', pcategory='$pr_category' WHERE id='$id'";
    $query=mysqli_query($con,$sql2);

    if($query)
    {
        header("Location:all-product.php");
    }
    else
    {
        echo "Updation Error";
    }
    mysqli_close($con);

};
  
?>


