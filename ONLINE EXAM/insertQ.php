<!doctype html>
<html>
<head>
<title>Admin Home Page</title>
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
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myAHome">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="myAHome"> 
<ul class="nav navbar-nav">
				<li class="active"><a href="adminHome.php">Home</a></li>
				<li class="#"><a href="#">Schedule Exam</a></li>
				<li class="#"><a href="#">Result</a></li>
				<li class="active"><a href="createP.php">Create Question Set</a></li>
				<li class="#"><a href="#">Add Questions</a></li>
				<li class="#"><a href="viewCourse.php">View Question Paper</a></li>
				<li class="#"><a href="#">Students</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
</ul>
</div>
<div class="container-fluid">
<div id="myslide" class="carousel slide" data-ride="carousel">


</div>
</div>
</div>
</nav>
<div>
	<?php
require("connectDB.php");
session_start();

$re="INSERT INTO `paper`(`P_CODE`, `P_NAME`, `P_Set`, `C_ID`, `TIME_LIMIT`, `NO_OF_QUES`, `NEG_MARKS_COUNT`) VALUES ('".$_SESSION['pco']."','".$_SESSION['pname']."','".$_SESSION['set']."','".$_SESSION['cc']."','".$_REQUEST['t3']."','".$_REQUEST['t2']."','".$_REQUEST['t4']."')";
$t=mysqli_query($con,$re);
if($t){
	echo "Paper Inserted Successfully";
}
?>	
</div>
	
</body>
</html>
