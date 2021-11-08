<?php session_start();?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="#" method="post" class="row g-3">
                        <h4>LOGIN FORM</h4>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email" required>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                       
                        <div class="col-12">
                            <input type="submit" class="btn btn-dark" name="login-btn" value="Login"></input>
                        </div>
                    </form>

                    <?php

                    $conn = mysqli_connect('localhost', 'root', '', 'crud');

                    if(isset($_POST['login-btn']))
                    {
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                    

                 $select = "SELECT email,password FROM info WHERE email='$email' AND password='$password'";
                        $run = mysqli_query($conn, $select);
                        $row = mysqli_num_rows($run);
            
                        // ($row_user = mysqli_fetch_array($run));
                
                        // $db_email = $row_user['email'];
                        // $db_password = $row_user['password'];

                        if($row > 0){
                            $_SESSION['email'] = $email;
                            header('location:view_user.php');
                        }else{
                            echo "invalid email or password";
                        }
                            


                    }
                    
                    
                    
                    
                    
                    ?>








                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>