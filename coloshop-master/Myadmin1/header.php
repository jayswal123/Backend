<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>AdminPanel</title>
    <style>
      .home:hover{
        background-color: lightseagreen;

      }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light border " style="background-color: lightcyan;">


        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
            aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Breadcrumbs -->
        <!-- <ol class="breadcrumb"> -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item pl-2 mb-2 mb-md-0">
                    <a href="index.php" type="button"
                        class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Home</a>
                </li>
        </ul>
        <!-- Breadcrumbs -->


        <a class="navbar-brand" href="#!"
            style="text-align: center;margin-left: 450px; font-size:20px; font-weight:bold;">
            Colo<span>Shop</span>
        </a>



        <!-- Links -->
        <div class="collapse navbar-collapse " id="basicExampleNav1">

            <!-- Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item" href="all-product.php">All Products</a>
                        <a class="dropdown-item" href="add-product.php">Add Products</a>
                        <a class="dropdown-item" href="all-product.php">Manage Products</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item" href="#!">Men</a>
                        <a class="dropdown-item" href="#!">Women</a>
                        <a class="dropdown-item" href="#!">Accessories</a>
                    </div>
                </li>





                <li class="nav-item pl-2 mb-2 mb-md-0">
                    <a href="logout.php" type="button"
                        class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Logout</a>
                </li>
            </ul>

        </div>
        <!-- Links -->

    </nav>
    <!-- Navbar -->

    <!--/ fixed-top-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>