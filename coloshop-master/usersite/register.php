<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>


<?php  include "header.php" ?>
 

<!-- Register form starts -->

<form method="POST">
    <div class="container" style="width:40%; border:black solid 2px;  margin-top:220px;">
        <h3 class="mb-3 mt-3" style="border-bottom:4px solid green; width: 35%; ">Registration</h3>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input type="text" name='fname' class="form-control" id="exampleInputtext" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">Return to</font> &nbsp;<a href="login.php" style="text-decoration:none;">login page</a></label>
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <input type="submit" class="btn btn-success" name="insert" value="Submit" style="margin-bottom:10px;">
    
    </form>
    </div>

    <?php include "footer.php" ?>

<!-- Register form ends -->
</body>
</html>

<?php
//session_start();
include "connection.php";
if(isset($_POST['insert']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into user(name,email,password) values('$fname','$email','$password')";
    $query=mysqli_query($con,$sql);

    if(!$query)
    {
        echo "Insertion Failed...!!";
    }

    else{
      header("Location:login.php");
    }
}