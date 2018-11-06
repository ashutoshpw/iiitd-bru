<?php 
 session_start();
    include "inc/config.inc.php";
    include "inc/db.inc.php";
    echo '<script> alert("'.$_SESSION['admin'].'")</script>';
    if($_SESSION['admin'] == 1):
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Float New Application</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
       <?php include "_sidebar.php";?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></center>Float Application</h4>
                                </div>
                                <form method=post name="myForm" id="myForm" class="myForm">
                                <div class="card-body">
                                  
                                        <div class="row">
                                            <div class="col-md-10 pr-1">
                                                <div class="form-group">
                                                    <label>Name </label>
                                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Name"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Start Date </label>
                                                    <input type="date" class="form-control" name="start_date" id="start_date"  placeholder="Start Date" >
                                                </div>
                                            </div>
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>End Date </label>
                                                    <input type="date" class="form-control" name= "end_date" id="end_date"  placeholder="End Date" >
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <!--<div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Semester Price </label>
                                                    <input type="number" class="form-control" name="semester_price" id="semester_price" placeholder="Semester Price" >
                                                </div>
                                            </div>
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Monthly Price </label>
                                                    <input type="number" class="form-control" name="monthly_price" id="monthly_price"  placeholder="Monthly Price">
                                                </div>
                                            </div>
                                        </div>-->
                                        
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Programs </label>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="check_list_programs[]"   id="programs" placeholder="programs" value=1> BTech
                                                    </div>
                                                    
                                                     <div class="checkbox">
                                                    <input type="checkbox" name="check_list_programs[]"   id="programs" placeholder="programs" value=2 > MTech
                                                    </div>
                                                    
                                                     <div class="checkbox">
                                                    <input type="checkbox" name="check_list_programs[]"   id="programs" placeholder="programs" value=3 > Phd
                                                    </div>
                   
                                                </div>
                                            </div>
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Hostels </label>
                                                    <br><input type="checkbox" name="check_list_hostels[]" id="hostels"  placeholder="Girls" value=1> Girls
                                                    <br><input type="checkbox" name="check_list_hostels[]" id="hostels"  placeholder="Boys" value=2> Boys

                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <input type=checkbox name=external_allowed id=external_allowed> Allow external students to register
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div>
                                            
                                          
                                         
                                         
                                        <div class="row">

                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <input type="submit" id="submit_form" name="submit_form" class="btn btn-info btn-fill "></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            /*if (isset($_POST['submit_form'])&&!empty($_POST["name"])&&!empty($_POST["start_date"])&&!empty($_POST["end_date"])&&!empty($_POST["semester_price"])&&!empty($_POST["monthly_price"])&&!empty($_POST["check_list_programs"])&&!empty($_POST["check_list_hostels"])) 
             {
             $name=$_POST["name"];
             $start_date=$_POST["start_date"];
             $end_date=$_POST["end_date"];
             $semester_price=$_POST["semester_price"];
             $monthly_price=$_POST["monthly_price"];
             $sp='';
        
             foreach($_POST['check_list_programs'] as $item)
             {

                  if ($item=='BTech')$sp=$sp.'1,';
                  if ($item=='MTech')$sp=$sp.'2,';
                  if ($item=='Phd')$sp=$sp.'3';


        	 }
             $sh='';
        	 foreach($_POST['check_list_hostels'] as $item)
             {
                  if ($item=='Old')$sh=$sh.'1,';
                  if ($item=='New')$sh=$sh.'2,';


        	 }


        	 $sqlin = "INSERT INTO application (name,start_date,end_date,semester_price,monthly_price,who_program_name,where_hostel_name)
					VALUES ('$name', '$start_date', '$end_date', '$semester_price','$monthly_price','$sp','$sh')";
					$mq= mysqli_query($conn, $sqlin);
					$new_user_id = mysqli_insert_id($conn);
						if($mq){
						          
					    echo 1;

					}else{
					    print_r(mysqli_error($conn));
					}
					
             }
             else
             {
                 echo '<script type="text/javascript">alert("Form Incomplete!");</script>';

             }*/
            ?>
            <footer class="footer">
                <div class="container">
                    <nav>
                      
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>


<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>




 <script type="text/javascript">
        $(document).ready(function(){
            $("#submit_form").click(function(){
            
               name=$("#name").val();
               start_date = $("#start_date").val();
               end_date = $("#end_date").val();
               //semester_price = $("#semester_price").val();
              // monthly_price = $("#monthly_price").val();
               var programs = [];
                $('input[name="check_list_programs[]"]:checked').each(function(i, e) {
                    programs.push($(this).val());
                });
                
                var hostels = [];
                $('input[name="check_list_hostels[]"]:checked').each(function(i, e) {
                    hostels.push($(this).val());
                });
                
               

               error = [];
               
               if(start_date.length < 1){
                   error.push("Enter a Start Date");
               }
               
               if(end_date.length < 1){
                   error.push("Enter a End Date");
               }
               
               /*if(semester_price.length < 1){
                   error.push("Enter a Price")
               }
               
               if(monthly_price.length < 1){
                   error.push("Enter a valid Monthly Price");
               }*/
               
               if(error.length == 0){
		           var rbutton1 = $('input[name=external_allowed]:checked').val();
                   if (rbutton1=='on')ext=1;
                   else ext=0;
                   data = {
                     name:name,
                     start_date:start_date,
                     end_date:end_date,
                     //semester_price:semester_price,
                     //monthly_price:monthly_price,
                     check_list_programs:programs.join(','),
                     check_list_hostels:hostels.join(','),
                     external_allowed:ext
                     
                     
                   };
                   $.post("ajax/submit_float_application.php",data,function(r){
                       console.log(r);
                   });
                   
               }else{
                   alert(error);
               }
            });
        });
    </script>
   

<?php
else:
    echo "Not Logged In";
endif;

?>

