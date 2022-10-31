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
    $data[]=array("ReservationID"=>$row["ReservationID"],"CustID"=>$row["CustID"],"Pax"=>$row["Pax"],"TableNo"=>$row["TableNo"],"Date_Time"=>$row["Date_Time"]);
    $post_data= $data;
}
return json_encode($post_data);
}
}
