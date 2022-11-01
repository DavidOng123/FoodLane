<?php 

session_start();



  if (isset($_SESSION['cart'])) {

  	$cart_id = array_column($_SESSION['cart'], "CartID");

  	if (!in_array($_POST['CartID'], $_SESSION['cart'])) {
  		$item_array = array(
         "CartID" => $_POST['CartID'],
         "ItemName" => $_POST['ItemName'],
         "Price" => $_POST['Price'],
         "Quantity" => $_POST['Quantity']
  	);


  $_SESSION['cart'][] = $item_array;
  	}
  	
  }else{

  	$item_array = array(
         "CartID" => $_POST['CartID'],
         "ItemName" => $_POST['ItemName'],
         "Price" => $_POST['Price'],
         "Quantity" => $_POST['Quantity']
  	);


  $_SESSION['cart'][] = $item_array;
  }




 ?>