<?php
require("Connection.php");
$dno=$_POST["t1"];
$dname=$_POST["t2"];
$loc=$_POST["t3"];
$q="Insert into dept values('".$dno."','".$dname."','".$loc."')";
$r=mysql_query($q);
if(!$r){
	echo "Record Insertion Failed";
	die(mysql_error());
}
else
	echo "Record insertion Succesfull";
mysql_close($con);
?>