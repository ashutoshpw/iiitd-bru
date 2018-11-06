<?php 
 session_start();
    include "../app/inc/config.inc.php";
    include "../app/inc/db.inc.php";

    
    
    if($_SESSION['admin'] == 1):
?>

<?php
     $name=$_POST["name"];
     $start_date=$_POST["start_date"];
     $end_date=$_POST["end_date"];
     $semester_price=$_POST["semester_price"];
     $monthly_price=$_POST["monthly_price"];
     
     foreach($_POST['check_list'] as $item)
     {
     	echo $item;
	 }
     
     /*$sqlin = "INSERT INTO application (name,start_date,end_date,semester_price,monthly_price,who_program_name)
					VALUES ('$name', '$start_date', '$end_date', '$semester_price','$monthly_price')";
					$mq= mysqli_query($conn, $sqlin);
					$new_user_id = mysqli_insert_id($conn);
						if($mq){
					    
					    echo 1;
					}else{
					    print_r(mysqli_error($conn));
					}*/
                                    
?>

<?php
else:
    echo "Not Logged In";
endif;

?>