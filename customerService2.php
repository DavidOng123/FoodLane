<?php

session_start();

?>

 <html>
<head>
  <title>FoodLane</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="CSS/style.css">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <style>
  
.centered {
  position: absolute;
  top: 30%;
  left: 40%;
  transform: translate(-50%, -50%);
}


body  {
  background-color:  #b5b0b0;
/*  background: linear-gradient(to right, #b92b27, #1565c0);*/
}
  </style>
</head>

<body>
    <?php require_once ('header.php');?>
    
 

    
    <div class="container1">
        <img src="images/support.png" width="1535" height="600">
       
    </div>
    
    
    <!-- Live Chat -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
   <div class="elfsight-app-07109f64-bd8a-42b9-9a21-ca7b0d6af95d"></div>

    <?php require_once ('footer.php');?>
</body>
</html>

