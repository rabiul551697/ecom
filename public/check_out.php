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
<!-- footer-->
<?php
//header Connection link
include ("../resources/templates/front/footer.php");
?>
