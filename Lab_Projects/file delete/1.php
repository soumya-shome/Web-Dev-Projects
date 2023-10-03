<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>	
<form action="" enctype="multipart/form-data" method="post">
	<input type="text" name="t1"  >
	<input name="b2" type="submit" value="Submit">
</form>
<form action="" enctype="multipart/form-data" method="post">
	<input id="file" name="t5" type="file"><br>
	<input name="b1" type="submit" value="Submit">
</form>
<?php
if(isset($_REQUEST['b1'])){
	$filename = $_FILES["t5"]["name"];
	move_uploaded_file($_FILES["t5"]["tmp_name"], "Files/".$filename);
			echo "File uploaded successfully.";		
	echo "<br>File Name:".$filename;
}
elseif(isset($_REQUEST['b2'])){
	$filenam = $_REQUEST['t1'];
	unlink("Files/".$filenam );	
	echo "File Deleted";
}

?>	
</body>
</html>