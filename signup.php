<?php
session_start();

$con = mysqli_connect("localhost","root","","foodlane");


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $CustName = $_POST['CustName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
 

$s = " select * from customer where CustName = '$CustName'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['status2']="Username Already Taken";
}

else{
    
    $reg = " insert into customer(CustName, Email, PhoneNum, Address, password) values ('$CustName', '$email', '$phone', '$address', '$password')";
    mysqli_query($con, $reg);
    $_SESSION['status']="Successfully";
    header('location: login.php');
    die;
    
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
  
	<!-- Main Style Css -->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/signup.css">
        
      
</head>

<?php require_once 'header.php'; ?>

    <?php 

    if(isset($_SESSION['status2'])){
        ?>

        <script>
            Swal.fire(
                'Oops...',
                'Username Already Taken',
                'question'
            );

        </script>  

        <?php unset($_SESSION['status2']);
        }
        ?>



    <?php 
    if(isset($_SESSION['status'])){
        ?>

        <script>
            Swal.fire(
                'Congratulations!',
                'Registration Successful',
                'success'
    );  
        </script>

        <?php unset($_SESSION['status']);
        }
        ?>
    
    
<body class="form-v5" style = "background: linear-gradient(to right,#1F6ED4 , #B9EDF8);" >
    
	<div class="page-content">
            
		<div class="form-v5-content">
                    
			<form class="form-detail" action="" method="post">
                            
				<h2>Sign Up</h2> 
                                
                                
				<div class="form-row" >  
                                    <label for="full-name" class="fas fa-user">Username</label>          
					<input type="text" name="CustName" id="username" class="input-text" placeholder="Your Name" required pattern="[A-Za-z0-9]+">                                       
				</div>
                                
                                
				<div class="form-row">
					<label for="your-email" class="fas fa-envelope" > Email</label>
					<input type="email" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					
				</div>
                                
                                
                                <div class="form-row">
					<label for="your-phone" class="fas fa-phone" > Phone</label>
                                        <input type="text" name="phone" id="your-phone" class="input-number" placeholder="Your Phone" required>
					
				</div>
                                <br>
                                
                                
                                <div class="form-row">
					<label for="your-address" class="fas fa-home" > Address</label>
                                        <input type="text" name="address" id="your-address" class="input-text" placeholder="Your Address" required>
					
				</div>
                                
                                
				<div class="form-row">                                   
					<label for="password" class="fas fa-lock" > Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
					
				</div>
                                
                                
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
                                
                               
			</form>
                    
		</div>           
	</div>

</body>

<?php require_once 'footer.php'; ?>
</html>