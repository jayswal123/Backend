<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'crud');
if(!isset($_SESSION['email']))
{

    header('location:login.php');
    
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>view user</title>
</head>

<body>
    <br>
    <br>



    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'crud');


    if (isset($_GET['del'])) {
        $del_id = $_GET['del'];

        $delete = "DELETE FROM info WHERE id='$del_id'";
        $run_delete = mysqli_query($conn, $delete);
        if ($run_delete === true) {
            echo "record has been deleted";
        } else {
            echo "try again to delete";
        }
    }


    ?>



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">MOBILE</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">DELETE</th>
                <th scope="col">EDIT</th>           


            </tr>
        </thead>
        <tbody>

            <?php

            $conn = mysqli_connect('localhost', 'root', '', 'crud');

            $select = "SELECT * FROM info";
            $run = mysqli_query($conn, $select);

            while ($row_user = mysqli_fetch_array($run)) {

                $user_id = $row_user['id'];
                $user_name = $row_user['name'];
                $user_email = $row_user['email'];
                $user_password = $row_user['password'];
                $user_mobile = $row_user['mobile'];
                $user_address = $row_user['address'];


            ?>



                <tr>
                    <th scope="row"><?php echo $user_id; ?></th>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td> <?php echo $user_password; ?></td>
                    <td><?php echo $user_mobile; ?></td>
                    <td><?php echo $user_address; ?></td>
                    <td><a href="view_user.php?del=<?php echo $user_id; ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="edit_user.php?edit=<?php echo $user_id; ?>" class="btn btn-success">Edit</a></td>

                </tr>
            <?php } ?>
        </tbody>
</table>




<a class="btn btn-danger" href="logout.php">Logout</a>














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