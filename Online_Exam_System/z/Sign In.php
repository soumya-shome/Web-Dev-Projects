<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
require("connectDB.php");
	if(isset($_REQUEST["b1"])){
		$stid=$_REQUEST["t1"];
		$r=mysql_query("SELECT * FROM `profile` WHERE `USER_ID`='".$stid."'");
		if($count=mysql_num_rows($r) >0)
		{
			$row=mysql_fetch_array($r);	
			if($row[0]==$stid)	
			{
				echo "Id exist";	
				$pass=$_POST["t2"];
				$ques=$_POST["t4"];
				$ans=$_POST["t5"];
				$q="INSERT INTO `profile`(`USER_ID`, `PASSWORD`, `USER_TYPE`, `STATUS`, `HINT QUESTION`, `HINT ANSWER`) VALUES ('".$stid."','','STUDENT','0','".$ques."','".$ans."')";
				$r=mysql_query($q);
				if(!$r)
				{
				echo "Record insertion failed!";
				die(mysql_error());
				}
				else
				{
				echo "Record inserted succesfully!";
				mysql_close($con);
				}
				}
		else
		{
			echo "Does'nt exist";
		}
		}
	}
	?>
<body>
<form name="f1" method="post" action="">
Student Id:&nbsp;<input type="text" placeholder="Student Id" name="t1"><br><br>
Password:&nbsp;<input type="text" placeholder="Password" name="t2"><br><br>
Confirm Password:&nbsp;<input type="text" placeholder="Confirm Password" name="t3"><br><br>
Hint Question:&nbsp;<input type="text" placeholder="Hint Question" name="t4"><br><br>
Hint Answer:&nbsp;<input type="text" placeholder="Hint Answer" name="t5"><br><br>
<input type="submit" value="Sign In" name="b1">
<input type="button" value="Refresh">
</form>
</body>
</html>
