<?php 
 session_start();
 //error_reporting(0);
    include "inc/config.inc.php";
    include "inc/db.inc.php";

    
    
    if($_SESSION['admin'] == 1):
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:48 GMT -->
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Pages - Admin Dashboard UI Kit - Tables</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="../../../../cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
<link class="main-stylesheet" href="style.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header menu-pin menu-behind">
<?php include "_sidebar.php";?>

<?php include "header.inc.php";?>



<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron" data-pages="parallax">
<div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Requests</a></li>
<li class="breadcrumb-item active">Recieved Requests</li>
</ol>

<h2 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">Recieved Requests >></h2>


</div>
</div>
</div>


<div class="container-fluid">
    
<div class"row" >
<div class="col-md-12">
<input type=button id="check_all" style="width:130px;" value="Check All" name="check_all">
<div class="table-responsive" style="position: relative; overflow: scroll; width: 100%;">
 <div id="example" class="container container-fixed-lg" >
        
       
       <table id="myDataTable" class="table table-hover" cellspacing="0" style="position: relative; overflow:scroll; width: 100%;" >
        
    <thead>
                                            <th>Roll No.</th>
                                            <th>Name</th>
                                            <th>Program</th>
                                            <th>Semester</th>
                                            <th>Room Type1</th>
                                            <th>Room Type2</th>
                                            <th>Hostel Type1</th>
                                            <th>Hostel Type2</th>

                                            <th>Distance (in kms.)</th>
                                            <th>Region</th>
                                            <th>Approve/disapprove</th>
                                            
                                            
                                        </thead>
                                        <tbody>
                             
                                    <?php
                                    

                                    $name= "SELECT * from hostel";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                                		    $hostel_types[$row2['id']]=$row2['name'];
                                		}}   
                                	$name= "SELECT student_profile.user_id,application_id,student_profile.distance,status,name,roll_no, batch, semester, program, pincode, room_type_1, room_type_2, hostel_type_1,hostel_type_2 FROM student_profile, request_table WHERE student_profile.id=request_table.user_id and request_table.status=0";
                                        	
                                   // $received_requests_result1 = mysqli_query($conn,$sql);
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                            
                                				$application_id=$row2['roll_no'];
                                    	    	$name = $row2['name'];
                                    	    	$program=$row2['program'];
                                    	    	$semester=$row2['semester'];
                                    	    	$distance=$row2['distance'];
                                    	    	$pincode=$row2['pincode'];
                                    	    	$status=$row2['status'];
                                    	    	$room_type1=$row2['room_type_1'];
                                    	    	$room_type2=$row2['room_type_2'];
                                    	    	$hostel_type1=$row2['hostel_type_1'];
                                    	    	$hostel_type2=$row2['hostel_type_2'];

                                                $hostel_type1=$hostel_types[$hostel_type1];
                                                $hostel_type2=$hostel_types[$hostel_type2];
                                                
                                                if ($room_type1==1)
                                               $room_type1='Single';
                                               if ($room_type1==2)
                                               $room_type1='Double';
                                               if ($room_type1==3)
                                               $room_type1='Triple';
                                               if ($room_type1==4)
                                               $room_type1='Dormitory';
                                               
                                                if ($room_type2==1)
                                               $room_type2='Single';
                                               if ($room_type2==2)
                                               $room_type2='Double';
                                               if ($room_type2==3)
                                               $room_type2='Triple';
                                               if ($room_type2==4)
                                               $room_type2='Dormitory';

                                                if(preg_match("/^1100[0-9][0-9]/", $pincode)){
                                                    $region="Delhi";
                                                } else{
                                                    $region="Outside Delhi";
                                                }
                                    	    	?>
                                    	    	
                                    	    	 <tr>
                                                    <td><?=$application_id;?></td>
                                                    <td><?=$name;?></td>
                                                    <td><?=$program;?></td>
                                                    <td><?=$semester;?></td>
                                                    <td><?=$room_type1;?></td>
                                                    <td><?=$room_type2;?></td>
                                                    <td><?=$hostel_type1;?></td>
                                                    <td><?=$hostel_type2;?></td>

                                                    <td><?=$distance;?></td>
                                                    <td><?=$region;?></td>
                                                     
                                                      <td><input type="checkbox" name="allot_rooms[]"  id="allot_rooms" placeholder="allot_rooms" value="<?php echo $row2['user_id']; ?>" ></td>

                                                 </tr>
                                        <?php
                                        }
                                           
                                       }
                                    ?>
                                    
       
                                          
    </tbody>
</table>
        <form method=post align="center">
            
        <input type=submit class="btn btn-success" style="width:130px; background-color:#00C598;" value=Accept name=accept id=accept>
        <input type=submit class="btn btn-danger" style="width:130px;" value=Reject name=reject id=reject>

        </form>

</div>
</div>

</div>
</div>
</div>

</div>









</div>

</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/.user-profilejs/lodash.min.js"></script>

<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="pages/js/pages.min.js"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>


<script type="text/javascript" src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js"></script>
<script src="assets/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript"></script>
<script src="assets/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
     $('#myDataTable').DataTable(
        
);
});
</script>


<script src="assets/js/tables.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>


<script src="assets/js/demo.js" type="text/javascript"></script>

<script>
		 window.intercomSettings = {
		   app_id: "xt5z6ibr"
		 };
		</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/xt5z6ibr';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</body>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:52 GMT -->
</html>

<script type="text/javascript">
        $(document).ready(function(){
            
            $("#check_all").click(function(){
                 if ($(this).val() == 'check_all') {
                       $('input[name="allot_rooms[]"]').prop('checked', true);
                    $(this).val('Uncheck All');
                } else {
                $('input[name="allot_rooms[]"]').prop('checked', false);
                    $(this).val('check_all');
                }
             });
         
         
            $("#accept").click(function(){
             var allot_rooms = [];
                $('input[name="allot_rooms[]"]:checked').each(function(i, e) {
                   allot_rooms.push($(this).val());
                });
                
             data = {
                     status:'1',
                     check_list_allot_rooms:allot_rooms.join(',')

                     
                   };

                   $.post("ajax/submit_received_requests.php",data,function(r){
                       

                       console.log(r);
                   });
            });
            
            $("#reject").click(function(){
             var allot_rooms = [];
                $('input[name="allot_rooms[]"]:checked').each(function(i, e) {
                   allot_rooms.push($(this).val());
                   console.log("You are here");
                });
              data = {
                     status:'0',
                     check_list_allot_rooms:allot_rooms.join(',')
                   };
                   $.post("ajax/submit_received_requests.php",data,function(r){
                       
                       console.log(r);
                   });
            });
        });
    </script>
    mysqli_close($conn);
<?php
else:
    echo "Not Logged In";
endif;

?>