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
	<?php
	require("connectDB.php");
	session_start();
	?>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="myAHome"> 
			<ul class="nav navbar-nav">
				<li class="#"><a href="adminHome.php">Home</a></li>
				<li class="#"><a href="sche.php">Schedule Exam</a></li>
				<li class="#"><a href="Result.php">Result</a></li>
				<li class="active"><a href="createP.php">Create Question Set</a></li>
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
<div id="myslide" class="carousel slide" data-ride="carousel">


</div>
</div>
</div>
</nav>
<div>
	<?php
$_SESSION['cc']=$_REQUEST['s1'];
$r=mysqli_query($con,"SELECT * FROM `paper` WHERE `C_ID`='".$_SESSION['cc']."'");
$count2=mysqli_num_rows($r);
?>
<form method="post" action="insertQ.php">
	<?php
		$row=mysqli_fetch_array($r);
		$ccode=$row[3];
		$c=substr($ccode,3,2);
		$co=strlen($ccode);
		$_SESSION['set']=$count2+1;
		$_SESSION['pname']=$row[1];
		$_SESSION['pco']="P10".$c.chr(65+$count2);
		echo "Paper Name : ".$_SESSION['pname']."<br>";
		echo "Paper Code : ".$_SESSION['pco']."<br>";
		echo "Course ID : ".$_SESSION['cc']."<br>";
	?>
	Paper Set : <?php echo $_SESSION['set']?><br>
	No of Questions: <input type="text" name="t2"><br>
	Time Limit : <input type="text" name="t3" ><br>
	Negative marks: -1 for <input type="text" name="t4"><br>
	<input type="submit" value="Select" name="b1">	
</form>	
</div>
	
</body>
</html>
