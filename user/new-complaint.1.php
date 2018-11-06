<?php 
session_start();
if(!isset($_SESSION['id']))
 header("location:/login.html");
 
if(isset($_POST['submit'])){
  $time = $_POST['time'];
  $date = $_POST['date'];
  $comments = $_POST['comments'];
  $category = $_POST['category'];
  
    $to = $_POST['admin-hostel@iiitd.ac.in']; 
    $subject = $_POST['name'];
    $message = getRequestURI();
    $from = "";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}
?>
<!DOCTYPE html>
<html>
 <?php 
 $page['title'] = "New Complaint";
 ?>

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Bru - Hostel Allocation - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<!--<script src="../../../../cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">-->
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
	<script ref="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="pages/js/datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="pages/css/datepicker.css"/>

<style type="text/css">
 a .card{
  padding: 10px;
  box-shadow: 0 0 black;
  background: #0072c6;
  color: #fff;
 }
 
 a h4{
  text-align:"center";
  color: #fff;
 }
</style>

</head>
<body class="fixed-header horizontal-menu horizontal-app-menu dashboard">

<?php include "header.inc.php"; ?>

<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron">
<div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Complaints</a></li>
<li class="breadcrumb-item active">New Complaint</li>
</ol>

</div>
</div>
</div>


<div class=" container">
  <input type="text" name="category" id="category" hidden="true" value=""/>
        <h5 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';">New Complaint</h5>
                <div class="card card-transparent">
                 <div class="card-block">
                   <div class="row clearfix">
                 </div>
                 <div class="row">
                   
                   <div class="col-md-4">
                     <a href="#" onclick="changeColor('AC')" value="">
                       <div class="card green" id="AC" style="background: #52C583; border-style: none;">
                          <h4 align="center">Air Conditioning</h4>
                        </div>
                     </a>
                    </div>
                   
                   <div class="col-md-4">
                    <a href="#" onclick="changeColor('C')">
                     <div class="card pink" id="C" style="background: #D7BC1E; border-style: none;">
                       <h4 align="center">Carpenter</h4>
                      </div>
                    </a>
                   </div>
                    
                    <div class="col-md-4">
                       <a href="#" onclick="changeColor('E')">
                         <div class="card green" id="E" style="background: #dd77ac; border-style: none;">
                           <h4 align="center">Electricity</h4>
                         </div>
                       </a>
                    </div>
                    
                  </div>
                  <div class="row">  
                   <div class="col-md-4">
                      <a href="#" onclick="changeColor('HK')">
                        <div class="card pink" id="HK" style="background: #dd77ac; border-style: none;">
                           <h4 align="center">Housekeeping</h4>
                        </div>
                      </a>
                   </div>
                    
                    <div class="col-md-4">
                     <a href="#" onclick="changeColor('PC')">
                       <div class="card green"  id="PC" style="background: #52C583; border-style: none;" >
                           <h4 align="center">Pest Control</h4>
                        </div>
                     </a>
                     
                    </div>
                    
                    <div class="col-md-4">
                     <a href="#" onclick="changeColor('MISC')">
                       <div class="card" id="MISC" style="background: #D7BC1E; border-style: none;">
                          <h4 align="center">Miscellaneous</h4>
                       </div>
                     </a>
                    </div>
                    </div>
                  <div class="row">
                   
                   <div class="col-md-6">
                    <div class="form-group form-group-default" aria-required="true">
                     <label class="">Preferred Timing</label>
                          <input type="text" name="time" id="time" class="timepicker form-control" style="height:40px;"/>
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                     <div class="form-group form-group-default">
                        <label class="">Preferred Date</label>
                         <div class="input-group date">
                            <input type="text" class="form-control" id="date" name="selected_date"/>
                            <!--<input type="text"  id="date" class="form-control"/>-->
                             <span class="input-group-addon"><i class="fa fa-calendar"></i>
                             </span>

                         </div>
                     </div>
                     </div>
                  </div>
               <div class="row">
               <div class="form-group form-group-default" aria-required="false" style="margin-left: 15px;margin-right: 15px;">
                      <label>Comments (Optional)</label>
                      <input type="textarea" class="form-control" id="comments" name="comments" required="" aria-required="true" value="">
                      </div>
                  </div>
                  <div class="row">
                 <div class="form-group form-group-default" aria-required="true" style="margin-left: 15px;margin-right: 15px;">
                      <label>Mobile</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" required="" aria-required="true" value="">
                      </div>
                      </div>
</div>
               <div class="row">
                 <div class="col-md-12" style="text-align:center;"> 
                  <a href="#" class="btn btn-primary" type="submit" style="background: #00A0B0!important; border-color=00A0B0!important;">Submit</a>
                 </div>
                 </div>
</div>
                    </div>
        </div>
</div>

<div class=" container   container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">Copyright &copy; 2017 </span>
<span class="font-montserrat">Bru</span>.
<span class="hint-text">All rights reserved. </span>
<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
</p>
<p class="small no-margin pull-right sm-pull-reset">
Hand-crafted <span class="hint-text">at IIIT-Delhi</span>
</p>
<div class="clearfix"></div>
</div>
</div>

</div>

</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>


<script>
function changeColor(x) {
         var id="#"+x;
          $('a .card').css('background-color','#575b70');
         $(id).css('background-color','#00A1B1');
        
         $('#category').val(x);
         return false;
      }
$(document).ready(function() {
 
   var $j = jQuery.noConflict();
   
   $j('.timepicker').timepicker({});
   $j("#date").datepicker({format: "dd/mm/yyyy"});
   
   $('#submit').click(function(){
    
     var problem=$('#category').val();
     var time=$('#time').val();
     var date=$('#date').val();
     var comment=$('#comments').val();
     var mobile=$('#mobile').val();
     
     var json_data={
      problem:problem,
      time:time,
      date:date,
      comment:comment,
      mobile:mobile
     }
     console.log(json_data);
     
     if(problem=='' || time=='' || comment=='' || mobile=='')
     {
      alert("Make Sure All input field are filled properly");
      return false;
     }
     else{
      alert("No problem");
      $.ajax({
            url:"",
            method:"post",
            data:json_data,
           succesxs:function(err,res)
           {
            alert("Done");
           }
      });
      return false;
     }
    
   });
});
</script>

</head>
</body>


</html>