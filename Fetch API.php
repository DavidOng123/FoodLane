<?php
require_once ('DB.php');

class FetchAPI {

function getReservation(){
  $database=new DB();  
$query="SELECT * FROM reservation";
$stmt=$database->con->prepare($query);
$stmt->execute();
$data= array();

while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    $data[]=array("ReservationID"=>$row["reservationID"],"Pax"=>$row["pax"],"TableNo"=>$row["tableNo"],"Date"=>$row["date"],"Time"=>$row["time"]);
   
}
return json_encode($data);
}
}
