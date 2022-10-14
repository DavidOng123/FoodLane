<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FoodLane</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="CSS/testimonial.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    

  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }

    .star {
        COLOR: RED;
    }
   </style>
  
</head>

  <?php require_once ('header.php'); ?>



<body>
    
    
    <!-- Back-To-Top -->
    <button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>
        
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Image/announcement.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="Image/announcement.png" class="d-block w-100" >
          </div>
          <div class="carousel-item">
            <img src="Image/announcement.png" class="d-block w-100" >
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
    </div>
      
    
     <?php // require_once ('popup.php'); ?>
    

    <?php require_once ('splitscreen.php'); ?>
    
       
   
    
    
    
  <!--Start What-Customer-Say Section-->
  <div class="what-say" >
    <center>
    <h2>Customer <b>Review</b></h2>
    <hr width="15%" color="red"  size="5px" />
    </center>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-slider" class="owl-carousel">
              
            <div class="testimonial">
              <div class="testimonial-content">
                <div class="testimonial-icon">
                  <i class="fa fa-quote-left"></i>
                </div>
                <p class="description">
                  Taste Good !
                </p>
              </div>
              <h3 class="title">ZC</h3>
            </div>

            <div class="testimonial">
              <div class="testimonial-content">
                <div class="testimonial-icon">
                  <i class="fa fa-quote-left"></i>
                </div>
                <p class="description">
                  Look Good, Feel Great !
                </p>
              </div>
              <h3 class="title">David</h3>
            </div>

            <div class="testimonial">
              <div class="testimonial-content">
                <div class="testimonial-icon">
                  <i class="fa fa-quote-left"></i>
                </div>
                <p class="description">
                  I love Pasta Cabonara
                </p>
              </div>
              <h3 class="title">Zee Yee</h3>
            </div>

            <div class="testimonial">
              <div class="testimonial-content">
                <div class="testimonial-icon">
                  <i class="fa fa-quote-left"></i>
                </div>
                <p class="description">
                 Nice restaurant, i will come again !
                </p>
              </div>
              <h3 class="title">Peter</h3>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End What-Customer-Say Section-->

  
  
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    
    
    <script>
        
        //Get the button
        var mybutton = document.getElementById("myBtn");


        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    
    
        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:3,
                itemsDesktop:[1000,3],
                itemsDesktopSmall:[980,2],
                itemsTablet:[768,2],
                itemsMobile:[650,1],
                pagination:true,
                navigation:false,
                slideSpeed:1000,
                autoPlay:true
            });
        });
    </script>
    
        
    <?php require_once ('footer.php'); ?>
    


</body>
   
</html>
