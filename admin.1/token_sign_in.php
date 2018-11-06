<?php
session_start();

include_once 'inc/db.inc.php';
include_once 'inc/config.inc.php';

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
        //print_r($b);
// if admin set session admin to 1
// else check entry in table : if exits sign in else insert a new row and set session
		if(in_array($b['email'],$config['admins'])){
        	$_SESSION['admin'] = 1;
        	$_SESSION['id'] = 1;
			$_SESSION['name'] = $b['name'];
			$_SESSION['picture'] = $b['picture'];
			$_SESSION['email'] = $email;
		}
    	else{
        	$_SESSION['admin'] = 0;
        	$sql = "SELECT * FROM users WHERE email = '$email'";
        	$result = mysqli_query($conn,$sql);
        	$row_count=mysqli_num_rows($result);
        	if($row_count == 0){
        	    	$user_name = $b['name'];
        	    	$user_email = $b['email'];
        	        $user_pic = $b['picture'];
        	    	$sqlin = "INSERT INTO users (name, email, token, profile_pic)
					VALUES ('$user_name', '$user_email', '$id', '$user_pic')";
					$mq= mysqli_query($conn, $sqlin);
					$new_user_id = mysqli_insert_id($conn);
					if($mq){
					    $_SESSION['id'] = $new_user_id;
					    $_SESSION['name'] = $user_name;
					    $_SESSION['picture'] = $user_pic;
					    $_SESSION['email'] = $user_pic;
					    $_SESSION['admin'] = 1;
					    echo 1;
					}else{
					    print_r(mysqli_error($conn));
					}
        	}
        	else{
        	    while($row = mysqli_fetch_assoc($result))
            	{
            	
            		    $_SESSION['admin'] = 1;
    		        	$_SESSION['id'] = $row["id"];
    					$_SESSION['name'] = $row['name'];
    					$_SESSION['picture'] = $row['profile_pic'];
    					$_SESSION['email'] = $row['email'];
    					echo 1;
        	    }
        	}
        	
    	}
	}
	

}
else
	echo 0;

?>