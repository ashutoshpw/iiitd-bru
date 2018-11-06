<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include "inc/odb.inc.php";

$db_servername = "ftp.sgp-21.host-webserver.com";
$db_username = "apinet_bru";
$db_password = "54QHbPiF";
$db_name = "apinet_bru";

$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

include "inc/config.inc.php";

$name= "SELECT * from hostel";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                                		    $hostel_types[$row2['id']]=$row2['name'];
                                		}}   
//$sql = "SELECT user_id, application_id, distance, status FROM request_table";
$name= "SELECT id,room_number,room_type,hostel_id FROM room where status = 0 and temp_status=0";

// $received_requests_result1 = mysqli_query($conn,$sql);
$received_requests_result2= mysqli_query($conn,$name);
$received_requests_row_count=mysqli_num_rows($received_requests_result2);
   if($received_requests_row_count>0)
   {
	while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
	{
	   $room_type=$row2['room_type'];
	    if ($room_type==1)
       $room_type='Single';
       if ($room_type==2)
       $room_type='Double';
       if ($room_type==3)
       $room_type='Triple';
       if ($room_type==4)
       $room_type='Dormitory';
       $data[] = $row2['id'] . "_" . $row2['room_number'] . "_" . $room_type . "_" .$hostel_types[$row2['hostel_id']];
	}
    print_r(json_encode($data));
   }
?>