<!DOCTYPE html>
<?php
    require_once ('Fetch API.php');
    $API=new FetchAPI();
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
                    $time=$_POST['time'];
                    $pax=$_POST['pax'];
                    $date=$_POST['date'];
                    $name=$_POST['name'];
                    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
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
        
        
.button {
  align-items: center;
  background-clip: padding-box;
  background-color: green;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: 100px;
}

.button:hover,
.button:focus {
  background-color: #fb8332;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button:hover {
  transform: translateY(-1px);
}

.button:active {
  background-color: #c85000;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
.button-cancel {
  align-items: center;
  background-clip: padding-box;
  background-color: red;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: 100px;
}

.button-cancel:hover,
.button-cancel:focus {
  background-color: #fb8332;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-cancel:hover {
  transform: translateY(-1px);
}

.button-cancel:active {
  background-color: orange;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
    </style>
</head>




<body>
    <br>
    <br>
    <br>
    
    <a class="container">
    
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
                    
                   
                   
                    
                    
                    $array= json_decode($API->getReservation(),true);
                    $occupied=array();
                    $occupied_time=array();
                    $occupied_date=array();
                    $occupied_pax=array();
                    foreach ($array as $a){
                        $occupied_pax[]=$a['Pax'];
                        $occupied[]= $a['TableNo'];
                        $occupied_time[]=$a['Time'];
                        $occupied_date[]= $a['Date'];
                    }
                    $date= strval($date);
                    $time= strval($time);
                    
                    
                    if($pax>0 && $pax<=2){?>
                        <script>
                            class Reserved{
                              
                                constructor(pax,tableNo,date,time){
                                    this.pax=pax;
                                    this.tableNo=tableNo;
                                    this.date=date;
                                    this.time=time;
                                }
                                getPax(){
                                    return this.pax;
                                }
                                getTable(){
                                    return this.tableNo;
                                }
                                getDate(){
                                    return this.date;
                                }
                                getTime(){
                                    return this.time;
                                }
                            }
                            
                            var array=<?php echo json_encode($occupied)?>;
                            var time_array=<?php echo json_encode($occupied_time)?>;
                            var date_array=<?php echo json_encode($occupied_date)?>;
                            var pax_array=<?php echo json_encode($occupied_pax)?>;
                            var date=<?php echo json_encode($date)?>;
                            var time=<?php echo json_encode($time)?>;
                            let dt=new Date(date+'T'+time);
                            const reserved_array=[];
                            for(var i=0;i<array.length;i++){
                                
                                if(pax_array[i]<=2)
                                reserved_array.push(new Reserved(pax_array[i],array[i],date_array[i],time_array[i]));
                            }
                            console.log(reserved_array);
                       const seat=document.querySelectorAll('.twin-seat');
                       
                            for(var y=0;y<reserved_array.length;y++){
                                
                                if(reserved_array[y].getDate()==date){
                                    
                                    var pre_time=new Date(dt.getTime()-30*60*1000);
                                    var post_time=new Date(dt.getTime()+30*60*1000);
                                    var _time=new Date(reserved_array[y].getDate()+'T'+reserved_array[y].getTime());
                                    
                                    if(_time.getTime()===pre_time.getTime() || _time.getTime()===post_time.getTime() || _time.getTime()===dt.getTime()){
                                        for(var a=0;a<seat.length;a++){
                                            if(seat[a].getAttribute('data-value')==reserved_array[y].getTable()){
                                                seat[a].classList.toggle('unavailable');}
                                            }
                                        }
                                        
                                    
                                }
                                
                            
                        }
                        
                    for(var i=0;i<seat.length;i++){
                    if(!seat[i].classList.contains('unavailable')){
                            seat[i].classList.toggle('available');
                    }
                    
                        
                        }
                        </script><?php }?>
                    
                    <?php if($pax>2 && $pax<=4){ ?>
                        <script>
                            class Reserved{
                              
                                constructor(pax,tableNo,date,time){
                                    this.pax=pax;
                                    this.tableNo=tableNo;
                                    this.date=date;
                                    this.time=time;
                                }
                                getPax(){
                                    return this.pax;
                                }
                                getTable(){
                                    return this.tableNo;
                                }
                                getDate(){
                                    return this.date;
                                }
                                getTime(){
                                    return this.time;
                                }
                            }
                            var array=<?php echo json_encode($occupied)?>;
                            var time_array=<?php echo json_encode($occupied_time)?>;
                            var date_array=<?php echo json_encode($occupied_date)?>;
                            var pax_array=<?php echo json_encode($occupied_pax)?>;
                            var date=<?php echo json_encode($date)?>;
                            var time=<?php echo json_encode($time)?>;
                            let dt=new Date(date+'T'+time);
                            const reserved_array=[];
                            for(var i=0;i<array.length;i++){
                                
                                if(pax_array[i]>2)
                                reserved_array.push(new Reserved(pax_array[i],array[i],date_array[i],time_array[i]));
                            }
                            console.log(reserved_array);
                            
                       const seat=document.querySelectorAll('.seat');
                        for(var y=0;y<reserved_array.length;y++){
                                
                                if(reserved_array[y].getDate()==date){
                                    
                                    var pre_time=new Date(dt.getTime()-30*60*1000);
                                    var post_time=new Date(dt.getTime()+30*60*1000);
                                    var _time=new Date(reserved_array[y].getDate()+'T'+reserved_array[y].getTime());
                                    
                                    if(_time.getTime()===pre_time.getTime() || _time.getTime()===post_time.getTime() || _time.getTime()===dt.getTime()){
                                        for(var a=0;a<seat.length;a++){
                                            if(seat[a].getAttribute('data-value')==reserved_array[y].getTable()){
                                                seat[a].classList.toggle('unavailable');}
                                            }
                                        }
                                        
                                    
                                }
                                
                            
                        }
                        
                    for(var i=0;i<seat.length;i++){
                    if(!seat[i].classList.contains('unavailable')){
                            seat[i].classList.toggle('available');
                    }
                    
                        
                        }
                    
                    
    </script><?php }}?>
                    
                    
                   
                    
                    <form method="post" action="insert.php">
                        <center><p>You have selected the tables of <input type="text" id="tableNo" name="tableNo"  readonly>.<p></center>
                        <input type="hidden" name="name" value="<?php  echo $name?>"/>
                        <input type="hidden" name="email" value="<?php  echo $email?>"/>
                        <input type="hidden" name="phone" value="<?php  echo $phone?>"/>
                        <input type="hidden" name="date" value="<?php  echo $date?>"/>
                        <input type="hidden" name="time" value="<?php  echo $time?>"/>
                        <input type="hidden" name="pax" value="<?php  echo $pax?>"/>
                        
                        <center><input type="submit" class="button" name="Submit" value="Submit"/></center>
                        
                    </form>
    <center><button onclick="window.location.href='reservation.php'" class="button-cancel" name="Cancel">Cancel</button></center>
    <script>
        var data=<?php echo json_encode($API->getReservation());?>;
        const floorplan_container=document.querySelector('.floorplan-container');
        const seats=document.querySelectorAll('.seat.available');
        const available_twin=document.querySelectorAll('.twin-seat.available');
        var tableNum;
        const tableNo=document.getElementById('tableNo');
        function updateSelectedCount(x){
            const selectedSeats=document.querySelectorAll('.row .seat.selected');
           tableNum=x;
            tableNo.innerText=" "+tableNum;
            tableNo.value=tableNum;
        
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
    </a>
    
</body>
</html>