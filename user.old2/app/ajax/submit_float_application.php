<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../inc/odb.inc.php";
include "../inc/config.inc.php";

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$monthly_price = $_POST['monthly_price'];
$semester_price = $_POST['semester_price'];
$error = [];
if(strlen($start_date) < 2){
    $error[] = "Start Date is Not Correct";
}

if(strlen($end_date) < 2){
     $error[] = "Start Date is Not Correct";
}

if(strlen($monthly_price) < 2){
     $error[] = "Start Date is Not Correct";
}

if(strlen($semester_price) < 2){
     $error[] = "Start Date is Not Correct";
}

if(count($error) == 0){
    $stmt = $conn->prepare("INSERT INTO application (start_date, end_date, who_program_name, where_hostel_name, session_id, external_allowed) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $start_date, $end_date, $who, $where, $session, $ext);
    $who = "btech";
    $where = "1,2";
    $session = "1";
    $ext = 0;
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>