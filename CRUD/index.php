<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>



    <?php
    session_start();
    include "con.php";

    if ($_SESSION['email'] == '') {
        header('Location:login.php');
    } else {
        $email = $_SESSION['email'];
        $sql = "select name from admin where email='$email'";
        $q = mysqli_query($con, $sql);
        $row1 = mysqli_fetch_array($q);
        echo  "Hello ". $row1['name'];   


        $sql = "select * from admin";
        $query = mysqli_query($con, $sql);



        echo "<h1 align=center>Details</h1>";
        echo "<table border=2 style='border:2px solid black;border-collapse:collapse;' cellpadding=5 cellspacing=5 align=center><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_array($query)) {
            $sid = $row['id'];
            echo "<tr>";
            echo "<th>" . $sid . "</th>";
            echo "<th>" . $row['name'] . "</th>";
            echo "<th>" . $row['email'] . "</th>";
            echo "<th>" . $row['password'] . "</th>";
            echo "<th colspan=2><a href=update.php?sid=$sid  style=color:green;>Edit</a>";
            echo " | <a href=delete.php?sid=$sid style=color:red;>Delete</a></th>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
    }
    ?>

  <a href="logout.php" style="margin-right:50px;  text-align:center; text-decoration:none;color:white;width:80px;height:20px;padding:5px;background-color:red;font-weight:bolder;">LOGOUT</a>
</body>

</html>