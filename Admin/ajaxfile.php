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
   $searchQuery .= " and (CustName like '%".$searchValue."%' or
            Email like '%".$searchValue."%' or
            Address like'%".$searchValue."%' ) ";
}
 
## Total number of records without filtering
$sel = mysqli_query($conn,"select count(*) as allcount from customer");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];
 
## Total number of records with filtering
$sel = mysqli_query($conn,"select count(*) as allcount from customer WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];
 
## Fetch records
$empQuery = "select * from customer WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
 
$data = array();
 
while($row = mysqli_fetch_assoc($empRecords)){
    $salary = $row['PhoneNum'];
    $salaryarray = " $salary";
    $data[] = array(
            "CustID"=>$row['CustID'],
            "CustName"=>$row['CustName'],
            "Email"=>$row['Email'],
            "PhoneNum"=>$salaryarray,
            "Address"=>$row['Address']
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