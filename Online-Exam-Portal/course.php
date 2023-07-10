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

<?php
require("header bar.php");
?>
	
<?php 
	$r1=mysqli_query($con,"SELECT * FROM `course`");
	$c1=mysqli_num_rows($r1);
	$cid="C".(1001+$c1);
?>
	
	
<form action="regCourse.php" enctype="multipart/form-data" method="post">
	Course ID: <input type="text" name="t0" value="<?php echo $cid ?>" readonly ><br>
	Course Name:<input type="text" name="t1" placeholder="Course Name"><br><br>
	Duration: <input type="number" name="t2" min='0' max='12' value='0'>Months<input type="number" name="t3" min='0' max='24' value='0'>Hrs<br><br>Description: <div>
	<textarea id="text" cols="40" rows="4" name="t4" placeholder="Say something..."></textarea></div>
	<input id="file" name="t5" type="file"><br>
	<input id="Submit" name="b1" type="submit" value="Submit">
</form>
</body>
</html>