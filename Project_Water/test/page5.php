<?php
/*
$date1 = strtotime("2016-06-01 22:45:00");  
$date2 = strtotime("2018-09-21 10:44:01");  
  
// Formulate the Difference between two dates 
$diff = abs($date2 - $date1);  
  echo $diff;
*/
$date=strtotime("2020-02-22 11:32:00");
$currd=strtotime(date("Y-m-d H:i:s"));
$lastd=date("Y-m")."-".(((int)date("d"))-1)." ".date("H:i:s");
echo $lastd."<br>";
echo $currd;
echo "<br>".$date."<br>";
echo (abs($currd-$date));
echo "<br><br>";
$date1=strtotime("2020-02-23 12:01:26");
$date2=strtotime("2020-02-24 02:12:19");
echo (abs($date2-$date1));	
?>