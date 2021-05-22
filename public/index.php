<?php
//Database connected
include ("../resources/config.php");
?>

<?php
//header Connection link
include ("../resources/templates/front/header.php");
?>


<!--  Slider Content-->

<?php
//Slider Content link
include ("../resources/templates/front/SliderContent.php");
?>

<!-- Featured Categories-->

<?php
//Slider Future Categories
include ("../resources/templates/front/FutureCategories.php");
?>

<!-- Featured Products-->
  <div class="small-container">
    <?php
    //Futured Products
    //include ("../resources/templates/front/FutureProducts.php");
    ?>
      <!-- Letest Products-->
  <?php
  //Latested Products
  include ("../resources/templates/front/LatestedProduct.php");
  ?>
 </div>

<!-- offer-->
<?php
//Offer
include ("../resources/templates/front/OfferPage.php");
?>

  <!-- Testimonial-->
  <?php
  //Testimonial
  include ("../resources/templates/front/TestimonialPage.php");
  ?>
  <!-- Brand-->
  <?php
  //Testimonial
  include ("../resources/templates/front/Brand.php");
  ?>
<!-- footer-->
<?php
//header Connection link
include ("../resources/templates/front/footer.php");
?>
