<!doctype html>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.navbar{
	border-radius:1;
	background-color: #03033C;
	}		
</style>
</head>
	<?php
	require("connectDB.php");
	session_start();
	?>
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<?php
require "header bar2.php";
?>
<div>
<?php 
	$r2=mysqli_query($con,"SELECT * FROM `st_course` WHERE `st_id`='".$_SESSION['id']."' AND `status`='EXAM' ");
	if(mysqli_num_rows($r2)>0){
		$row=mysqli_fetch_array($r2);
		$r=mysqli_query($con,"SELECT * FROM `course` WHERE `c_id`='".$row[1]."'");
		$row2=mysqli_fetch_array($r);
		echo "Exam ID : ".$_SESSION['eId']."<br>";
		echo "Course ID : ".$row2[0]."<br>";				
		echo "Course Name : ".$row2[1]."<br>";				
		$s="INSERT INTO `exam`(`e_id`, `e_date`, `e_slot`, `st_id`, `c_id`, `p_type`, `p_set`, `activation code`, `status`) VALUES ('".$_SESSION['eId']."','','','".$_SESSION['id']."','".$row2[0]."','','','','APPLIED')";
		//echo $s;
		$r4=mysqli_query($con,$s);
		if($r4)
			echo "<h3>Successfully Applied</h1>";
		else
			echo "<h3>Failed Try Again</h3>";
	}
	else{
		echo "<h3>You Dont have any course for Exam</h3>";
	}
	?>

	
	
	</div>
</body>
</html>