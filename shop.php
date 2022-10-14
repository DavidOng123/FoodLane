<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">


<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    
    
    
    
    
    
    *{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}

.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}



:root{
    --pink:#e84393;
}

*{
    margin:0; padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section{
    padding:2rem 9%;
}

.products .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.products .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.1);
    position: relative;    
}

.products .box-container .box .discount{
    position: absolute;
    top:1rem; left:1rem;
    padding:.7rem 1rem;
    font-size: 2rem;
    color:var(--pink);
    background:rgba(255, 51, 153,.05);
    z-index: 1;
    border-radius: .5rem;
}

.products .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow:hidden;
}

.products .box-container .box .image img{
    height:25rem;
}

.products .box-container .box:hover .image img{
    transform: scale(1.1);
}

.products .box-container .box .image .icons{
    position: absolute;
    bottom:-7rem; left:0; right:0;
    display: flex;
}

.products .box-container .box:hover .image .icons{
    bottom:0;
}

.products .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--blue);
    color:#fff;
}

.products .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}

.products .box-container .box .image .icons a:hover{
    background:#333;
}

.products .box-container .box .content{
    padding:2rem;
    text-align: center;
}

.products .box-container .box .content h3{
    font-size: 2.5rem;
    color:#333;
}

.products .box-container .box .content .price{
    font-size: 2.5rem;
    color:var(--pink);
    font-weight: bolder;
    padding-top: 1rem;
}

.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#999;
    font-weight: lighter;
    text-decoration: line-through;
}
</style>
</head>


<body>

<?php require_once 'header.php' ?>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/1.jpg" style="width:100%; height: 50%">
</div>

<div class="mySlides fade">
  <img src="images/4.jpg" style="width:100%; height: 50%">
</div>

<div class="mySlides fade">
  <img src="images/3.jpg" style="width:100%; height: 50%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<br>
<br>
<br>

<section class="categories">
        <div class="container">
            <h1 class="text-center">Categories</h1>

            <a href="food.php">
            <div class="box-3 float-container">
                <img src="images/1.jpg" alt="Food" class="img-responsive img-curve">

                <h3 class="float-text text-white">Food</h3>
            </div>
            </a>

            <a href="drink.php">
            <div class="box-3 float-container">
                <img src="images/3.jpg" alt="Drink" class="img-responsive img-curve">

                <h3 class="float-text text-white">Drink</h3>
            </div>
            </a>

            <a href="merchandise.php">
            <div class="box-3 float-container">
                <img src="images/4.jpg" alt="Merchandise" class="img-responsive img-curve">

                <h3 class="float-text text-white">Merchandise</h3>
            </div>
            </a>

            

            <div class="clearfix"></div>
        </div>
    </section>

</body>
<?php require_once 'footer.php' ?>
</html>

<!-- prodcuts section ends -->

