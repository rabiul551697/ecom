<?php
//Database connected
include ("../resources/config.php");
?>
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
<?php
//header Connection link
include ("../resources/templates/front/footer.php");
?>
