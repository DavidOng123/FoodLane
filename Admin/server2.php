
<?php
$conn = new mysqli('localhost','root','','foodlane');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}