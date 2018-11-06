
<?php 
 session_start();
    include "inc/config.inc.php";
    include "inc/db.inc.php";
    //echo '<script> alert("'.$_SESSION['acadsession'].'")</script>';
    if($_SESSION['admin'] == 1):
    
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:41 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Float Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<!--<script src="../../../../cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script>-->
<link rel="apple-touch-icon" href="pages/ico/60.png">
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
<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />


<link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header menu-pin menu-behind">
 
 
<?php
echo "Hello";
include "_sidebar.php";
echo "umesh";
?>
<div class="page-container ">

<?php include "header.inc.php";?>


<div class="page-content-wrapper ">


 <div class="content ">
<div class="jumbotron" data-pages="parallax"> 

<div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Requests</a></li>
<li class="breadcrumb-item active">Float Application</li>
</ol>

<h2 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">Float Application >></h2>


<div class="row">
<div class="col-xl-7 col-lg-6 ">



<div class="card card-transparent">
<div class="card-block">
<form method=post name="myForm" id="myForm" class="myForm" action="/ajax/submit_float_application.php">
<!--<form id="form-personal" role="form" autocomplete="off">-->
<div class="col-md-12">
<div class="form-group form-group-default required">
<label>Name</label>
<input type="text" class="form-control" name="name" id="name"  placeholder="Name"  >
</div>
<div class="row clearfix">
<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Start Date</label>
<input type="date" class="form-control" name="start_date" id="start_date"  placeholder="Start Date" >
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default required">
<label>End Date</label>
<input type="date" class="form-control" name= "end_date" id="end_date"  placeholder="End Date" >
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
 <style>
  .programs label.s{
   display:inline-block;
   color:#000!important;
  }
  .programs input{
    padding:20px;
  }
 </style>
<div class="form-group form-group-default programs">
 

<label>Programs</label>
  <input type="checkbox" name="check_list_programs[]" id="programs1" placeholder="programs" value=1> <label class="s" for="programs1">B.Tech</label><br>
  <input type="checkbox" name="check_list_programs[]" id="programs2" placeholder="programs" value=2> <label class="s" for="programs2">M.Tech</label><br>
  <input type="checkbox" name="check_list_programs[]" id="programs3" placeholder="programs" value=3> <label class="s" for="programs3">Ph.D.</label><br>
  <input type="checkbox" name="check_list_programs[]" id="programs4" placeholder="programs" value=4> <label class="s" for="programs4"> Ph.D. (Married)</label><br>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Hostel Type</label>
  <?php
  
  
 $floated=0;

  $n= "SELECT * from hostel";
                                        	
                                    $received_requests_result2= mysqli_query($conn,$n);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
  ?><input type="checkbox" name="check_list_hostels[]" id="hostels" placeholder="hostels" value="<?php echo $row2['id']; ?>"> <?=$row2['name']?><br><?php
                                		}}   
                                		
                                		$sem=$_SESSION['acadsession'];
                                		$n= "SELECT * from application where acadsession='$sem'";
                                    $received_requests_result2= mysqli_query($conn,$n);
                                    $received_requests_row_count=mysqli_num_rows($received_requests_result2);
                                       if($received_requests_row_count>0)
                                       {
                                		while ( $row2 = mysqli_fetch_assoc($received_requests_result2))
                                		{
                                        $floated=$row2['status'];
                                		}}  
                                	
 ?>

</div>
</div>


</div>
<div class="row">
 <div class="col-md-12">
<div class="form-group form-group-default">
  <input type="checkbox" name="external_allowed" id="external_allowed"  value=1> External Allowed<br>
</div>
</div>
</div>

 <div class="row">
   
                                 <div class="col-md-12" align="center">
                                  <div class="form-group" align="center">
                                   <?php if ($floated==0 || $floated==2):?>
                                      <input type="submit" id="submit_form" name="submit_form" class="btn btn-info btn-fill " style="background: #00A0B0!important; width:130px;" ></div>
                                      <?php 
                                      else:?>
                                      <input type="submit" id="submit_form" name="submit_form" class="btn btn-info btn-fill " style="background: #00A0B0!important ; width:130px;" value=Edit ></div>
                                      
                                      <input type="submit" id="submit_form" name="submit_form" class="btn btn-info btn-fill " style="background: #00A0B0!important; width:130px;" value=Delete></div>
                                      <?php
                                      endif;
                                      ?>
                                      
                                      
                                  </div>
                                 </div>
           </div>
   </form>
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
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="pages/js/pages.min.js"></script>


<script src="assets/js/form_layouts.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script type="text/javascript">


</body>
</html>


   mysqli_close($conn);

<?php
else:
endif;

?>
 