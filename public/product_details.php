<?php
//Database connected
include ("../resources/config.php");
?>
<?php
//header Connection link
include ("../resources/templates/front/header.php");
?>
  <!-- single products-->
<div class="small-container single-product">

    <div class="row">

      <?php

      if (isset($_GET['id'])){
      $the_product_id = $_GET['id'];
        }
      $query = "SELECT * FROM products WHERE product_id = ($the_product_id)";
      $the_product_query = mysqli_query ($connection,$query);
      while ($row = mysqli_fetch_assoc($the_product_query)) {
      $product_id          = $row ['product_id'];
      $product_cat_id      = $row ['product_cat_id'];
      $product_title       = $row ['product_title'];
      $product_img         = $row ['product_img'];
      $product_img2         = $row ['product_img2'];
      $product_img3         = $row ['product_img3'];
      $product_img4         = $row ['product_img4'];
      $product_description = $row ['product_description'];
      $product_price       = $row ['product_price'];

    ?>

    <div class="col-2">
    <img src="images/<?php echo $product_img; ?>" alt="" width= "100%" id="ProductImg">
    <div class="small-img-row">
      <div class="small-img-col">
        <img src="images/<?php echo $product_img; ?>" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/<?php echo $product_img2; ?>" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/<?php echo $product_img3; ?>" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/<?php echo $product_img4; ?>" alt="" class="small-img" width="100%">
      </div>
    </div>
    </div>

    <div class="col-2">
      <h1><?php echo $product_title; ?></h1>
      <h4>Price: &#2547; <?php echo $product_price; ?></h4>
      <select>
        <option value="">Select Option</option>
        <option value="">XX</option>
        <option value="">XY</option>
        <option value="">UI</option>
          <option value="">TYI</option>
      </select>
      <input type="number" name="" value="">
      <a href="" class="btn">Add To Cart</a>
      <h3>Product Description</h3>
      <br>
      <p><?php echo $product_description; ?></p>
    </div>

    <?php
  }
     ?>

    </div>
</div>

<!-- Title-->


    <!-- Featured Products-->
                <div class="small-container">
                  <h2 class="title">Letest Products</h2>

                  <div class="row">

                    <div class="col-4">
                      <img src="images/product-5.jpg" alt="">
                      <h4>Red Prointed T-Shirt</h4>
                      <div class="rating">
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#10032;</i>
                      </div>
                      <p> Price: $50.00</p>
                    </div>

                    <div class="col-4">
                      <img src="images/product-6.jpg" alt="">
                      <h4>Red Prointed T-Shirt</h4>
                      <div class="rating">
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#10032;</i>
                      </div>
                      <p> Price: $50.00</p>
                    </div>

                    <div class="col-4">
                      <img src="images/product-7.jpg" alt="">
                      <h4>Red Prointed T-Shirt</h4>
                      <div class="rating">
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#10032;</i>
                      </div>
                      <p> Price: $50.00</p>
                    </div>
                    <div class="col-4">
                      <img src="images/product-8.jpg" alt="">
                      <h4>Red Prointed T-Shirt</h4>
                      <div class="rating">
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#9733;</i>
                      <i class="fa">&#10032;</i>
                      </div>
                      <p> Price: $50.00</p>
                    </div>

                  </div>

                </div>

                <!-- footer-->
<?php
//header Connection link
include ("../resources/templates/front/footer.php");
?>
