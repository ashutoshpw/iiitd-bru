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

</div>
</div>
</div>


<div class=" container-fluid">
<div class="row">
    <h5> Allot Rooms</h5>
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
                                            <th>Approve/disapprove</th>
                                            <th>Allot Rooms</th>
                                        </thead>
                                        <tbody>
                             
                                    <?php
                                    

                                    //$sql = "SELECT user_id, application_id, distance, status FROM request_table";
                                    $name= "SELECT student_profile.user_id,application_id,student_profile.distance,status,name,roll_no, batch, semester, program, pincode, room_type_1, room_type_2, hostel_type_1,hostel_type_2 FROM student_profile, request_table WHERE student_profile.id=request_table.user_id and request_table.status='Approved'";
                                        	
                                   // $received_requests_result1 = mysqli_query($conn,$sql);
                                    $received_requests_result2= mysqli_query($conn,$name);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                            
                                				$application_id=$row2['application_id'];
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
                                                    <td><?=$status;?></td>
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

<div class=" container-fluid  container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">Copyright &copy; 2017 </span>
<span class="font-montserrat">REVOX</span>.
<span class="hint-text">All rights reserved. </span>
<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
</p>
<p class="small no-margin pull-right sm-pull-reset">
Hand-crafted <span class="hint-text">&amp; made with Love</span>
</p>
<div class="clearfix"></div>
</div>
</div>



</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">
 
<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>

</div>



</div>

</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">
 
<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">
 
<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
</div>
</div>
</div>

</div>







</div>

</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">
 
<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




</div>
</div>
</div>
</div>
</div>

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






</div>

</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">
 
<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane no-padding" id="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dea" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dean</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
n</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

 </ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
 </a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-te<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
<div class="p-l-30 p-r-30 ">
<a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
<a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
<ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10" id="builderTabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabLayouts" role="tab" aria-controls="home"><span>Layouts</span></a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tabThemes" role="tab" aria-controls="profile"><span>Colors</span></a>
</li>
</ul>
<div class="tab-content m-b-30 p-l-30">
<div class="tab-pane active " id="tabLayouts" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Layout options
</h5>
<p class="no-margin">
Builder make it easier
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<div class="row p-b-35">
<div class="col-6 ">
<a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="assets/img/demo/menu_divided_con.png" data-src="assets/img/demo/menu_divided_con.png" data-src-retina="assets/img/demo/menu_divided_con_2x.png" width="126" height="95">
<span class="text-dark m-t-5">Divided Header & Condensed / Quick
Menu</span></a>
</div>
<div class="col-6">
<a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
<img alt="Full header icon" class="m-b-15 " src="assets/img/demo/full_header_con.png" data-src-retina="assets/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
Menu</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane " id="tabThemes" role="tabcard">
<div class="scrollable">
<div class="p-l-10 p-r-50">
<h5 class="semi-bold">
Color Options
</h5>
<p class=" hint-text no-margin">
Color makes it different
</p>
<p class="small hint-text m-b-20">
Customize and Preview your dashboard.
</p>
<a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
<img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
<span class="fs-11">pages default color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
<img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
<span class="fs-11">give your an a profesional look</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
<img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
 </a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
<img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
<img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
<a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
<img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
<div class="p-l-15 p-r-20 p-b-10 p-t-10">
<p class="no-margin">
<span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
<span class="fs-11">calm color palette</span>
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
<div class="pull-left">
<span class="font-arial fs-12 hint-text">Toggle</span>
<span class="inline font-montserrat fs-12 bold">RTL</span>
<div class="inline">
<input id="rtl-switch" class="" type="checkbox" data-size="small" data-init-plugin="switchery" />
</div>
</div>
<div class="pull-right">
<form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
<input type="hidden" name="layout" id="layout" value="1">
<input type="hidden" name="colors" id="colors" value="1">
<input type="hidden" name="content" id="content" value="1">
<button id="btnExport" class="btn btn-cons btn-primary">Export</button>
</form>
</div>
</div>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via google plus</p>
</div>
</div>

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
            
                
             data = {
                     
                   };

                   $.post("ajax/auto_allot.php",data,function(r){
                       //ans= r.substring(1, r.length-2).split(",");
                       //alert(ans.length);
                       
                       p = JSON.parse(r);
                       for (var key in p) {
                            if (p.hasOwnProperty(key)) {
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
                       alert(r);

                       console.log(r);
                   });
            });
            
           
        });
    </script>

<?php
else:
    echo "Not Logged In";
endif;

?>