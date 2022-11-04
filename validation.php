<?php

//header('location: login.php');
session_start();

$con = mysqli_connect("localhost","root","","foodlane", 3307);
//mysqli_select_db($con, 'foodlane');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
 

$s = " select * from customer where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location: login.php');
}else{
    header('location: index.php');
    }
}
?> 