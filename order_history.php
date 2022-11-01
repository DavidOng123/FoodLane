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
        <th>Customer ID</th>
        <th>Item ID</th>
        <th>Order Date</th>
        <th>Order Status</th>
        <th>Payment ID</th>
    </tr>
  
  <?php
  include'db.php';
  $get_order_details="SELECT * FROM orders";
  $result_orders=mysqli_query($con, $get_order_details);
  while($row_orders=mysqli_fetch_assoc($result_orders)){
      $OrderID=$row_orders['OrderID'];
      $CustID=$row_orders['CustID'];
      $ItemID=$row_orders['ItemID'];
      $Date_Time=$row_orders['Date_Time'];
      $OrderStatus=$row_orders['OrderStatus'];
      $PaymentID=$row_orders['PaymentID'];
      $number=1;
      echo "<tr>
    <td>$OrderID</td>
    <td>$CustID</td>
    <td>$ItemID</td>
    <td>$Date_Time</td>
    <td>$OrderStatus</td>
    <td>$PaymentID</td>
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