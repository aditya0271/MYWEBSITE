<!-- config file -->
<?php
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Store</title>
  <!-- css file -->
  <link rel="stylesheet" href="style.css">

  <!-- bootstap  css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- font link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-info ">
      <div class="container-fluid">
        <img src="./image/logo.jpeg" alt="" class="logo">
        <!-- <a class="navbar-brand" href="#">Tendcart</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between w-100">
            <div class="d-flex">


              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><SUP>1</SUP></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Total Price </a>
              </li>
            </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
      </div>
    </nav>

  </div>
  <!-- second child -->
  <nav class="navbar navbar-expand-lg bg-dark bg-secondary">
    <ul class="navbar-nav me-auto ">
      <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="#">WELCOME GUEST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="#"> Login</a>
      </li>
  </nav>
  <!--third child  -->
  <div class="bg-light">
    <h3 class="text-center"> Hidden Store</h3>
    <p class="text-center"> Communicationa is at the heart of the e-commerce and community </p>
  </div>

  <!-- fourth child -->
  <div class="row">
    <!-- products -->
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/nike.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/formal.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/apple.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/goggles.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/check.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 md-2">
          <div class="card" style="width: 18rem; ">
            <img src="./image/shirt.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sidenav -->
    <div class="col-md-2 bg-secondary p-0">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="navlink text-light">
            <h4>Delivery Brands</h4>
          </a>
        </li>
<!-- TO FETCH THE DATA FROM THE DATABASE -->

        <?php
        $select_brands = "SELECT * FROM `brands`";
        $result_brands = mysqli_query($conn, $select_brands);
        //$row_data = mysqli_fetch_assoc($result_brands);
        //echo $row_data['brand_title'];
        while ($row_data = mysqli_fetch_assoc($result_brands)) 
        {
          $brand_title = $row_data['brand_title'];
          $brand_id = $row_data['brand_id'];
          echo "<li class='nav-item mt-2'>
  <a href='index.php?brand=$brand_id' class='navlink text-light'>$brand_title</a>
</li>";
        }
        ?>
      </ul>
      <ul class="navbar-nav me-auto text-center mt-3 ">
        <li class="nav-item bg-info">
          <a href="#" class="navlink text-light">
            <h4>Categories</h4>
          </a>
        </li>
        
<!-- TO FETCH THE DATA FROM THE DATABASE -->

        <?php
        $select_categories = "SELECT * FROM `categories`";
        $result_categories = mysqli_query($conn, $select_categories);
        while ($row_data = mysqli_fetch_assoc($result_categories)) 
        {
          $category_title = $row_data['category_title'];
          $category_id = $row_data['category_id'];
          echo "<li class='nav-item mt-2'>
  <a href='index.php?brand=$category_id' class='navlink text-light'>$category_title</a>
</li>";
        }
        ?>
      </ul>
    </div>
  </div>















  <!-- last child -->
  <div class="bg-info  text-center">
    <p>&copy; 2024 Online Shopping. All rights reserved.</p>
  </div>

  <!-- bootsrape js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
<?php

// Close connection when done
$conn->close();

?>