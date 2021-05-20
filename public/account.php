<?php
//header Connection link
include ("../resources/templates/front/header.php");
?>
<!-- content-->
<div class="account-page">
  <div class="container">
    <div class="row">

      <div class="col-2">
        <img src="images/image1.png" alt="">
      </div>
      <div class="col-2">
        <div class="form-container">
            <div class="form-btn">
              <span onclick="login()">Login</span>
              <span onclick="register()">Register</span>
              <hr id="Indicator">
                </div>

              <form action="" id="LoginForm">
                <input type="text" name="" value="" placeholder="user name">
                <input type="password" name="" value="" placeholder="password">
                <button type="submit" name="button" class="btn">Login</button>
                <a href="">Forgot Password</a>
              </form>

              <form action="" id="RegisterForm">
                <input type="text" name="" value="" placeholder="user name">
                <input type="email" name="" value="" placeholder="email">
                <input type="number" name="" value="" placeholder="phone number">
                <textarea name="" rows="5" cols="34" placeholder="enter your address"></textarea>
                <button type="submit" name="button" class="btn">Register</button>
              </form>
        </div>
      </div>
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
