<?php 
	$con =  new mysqli('localhost','root','');
	
	if(!$con){
		die ("Couldn't connect ".mysql_error());
	}
	mysqli_select_db($con,"project");
?>