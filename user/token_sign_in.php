<?php
session_start();

include_once 'inc/db.inc.php';
include_once 'inc/config.inc.php';

function sem() {
    $month=date('m');
    if($month=='01'||$month=='02'||$month=='03'||$month=='04')
    return 'Winter';
    else if($month=='05'||$month=='06'||$month=='07')
    return 'Summer';
    else
    return 'Monsoon';
}

$id = $_REQUEST['tokenid'];
$a = file_get_contents("https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=" . $id);
$b = json_decode($a,1);

if($b['hd'] == "iiitd.ac.in"){
	$email = $b['email'];
    
	$banned_users = [];
	if(in_array($email, $banned_users)){
		echo 0;
		session_destroy();
	}
	else{

		
        	$sql = "SELECT * FROM users WHERE email = '$email'";
        	$result = mysqli_query($conn,$sql);
        	$row_count=mysqli_num_rows($result);
        	$user_pic = $b['picture'];
        	if($row_count == 0){
        			
        			if(1==1){
	        	    	$user_name = $b['name'];
	        	    	$user_email = $b['email'];
	        	        
	        	    	$sqlin = "INSERT INTO users (name, email, token, profile_pic)
						VALUES ('$user_name', '$user_email', '$id', '$user_pic')";
						$mq= mysqli_query($conn, $sqlin);
						$new_user_id = mysqli_insert_id($conn);
						if($mq){
						    $sqlin = "INSERT INTO users (name, email, token, profile_pic) VALUES ('$user_name', '$user_email', '$id', '$user_pic')";
						    $_SESSION['id'] = $new_user_id;
						    $_SESSION['name'] = $user_name;
						    $_SESSION['picture'] = $user_pic;
						    $_SESSION['email'] = $user_email;
						    $_SESSION['acadsession']= sem() . "_" . date('Y'); 
	
						    echo 1;
						}else{
						    print_r(mysqli_error($conn));
						}
        			}
        	}
        	else{
        	    while($row = mysqli_fetch_assoc($result))
            	{
            			$u_id =  $row["id"];
            			$sqlup = "UPDATE users SET profile_pic = '$user_pic' WHERE id=$u_id";
            			
    		        	$_SESSION['id'] = $u_id;
    					$_SESSION['name'] = $row['name'];
    					$_SESSION['picture'] = $user_pic;
    					$_SESSION['email'] = $row['email'];
    					$_SESSION['acadsession']= sem() . "_" . date('Y'); 
						mysqli_query($conn, $sqlup);
    					echo 1;
        	    }
        	}
        	
    	}
}
else
	echo 0;

?>