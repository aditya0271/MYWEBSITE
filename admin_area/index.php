<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- csslink -->
<link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- NAVBAR -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <!-- Container class -->
            <div class="container-fluid">
                <!-- Logo image -->
                <img src="../image/logo.jpeg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-items">
                            <a href="" class="navlink"> Welcome Guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2"> Manage Details</h3>
        </div>

        <!-- third class -->

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="../image/admin.jpeg" alt="" class="admin_image"></a>
                    <p class="text-light text-center my-2 p-2 "> Admin name</p>
                </div>
                <!-- Nav links -->
                <div class="button text-center my-3">
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1 p-2">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 p-2">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2"> View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1 p-2"> Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2"> All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">All payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">Logout</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- fourth child -->
    <div class="container  my-4">
        <?php
        if (isset($_GET['insert_category'])) {
            include('insert_categories.php');
        }
        if (isset($_GET['insert_brands'])) {
            include('insert_brands.php');
        }
        ?>
    </div>

    <!-- bootsrape js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</body>

</html>
