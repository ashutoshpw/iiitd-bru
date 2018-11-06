<?php 
 session_start();
 //error_reporting(0);
    include "inc/config.inc.php";
    include "inc/db.inc.php";

    
    
    if($_SESSION['admin'] == 1):
?>


<?php include "header.inc.php";?>

<!DOCTYPE html>
<html>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:48 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Allot Rooms</title>

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
</head>
<body class="fixed-header menu-pin menu-behind">
<?php include "_sidebar.php";?>



<div class="page-container ">



<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron" data-pages="parallax">
<div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Requests</a></li>
<li class="breadcrumb-item active">Allot Rooms</li>
</ol>

<h2 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">Allot Rooms >></h2>


</div>
</div>
</div>


<div class=" container-fluid">
<div class="row">
 <div class="col-md-12">
     
 <input type=button id=auto_fill value=Auto-fill name=auto_fill>
<input type=button id=auto_allocation value=Auto-allocation name=auto_allocation>
     



<div class="table-responsive" style="position: relative; overflow: auto; width: 100%;">
 <div id="myTable" class="container container-fixed-lg">
        <table id="myDataTable" class="table table-hover" cellspacing="0" width="100%"  style="position: relative; overflow:scroll; width: 100%;">
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
                                            
                                            <th>Allot Rooms</th>
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
                                		//$applicationid=$_POST['application_id'];
                                		//echo $applicationid;
                                		$sem=$_SESSION['acadsession'];
                                    $n= "SELECT student_profile.user_id,application_id,student_profile.distance,status,name,roll_no, batch, semester, program, pincode, room_type_1, room_type_2, hostel_type_1,hostel_type_2 FROM student_profile, request_table WHERE student_profile.id=request_table.user_id and request_table.status=1 and request_table.alloted=0 and request_table.acadsession='$sem'";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$n);
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
                                               
                                               /*if ($hostel_type2==1)
                                               $hostel_type2='Boys';
                                               else if ($hostel_type2==2)
                                               $hostel_type2='New Boys';
                                               else if ($hostel_type2==3)
                                               $hostel_type2='Girls';*/
                                               
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
                                                
                                                 <td><input type="text" name="allot_rooms[]"   placeholder="allot_rooms" id="<?php echo $row2['user_id']; ?>" class=auto></td>
                                                 </tr>
                                        <?php
                                        }
                                           
                                       }
                                    ?>
                                          
    

        
       
    </tbody>
</table>
  

</div>

</div>
</div>
</div>


</div>




</div>


<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>


<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->

<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>


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
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>


<script src="pages/js/pages.min.js"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>


<script type="text/javascript" src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js"></script>
<script src="assets/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript"></script>
<script src="assets/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript"></script>


<script>
$(document).ready(function() {
     $('#myDataTable').DataTable();
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
<script type="text/javascript">
$(document).ready(function(){
    var myjson;
    $( ".auto").focus(function() {
         $.getJSON("test.php",callbackFunction);
    });
    function callbackFunction(data)
    {
         myjson = data;
         $(".auto" ).autocomplete({source: myjson});
    }
    
    jQuery.curCSS = function(element, prop, val) {
            return jQuery(element).css(prop, val);
    };
});
</script>
</body>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:52 GMT -->
</html>


<script type="text/javascript">
        $(document).ready(function(){

         $("#auto_fill").click(function(){
            
                var selValue = $('input[name=applicationid]:checked').val(); 

             data = {
                     //applicationid=selValue
                   };

                   $.post("ajax/auto_allot.php",data,function(r){
                       //ans= r.substring(1, r.length-2).split(",");
                       //alert(ans.length);
                       p = JSON.parse(r);
                       console.log(p.canApprove);

                       for (var key in p) {
                            if (p.hasOwnProperty(key)) {
                                //alert (key);

                                document.getElementById(key).value = p[key];
                                console.log(key + " -> " + p[key]);
                            }
                        }
                       console.log(p);
                       // use json
                       
                    //   for (i = 0; i <ans.length; i++) { 
                    //     var ans2=ans[i].split(":");
                    //     alert(ans2);
                    //     $("#"+ans2[0]).val(ans2[1].slice(2,-1));
                    //   }
                    
                    //console.log(r);
                    
                   });
            });
            
            
            
            $("#auto_allocation").click(function(){
               var allot_rooms = [];
               var allot_rooms_userid = [];

                $('input[name="allot_rooms[]"]').each(function() {
                     //alert($(this).val());
                     allot_rooms.push($(this).val());
                     allot_rooms_userid.push($(this).attr('id'));
                });
                              
                
             data = {

                    check_list_allot_rooms:allot_rooms.join(','),
                    check_list_allot_rooms_userid:allot_rooms_userid.join(',')

                   };

                   $.post("ajax/submit_allot_rooms.php",data,function(r){
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