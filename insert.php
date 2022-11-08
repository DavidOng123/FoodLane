<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
                    $time=$_POST['time'];
                    $pax=$_POST['pax'];
                    $date=$_POST['date'];
                    $name=$_POST['name'];
                    $email=$_POST['email'];
$phone=$_POST['phone'];
$table=$_POST['tableNo'];


$sql="INSERT INTO reservation  VALUES('','$name','$email','$phone','$pax','$date','$time','$table')";

$host="localhost";
     $dbname="foodlane";
     $user="root";
     $password="";
    
     $conn= new mysqli($host,$user,$password,$dbname);
     
     if(!$conn){
         die("Connection failed");
     }
     else{
         if($conn->query($sql)===TRUE){
             $msg="Dear ".$name.", your reservation for Table ".$table." with ".$pax." pax was confirmed.";
             $msg= wordwrap($msg,70);
             
         }
         
     }



}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FoodLane</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
   
<?php require_once 'header.php'; ?>



<body>
    
    <script>
    Swal.fire({
  title: 'Reservation confirmation',
  text: 'Dear customer, your reservation had been confirmed.',
  icon: 'success',
  confirmButtonText: 'Cool'
})
    </script>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<?php require_once 'footer.php'; ?>
</html>
    
    
