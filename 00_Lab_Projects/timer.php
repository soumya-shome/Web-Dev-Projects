<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exam</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

<script>		
	/*
	<?php
	//	$time=120;
	//	$ct=date("i")+$time;
	//	$s=date("s");
	?>
	
		var num = <?php //echo $time ?>;
		document.getElementById("tt").innerHTML =  num;
		var hours = (num / 60);
		var rhours = Math.floor(hours);
		var minutes = (hours - rhours) * 60;
		var rminutes = Math.round(minutes);
		//return num + " minutes = " + rhours + " hour(s) and " + rminutes + " minute(s).";
		var hr=<?php// echo date("H")?>+rhours;
		var min=<?php// echo date("i")?>+rhours;
		var ntime=hr+":"+min+":"+"<?php// echo $s ?>"
		var countDownDate = new Date("<?php// echo date("M")." ".date("j").", ".date("Y") ?>,"+ntime).getTime();
		var x = setInterval(function() {
			var now = new Date().getTime();
			var distance = countDownDate - now;
		  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		  	document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
		  	if (distance < 0) {
				document.getElementById("demo").innerHTML = "Time Over";
		  	}
		}, 1000);
	*/
	function StartTime(){
		
		<?php
		$time=70;
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
		
		
		
		document.getElementById("tt").innerHTML =  ntime;
		
		var countDownDate = new Date(nttime).getTime();

		var x = setInterval(function() {
			var now = new Date().getTime(); 
			var t = countDownDate - now; 
			var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
			var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
			var seconds = Math.floor((t % (1000 * 60)) / 1000); 
			document.getElementById("demo").innerHTML =  hours + "h " + minutes + "m " + seconds + "s ";
		  //document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
		  //document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
		  if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "Time Over";
			  document.myForm.submit();
		  }
		}, 1000);
	}
</script>
	
<body>
	<button onClick="StartTime()">Start</button>
	Time Left: <p id="demo"></p>
	Total Time : <p id="tt"></p><br>
</body>
</html>

