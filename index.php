<!DOCTYPE html>
<html>
<head>
    
  <title>FoodLane</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  
  
  <style>
   .what-say {
/*    background: #000 !important;*/
    background: linear-gradient(45deg,#00dbde,#fc00ff);
    padding-top: 100px !important;
    }

    .testimonial {
        margin: 0 20px 40px;
    }

    .testimonial .testimonial-content {
        padding: 35px 25px 35px 50px;
        margin-bottom: 35px;
        background: #fff;
        position: relative;
    }

    .testimonial .testimonial-content:before {
        content: "";
        position: absolute;
        bottom: -30px;
        left: 0;
        border-top: 15px solid #718076;
        border-left: 15px solid transparent;
        border-bottom: 15px solid transparent;
    }

    .testimonial .testimonial-content:after {
        content: "";
        position: absolute;
        bottom: -30px;
        right: 0;
        border-top: 15px solid #718076;
        border-right: 15px solid transparent;
        border-bottom: 15px solid transparent;
    }

    .testimonial-content .testimonial-icon {
        width: 50px;
        height: 45px;
        background: #0CCA4A;
        text-align: center;
        font-size: 22px;
        color: #fff;
        line-height: 42px;
        position: absolute;
        top: 37px;
        left: -19px;
    }

    .testimonial-content .testimonial-icon:before {
        content: "";
        border-bottom: 16px solid #05A739;
        border-left: 18px solid transparent;
        position: absolute;
        top: -16px;
        left: 1px;
    }

    .testimonial .description {
        font-size: 15px;
        font-style: italic;
        color: #8a8a8a;
        line-height: 23px;
        margin: 0;
    }

    .testimonial .title {
        display: block;
        font-size: 18px;
        font-weight: 700;
        color: #b6c7be;
        text-transform: capitalize;
        letter-spacing: 1px;
        margin: 0 0 5px 0;
    }

    .testimonial .post {
        display: block;
        font-size: 14px;
        color: #0CCA4A;
    }

    .owl-theme .owl-controls {
        margin-top: 20px;
    }

    .owl-theme .owl-controls .owl-page span {
        background: #ccc;
        opacity: 1;
        transition: all 0.4s ease 0s;
    }

    .owl-theme .owl-controls .owl-page.active span,
    .owl-theme .owl-controls.clickable .owl-page:hover span {
        background: #0CCA4A;
    }   
  </style>
  
</head>

<body>
    
    
    
    
    <?php require_once ('header.php'); ?>
    
    
    
    
  <center>
    <h2>Customer <b>Review</b></h2>
    <hr width="15%" color="red"  size="5px" />
    </center>
    
    
  <!--Start What-Customer-Say Section-->
  <div class="what-say" >
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
<!--              <span class="post">Web Developer</span>-->
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
<!--              <span class="post">Web Designer</span>-->
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
<!--              <span class="post">Web Developer</span>-->
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
<!--              <span class="post">Web Developer</span>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End What-Customer-Say Section-->

  
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
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
