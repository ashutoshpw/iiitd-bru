<?php 
 session_start();
    include "../app/inc/config.inc.php";
    include "../app/inc/db.inc.php";

    
    
    if($_SESSION['admin'] == 1):
?>

<?php
     $name=$_POST["name"];
     $application_id=$_POST["application_id"];
     $distance=$_POST["distance"];
     $room_type=$_POST["room_type"];
     $request_date=$_POST["request_date"];
     
     
     $sqlin = "INSERT INTO request_table (user_id,application_id,distance,room_type,request_date)
					VALUES ('$name', '$application_id', '$distance', '$room_type','$request_date')";
					$mq= mysqli_query($conn, $sqlin);
					$new_user_id = mysqli_insert_id($conn);
						if($mq){
					   
					    echo 1;
					}else{
					    print_r(mysqli_error($conn));
					}
                                    
?>

<?php
else:
    echo "Not Logged In";
endif;

?>