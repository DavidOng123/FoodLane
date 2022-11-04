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
    $data[]=array("ReservationID"=>$row["ReservationID"],"CustID"=>$row["CustID"],"Pax"=>$row["Pax"],"TableNo"=>$row["TableNo"],"Date"=>$row["Date"],"Time"=>$row["Time"]);
   
}
return json_encode($data);
}
}
