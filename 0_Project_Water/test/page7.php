<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();	
$response["message"]="HEllo";
$response["success"]=0;
echo json_encode($response);
?>