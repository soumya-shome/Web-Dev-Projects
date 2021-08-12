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
	<script>
mtcap=new Array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','0','1','2','3','4','5','6','7','8','9')
var captcha;
 
function generateCaptcha() {
    var a = mtcap[Math.floor(Math.random()*mtcap.length)];
    var b = mtcap[Math.floor(Math.random()*mtcap.length)];
    var c = mtcap[Math.floor(Math.random()*mtcap.length)];
    var d = mtcap[Math.floor(Math.random()*mtcap.length)];
 	var e = mtcap[Math.floor(Math.random()*mtcap.length)];
	
	captcha=a.toString()+b.toString()+c.toString()+d.toString()+e.toString();
	
    document.getElementById("captcha").value = captcha;
}
</script>
	<?php
	require("connectDB.php");
	session_start();
	?>
<body onLoad="generateCaptcha()">
	
	
	
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
$s="SELECT * FROM `exam` WHERE `Exam Code`='".$_SESSION['s1']."'";	
$r=mysqli_query($con,$s);
?>
<form name="f1" method="post" action="sche4.php">
	Date : <input type="date" min="<?php echo date("Y-m-d") ?>" name="d" required>
	<br>
	Select Shift :<br> 
	Morning : 11:00 AM<br>
	Afternoon : 2:00 PM<br>
	<select name='n1'>
		<option value='M'>Morning</option>
		<option value='A'>Afternoon</option>
	</select>
	<br><input type="text" id="captcha" name="cap" hidden><br/><br/>
	<input type="submit" name="b1" value="Submit">

</form>

</div>

	</body>
</html>
