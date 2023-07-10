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
	<div class="container-fluid">
	
	<?php
	$r=mysqli_query($con,"SELECT * FROM `exam` WHERE `st_id`='".$_SESSION['id']."' AND`status`='Incomplete';");
	$row=mysqli_fetch_array($r);
					if($row[0]!=''){
						echo "Exam Id: ".$row[0]."<br>";
						echo "Exam Date: ".$row[1]."<br>";
						echo "Exam Shift: ".$row[2]."<br>";
						echo "Student ID: ".$row[3]."<br>";
						echo "Course ID: ".$row[4]."<br>";
					}
					else
					{
						echo "<h3>Admit Card Unavailable</h3>";
					}
	
	?>
	
	</div>
</body>
</html>