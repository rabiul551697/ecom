<?php
//header Connection link
include ("../resources/templates/front/header.php");
?>
<!-- Product Content-->
<div class="small-container cart-page">

<table>
  <tr>
    <th>Product</th>
    <th>Quantity</th>
    <th>Sub Total</th>
  </tr>

<!-- Product Column-->
 <tr>
   <td>
     <div class="cart-info">
       <img src="images/buy-1.jpg" alt="">
       <div class="">
         <p>Product Name</p>
         <small> Price $ 50.00</small>
         <br>
         <a href="">Remove</a>
       </div>
     </div>
   </td>
   <td><input type="number" value="1"></td>
   <td>$50.00</td>
 </tr>

 <!-- Product Column-->
  <tr>
    <td>
      <div class="cart-info">
        <img src="images/buy-2.jpg" alt="">
        <div class="">
          <p>Product Name</p>
          <small> Price $ 50.00</small>
          <br>
          <a href="">Remove</a>
        </div>
      </div>
    </td>
    <td><input type="number" value="1"></td>
    <td>$50.00</td>
  </tr>
  <!-- Product Column-->
   <tr>
     <td>
       <div class="cart-info">
         <img src="images/buy-3.jpg" alt="">
         <div class="">
           <p>Product Name</p>
           <small> Price $ 50.00</small>
           <br>
           <a href="">Remove</a>
         </div>
       </div>
     </td>
     <td><input type="number" value="1"></td>
     <td>$50.00</td>
   </tr>

</table>

<!-- Total Price-->
<div class="total-price">
<table>
  <tr>
    <td>Sub Total</td>
    <td>$50.00</td>
  </tr>

  <tr>
    <td>Taxes</td>
    <td>$05.00</td>
  </tr>

  <tr>
    <td>Total Amount</td>
    <td>$55.00</td>
  </tr>
</table>

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
