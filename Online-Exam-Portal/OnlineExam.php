<!doctype html>
<html>
	<?php
	require("connectDB.php");
	session_start();
	?>
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
	
	<script>
		
<?php
	$result2=mysqli_query($con,"SELECT * FROM `paper` WHERE `P_CODE`= '".$_SESSION['op']."'");
	$row2=mysqli_fetch_array($result2);
	$time=$row2[4];
	$ct=date("i")+$time;
	$s=date("s");
	?>	
	var elem =document.documentElement;
	
	function openFullscreen() {
  		if (elem.requestFullscreen) {
			elem.requestFullscreen();
		  } else if (elem.mozRequestFullScreen) { /* Firefox */
			elem.mozRequestFullScreen();
		  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
		elem.webkitRequestFullscreen();
		} else if (elem.msRequestFullscreen) { /* IE/Edge */
		elem.msRequestFullscreen();
		}
	}
	
	function closeFullscreen() {
	  if (document.exitFullscreen) {
		document.exitFullscreen();
	  } else if (document.mozCancelFullScreen) { /* Firefox */
		document.mozCancelFullScreen();
	  } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
		document.webkitExitFullscreen();
	  } else if (document.msExitFullscreen) { /* IE/Edge */
		document.msExitFullscreen();
	  }
	}

	document.onkeydown = function (e) {
        return false;
	}
	
	function StartTime(){
		document.getElementById("n1".disable);
		openFullscreen();
		<?php
		$ti="";
		$s1="SELECT time FROM `p_on` WHERE `p_id`='".$_SESSION['op']."'";
		$r1=mysqli_query($con,$s1);
		$row2=mysqli_fetch_array($r1);
		$time=$row2[0];
		?>
		var num = <?php echo $time ?>;
		var hours = (num / 60);
		var rhours = Math.floor(hours);
		var minutes = (hours - rhours) * 60;
		var rminutes = Math.round(minutes);
		var hr=<?php echo date("H")?>+rhours;
		var min=<?php echo date("i")?>+rminutes;
		var ntime=hr+":"+min+":"+"<?php echo date("s") ?>"
		var nttime="<?php echo date("M")." ".date("j").", ".date("Y") ?>,"+ntime
		
		var countDownDate = new Date(nttime).getTime();
		var x = setInterval(function() {
			var now = new Date().getTime(); 
			var t = countDownDate - now; 
			var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
			var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
			var seconds = Math.floor((t % (1000 * 60)) / 1000); 
			document.getElementById("demo").innerHTML =  hours + "h " + minutes + "m " + seconds + "s ";
			if (t < 0) {
				clearInterval(x);
				closeFullscreen();
				document.getElementById("demo").innerHTML = "Time Over";
			  	document.myForm.submit();
		  	}
		}, 1000);
	}
	
	function di(){
		 $("#btnTest").attr("disabled", true);
		StartTime();
		showDiv();
	}
	
	function showDiv() {
		document.getElementById('exam').style.display = "block";
	}
</script>

	
	
	
</head>
	
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<?php
require "header3.php";
$result1=mysqli_query($con,"SELECT * FROM `paper_set` WHERE `p_id`= '".$_SESSION['op']."'");
$row1=mysqli_fetch_array($result1);
?>
<div id="exam" style="display:none;">
	Time Left: <p id="demo"></p> 
	<?php
	$paper=$_SESSION['op'];
	$result=mysqli_query($con,"SELECT * FROM `question` WHERE `p_id`= '".$paper."'");
	$_SESSION['q1']=1;
?>
<div>
	Rules: ...
	
	<button onClick="di()" id="btnTest" >Start Exam</button>

</div>
<form method="post" action="checkP.php" name="myForm">
<?php
while($row=mysqli_fetch_array($result)){
	$q=$row[2];
	$op1=$row[3];
	$op2=$row[4];
	$op3=$row[5];
	$op4=$row[6];
	echo "<br>Question: ".$q."<br>";
	?>
	<input type="radio" name="r<?php echo $_SESSION['q1'] ?>" value="1">Option 1: <?php echo $op1 ?><br>
	<input type="radio" name="r<?php echo $_SESSION['q1'] ?>" value="2">Option 2: <?php echo $op2 ?><br>
	<input type="radio" name="r<?php echo $_SESSION['q1'] ?>" value="3">Option 3: <?php echo $op3 ?><br>
	<input type="radio" name="r<?php echo $_SESSION['q1'] ?>" value="4">Option 4: <?php echo $op4 ?><br>
	<input type="radio" name="r<?php echo $_SESSION['q1'] ?>" value="0" hidden="" checked="checked"><br>
<?php
$_SESSION['q1']=$_SESSION['q1']+1;
}
?>
	<br>
	<input type="submit" value="Submit" name="b1">
</form>
	</div>
</body>
</html>