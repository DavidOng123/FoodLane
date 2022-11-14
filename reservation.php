<?php

session_start();

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/header.css">
  <link rel="stylesheet" href="CSS/modal.css">
  <link rel="stylesheet" href="CSS/form.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  <style>
      
    .custom-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    height: 57px;
    padding: 10px 38px 10px 16px;
    background: #fff url("select-arrows.svg") no-repeat right 16px center;
    background-size: 10px;
    transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
    border: 1px solid #ddd;
    border-radius: 3px;
    }
    
    .custom-select:hover {
        border: 1px solid #999;
    }
    
    .custom-select:focus {
        border: 1px solid #999;
        box-shadow: 0 3px 5px 0 rgba(0,0,0,.2);
        outline: none;
    }
    
    /* remove default arrow in IE */
    
    select::-ms-expand {
        display:none;
    }
    
  </style>
        
    </head>
    

    <body style = "background: linear-gradient(to right,#1F6ED4 , #B9EDF8);">
        <?php require_once ('header.php'); ?>
       
        
        <br>  
         <br>  
          <br>  
           <br>  
        <div class="modal">
            
                <div class="modal-content">

                                <h1>Reservation Form</h1>
                                
                                <form action="test.php" method="post">
                                    
                                    <label>
                                        <input type="text" placeholder="Name" name="name" required/>
                                    </label>

                                    <label>
                                        <input type="text" placeholder="Email Address" name="email" required/>
                                    </label>

                                    <label>
                                        <input type="text" placeholder="Phone Number" name="phone" required/>
                                    </label>

                                    
                                    <label>
                                        <select class="custom-select" style=" border: 0;
                                                outline: 0;
                                                font-size: 16px;
                                                border-radius: 320px;
                                                padding: 16px;
                                                 margin-right: 8px;
                                                box-shadow:  inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
                                                width: 80%;
                                                box-sizing: border-box;
                                                transition: all 0.2s ease-in-out;
                                                appearance: none;
                                                -webkit-appearance: none;
                                                text-shadow: 1px 1px 0 #FFF;
                                                background-color: #EBECF0;
                                                " name="pax">

                                               <option value="1">1</option>
                                               <option value="2">2</option>
                                               <option value="3">3</option>
                                               <option value="4">4</option>
                                               <option value="5">5</option>
                                               <option value="6">6</option>
                                        </select>
                                            Pax
                                    </label>

                                              <label>
                                                  <input type="date" name="date" required>
                                              </label>

                                     <label>
                                         <?php  
                                            $startTime= strtotime('16:00');
                                            $endTime= strtotime('23:00');
                                            $returnFormat='H:i:s';

                                            $current=time();
                                            $addTime= strtotime('+'.'30 mins',$current);
                                            $diff=$addTime-$current;
                                            $times=array();

                                            while($startTime<$endTime){
                                                $times[]= date($returnFormat,$startTime);
                                                $startTime+=$diff;
                                            }
                                            $times[]= date($returnFormat,$startTime);


                                         ?>
                                         
                                         <select class="custom-select" style=" border: 0;
                                            outline: 0;
                                            font-size: 16px;
                                            border-radius: 320px;
                                            padding: 16px;
                                             margin-right: 8px;
                                            box-shadow:  inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
                                            width: 100%;
                                            box-sizing: border-box;
                                            transition: all 0.2s ease-in-out;
                                            appearance: none;
                                            -webkit-appearance: none;
                                            text-shadow: 1px 1px 0 #FFF;
                                            background-color: #EBECF0;
                                            " name="time">
                                                     <option value="">Select Time</option>
                                                     <?php foreach ($times as $key=>$val){ ?>
                                                     <option value="<?php echo $val;?>"><?php echo $val;?></option>
                                                     <?php }?>
                                         </select>
                                         
                                    </label>
                                    
                                            <center>
                                                  <button class="button" name="next" type="submit" style="width:70%;"><i class="icon ion-md-lock"></i>Next</button>
                                            </center>
                                    
                                    
                         </form>
                                
                </div>
    </div>
           
           <br>
           <br>
        
        <script>
        const modal = document.querySelector(".modal");
        const trigger = document.querySelector(".trigger");
        const closeButton = document.querySelector(".close-button");

        function toggleModal() {
            modal.classList.toggle("show-modal");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);




        </script>
        
        
        
        
    </body>
    
    
</html>
