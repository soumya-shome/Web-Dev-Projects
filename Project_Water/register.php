<?php
require "connDB.php";

if(isset($_REQUEST['id'])){
	$flno=$_REQUEST['id'];
	$sp_id=$_REQUEST['sid'];
	$r=mysqli_query($con,"INSERT INTO `colony`(`flat_no`, `name`, `sp_id`) VALUES ('".$flno."','','".$sp_id."')");
	
}
?>