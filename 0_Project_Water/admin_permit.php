<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();	
require "connDB.php";

if(isset($_REQUEST['id'])){
	$flno=$_REQUEST['fn'];
	$sp_id=$_REQUEST['id'];
	$r1=mysqli_query($con,"SELECT * FROM `tempo` WHERE `flatno`='".$flno."'");
	if(mysqli_num_rows($r1)>0){
		$row=mysqli_fetch_array($r1);
		if($row[0]>0){
			$r2=mysqli_query($con,"SELECT * FROM `colony` WHERE `sp_id`='".$flno.$sp_id."'");
			if(mysqli_num_rows($r2)==0){
				$response["success"]=1;
				$response["message"]="Allow";
				$response["status"]=1;
			}else{
				$response["success"]=0;
				$response["message"]="Exists";
				$response["status"]=2;
			}
		}else{
			$response["success"]=0;
	$response["message"]="Not Allowed";
	$response["status"]=0;
		}
	}else{
	$response["success"]=0;
	$response["message"]="Not Granted";
	$response["status"]=0;
	}
	$response["md"]=2;
	echo json_encode($response);
}
?>