<?php

//header('location: login.php');
session_start();

$con = mysqli_connect("localhost","root","","foodlane");
//mysqli_select_db($con, 'foodlane');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
 

$s = " select * from customer where Email = '$email' && Password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    while ($row=$result->fetch_assoc()){
        $_SESSION['Name']=$row['CustName'];
        $_SESSION['Email']=$row['Email'];
        $_SESSION['Phone']=$row['PhoneNum'];
        $_SESSION['Address']=$row['Address'];
    }
    
    $_SESSION['Login']=true;
    header('location: index.php');
    
}else{
    header('location: login.php');
    }
}
?> 