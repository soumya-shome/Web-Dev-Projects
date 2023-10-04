<?php
require "header3.php";
$result1=mysqli_query($con,"SELECT * FROM `paper_set` WHERE `p_id`= '".$_SESSION['op']."'");
$row1=mysqli_fetch_array($result1);
$type="";
if($row1[2]=="OFFLINE"){
	$type="OFFLINE";
}else{
	$type="ONLINE";
}	
?>
<script>	
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
		$s1;
		if($type=="OFFLINE"){
			$s1="SELECT time FROM `p_off` WHERE `p_id`='".$_SESSION['op']."'";

		}else{
			$s1="SELECT time FROM `p_on` WHERE `p_id`='".$_SESSION['op']."'";

		}
		$r1=mysqli_query($con,$s1);
		$row2=mysqli_fetch_array($r1);
		$time=$row2[0];
		$ct=date("i")+$time;
		$s=date("s");
		?>
		var countDownDate = new Date("<?php echo date("M")." ".date("j").", ".date("Y") ?>, <?php echo date("H").":".$ct.":".$s ?>").getTime();
		var x = setInterval(function() {
			var now = new Date().getTime();
			var distance = countDownDate - now;
		  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		  	document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
		  	if (distance < 0) {
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
<div>
	Rules: ...
	
	<button onClick="di()" id="btnTest" >Start Exam</button>

</div>



	<div id="exam" style="display:none;">
	Time Left: <p id="demo"></p> 
	<?php
	$paper=$_SESSION['op'];
	$result=mysqli_query($con,"SELECT * FROM `question` WHERE `p_id`= '".$paper."'");
	$_SESSION['q1']=1;
?>
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

