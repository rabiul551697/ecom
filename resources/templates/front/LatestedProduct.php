<h2 class="title">Letest Products</h2>
<div class="row">

<?php
//Latested product php
$query = "SELECT * FROM products";
$product_query = mysqli_query ($connection, $query);
if (!$product_query) {
       die ("QUERY FAILED" . mysqli_error ($connection));
     }
while ($row = mysqli_fetch_assoc($product_query)) {
$product_id          = $row ['product_id'];
$product_cat_id      = $row ['product_cat_id'];
$product_title       = $row ['product_title'];
$product_img         = $row ['product_img'];
$product_description = substr($row ['product_description'],0,30);
$product_price       = $row ['product_price'];

 ?>

  <div class="col-4">
    <a href="product_details.php?id='<?php echo $product_id; ?>'">
    <img  src="images/<?php echo $product_img;?>" alt="">
    <h4 style="color:#ff523b;"><?php echo $product_title; ?></h4>
    <p><?php echo $product_description; ?></p>
    <h4> Price: &#2547; <?php echo $product_price; ?></h4>
    <div class="rating">
    <i class="fa">&#9733;</i>
    <i class="fa">&#9733;</i>
    <i class="fa">&#9733;</i>
    <i class="fa">&#9733;</i>
    <i class="fa">&#10032;</i>
    <span style="padding-left:10px; color:#ff523b; font-weight:bold;"> 12 reviews</span>
    </div>
    </a>
  </div>
<?php
}
 ?>
</div>
