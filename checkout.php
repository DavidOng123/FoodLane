<?php

include 'server.php';

if(isset($_POST['order_btn'])){

   $CustName = $_POST['CustName'];
   $PhoneNum = $_POST['PhoneNum'];
   $Email = $_POST['Email'];
   $method = $_POST['method'];
   
   $cart_query = mysqli_query($con, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['ItemName'] .' ('. $product_item['Quantity'] .') ';
         $product_price = number_format($product_item['Price'] * $product_item['Quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($con, "INSERT INTO `orders`(CustName, PhoneNum, Email, total_products, total_price, method, OrderStatus, PaymentStatus) VALUES('$CustName','$PhoneNum','$Email','$total_product','$price_total', '$method','Pending', 'Pending')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
      <br>
      <br>
      <br>
      <br>
      <br>
         <h3>Thank You For Shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$CustName."</span> </p>
            <p> your number : <span>".$PhoneNum."</span> </p>
            <p> your email : <span>".$Email."</span> </p>
            <p>(*Pay when receives items*)</p>
         </div>
            <a href='shop.php' class='btn'>Continue Shopping</a>
            <br>
            <a href='order_history.php' class='btn'>View Order History</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <style>
       .checkout-form form{
   padding:2rem;
   border-radius: .5rem;
   background-color: lightblue;
}

.checkout-form form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 2rem;
   color:var(--black);
}

.checkout-form form .flex .inputBox.btn{
   color: white;
}


.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: var(--white);
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1.4rem;
   text-transform: none;
   border:var(--border);
}

.display-order{
   max-width: 50rem;
   background-color: white;
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:var(--black);
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: lightskyblue;
   color:var(--white);
   padding:1rem;
   margin-top: 1rem;
}

.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: scroll;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1100;
   background-color: var(--dark-bg);
   width: 100%;
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: white;
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: lightsteelblue;
   border-radius: .5rem;
   padding:1rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: var(--white);
   border-radius: .5rem;
   color:var(--black);
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: var(--red);
   color:var(--white);
}

.order-message-container .message-container .customer-details{
   margin:1.5rem 0;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:var(--black);
}

.order-message-container .message-container .customer-details p span{
   color:var(--blue);
   padding:0 .5rem;
   text-transform: none;
}

   </style>
   

</head>
<body>

<?php include_once 'header.php'; ?>

    <div class="container">

        <section class="checkout-form">
            <br>

           <h3 class="heading">Complete Your Order</h3>

           <form action="" method="post">

           <div class="display-order">
              <?php
                 $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
                 $total = 0;
                 $grand_total = 0;
                 if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                    $total_price = number_format($fetch_cart['Price'] * $fetch_cart['Quantity']);
                    $grand_total = $total += $total_price;
              ?>
              <span><?= $fetch_cart['ItemName']; ?>(<?= $fetch_cart['Quantity']; ?>)</span>
              <?php
                 }
              }else{
                 echo "<div class='display-order'><span>your cart is empty!</span></div>";
              }
              ?>
              <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
           </div>

              <div class="flex">
                 <div class="inputBox">
                    <span>Your Name</span>
                    <input type="text" placeholder="Enter your name" name="CustName" required>
                 </div>
                 <div class="inputBox">
                    <span>Your Number</span>
                    <input type="number" placeholder="Enter your number" name="PhoneNum" required>
                 </div>
                 <div class="inputBox">
                    <span>Your Email</span>
                    <input type="email" placeholder="Enter your email" name="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                 </div>
                 <div class="inputBox">
                    <span>Payment Method</span>
                    <select name="method">
                       <option value="cash" selected>Cash</option>
                       <option value="credit cart">Credit Card</option>
                       <option value="paypal">PayPal</option>
                    </select>
                 </div>
              </div>
              <input type="submit" value="Order Now" name="order_btn" class="btn">
           </form>

        </section>

    </div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>