<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		$pass=$_REQUEST['pass'];
		$pass2=$_REQUEST['cpass'];
		if(strcmp($pass,$pass2)==0){
			require("connectDB.php");
			$username=$_REQUEST['usr'];
			$mobile=$_REQUEST['mobno'];
			$result= mysqli_query($con,"SELECT * FROM user_master");
			$count=mysqli_num_rows($result);
			$uid=1000+$count;
			$q="INSERT INTO `user_master` (`uid`, `mob_no`, `uname`, `password`, `utype`) VALUES ('".$uid."', '".$mobile."', '".$username."', '".$pass."', 'user');";
			$r=mysqli_query($con,$q);
			echo (!$r)?"Failed":"Success! Your User ID is ".$uid;
		}
		else{
			echo "Password Doesn't Match";
		}
	}
?>
<body>
	<form name="f1" method="post" action="">
		<p>Sign Up</p>
		<p>Username: <input type="text" placeholder="Username" name="usr"></p>
		<p>Mobile No.: <input type="number" placeholder="Mobile No." name="mobno"></p>
		<p>Password: <input type="password" placeholder="Password" name="pass"></p>
		<p>Confirm Password: <input type="password" placeholder="Confirm Password" name="cpass"></p>
		<p><input type="submit" name="b1"> </p>
	</form>
</body>
</html>