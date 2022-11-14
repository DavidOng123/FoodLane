<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    
  <title>FoodLane</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <style>
      .text-blk{
  margin-top:0px;
  margin-right:0px;
  margin-bottom:0px;
  margin-left:0px;
  line-height:25px;
}
.responsive-cell-block{
  min-height:75px;
}
.responsive-container-block{
  min-height:75px;
  height:fit-content;
  width:100%;
  display:flex;
  flex-wrap:wrap;
  margin-top:0px;
  margin-right:auto;
  margin-bottom:0px;
  margin-left:auto;
  justify-content:space-evenly;
}
.outer-container{
  padding-top:10px;
  padding-right:50px;
  padding-bottom:10px;
  padding-left:50px;
  background-color:rgb(244, 252, 255);
}
.inner-container{
  max-width:1320px;
  flex-direction:column;
  align-items:center;
  margin-top:50px;
  margin-right:auto;
  margin-bottom:50px;
  margin-left:auto;
}
.section-head-text{
  margin-top:0px;
  margin-right:0px;
  margin-bottom:5px;
  margin-left:0px;
  font-size:35px;
  font-weight:700;
  line-height:48px;
  color:rgb(0, 135, 177);
  margin:0 0 10px 0;
}
.section-subhead-text{
  font-size:25px;
  color:rgb(153, 153, 153);
  line-height:35px;
  max-width:470px;
  text-align:center;
  margin-top:0px;
  margin-right:0px;
  margin-bottom:60px;
  margin-left:0px;
}
.img-wrapper{
  width:100%;
}
.team-card{
  display:flex;
  flex-direction:column;
  align-items:center;
}
.social-media-links{
  width:125px;
  display:flex;
  justify-content:space-between;
}
.name{
  font-size:25px;
  font-weight:700;
  color:rgb(102, 102, 102);
  margin-top:0px;
  margin-right:0px;
  margin-bottom:5px;
  margin-left:0px;
}
.position{
  font-size:25px;
  font-weight:700;
  color:rgb(0, 135, 177);
  margin-top:0px;
  margin-right:0px;
  margin-bottom:50px;
  margin-left:0px;
}
.team-img{
  width:100%;
  height:100%;
}
.team-card-container{
  width:280px;
  margin:0 0 40px 0;
}
@media (max-width: 500px){
  .outer-container{
    padding:10px 20px 10px 20px;
  }
  .section-head-text{
    text-align:center;
  }
} 
  </style>
  
</head>

<body>
    
    
    
    
    <?php require_once ('header.php'); ?>
    
    <br>
    
    <div class="responsive-container-block outer-container" style = "background: linear-gradient(to right,#71c9ce , #cbf1f5);" >
        
        <div class="responsive-container-block inner-container" >
         <p class="text-blk section-head-text"> Meet Our Team
         </p>
         <p class="text-blk section-subhead-text"> The project managed by Agile 
         </p>

         <div class="responsive-container-block">
           <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
             <div class="team-card">
               <div class="img-wrapper">
                 <img src="images/David.png"
                   class="team-img" class="team-img" style="border-radius: 50%; width:250px"/>
               </div>
                 <br>

               <p class="text-blk name">David Ong Lip Wei
               </p>
               <p class="text-blk position">Product Owner
               </p>

             </div>
           </div>


           <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
             <div class="team-card">
               <div class="img-wrapper">
                 <img src="images/teamZC.png"
                   class="team-img" style="border-radius: 50%; width:250px"/>
               </div>
                 <br>
                 <br>
                 <br>
               <p class="text-blk name">Lee ZhiCheng
               </p>
               <p class="text-blk position">Scrum Master
               </p>

             </div>
           </div>


           <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
             <div class="team-card">
               <div class="img-wrapper">
                 <img src="images/team_ZY.jpeg"
                   class="team-img" style="border-radius: 50%; width:250px" />
               </div>
                 <br>
               <p class="text-blk name">Tan Zi Yee
               </p>
               <p class="text-blk position">Development Team
               </p>

             </div>
           </div>

         </div>
       </div>
 </div>
    
        
    <?php require_once ('footer.php'); ?>
    


</body>
   
</html>

