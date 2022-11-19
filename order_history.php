<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: lightsteelblue;
  color: white;
}
</style>
</head>

<?php require_once 'header.php'; ?>

<body>

    <br>
    <br>
   
<h1 class="text-center">Order History</h1>

<table id="customers">
    
    <tr>
        <th>Order No</th>
        <th>Customer Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Total Products</th>
        <th>Total Price</th>
        <th>Payment Method</th>
        <th>Order Status</th>
        <th>Payment Status</th>
    </tr>
  
  <?php
  include'server.php';
  $get_order_details="SELECT * FROM orders";
  $result_orders=mysqli_query($con, $get_order_details);
  while($row_orders=mysqli_fetch_assoc($result_orders)){
      $OrderID=$row_orders['OrderID'];
      $CustName=$row_orders['CustName'];
      $PhoneNum=$row_orders['PhoneNum'];
      $Email=$row_orders['Email'];
      $total_products=$row_orders['total_products'];
      $total_price=$row_orders['total_price'];
      $method=$row_orders['method'];
      $OrderStatus=$row_orders['OrderStatus'];
      $PaymentStatus=$row_orders['PaymentStatus'];
      $number=1;
      echo "<tr>
    <td>$OrderID</td>
    <td>$CustName</td>
    <td>$PhoneNum</td>
    <td>$Email</td>
    <td>$total_products</td>
    <td>$total_price</td>
    <td>$method</td>
    <td>$OrderStatus</td>
    <td>$PaymentStatus</td>
  </tr>";
  $number++;
  }
  ?>
  
</table>

<br>
<br>
</body>
<?php require_once 'footer.php'; ?>
</html>