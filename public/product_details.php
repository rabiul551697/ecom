<?php
//header Connection link
include ("../resources/templates/front/header.php");
?>
  <!-- single products-->
<div class="small-container single-product">

    <div class="row">
    <div class="col-2">
    <img src="images/gallery-1.jpg" alt="" width= "100%" id="ProductImg">
    <div class="small-img-row">
      <div class="small-img-col">
        <img src="images/gallery-1.jpg" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/gallery-2.jpg" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/gallery-3.jpg" alt="" class="small-img" width="100%">
      </div>

      <div class="small-img-col">
        <img src="images/gallery-4.jpg" alt="" class="small-img" width="100%">
      </div>
    </div>
    </div>

    <div class="col-2">
      <p>Home T-Shirt</p>
      <h1>Read Print T-shirt</h1>
      <h4>$50.00</h4>
      <select>
        <option value="">Select Option</option>
        <option value="">XX</option>
        <option value="">XY</option>
        <option value="">UI</option>
          <option value="">TYI</option>
      </select>
      <input type="number" name="" value="">
      <a href="" class="btn">Add To Cart</a>
      <h3>Products</h3>
      <br>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
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


<footer class="footer">
   <div class="container-x">
    <div class="row-y">
      <div class="footer-col">
        <h4>Download Our App</h4>
      <a href=""><img src="images/play-store.png" alt=""></a>
      <a href=""><img src="images/app-store.png" alt=""></a>
      </div>
      <div class="footer-col">
        <h4>Helpful Links</h4>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Company Policy</a></li>
          <li><a href="#">Customer Care</a></li>
          <li><a href="#">payment options</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contract Us</h4>
        <p><i class="fa fa-home"></i> Ka-62/A, Kuril Chowrasta <br>   Vatara, Dhaka-1229</p>

        <p><i class="fa fa-phone"></i>  +880 1575632763</p>
        <p><i class="fa fa-envelope"></i>
          tpsell00@gmail.com</p>

      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
   </div>
</footer>
<div>
  <p class="copyright">Copyright-2021</p>
</div>

<!-- javascript-->

<script type="text/javascript" >
//Account page
var LogForm = document.getElementById('LoginForm');
var RegForm = document.getElementById('RegisterForm');
var Indicator = document.getElementById('Indicator');

function register(){
  RegForm.style.transform = "translateX(0px)";
  LogForm.style.transform = "translateX(0px)";
  Indicator.style.transform = "translateX(100px)";
}

function login(){
  RegForm.style.transform = "translateX(300px)";
  LogForm.style.transform = "translateX(300px)";
  Indicator.style.transform = "translateX(0px)";
}
</script>


</body>
</html>
