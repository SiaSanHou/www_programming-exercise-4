<?php
  session_start();
  date_default_timezone_set("Asia/Kuala_Lumpur");
    $start = $_SESSION['time'];
    $end = date('d-m-Y H:i:s');
    
    $date1 = strtotime($start);  
	$date2 = strtotime($end);  
    
    //Difference between two dates 
$diff = abs($date2 - $date1);  
  // To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// get month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
  
  
// get day, minus it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
  
  
// get hour, minus it with years,  
// months & seconds and divide the resultant 
 // date into total seconds in a hours (60*60) 
  $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));  
  
  
// get minutes, minus it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
  $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
  
  
// get minutes, minus it with years, 
// months, seconds, hours and minutes  
  $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));  
   session_destroy();
   
   
// Print result 
 echo "<script type='text/javascript'>alert('$hours Hours,$minutes Minutes,$seconds Seconds');window.location.assign('exercise 3.php');</script>"; 

?>

