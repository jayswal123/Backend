<?php include "header.php";?>

<br>
<br>
<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto border border-primary mt-3">




      <form action="add-product.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <p class="text-center fw-bold fs-3 text-warning">Product Details:</p>
        </div>

        <div class="mb-3">
          <label class="form-label">Product Name:</label>
          <input type="text" class="form-control" name="pname" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Product price:</label>
          <input type="text" class="form-control" name="pprice" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Product descreption:</label>
          <input type="text" class="form-control" name="pdesc" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Add product image:</label>
          <input type="file" class="form-control" name="pimage" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Product Category:</label>
          <select class="form-select" aria-label="Default select example" name="pages" required>
          
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="accessories">Accessories</option>
          </select>
        </div>
        <button class="bg-success fs-4 fw-bold my-3 form-control text-white" name="submit">Add</button>


      </form>
    </div>

  </div>

</div>



<?php

include 'connection.php';

if (isset($_POST['submit'])) {
  $pr_name  = $_POST['pname'];
  $pr_price = $_POST['pprice'];
  $pr_desc  = $_POST['pdesc'];
  $pr_image = $_FILES['pimage'];
  $pr_category = $_POST['pages'];
  $image_loc = $_FILES['pimage']['tmp_name'];
  $image_name = $_FILES['pimage']['name'];

  $img_des = "uploadimage/" . $image_name;


  move_uploaded_file($image_loc, "uploadimage/" . $image_name);
  //print_r($pr_image);

  //insert product

  $sql = " INSERT INTO `product`( `pname`, `pprice`, `pdesc`, `pimage`, `pcategory`) VALUES ('$pr_name','$pr_price','$pr_desc','$img_des','$pr_category') ";
  $query = mysqli_query($con, $sql);

  if (!$query) {
    echo "insertion failed...";
  } else {
      echo "<script>alert('added successfully');
      window.location.href='all-product.php'
      </script>";
   // header("location:all-product.php");
  }
};



?>