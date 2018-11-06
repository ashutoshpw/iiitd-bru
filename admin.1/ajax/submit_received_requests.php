<?php
session_start();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../inc/odb.inc.php";
include "../inc/config.inc.php";

$application_id=$_POST['check_list_allot_rooms'];
$status=$_POST['status'];

$myArray = explode(',', $application_id);


foreach( $myArray as $value ) {
if($status==0)
{
$sql = "update request_table set status='Rejected' where application_id=$value";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

else
{
$sql = "update request_table set status='Approved' where application_id=$value";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}

$conn->close();

?>