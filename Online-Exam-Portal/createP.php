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
	<?php
	require("connectDB.php");
	session_start();
	?>
</head>
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<?php
 require ("header bar.php");
?>
<div>
	<?php
$r=mysqli_query($con,"SELECT * FROM `course`");
?>
<form method="post" action="createP2.php">
	Select Course <select name="s1">
	<?php
		while($row=mysqli_fetch_array($r))
		{
			if($row[1]!=NULL){
	?>
		<option value='<?php  echo $row[0] ?>'><?php echo $row[1]?></option>
	<?php
		}
		}
	?>
	</select>
	<input type="submit" value="Select" name="b1">	
</form>	
</div>
	
</body>
</html>
