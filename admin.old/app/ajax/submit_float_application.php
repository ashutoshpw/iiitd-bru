<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../inc/odb.inc.php";
include "../inc/config.inc.php";


$name=$_POST['name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
//$monthly_price = $_POST['monthly_price'];
//$semester_price = $_POST['semester_price'];
$programs=$_POST['check_list_programs'];
$hostels=$_POST['check_list_hostels'];
$external_allowed=(int)$_POST['external_allowed'];


$error = [];
if(strlen($start_date) < 2){
    $error[] = "Start Date is Not Correct";
}

if(strlen($end_date) < 2){
     $error[] = "End Date is Not Correct";
}

/*if(strlen($monthly_price) < 2){
     $error[] = "Monthly Price is Not Correct";
}

if(strlen($semester_price) < 2){
     $error[] = "Semester Price is Not Correct";
}

if($semester_price<$monthly_price){
     $error[] = "Semester Price is less than Monthly Price";
}*/

$dateTimestamp1 = strtotime($start_date);
$dateTimestamp2 = strtotime($end_date);
$diff= $dateTimestamp2-$dateTimestamp1;



if(count($error) == 0&& $diff>0){
    
    $stmt = $conn->prepare("INSERT INTO application (name,start_date, end_date,  who_program_name, where_hostel_name, session_id, external_allowed) VALUES (?,?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $name,$start_date, $end_date ,$programs, $hostels, $_SESSION['admin'], $external_allowed);
    
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>