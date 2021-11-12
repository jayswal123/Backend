<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ADMIN</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="login.php">
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Email address</label>
                                                <input class="form-control"  name="username" id="inputEmail" type="text" placeholder="name@example.com" required>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input type="submit" class="btn btn-success" name="insert" value="Login">

                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
            <?php

$con=mysqli_connect('localhost','root','','admn');



if(isset($_POST['insert']))
{
    $email=$_POST['username'];
    $password=$_POST['password'];
 

    $sql="select username,password from admin where username='$email' and password='$password'";
    $query=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($query)>0)
    {
        session_start();
        $_SESSION['username']=$email;
        header("Location:index.php");
        echo "welcome";
    }
    else
    {
      echo "Authentication Failed";
    }
mysqli_close($con);
  }

?>









        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
