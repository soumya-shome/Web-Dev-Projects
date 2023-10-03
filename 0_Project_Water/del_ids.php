<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();	
require "connDB.php";

if(isset($_REQUEST['fn'])){
	$response["success"]=0;
	$response["message"]="Registration Failed";
	$response["status"]=0;
	$flno=$_REQUEST['fn'];
	$r=mysqli_query($con,"DELETE FROM `colony` WHERE `flat_no` = '".$flno."'");
	if($r){
		$response["success"]=1;
		$response["message"]="Deleted";
		$response["status"]=1;
	}
	$response["md"]=5;
	echo json_encode($response);
}
?>