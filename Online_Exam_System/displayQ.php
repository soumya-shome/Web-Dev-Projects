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
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="myAHome"> 
			<ul class="nav navbar-nav">
				<li class="#"><a href="adminHome.php">Home</a></li>
				<li class="#"><a href="sche.php">Schedule Exam</a></li>
				<li class="#"><a href="Result.php">Result</a></li>
				<li class="#"><a href="createP.php">Create Question Set</a></li>
				<li class="#"><a href="viewCourse2.php">Add Questions</a></li>
				<li class="active"><a href="viewCourse.php">View Question Paper</a></li>
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
	
	$_SESSION['code']=$_REQUEST['s1'];
	$result=mysqli_query($con,"SELECT * FROM `question` WHERE `Paper Code`='".$_SESSION['code']."'");
	$count=mysqli_num_rows($result);
	if($count!=0){
	?>
	<h1>Questions</h1>
	<table border="1">
		<tr>
			<th>Question No.</th>
			<th>Question</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Option 4</th>
			<th>Correct Option</th>
		</tr>
		<?php 
		while($row=mysqli_fetch_array($result))
		{
			$quen=$row[0];
			$ques=$row[1];
			$op1=$row[2];
			$op2=$row[3];
			$op3=$row[4];
			$op4=$row[5];
			$opc=$row[6];
		?>
		<tr>
			<td><?php echo $quen ?></td>
			<td><?php echo $ques ?></td>
			<td><?php echo $op1 ?></td>
			<td><?php echo $op2 ?></td>
			<td><?php echo $op3 ?></td>
			<td><?php echo $op4 ?></td>
			<td><?php echo $opc ?></td>
		</tr>
		<?php
		}
	}
	else{
		echo "Empty table";
	}
	?>
	</table>
	
</div>
	
</body>
</html>
