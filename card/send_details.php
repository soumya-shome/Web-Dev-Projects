<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if(isset($_REQUEST['b1'])){
	require("connectDB.php");
	
	$card=$_REQUEST['cardno'];
	
	$result = mysqli_query($con,"SELECT * FROM `cardno` WHERE `cardnon`='".$card."'");
	
	$response["details"]=array();
	
	if($row=mysqli_fetch_array($result)){
		
		$det=array();
		
		$det["name"]=$row[1];
		$det["time"]="12:00PM";
		array_push($response["details"],$det);
	
		$response["success"]=1;
		echo json_encode($response);
	}else{
		$response["success"] = 0;
		$response["message"] = "Card Not Found";
 
    	echo json_encode($response);
	}
}
?>