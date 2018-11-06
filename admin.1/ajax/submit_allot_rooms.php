<?php

session_start();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../inc/odb.inc.php";
include "../inc/config.inc.php";

$room_number=$_POST['check_list_allot_rooms'];
$userid=$_POST['check_list_allot_rooms_userid'];


$myArray = explode(',', $room_number);
$useridArray=explode(',', $userid);
$total = count($myArray);


for( $i = 0; $i < $total; $i++ ) {
    
    $room_details = explode('_', $myArray[$i]);
    
    if(sizeof($room_details)==4){

    $room_id=(int)$room_details[0];

    $hostel=$room_details[3];

    $room_type=$room_details[2];

    $room_number=$room_details[1];
    echo $room_id;
    
    $sql = "update room set status=1 , temp_status=1 where id=$room_id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
   $query = "insert into alloted_students (user_id,room_id,hostel,room_type,room_number) values (?,?,?,?,?)";
   $stmt = $conn->prepare($query);
   $stmt->bind_param("iisss", $useridArray[$i],$room_id, $hostel, $room_type, $room_number);

   if ($stmt->execute()) { 
   // it worked
   } else {
      print_r($stmt->error);
   }
   
    $sql = "update request_table set alloted=1,room_id=$room_id where id=$useridArray[$i]";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    }
    

}


?>