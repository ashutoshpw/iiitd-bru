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
<title> Application History</title>
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

<?php include "header.inc.php" ;?>


<div class="page-container ">




<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron" data-pages="parallax">
<div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Application History</li>
</ol>

<h2 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">Application History >></h2>

</div>
</div>
</div>


<div class=" container-fluid  ">

<div class="card card-transparent">
<div class="card-block">
<div class="table-responsive">
    
 <div class=" container    container-fixed-lg">
        
       
       <table id="myDataTable" class="table table-hover" cellspacing="0" width="100%">
     <thead>
                                                     <th>Name</th>

                                             
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            
                                            <th>Program</th>
                                            <th>Hostel</th>

                                        </thead>
                                        <tbody>
                                    <?php
                                    $name= "SELECT name,start_date, end_date, who_program_name, where_hostel_name FROM application where status=1";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                                                $str_p='';
                                                $str_h='';
                                                $name=$row2['name'];
                                				$start_date=date('j/F/Y',strtotime($row2['start_date']));
                                    	    	$end_date = date('j/F/Y',strtotime($row2['end_date']));
                                    	    	$who_program_name=$row2['who_program_name'];
                                    	    	$where_hostel_name = $row2['where_hostel_name'];
                                    	    	$prog=explode(',', $who_program_name);
                                    	    	$hostel=explode(',', $where_hostel_name);

                                    	    	foreach( $prog as $value ) {
                                    	    	 if($str_p==''){
                                    	    	 if($value==1)
                                    	    	 $str_p="Btech";
                                    	    	 else if($value==2)
                                    	    	 $str_p="Mtech";
                                    	    	 else if($value==3)
                                    	    	 $str_p="Phd";
                                    	    	 else if($value==4)
                                    	    	 $str_p="Phd Married";
                                    	    	 }
                                    	    	 else{
                                    	    	 if($value==1)
                                    	    	 $str_p=$str_p . "," . "Btech";
                                    	    	 else if($value==2)
                                    	    	 $str_p=$str_p . "," . "Mtech";
                                    	    	 else if($value==3)
                                    	    	 $str_p=$str_p . "," . "Phd";
                                    	    	 else if($value==4)
                                    	    	 $str_p=$str_p . "," . "Phd Married";
                                    	    	 }

                                          }
                                          
                                          foreach( $hostel as $value ) {
                                              if ($str_h==''){
                                    	    	 if($value==1)
                                    	    	 $str_h="Girls Hostel";
                                    	    	 else if($value==2)
                                    	    	 $str_h="Boys Hostel";
                                              }
                                              else{
                                                  if($value==1)
                                    	    	 $str_h=$str_h . "," . "Girls";
                                    	    	 else if($value==2)
                                    	    	 $str_h=$str_h . "," . "Boys";
                                              }
                                    	    	 

                                          }
                                    	    	
                                    	    	
                                    	    	?>
                                    	    	
                                    	    	 <tr>
                                    	    	   <td><?=$name;?></td>

                                                    <td><?=$start_date;?></td>
                                                    <td><?=$end_date;?></td>
                                                    <td><?=$str_p;?></td>
                                                    <td><?=$str_h;?></td>
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


<div class=" container-fluid   container-fixed-lg">
<div class="row">
<div class="col-lg-6">

<div class="card card-transparent">
<div class="card-header ">
<div class="card-title">Pages Striped Tables
</div>
<div class="tools">
<a class="collapse" href="javascript:;"></a>
<a class="config" data-toggle="modal" href="#grid-config"></a>
<a class="reload" href="javascript:;"></a>
<a class="remove" href="javascript:;"></a>
</div>
</div>


</div>

</div>
</div>



</div>




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
</body>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:52 GMT -->
</html>



<?php
else:
    echo "Not Logged In";
endif;

?>