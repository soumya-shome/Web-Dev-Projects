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

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mySHome">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="mySHome"> 
<ul class="nav navbar-nav">
<li class="#"><a href="stuHome.php">Home</a></li>
<li class="#"><a href="OE.php">Online Exam</a></li>
<li class="#"><a href="applyE.php">Apply for Exam</a></li>
<li class="active"><a href="admit.php">Admit Card</a></li>
<li class="#"><a href="stuResult.php">Result</a></li>
<li class="#"><a href="#">Display Profile</a></li>
</ul>
	<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Welcome  <?php echo $_SESSION['id'] ?></a></li>
			</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
</ul>
</div>

	
</div>
</nav>
	<div>
	
	<?php
	$r=mysqli_query($con,"SELECT * FROM `exam` WHERE `Student Id`='".$_SESSION['id']."' AND`Exam Status`='Incomplete';");
	$row=mysqli_fetch_array($r);
					if($row[0]!=''){
					echo "Exam Id: ".$row[0]."<br>";
					echo "Exam Date: ".$row[1]."<br>";
					echo "Exam Shift: ".$row[2]."<br>";
					echo "Machine: ".$row[3]."<br>";
					echo "Student ID: ".$row[4]."<br>";
					echo "Course ID: ".$row[5]."<br>";
					}
					else
					{
						echo "Admit Card Unavailable";
					}
	
	?>
	
	</div>
</body>
</html>