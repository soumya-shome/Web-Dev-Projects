<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if(isset($_REQUEST['b1'])){
	require("connectDB.php");
	
	$card=$_REQUEST['cardno'];
	$response["details"]=array();
	$result = mysqli_query($con,"SELECT * FROM `cardno` WHERE `cardnon`='".$card."'");
	if($row=mysqli_fetch_array($result)){
		
		$details=array();
		
		$details["name"]=row[1];
		$details["time"]="12:00PM";
		array($response["details"],$details);
	
		$response["success"]=1;
		echo json_encode($response);
	}
	else{
		$response["success"] = 0;
		$response["message"] = "Card Not Found";
 
    	echo json_encode($response);
	}
}
?>