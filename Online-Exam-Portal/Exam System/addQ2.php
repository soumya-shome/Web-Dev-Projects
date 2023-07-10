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
				<li class="#"><a href="adminHome.php">Home</a></li>
				<li class="#"><a href="sche.php">Schedule Exam</a></li>
				<li class="#"><a href="Result.php">Result</a></li>
				<li class="#"><a href="createP.php">Create Question Set</a></li>
				<li class="active"><a href="viewCourse2.php">Add Questions</a></li>
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
		session_start();
		require("connectDB.php");
	if(isset($_REQUEST['y'])){
		
		header("Refresh:0,URL=addQ.php");
	}
	elseif(isset($_REQUEST['n'])){
		header("Refresh:0,URL=adminHome.php");
	}
	else{
		$q=$_REQUEST['q'];
		$o1=$_REQUEST['o1'];
		$o2=$_REQUEST['o2'];
		$o3=$_REQUEST['o3'];
		$o4=$_REQUEST['o4'];
		$co="Option".$_REQUEST['co'];
		$s="INSERT INTO `question`(`Q.No.`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Correct Answer`, `Paper Code`) VALUES ('".$_SESSION['nq']."','".$q."','".$o1."','".$o2."','".$o3."','".$o4."','".$co."','".$_SESSION['s2']."')";
		mysqli_query($con,$s);
	echo "<br>Enter New Question ?"
	
?>
	
</div>
	<form method="post" action="">
		<value="<?php echo $_SESSION['s2'] ?>" name="s1">
		<input type="submit" name="y" value="Yes">
		<input type="submit" name="n" value="No"><br>
	</form>
	<?php
	}
		?>
</body>
</html>
