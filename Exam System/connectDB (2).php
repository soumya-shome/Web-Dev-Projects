<?php 
	$con =  new mysqli('localhost','id13347558_techie99','X]8P7IsB5[^LE)uZ');
	global $con;
	if(!$con){
		die ("Couldn't connect ".mysql_error());
	}
	mysqli_select_db($con,"id13347558_online_exam_001");?>