<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit user</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">

                    <?php

                    $conn = mysqli_connect('localhost', 'root', '', 'crud');


                    if (isset($_GET['edit'])) {
                        $edit_id = $_GET['edit'];

                        $select = "SELECT * FROM info WHERE id=$edit_id";
                        $run = mysqli_query($conn, $select);
 
                        $row_user = mysqli_fetch_array($run);
                        $user_name = $row_user['name'];
                        $user_email = $row_user['email'];
                        $user_password = $row_user['password'];
                        $user_mobile = $row_user['mobile'];
                        $user_address = $row_user['address'];
                    }


                    ?>






                    <form action="#" method="post" class="row g-3">
                        <h4 style="text-align: center;">Edit User</h4>

                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user_name ?>">
                        </div>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $user_email ?>">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $user_password ?>">
                        </div>
                        <div class="col-12">
                            <label>Mobile</label>
                            <input type="tel" name="mobile" class="form-control" value="<?php echo $user_mobile ?>">
                        </div>
                        <div class="col-12">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $user_address ?>">
                        </div>
                        <div class="col-12">
                            <input type="submit" name="insert-btn" value="submit" class="btn btn-dark"></input>
                        </div>
                    </form>

                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'crud');
                    

                    if (isset($_POST['insert-btn'])) {


                        $euser_name = $_POST['username'];
                        $euser_email = $_POST['email'];
                        $euser_password = $_POST['password'];
                        $euser_mobile = $_POST['mobile'];
                        $euser_address = $_POST['address'];

                        $update = " UPDATE info SET name='$euser_name', email='$euser_email', password='$euser_password', mobile='$euser_mobile', address= '$euser_address' WHERE id= '$edit_id '";
                        $run_update = mysqli_query($conn, $update);
                        if ($run_update === true) {
                            header('location:view_user.php');

                            // header('location:view_user.php');
                        } else {
                            echo "try again";
                        }
                    }




                    ?>


                    <a href=""></a>





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