<?php
	require("connectDB.php");
	session_start();
	$rest=mysqli_query($con,"SELECT * FROM `Bill_master`;");
	$count=mysqli_num_rows($rest);
	$bill="BI".(1001+$count);
	$PD=0;
	$CB=$_REQUEST['C'];
	$total=$PD+$CB;
?>
Mobile No:  <?php echo $_SESSION['mob']	?><br>
Month: <?php echo date("M")?><br>
Bill No:  <?php echo $bill?><br>
Current Bill: <?php echo $CB ?> <br>
Prev Due: <?php echo $PD ?><br>
Total: <?php echo $total ?><br>

<?php
	$q="INSERT INTO `bill_master` (`Bill_No`, `Mob No`, `C_Amt`, `Prev_Due`, `Total_Bill`) VALUES ('".$bill."', '".$_SESSION['mob']."', '".$CB."', '".$PD."', '".$total."');";
	mysqli_query($con,$q);
	echo "Bill Inserted";
?>