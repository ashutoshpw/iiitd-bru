<?php
$id = $_SESSION['id'];

?>
<ul>
 <li class=" active">
  <a href="/">Dashboard</a>
 </li>

 <li>
 <a href="javascript:;"><span class="title">Application</span>
 <span class=" arrow"></span></a>
   <ul class="">
     <!--<li class="">-->
     <!--<a href="#">Current</a>-->
     <!--</li>-->
     <li class="">
     <a href="/application-history.php">History</a>
     </li>
   </ul>
 </li>
 
  <li>
 <a href="javascript:;"><span class="title">Complaints</span>
 <span class=" arrow"></span></a>
   <ul class="">
     <li class="">
     <a href="/new-complaint.php">New Complaint</a>
     </li>
     <li class="">
     <a href="/complaint-history.php">History</a>
     </li>
   </ul>
 </li>
 
 
  

  
 <!--<li>-->
 <!--<a href="#"><span class="title">Payments</span></a>-->
 <!--</li>-->
 
 


</ul>