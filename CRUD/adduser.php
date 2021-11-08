<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="adduser.php" method="post" class="row g-3">
                        <h4 style="text-align: center;">Register Form</h4>

                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <label>Mobile</label>
                            <input type="tel"  name="mobile" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="col-12">
                            <input type="submit" name="insert-btn" value="submit" class="btn btn-dark" ></input>
                        </div>
                    </form>

                    <?php
                    $conn=mysqli_connect('localhost', 'root', '','crud');
                        // if(mysqli_connect_errno()){
                        //     echo "connection fail";
                        // }
                        // else{
                        //     echo "connection ok";
                        // }

                        if(isset($_POST['insert-btn'])){


                            $user_name=$_POST['username'];
                            $user_email=$_POST['email'];
                            $user_password=$_POST['password'];
                            $user_mobile=$_POST['mobile'];
                            $user_address=$_POST['address'];
    
                            $insert="INSERT INTO info(name,email,password,mobile,address) VALUES('$user_name','$user_email','$user_password','$user_mobile','$user_address')";

                            $run_insert=mysqli_query($conn, $insert);
                            if($run_insert===true){
                                echo "data has been inserted";
                            }else{
                                echo "try again";
                            }
                             


                        }



                       
                    ?>






                </div>
            </div>
        </div>
    </div>



























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>