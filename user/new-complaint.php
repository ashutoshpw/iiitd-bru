<?php 
session_start();
include "inc/dbo.inc.php";
if(!isset($_SESSION['id']))
 header("location:/login.html");
 

?>
<!DOCTYPE html>
<html>
 <?php 
 $page['title'] = "New Complaint";
 ?>
<head>

 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
 
 
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


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
 /*label{margin-left: 20px;}
#datepicker{width:180px; margin: 0 20px 20px 20px;}
#datepicker > span:hover{cursor: pointer;}*/
</style>

</head>
<body>

<?php include "header.inc.php"; ?>

<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron">
<div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Complaints</a></li>
<li class="breadcrumb-item active">New Complaint</li>
</ol>

</div>
</div>
</div>

<form action="" method="post">
 <input type='hidden' name="category" id="category" value="0">
<div class=" container">
        <h4 style="background-color: #00A0B0; color:white; font-family: 'Montserrat';padding:10px;">New Complaint </h5>
                <div class="card card-transparent">
                 <div class="card-block" style="padding-left: 0px;padding-right:0px">
                   <div class="row clearfix">
                 </div>
                 <div class="row">
                   <div class="col-md-12">
                   <?php
                   
                    $cc_a = array(
                                        'AC'=>'Air Conditioning',
                                        'C'=>'Carpenter',
                                        'E'=>'Electricity',
                                        'HK'=>'Housekeeping',
                                        'PC'=>'Pest Control',
                                        'MISC'=>'Miscellaneous'
                                        );
                                        
                   if(isset($_POST['onboard'])){
                     $time = $_POST['time'];
                     $date = date( 'Y-m-d H:i:s',strtotime($_POST['date']));
                     $comments = $_POST['comments'];
                     $category = $_POST['category'];
                     $mobile = $_POST['mobile'];
                     
                     $stmt = $conn->prepare("INSERT INTO fms_requests (date, time, category, mobile, comments) VALUES (?,?,?,?,?)");
                     $stmt->bind_param("sssss", $date, $time, $category, $mobile, $comments);
                     
                     $stmt->execute();
                     
$to = $_SESSION['email'];
$subject = "New Complaint Submitted";
$message = "Dear Sir/Ma'am, \n\nYour request with the following details has been sent to Facility Management:\n\n Time: " . $time . "\n Date: " .  $date . "\n Comments: " . $comments . "\n Category: " . $cc_a[$category] . "\n Mobile: " . $mobile . "\n\n\nThanks and Regards,\n brú: A Complete Hostel Portal Team\ncontact@bru.iiitd.in";

$headers = "From: Bru Complains<admin@bru.iiitd.in>";
$headers .= "\r\nReply-To: admin-fms@iiitd.ac.in";
$headers .= "\r\nCc: shreyash15097@iiitd.ac.in";
$headers .= "\r\nX-Mailer: PHP/".phpversion();

mail($to,$subject,$message,$headers);


                     if(strlen($stmt->error) == 0){
                      ?>
                        <div class="alert alert-info" align="center">
                           <strong>Complaint Submitted</strong>
                         </div>
                      <?php
                     }
                     else{
                      ?>
                      
                      <div class="alert alert-danger" align="center">
                           <strong><?php  printf("Error: %s.\n", $stmt->error); ?></strong>
                         </div>
                      <?php
                     }
                     
                     $stmt->close();
                   }
                   ?>
                   </div>
                   <div class="col-md-4" style="padding-left: 0px;">
                     <a href="#" onclick="changeColor('AC')" value="">
                       <div class="card green" id="AC" style="background: #00C598; border-style: none;">
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
                       <div class="card green"  id="PC" style="background: #00C598; border-style: none;" >
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
                         
                           <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" min="<?=date('m/d/Y');?>" style="height:28px"/>
                            <span class="input-group-addon" style="width: 36px;"></span>
                        </div>
                     </div>
                     </div>
                  </div>
               <div class="row">
               <div class="form-group form-group-default" aria-required="false" style="margin-left: 0px;margin-right: 0px;">
                      <label>Comments</label>
                      <input type="textarea" class="form-control" id="comments" name="comments" required="" aria-required="true" value="">
                      </div>
                  </div>
                  <div class="row">
                 <div class="form-group form-group-default" aria-required="true" style="margin-left: 00px;margin-right: 0px;">
                      <label>Mobile</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" required="" aria-required="true" value="">
                      </div>
                      </div>
</div>
               <div class="row">
                 <div class="col-md-12" style="text-align:center;"> 
                 <button class="btn btn-complete btn-cons" type="submit" name="onboard">Submit</button>
                 </form>
                 </div>
                 </div>
</div>
                    </div>
        </div>
</div>

<!--<div class=" container  footer">-->
<!--<div class="copyright sm-text-center">-->
<!--<p class="small no-margin pull-left sm-pull-reset">-->
<!--<span class="hint-text">Copyright &copy; 2017 </span>-->
<!--<span class="font-montserrat">Bru</span>.-->
<!--<span class="hint-text">All rights reserved. </span>-->
<!--<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>-->
<!--</p>-->
<!--<p class="small no-margin pull-right sm-pull-reset">-->
<!--Hand-crafted <span class="hint-text">at IIIT-Delhi</span>-->
<!--</p>-->
<!--<div class="clearfix"></div>-->
<!--</div>-->
<!--</div>-->

</div>

</div>
</div>

 <script src="pages/js/pages.min.js"></script>
 
 
 <script src="assets/js/scripts.js" type="text/javascript"></script>
 

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

 
 
 
 
<script>

function changeColor(x) {
         document.getElementById('category').value = x;
         var id="#"+x;
          $('a .card').css('background-color','#575b70');
         $(id).css('background-color','#00A1B1');
        
         $('#category').val(x);
         return false;
      }
      
$(document).ready(function() {
   var $j = jQuery.noConflict();
   
   $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '10:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
  });
  
      var date_input=$('input[name="date"]'); //our date input has the name "date"
     
      var options={
        format: 'mm/dd/yyyy',
  
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
   
   
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
</body>
</html>