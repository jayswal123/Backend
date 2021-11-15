<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    
</head>

<?php include "header.php"   
      // include "connection.php"
      ?>
<body>
    <form method="post" action="u_login.php">
    <div class="container mt-10 pt-2 pb-3" style="width:40%;border: black solid 2px; margin-top:230px;">
	<h3 class=" mb-3" style="border-bottom:5px solid green; width: 20%;">Log in</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;"></font><a href="u_register.php" style="text-decoration:none;">Register here</a></label>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  
  <input type="submit" class="btn btn-success" name="insert" value="Submit">

</form>
</div>

<?php // include "footer.php"?>

</body>
</html>

<?php
//session_start();

$con=mysqli_connect('localhost','root','','admn');



if(isset($_POST['insert']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
 

    $sql="select email,password from user where email='$email' and password='$password'";
    $query=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($query)>0)
    {
        session_start();
        $_SESSION['email']=$email;
        header("Location:contact.php");
        echo "welcome";
    }
    else
    {
      echo "Authentication Failed";
    }
mysqli_close($con);
  }

?>