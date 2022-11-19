<?php
include('server2.php');
$draw = $_POST['draw'];  
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($conn,$_POST['search']['value']); // Search value
 

## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery .= " and (guestName like '%".$searchValue."%' or
            date like '%".$searchValue."%' or
            tableNo like'%".$searchValue."%' ) ";
}
 

## Total number of records without filtering
$sel = mysqli_query($conn,"select count(*) as allcount from reservation");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];
 
## Total number of records with filtering
$sel = mysqli_query($conn,"select count(*) as allcount from reservation WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];
 
## Fetch records
$empQuery = "select * from reservation WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
 
$data = array();
 
while($row = mysqli_fetch_assoc($empRecords)){
    $salary = $row['tableNo'];
    $salaryarray = " $salary";
    $data[] = array(
            "reservationID"=>$row['reservationID'],
            "guestName"=>$row['guestName'],
            "guestEmail"=>$row['guestEmail'],
            "guestPhone"=>$row['guestPhone'],
            "pax"=>$row['pax'],
            "date"=>$row['date'],
            "time"=>$row['time'],
            "tableNo"=>$salaryarray,
            "tableNo"=>$row['tableNo']
        );
}
 
## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);
 
echo json_encode($response);
 
?>