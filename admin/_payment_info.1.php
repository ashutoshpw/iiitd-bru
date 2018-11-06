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
<title> All - Students</title>
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

<div class="header ">

<a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
</a>

<div class="">
<div class="brand inline  m-l-10 ">
<img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
</div>

<ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
<li class="p-r-10 inline">
<div class="dropdown">
<a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
<span class="bubble"></span>
</a>

<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

<div class="notification-panel">

 <div class="notification-body scrollable">

<div class="notification-item unread clearfix">

<div class="heading open">
<a href="#" class="text-complete pull-left">
<i class="pg-map fs-16 m-r-10"></i>
<span class="bold">Carrot Design</span>
<span class="fs-12 m-l-10">David Nester</span>
</a>
<div class="pull-right">
<div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
<div><i class="fa fa-angle-left"></i>
</div>
</div>
<span class=" time">few sec ago</span>
</div>
<div class="more-details">
<div class="more-details-inner">
<h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
distinguishes between <br>
A leader and a follower.”</h5>
<p class="small hint-text">
Commented on john Smiths wall.
<br> via pages framework.
</p>
</div>
</div>
</div>


<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
<a href="#" class="mark"></a>
</div>

</div>


<div class="notification-item  clearfix">
<div class="heading">
<a href="#" class="text-danger pull-left">
<i class="fa fa-exclamation-triangle m-r-10"></i>
<span class="bold">98% Server Load</span>
<span class="fs-12 m-l-10">Take Action</span>
</a>
<span class="pull-right time">2 mins ago</span>
</div>

<div class="option">
<a href="#" class="mark"></a>
</div>

</div>


<div class="notification-item  clearfix">
<div class="heading">
<a href="#" class="text-warning-dark pull-left">
<i class="fa fa-exclamation-triangle m-r-10"></i>
<span class="bold">Warning Notification</span>
<span class="fs-12 m-l-10">Buy Now</span>
</a>
<span class="pull-right time">yesterday</span>
</div>

<div class="option">
<a href="#" class="mark"></a>
</div>

</div>


<div class="notification-item unread clearfix">
<div class="heading">
<div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
<img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
</div>
<a href="#" class="text-complete pull-left">
<span class="bold">Revox Design Labs</span>
<span class="fs-12 m-l-10">Owners</span>
</a>
<span class="pull-right time">11:00pm</span>
</div>

<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
<a href="#" class="mark"></a>
</div>

</div>

</div>


<div class="notification-footer text-center">
<a href="#" class="">Read all notifications</a>
<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
<i class="pg-refresh_new"></i>
</a>
</div>

</div>

</div>

</div>
</li>
<li class="p-r-10 inline">
<a href="#" class="header-icon pg pg-link"></a>
</li>
<li class="p-r-10 inline">
<a href="#" class="header-icon pg pg-thumbs"></a>
</li>
</ul>

<a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
</div>
<div class="d-flex align-items-center">

<div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
<span class="semi-bold">David</span> <span class="text-master">Nest</span>
</div>
<div class="dropdown pull-right hidden-md-down">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 circular inline">
<img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
<a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
<a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
<a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
<a href="#" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Logout</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div>

<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
</div>
</div>


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

</div>
</div>
</div>


<div class=" container-fluid   container-fixed-lg bg-white">

<div class"row" >

<div class="col-md-12">
<div class="card-header ">

</div>
<div class="card-block">
<div class="table-responsive">
 <div class=" container    container-fixed-lg">
        <h5> Enrolled Students</h5>
       
       <table id="myDataTable" class="table table-hover" cellspacing="0" width="100%" >
    <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Program </th>
                                            <th>Hostel</th>
                                            <th>Room Type</th>
                                            <th>Distance</th>
                                            <th>Room Number</th>
                                            


                                        </thead>
                                        <tbody>
                                     <?php
                                    $name= "SELECT student_profile.user_id,name,program,room_type,distance,room_number, hostel FROM alloted_students, student_profile WHERE student_profile.user_id=alloted_students.user_id";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                   
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                            
                                				$user_id=$row2['user_id'];
                                    	    	$name = $row2['name'];
                                    	    	$program=$row2['program'];
                                    	    	$room_type = $row2['room_type'];
                                    	    	$distance=$row2['distance'];
                                    	    	$room_number=$row2['room_number'];
                                    	    	
                                    	    	$hostel = $row2['hostel'];
                                    	    	?>
                                    	    	
                                    	    	 <tr>
                                                    <td><?=$user_id;?></td>
                                                    <td><?=$name;?></td>
                                                    <td><?=$program;?></td>
                                                    <td><?=$hostel;?></td>
                                                    <td><?=$room_type;?></td>
                                                    <td><?=$distance;?></td>
                                                    <td><?=$room_number;?></td>

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

<script type="text/javascript">
        $(document).ready(function(){
            $("#accept").click(function(){
            
            data = {
                     status:'1'
                     
                   };
                   $.post("ajax/submit_received_requests.php",data,function(r){
                       console.log(r);
                   });
            });
            
            $("#reject").click(function(){
            
            data = {
                     status:'0'
                     
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