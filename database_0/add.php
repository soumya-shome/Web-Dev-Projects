<?php
	require("connection.php");
	$name=$_REQUEST['t1'];
	$roll=$_REQUEST['t2'];
	$subject=$_REQUEST['t3'];
	$class=$_REQUEST['t4'];
	$q="insert into table1 values('".$name."',".$roll.",'".$subject."',".$class.");";
	$r=mysqli_query($con,$q);
	if(!$r){
		echo("data insertion failed");
		die(mysqli_error());
	}
	else{
		echo "Record inserted";
	}
	mysqli_close($con);
?>