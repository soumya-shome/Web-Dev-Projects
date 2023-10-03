<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();	
require "connDB.php";

if(isset($_REQUEST['id'])){
	$response["success"]=0;
	$response["message"]="Registration Failed";
	$response["status"]=0;
	$sp_id=$_REQUEST['id'];
	$flno=substr($sp_id,0,4);
	$r1=mysqli_query($con,"SELECT * FROM `tempo` WHERE `flatno` ='".$flno."'");
	$ro=mysqli_fetch_array($r1);
	$a=$ro[0];
	if(($a-1)==0){
		mysqli_query($con,"DELETE FROM `tempo` WHERE `flatno`= '".$flno."' ");
	}else{
		mysqli_query($con,"UPDATE `tempo` SET `no_o_e`='".($a-1)."' WHERE `flatno`= '".$flno."' ");
	}$r=mysqli_query($con,"INSERT INTO `colony`(`flat_no`, `name`, `sp_id`) VALUES ('".$flno."','','".$sp_id."')");
	if($r){
		$response["success"]=1;
		$response["message"]="Registered";
		$response["status"]=1;
	}
	$response["md"]=3;
	echo json_encode($response);
}
?>