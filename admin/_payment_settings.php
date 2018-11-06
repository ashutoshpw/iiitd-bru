
<?php 
 session_start();
    include "inc/config.inc.php";
    include "inc/db.inc.php";
   // echo '<script> alert("'.$_SESSION['admin'].'")</script>';
    if($_SESSION['admin'] == 1):
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/corporate/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 18:15:41 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Payment Settings</title>
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
<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">


<link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header menu-pin menu-behind">
 
 
<?php include '_sidebar.php';?>

<div class="page-container ">
<?php include "header.inc.php";?>

<div class="page-content-wrapper ">

 <div class="content ">

<div class=" container-fluid   container-fixed-lg">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Payment</a></li>
<li class="breadcrumb-item active">Payment Settings</li>
</ol>

<h2 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">Payment Settings >></h2>


<div class="row">
<div class="col-xl-7 col-lg-6 ">

<div class="card card-transparent">
<div class="card-block">
<form method=post name="myForm" id="myForm" class="myForm" action="/ajax/submit_payment_settings.php">
<!--<form id="form-personal" role="form" autocomplete="off">-->
<div class="col-md-12">

<label> Single Room </label>
<div class="row clearfix">
<div class="col-md-12">
<div class="form-group form-group-default required">
<label>Semesterly Price</label>
<input type="number" step='any' class="form-control" name="singles" id="singles"  placeholder="Amount"  >
</div>
</div>
<!--<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Monthly Price</label>
<input type="number" step='any' class="form-control" name="singlem" id="singlem"  placeholder="Amount"  >
</div>
</div>!-->
</div>
<label> Double Room </label>
<div class="row clearfix">
<div class="col-md-12">
<div class="form-group form-group-default required">
<label>Semesterly Price</label>
<input type="number"step='any' class="form-control" name="doubles" id="doubles"  placeholder="Amount"  >
</div>
</div>
<!--<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Monthly Price</label>
<input type="number" step='any' class="form-control" name="doublem" id="doublem"  placeholder="Amount"  >
</div>
</div>-->
</div>

<label> Triple Room </label>
<div class="row clearfix">
<div class="col-md-12">
<div class="form-group form-group-default required">
<label>Semesterly Price</label>
<input type="number" step='any' class="form-control" name="triples" id="triples"  placeholder="Amount"  >
</div>
</div>
<!--<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Monthly Price</label>
<input type="number"step='any'  class="form-control" name="triplem" id="triplem"  placeholder="Amount"  >
</div>
</div>-->
</div>

<label> Dormitory </label>
<div class="row clearfix">
<div class="col-md-12">
<div class="form-group form-group-default required">
<label>Semesterly Price</label>
<input type="number" step='any' class="form-control" name="dormitorys" id="dormitorys"  placeholder="Amount"  >
</div>
</div>
<!--<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Monthly Price</label>
<input type="number" step='any' class="form-control" name="dormitorym" id="dormitorym"  placeholder="Amount"  >
</div>
</div>-->
</div>

<label> PhD Married Accomodation </label>
<div class="row clearfix">
<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Semesterly Price</label>
<input type="number" step='any' class="form-control" name="phds" id="phds"  placeholder="Amount"  >
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default required">
<label>Monthly Price</label>
<input type="number" step='any' class="form-control" name="phdm" id="phdm"  placeholder="Amount"  >
</div>
</div>
<div class="row clearfix">

                                        <div class="col-md-12" align="center">
                                                <input type="submit" id="submit_form" name="submit_form" style="background: #00A0B0!important; width:130px;" class="btn btn-info btn-fill "></div>
                                           
                                        </div>
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
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="_js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="_js/bootstrap.js"></script>
<script src="pages/js/pages.min.js"></script>

<script src="assets/plugins/interactjs/interact.min.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment-with-locales.min.js"></script>

<script src="assets/js/form_layouts.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>

<script src="assets/js/demo.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
    $('#myDatepicker').datepicker();
});
</script>
    mysqli_close($conn);

</body>
</html>
<?php
else:
    echo "Not Logged In";
endif;

?>
 