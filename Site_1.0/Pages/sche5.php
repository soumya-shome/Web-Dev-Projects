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
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myAHome">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Examco.in</a>
		</div>
		<div class="collapse navbar-collapse" id="myAHome"> 
			<ul class="nav navbar-nav">
				<li class="#"><a href="adminHome.php">Home</a></li>
				<li class="active"><a href="sche.php">Schedule Exam</a></li>
				<li class="#"><a href="Result.php">Result</a></li>
				<li class="#"><a href="createP.php">Create Question Set</a></li>
				<li class="#"><a href="viewCourse2.php">Add Questions</a></li>
				<li class="#"><a href="viewCourse.php">View Question Paper</a></li>
				<li class="#"><a href="#">Students</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right ">
				<li><a href="#">Welcome  <?php echo $_SESSION['id'] ?></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
			</ul>
		</div>
		<div class="container-fluid">
			<div id="myslide" class="carousel slide" data-ride="carousel"></div>
		</div>
	</div>
</nav>
	
<div>
<?php
	$_SESSION['s4']=$_REQUEST['s2'];
	$_SESSION['s5']=$_REQUEST['s3'];
	$s="SELECT * FROM `exam` WHERE `Exam Code`='".$_SESSION['s1']."'";	
					$r=mysqli_query($con,$s);
					$row2=mysqli_fetch_array($r);
$r2=mysqli_query($con,"SELECT * FROM `paper` WHERE `C_ID`='".$row2[5]."'");
					
$s1="UPDATE `exam` SET `Exam Date`='".$_SESSION['s3']."',`Exam Slot`='".$_SESSION['s2']."',`Machine No.`='".$_SESSION['s5']."',`Paper Code`='".$_SESSION['s4']."',`Exam Status`='Incomplete' WHERE `Exam Code`='".$_SESSION['s1']."'";
mysqli_query($con,$s1);

$s2="INSERT INTO `machine_allotment`(`EXAM_DATE`, `EXAM_ALOT`, `MAC_NO`) VALUES ('".$_SESSION['s3']."','".$_SESSION['s2']."','".$_SESSION['s5']."')";
mysqli_query($con,$s2);
					
?>
	<h1>Scheduled Successfully</h1>
</div>
</body>
</html>
