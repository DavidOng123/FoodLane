<!DOCTYPE html>
<?php
    require_once ('Fetch API.php');
    $API=new FetchAPI();
    ?>
<html>
<head>
	<meta charset="utf-8">
	<title>FoodLane</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .seat{
           
            height: 40px;
            width: 100px;
            margin: 30px;
            text-align: center;
        }
        .seat.unavailable{
            background: #444451;
            
        }
        .seat.available {
            background: whitesmoke;
            
        }
        .seat.selected{
            background: greenyellow;
        }
        .twin-seat{
           
            height: 40px;
            width: 30px;
            margin: 30px;
            text-align: center;
        }
        .twin-seat.available{
            background: whitesmoke;
        }
        .twin-seat.unavailable{
            background: #444451;
        }
        .twin-seat.selected{
            background: greenyellow;
        }
        .row{
            display: flex;
        }
        
        .floorplan-container{
            background-color: #242333;
        }
        
        
        .cashier{
            background-color: #444451;
            height: 30px;
            width: 80px;
            margin-left: 30px;
            text-align: center;
        }
        .door{
            background-color: #444451;
            height: 40px;
            width: 60px;
            margin-left: 300px;
            margin-bottom: 20px;
            margin-top: 30px; 
            text-align: center;
        }
        .showcaseseat{
            background-color: greenyellow;
            height: 40px;
            width: 100px;
            margin-right: 30px;
            margin-bottom: 30px;
        }
        .showcaseavailableseat{
            background-color: whitesmoke;
            height: 40px;
            width: 100px;
            margin-right: 30px;
            margin-bottom: 30px;
        }
        .showcaseunavailableseat{
            background-color: #444451;
            height: 40px;
            width: 100px;
            margin-bottom: 30px;
        }
        small{
            color: gray;
            
        }
        .seat.available:hover{
            cursor: pointer;
            transform: scale(1.2);
        }
        .twin-seat.available:hover{
            cursor: pointer;
            transform: scale(1.2);
        }
        .twin-seat.selected:hover{
            cursor: pointer;
            transform: scale(1.2);
        }
        .seat.selected:hover{
            cursor: pointer;
            transform: scale(1.2);
        }
        
        
    </style>
</head>




<body>
    <br>
    <br>
    <br>
    
<center><p>Choose a table you preferred by clicking on the table available.<p></center>
               
    
    <div class="floorplan-container">
        <div class="showcase" style="display:flex;">
            <div style="margin-left: 150px;margin-top: 30px;  ">
                <small>Selected</small>
                <div class="showcaseseat"></div>
                
            </div>
            <div style="margin-top: 30px; ">
                <small>Available</small>
                <div class="showcaseavailableseat"></div>
                
            </div>
            <div style="margin-top: 30px; ">
                <small>Unavailable</small>
                <div class="showcaseunavailableseat"></div>
                
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="door"><small>Door</small></div>
        </div>
        
        <div class="row">
            <div class="cashier"><small>Cashier</small></div>
        </div>
            <div class="row">
                <div class="twin-seat" data-value="A1"><small>A1</small></div>
                <div class="seat" data-value="B1"><small>B1</small></div>
                <div class="seat" data-value="B4"><small>B4</small></div>
                <div class="seat" data-value="B7"><small>B7</small></div>
                <div class="twin-seat" data-value="A4"><small>A4</small></div>
            </div><div class="row">
                <div class="twin-seat" data-value="A2"><small>A2</small></div>
                <div class="seat" data-value="B2"><small>B2</small></div>
                <div class="seat" data-value="B5"><small>B5</small></div>
                <div class="seat" data-value="B8"><small>B8</small></div>
                <div class="twin-seat" data-value="A5"><small>A5</small></div>
            </div>
            <div class="row">
                <div class="twin-seat" data-value="A3"><small>A3</small></div>
                <div class="seat" data-value="B3"><small>B3</small></div>
                <div class="seat" data-value="B6"><small>B6</small></div>
                <div class="seat" data-value="B9"><small>B9</small></div>
                <div class="twin-seat" data-value="A6"><small>A6</small></div>
            </div>
        
    </div>
 <?php  
                    
                   
                    $date=$_POST['date'];
                    $time=$_POST['time'];
                    $pax=$_POST['pax'];
                    
                    
                    
                    $array= json_decode($API->getReservation(),true);
                    $occupied=array();
                    foreach ($array as $a){
                        $occupied[]= $a['TableNo'];
                        
                    }
                    
                    
                    
                    if($pax>0 && $pax<=2){?>
                        <script>
                            var array=<?php echo json_encode($occupied)?>;
                       const seat=document.querySelectorAll('.twin-seat');
                       for(var i=0;i<seat.length;i++){
                            for(var y=0;y<array.length;y++){
                                if(array[y] == seat[i].getAttribute('data-value')){
                            seat[i].classList.toggle('unavailable');
                            
                        }}
                        if(!seat[i].classList.contains('unavailable')){
                            seat[i].classList.toggle('available');
                        }
                        }</script><?php }?>
                    
                    <?php if($pax>2 && $pax<=4){ ?>
                        <script>
                            var array=<?php echo json_encode($occupied)?>;
                       const seat=document.querySelectorAll('.seat');
                       for(var i=0;i<seat.length;i++){
                            for(var y=0;y<array.length;y++){
                                if(array[y] == seat[i].getAttribute('data-value')){
                            seat[i].classList.toggle('unavailable');
                            
                        }}
                        if(!seat[i].classList.contains('unavailable')){
                            seat[i].classList.toggle('available');
                        }
                        }
                            
                               
                       
                    
                    
                    </script><?php }?>
                    
                    
<center><p>You have selected the tables of<span id="tableNo"></span>.<p></center>
 
    <script>
        var data=<?php echo json_encode($API->getReservation());?>;
        console.log(data);
        const floorplan_container=document.querySelector('.floorplan-container');
        const seats=document.querySelectorAll('.seat.available');
        const available_twin=document.querySelectorAll('.twin-seat.available');
        
        const tableNo=document.getElementById('tableNo');
        function updateSelectedCount(x){
            const selectedSeats=document.querySelectorAll('.row .seat.selected');
           
            tableNo.innerText=" "+x;
        
            console.log(tableNo.innerText);
            
            for(var i=0;i<seats.length;i++){
                seats[i].classList.toggle('available');
            }
            for(var i=0;i<available_twin.length;i++){
                available_twin[i].classList.toggle('available')
            }
            
            
        }
        
        floorplan_container.addEventListener('click',(e)=>{
                   
           if(e.target.classList.contains('seat') && !e.target.classList.contains('unavailable')){
             
               e.target.classList.toggle('selected');
               
              updateSelectedCount(e.target.getAttribute('data-value'));
           } 
           if(e.target.classList.contains('twin-seat') && !e.target.classList.contains('unavailable')){
                e.target.classList.toggle('selected');
              updateSelectedCount(e.target.getAttribute('data-value'));
           }
           
        });
    
        
        
        
      

    </script>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>