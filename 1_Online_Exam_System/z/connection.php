<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$con=mysql_connect('localhost','root','');
if(!$con){
	die("Could not connect:".mysql_error());
}
mysql_select_db("online_exam_007",$con);
?>
<body>
</body>
</html>