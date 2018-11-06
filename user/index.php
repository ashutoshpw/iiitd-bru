 <?php 
 session_start();
 include "inc/dbo.inc.php";
 if(!isset($_SESSION['id']))
  header("location:/login.html");
  
  $p_u_id = $_SESSION['id'];
  $p_u_name = $_SESSION['name'];
		$p_u_email = $_SESSION['email'];
  
if(isset($_POST['onboard'])){
 $roll = @$_POST['roll']; 
 $program  = @$_POST['program'];
 $gender = @$_POST['gender'];
 $address = @$_POST['address'];
 $pincode = @$_POST['pincode'];
 $fp = 1;
 $stmt = $conn->prepare("INSERT INTO student_profile (id, user_id, name, email, roll_no, program, address, pincode, gender, from_portal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 $stmt->bind_param("iisssssssi", $p_u_id, $p_u_id, $p_u_name, $p_u_email, $roll, $program, $address, $pincode, $gender, $fp);
 $stmt->execute();
 printf("Error: %s.\n", $stmt->error);
 $stmt->close();
}

$sql = "SELECT * FROM `student_profile` WHERE email = '$p_u_email'";
$result = mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($result);



if($row_count == 0){
  $page['hide-nav'] = 1;
  $page['title'] = "Get Started";
  include "header.inc.php";
 ?>
 <style>
 select{
  height: 30px;
    padding: 5px;
    border: 1px solid #ccc;
 }
 .col-centered{
    float: none;
    margin: 0 auto;
}
 </style>
 <div class="page-container ">
 
 <div class="page-content-wrapper ">
 
 <div class="content ">
 
 <div class="jumbotron">
 <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
 <div class="inner">
 
 <ol class="breadcrumb">
 <li class="breadcrumb-item"><a href="#">Home</a></li>
 <li class="breadcrumb-item active">On Boarding</li>
 </ol>
 
 <div class="row">
  <div class="col-lg-6 col-centered">

<div class="card card-default">
<div class="card-header ">
<div class="card-title">
Get Started
</div>
</div>
<div class="card-block">
<h5>

</h5>
<form role="form" action="" method="post">
<div class="form-group">
<label>Your name</label>
<span class="help">e.g. "Mona Lisa Portrait"</span>
<input type="name" class="form-control" value="<?= $_SESSION['name'];?>" disabled>
</div>

<div class="form-group">
<label>Roll Number</label>
<span class="help">e.g. "2015018 or MT16501"</span>
<input type="text" class="form-control" required="" name="roll">
</div>

<div class="row">
 <div class="col-md-6">
  
<div class="form-group">
<label>Program</label>
<span class="help">e.g. "some@example.com"</span>
<select class="full-width select2-accessible" data-init-plugin="select2" tabindex="-1" aria-hidden="true" name="program">
 <option value="BTech">BTech</option>
 <option value="MTech">MTech</option>
 <option value="PhD">PhD</option>
</select>
</div>

</div>
<div class="col-md-6">

<div class="form-group">
<label>Gender</label>
<span class="help"> </span>
<select class="full-width select2-accessible" data-init-plugin="select2" tabindex="-1" aria-hidden="true" name="gender">
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 <option value="Others">Others</option>
</select>
</div>
</div>
</div>

<div class="form-group">
<label>Address</label>
<span class="help">e.g. "Laxmi Nagar, New Delhi"</span>
<textarea type="text" class="form-control" name="address" style="height:100px;" required></textarea>
</div>

<div class="form-group">
<label>PinCode</label>
<span class="help">e.g. "110020 or 110020"</span>
<input type="number" name="pincode" class="form-control" required="" max="999999" min="100000" maxlength="6">
</div>

<div class="form-group">
<button class="btn btn-complete btn-cons" type="submit" name="onboard">Submit</button>
</div>

<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>


</form>
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
 
 
 
 <?php 
}
else{
 
 
 function getdaytime($conn){
  $a = (int)date('Hi', time());
  //echo $a;
  $c = 0;
  if(($a > 2000 && $a < 2130) || ($a > 730 && $a < 930) || ($a > 1300 && $a < 1430) || ($a > 1700 && $a < 1800) ){
   $c = 1;
  }
  
  $b = 0;
  
  if(($a < 930 && $a > 0) || ($a > 930 && $a < 2359))
   $b = 0;
  if($a < 1430 && $a > 930)
   $b = 1;
  if($a < 1800 && $a > 1430)
   $b = 2;
  if($a < 2130 && $a > 1800)
   $b = 3;

 
  $w =  date('w',time());
  $sql = "SELECT * FROM mess_menu WHERE week_day = $w AND day_time = $b";
  $result = $conn->query($sql);
  $apps = $result->fetch_assoc();
  return array($c,$b, $apps['item']);
  $conn->close();
 }
 
 $mess_d = getdaytime($conn);
 switch($mess_d[1]){
                       case 0:
                        $mess_type = "Breakfast";
                        break;
                       case 1:
                        $mess_type = "Lunch";
                        break;
                       case 2:
                        $mess_type = "Evening Snacks";
                        break;
                       case 3:
                        $mess_type = "Dinner";
                        break;
                       default:
                        $mess_type = "";
                      } 

 
 ?>
 <!DOCTYPE html>
 <html>
  <?php 
  
  //print_r($_SESSION);
  $page['title'] = "Dashboard";
  
  $sql = "SELECT * FROM `application` WHERE start_date <= CURRENT_DATE AND end_date >= CURRENT_TIMESTAMP AND status=1";
  $result = $conn->query($sql);
  $apps = $result->fetch_assoc();
  
  $user_id = $_SESSION['id'];
  $room_sql = "SELECT a.room_number, b.name FROM `alloted_students` a INNER JOIN `hostel` b ON a.hostel = b.id  WHERE a.user_id = $user_id";
  $room_result = $conn->query($room_sql);
  $room_apps = $room_result->fetch_assoc();
  
  $room_sql = "SELECT a.room_number, b.name FROM `alloted_students` a INNER JOIN `hostel` b ON a.hostel = b.id  WHERE a.user_id = $user_id";
  $room_result = $conn->query($room_sql);
  $room_apps = $room_result->fetch_assoc();
  
  $a_sql = "SELECT * FROM `request_table` a INNER JOIN `application` b ON a.application_id = b.id WHERE a.user_id = $user_id AND b.status=1";
  $a_result = $conn->query($a_sql);
  $a_apps = $a_result->fetch_assoc();
  
  $conn->close();
 
  
  
  $app_start_date = strtotime($apps['start_date']);
  $app_end_date = strtotime($apps['end_date']); // change x with your login date var
  $current_date = strtotime(date('Y-m-d h:i:s')); // change y with your current date var
  $datediff = $app_end_date-$current_date;
  $datediff2 = $app_end_date-$app_start_date;
  
  $days = floor($datediff/(60*60*24));
  $total_days = floor($datediff2/(60*60*24));
 
  
  $d_text = "";
  
  if($total_days != 0)
   $d_bar = ($total_days-$days)/$total_days;
  else 
   $d_bar = 0;
  $dd_bar = round($d_bar, 2)*100;
  if($days == 0){
   $d_text = "Less then 1 day Remaining";
  }
  else{
    $d_text = $days . " Days Remaining";
  }
   
  
  ?>
 
 
 <?php include "header.inc.php"; ?>
 
 <div class="page-container ">
 
 <div class="page-content-wrapper ">
 
 <div class="content ">
 
 <div class="jumbotron">
 <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
 <div class="inner">
 
 <ol class="breadcrumb">
 <li class="breadcrumb-item"><a href="#">Home</a></li>
 <li class="breadcrumb-item active">Dashboard</li>
 </ol>
 
 </div>
 </div>
 </div>
 
 
 <div class=" container    container-fixed-lg">
         
         <div class="row">
             
             
             <div class="col-sm-4">
               <?php 
               
                  if(count($apps) > 0):
                   
                   if(count($a_apps) == 0){
                  ?>  
                  
                   
               <div class="row">   
               
                 <div class="col-md-12">
                  
                     <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                      <div class="card-header ">
                     <div class="card-title">
                     <span class="font-montserrat fs-11 all-caps">
                     Latest Application <i class="fa fa-chevron-right"></i>
                     </span>
                     </div>
                     <div class="card-controls">
                     <ul>
                     <li><a href="#" class="card-refresh text-black" data-toggle="refresh"></a>
                     </li>
                     </ul>
                     </div>
                     </div>
                     <div class="card-block">
                     <h5 class=""><?= $apps['name'];?></h5>
                    
                     <div class="tab-content no-padding">
                     <div class="tab-pane active" id="pending">
                     <div class="p-t-15">
                     <div class="d-flex">
                     <span class="icon-thumbnail bg-master-light pull-left text-master">HA</span>
                     <div class="flex-1 full-width overflow-ellipsis">
                     <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">IIIT-Delhi
                     </p>
                     <h5 class="no-margin overflow-ellipsis ">Hostel Allocation <?= date('Y');?></h5>
                     </div>
                     </div>
                     <div class="m-t-15">
                     <p class="hint-text fade small pull-left"><?= $d_text;?></p>
                     <a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
                     <div class="clearfix"></div>
                    
                     </div>
                     <div class="progress progress-small m-b-15 m-t-10">
                     
                     <div class="progress-bar progress-bar-info" style="width:<?= $dd_bar;?>%"></div>
                      
                     </div>
                     <a href="/apply.php?id=<?= $apps['id'];?>" class="btn btn-block m-t-30" style="background: #00A0B0!important;">Apply Now</a>
                     </div>
                 
                      
                     </div>
                    
                     </div>
                     </div>
                     </div>
                     
                     </div>   
                     
                     </div>
                     
                      <?php 
                   }
                   else{
                    if($a_apps['alloted'] == 0):
                    ?>
                    
                    
                    <div class="row">   
                       <div class="col-md-12">
                              <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget" style="background: #F5D851;">
                              <div class="card-header ">
                              <div class="card-title">
                                Room Allotment
                               </div>
                               </div>
                                <div class="card-block">
                                  <h2 class="" style="color: white;">Pending</span></h2>
                                  <p></p>
                                </div>
                    
                               
                               </div>
                        </div>
                      </div>
                      
                    <?php
                    endif;
                   }
                      
                      endif;?>
                     
                     
                     <?php 
                     if(count($room_apps) > 0):
                      ?>
                      
                      
                      <div class="row">   
                       <div class="col-md-12">
                              <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                              <div class="card-header ">
                              <div class="card-title">
                                Current Room
                               </div>
                               </div>
                                <div class="card-block">
                                  <h2 class=""><?=  $room_apps['room_number'];?></span></h2>
                                  <p><?=  $room_apps['name'];?></p>
                                </div>
                    
                               
                               </div>
                        </div>
                      </div>
                      
                      <?php 
                      else:
                       if($a_apps['alloted'] != 0){
                       ?>
                       
                          <div class="row">   
                       <div class="col-md-12">
                              <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget" style="background: #f55151;">
                              <div class="card-header ">
                              <div class="card-title" style="color:#fff;">
                                Room Allotment
                               </div>
                               </div>
                                <div class="card-block">
                                  <h2 class="" style="color: white;">No Rooms </span></h2>
                                  <p></p>
                                </div>
                    
                               
                               </div>
                        </div>
                      </div>
                       
                       <?php
                       }
                      endif;?>
                       
                        <div class="row">   
                       <div class="col-md-12">
                              <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget" style="background: #293140;">
                              <div class="card-header ">
                              <div class="card-title" style="color:#fff;">
                                Room Search 
                               </div>
                               </div>
                                <div class="card-block">
                                 
                                  <input id="name-search" class="form-control input-lg" placeholder="Enter Student Name">
                                  <div id="search-result" style="color:#fff">
                                     <h3 style="color:#fff" id="search-room"></h3>
                                     <p id="search-hostel"></p>
                                  </div>

                                </div>
                    
                               
                               </div>
                        </div>
                      </div>
                      
                       <div class="row">   
                       <div class="col-md-12">
                              <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                              <div class="card-header ">
                              <div class="card-title">
                                Quick Links
                               </div>
                               </div>
                                <div class="card-block">
                                  <ul>
                                   <li><a href="/new-complaint.php">New Complain</a</li>
                                    <li><a href="/complaint-history.php">Complaint History</a</li>
                                    <li><a href="/application-history.php">Application History</a</li>
                                   
                                    
                                   </ul>
                                  <p></p>
                                </div>
                    
                               
                               </div>
                        </div>
                      </div>
                      
                     
                     
                 </div>
                
                 
                     <div class="col-sm-8">
                     
                     <?php 
                     $m_color = ($mess_d[0] == 0) ? "#0072c6":"#00C598";
                     ?>
                     
                      <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget" style="background:<?= $m_color;?>;color:#fff;">
                         <div class="card-header ">
                        <div class="card-title">
                        <span class="font-montserrat fs-11 all-caps" style="color:white;font-weight:bold;">
                         
                        <?php 
                        if($mess_d[0] == 0)
                         echo '<span style="color:#fff;text-align:center;font-weight: bold;">NEXT in MESS </span>';
                        else
                         echo "CURRENTLY SERVING in MESS";
                        ?>
                        (<?= $mess_type;?>)
                        
                        
                       
                        </span>
                        </div>
                        <div class="card-controls">
                        <ul>
                        <!--<li><a href="#" class="card-refresh text-black" data-toggle="refresh" style="color:#fff"><i class="card-icon card-icon-refresh" style="color:#fff"></i></a>-->
                        <!--</li>-->
                        
                        <li><a href="https://www.iiitd.ac.in/sites/default/files/docs/mess/messmenu-wef-12th%20April,%202018.pdf" class="card-refresh text-black" style="color:#fff" target="_blank"> <i class="fa fa-link" style="color:#fff"></i></a>
                        </li>
                        
                        </ul>
                        </div>
                        </div>
                        
                        <div class="card-block">
                        <div class="col-md-12">
                         
                        <?= $mess_d[2];?>
                        </div>
         
 
                       </div>
                       </div>
                       
                       
                       
                       
                        <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                         <div class="card-header ">
                        <div class="card-title">
                        <span class="font-montserrat fs-11 all-caps">
                        <a href="http://findmystuff.iiitd.edu.in/" target="_blank" style="color:#000!important">
                         <!--FindMyStuff-->
                         <h4 style="text-transform:capitalize">
                          <img src="/images/EmptyBox.png" style="width: 100px;"></img>
                          FindMyStuff
                         </h4>
                       </ a>
                        </span>
                        </div>
                        <div class="card-controls">
                        <ul>
                        <li><a href="#" class="card-refresh text-black" data-toggle="refresh"></a>
                        </li>
                        </ul>
                        </div>
                        </div>
                        
                        <div class="card-block">
                        <div class="col-md-12">
                         <?php 
                         $f_url = "http://findmystuff.iiitd.edu.in/LnF404/7/KNQDxGarQoscOLVdy2YE/";
                         $f_data = json_decode(file_get_contents($f_url),1);
                         $f_count = $f_data['quantity'];
                         
                         for($i=0; $i<$f_count; $i++){
                         
                         ?>
                         
                         <div data-pages="card" class="card card-default" id="card-basic">
<div class="card-header  ">
<div class="card-title"><?= $f_data[$i]['location']; ?>
</div>
<div class="card-controls">
<ul>
<li><a data-toggle="collapse" class="card-collapse" href="#"><i class="card-icon card-icon-collapse"></i></a>
</li>
<li><a data-toggle="refresh" class="card-refresh" href="#"></a>
</li>
<li><a data-toggle="close" class="card-close" href="#"><i class="card-icon card-icon-close"></i></a>
</li>
</ul>
</div>
</div>
<div class="card-block">
<h3>
<span class="semi-bold"><?= $f_data[$i]['item-name']; ?></h3>
<p>
 
 <?= $f_data[$i]['info']; ?>
</p>
</div>
</div>

<?php } ?>


                        </div>
         
 
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
 
 

 
 <script src="assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
 
 
 
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
 
 <script src="assets/plugins/interactjs/interact.min.js" type="text/javascript"></script>
 <script src="assets/plugins/moment/moment-with-locales.min.js"></script>
 <script src="pages/js/pages.calendar.min.js"></script>
 
 
 <script src="pages/js/pages.min.js"></script>
 
 
 <script src="assets/js/scripts.js" type="text/javascript"></script>
 <script>
 $(document).ready(function(){
  $('#myCalendar').pagescalendar({
     ui: {
         //Year Selector
         year: {
             visible: true,
             format: 'YYYY',
             startYear: '2000',
             endYear: moment().add(10, 'year').format('YYYY'),
             eventBubble: true
         },
         //Month Selector
         month: {
             visible: true,
             format: 'MMM',
             eventBubble: true
         },
         dateHeader: {
             format: 'MMMM YYYY, D dddd',
             visible: true,
         },
         //Mini Week Day Selector
         week: {
             day: {
                 format: 'D'
             },
             header: {
                 format: 'dd'
             },
             eventBubble: true,
             startOfTheWeek: '0',
             endOfTheWeek:'6'
         },
         //Week view Grid Options
         grid: {
             dateFormat: 'D dddd',
             timeFormat: 'h A',
             eventBubble: true,
             scrollToFirstEvent:false,
             scrollToAnimationSpeed:300,
             scrollToGap:20
         }
     },
     eventObj: {
         editable: true
     },
     view:'month',
     now: null,
     locale: 'en',
     //Event display time format
     timeFormat: 'h:mm a',
     minTime:0,
     maxTime:24,
     dateFormat: 'MMMM Do YYYY',
     slotDuration: '30', //In Mins : supports 15, 30 and 60
     events: [],
     eventOverlap: false,
     weekends:true,
     disableDates:[],
     //Event CallBacks
     onViewRenderComplete: function() {},
     onEventDblClick: function() {},
     onEventClick: function(event) {
      console.log(event);
     },
     onEventRender: function() {},
     //onEventDragComplete: function(event) {},
     //onEventResizeComplete: function(event) {},
     onTimeSlotDblClick: function(timeSlot) {},
     onDateChange:function(range){}
 });
 });
 </script>
    
 <link rel="stylesheet" href="/vendor/ea/easy-autocomplete.min.css" />
  <link rel="stylesheet" href="/vendor/ea/easy-autocomplete.themes.min.css"  />

                    <script src="/vendor/ea/jquery.easy-autocomplete.js"></script>
                    <script>
                    $(document).ready(function(){
                     var options = {
                            url: function(phrase) {
                              return "api/nameSearch.php?q="+phrase;
                            },
                            
                            list: {
                               onSelectItemEvent: function() {
                                   var name = $("#name-search").getSelectedItemData().name;
                                   var hostel = $("#name-search").getSelectedItemData().hostel;
                                   var room = $("#name-search").getSelectedItemData().room;
                                   $("#search-room").html(room);
                                   $("#search-hostel").html(hostel);
                                   //console.log(selectedItemValue);
                                      
                               }
                            //    onHideListEvent: function() {
                            //    	$("#inputTwo").val("").trigger("change");
                           	// }
                           },
                          
                            getValue: function(element) {
                              return element.name;
                            },
                          
                            ajaxSettings: {
                              dataType: "json",
                              method: "POST",
                              data: {
                                dataType: "json"
                              }
                            },
                          
                            preparePostData: function(data) {
                              data.phrase = $("#name-search").val();
                              return data;
                            },
                          
                            requestDelay: 400
                          };
                          
                          $("#name-search").easyAutocomplete(options);
                    });
                    </script>
                      
 
 </body>
 
 
 </html>
 
<?php } ?>
