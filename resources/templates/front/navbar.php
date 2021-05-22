<nav class="navbar">
<div class="brand-title"><a href="index.php"><img src="images/tpsellc.png" alt=""></a></div>

  <div class="dropdown-fix">
  <div class="dropdown">
  <button class="dropbtn">All Categories</button>
  <div class="dropdown-content">

<?php
//Categories php
$query = "SELECT * FROM categories";
$cat_query = mysqli_query ($connection,$query);
if (!$cat_query) {
       die ("QUERY FAILED" . mysqli_error ($connection));
     }
while ($row = mysqli_fetch_array($cat_query)) {
$cat_id = $row ['cat_id'];
$cat_title = $row ['cat_title'];

echo "<a href='categories.php?CatId={$cat_id}'>{$cat_title}</a>";
}
 ?>

  </div>
</div>
</div>

<a href="#" class="toggle-button">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</a>

<div class="navbar-links">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="account.php">Login</a></li>
    <li><a href="#"><img  src="images/cart.png" alt=""  class="menu-icon"></a></li>
  </ul>
</div>
</nav>
