<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();	
require "connDB.php";
	
if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	$r=mysqli_query($con,"SELECT * FROM `colony` WHERE `sp_id`='".$id."'");
	$row=mysqli_fetch_array($r);
	$flno=$row[0];
	$currd=(date("Y-m-d H:i:s"));
	if(((int)date("H"))<6){
		$rest_tim=date("Y-m")."-".(((int)date("d"))-1)." 5:00:00";
	}else{
		$rest_tim=date("Y-m-d 5:00:00");
	}
	//echo "RESET TIME : ".$rest_tim."<br>";
	$tcurr=strtotime($currd);
	if(mysqli_num_rows($r)>0){//check whether valid card or not
		//c1
			$r2=mysqli_query($con,"SELECT * FROM `usage` WHERE `sp_id` = '".$id."' AND `date` >= '".$rest_tim."' ORDER BY `date` DESC");
			if(mysqli_num_rows($r2)>0){
					if(mysqli_num_rows($r2)<3 ){
						//c5
						$row2=mysqli_fetch_array($r2);
						$tlast=strtotime($row2[2]);
						$diff_s=abs($tcurr-$tlast);
						$diff_hr=$diff_s/(60*60);
						if($diff_hr>=4){
							//c5
							$r4=mysqli_query($con,"SELECT * FROM `usage` WHERE `flat no` = '".$flno."' AND `date` >= '".$rest_tim."' ORDER BY `date` DESC ");
							$row3=mysqli_fetch_array($r4);
							$t_fl=strtotime($row3[2]);
							$diff_f=abs($tcurr-$t_fl);
							$t_min=$diff_f/(60);
							if($t_min>=30){
								//c6
								mysqli_query($con,"INSERT INTO `usage`(`sp_id`, `flat no`, `date`) VALUES ('".$id."','".$flno."','".$currd."')");
								$response["status"]=1;
								$response["message"]="USer Found";
							}else{
								//dc6
								$response["status"]=0;
								$response["message"]="Your Flatmate Requested Water within the last 30mins";
							}
						}else{
							//dc5
							$response["status"]=0;
							$response["message"]="You Requested Water within the last 4hrs";
						}
					}else{
						//dc5
						$response["status"]=0;
						$response["message"]="You Requested Water 3 times ";
					}
			}else{
				//dc3
				mysqli_query($con,"INSERT INTO `usage`(`sp_id`, `flat no`, `date`) VALUES ('".$id."','".$flno."','".$currd."')");
				$response["status"]=1;
				$response["message"]="User Found";
			}
		$response["success"]=1;
	}else{
		//dc1
		$response["status"]=0;
		$response["message"]="User Not Found";
		$response["success"]=0;
	}
	$response["md"]=1;
	echo json_encode($response);
}
?>