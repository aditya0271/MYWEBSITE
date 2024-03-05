<?php
include('../includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- csslink -->
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- title div -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_title" class="form-label">Product Titile</label>
            <input type="text" name="product_title" id="product_title" class="form-control"
                placeholder="Enter product title">
            <br>
        </div>
        <!-- desc div -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_title" class="form-label">Product Description</label>
            <input type="text" name="product_desc" id="product_desc" class="form-control"
                placeholder="Enter product description">
            <br>
        </div>
        <!-- keyword -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_keywords" class="form-label">Product Keyword </label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                placeholder="Enter product keywords">
            <br>
        </div>

        <!-- categories -->
        <div class="form-outline mb-2 w-50 m-auto">
            <select name="product_categories" id="" class=" form-select">
                <option value=""> Select a categories</option>

                <?php
                $select_query = "SELECT * FROM `categories`";
                $result_query = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $category_title = $row['category_title'];
                    $category_id = $row['category_id'];
                    echo "<option value=''>$category_title</option>";
                }
                ?>

                
            </select>
            <br>
        </div>

        <!-- Brands -->
        <div class="form-outline mb-2 w-50 m-auto">
            <select name="product_brands" id="" class=" form-select">
                <option value=""> Select a Brands</option>
                
                <?php
                $select_query = "SELECT * FROM `brands`";
                $result_query = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $brand_title = $row['brand_title'];
                    $brand_id = $row['brand_id'];
                    echo "<option value=''>$brand_title</option>";
                }
                ?>
            </select>
            <br>
        </div>

        <!--Image -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_image1" class="form-label">Product Image-1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
        </div>
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_image2" class="form-label">Product Image-2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
        </div>
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_image3" class="form-label">Product Image-3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
        </div>

        <!-- price -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Enter product price">
            <br>
        </div>

        <div class="form-outline mb-2 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info" value="Insert Product">
        </div>




    </form>
</div>

<!-- #region -->

</body>

</html>