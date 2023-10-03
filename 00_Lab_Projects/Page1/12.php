<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$target="C:\wamp64\up\\";
	$target.=basename($_FILES['f1']['name']);
	echo "File uploading ".$target."<br/>";
	echo "Temporary File name = ".$_FILES['f1']['tmp_name']."<br/>";
	if(move_uploaded_file($_FILES['f1']['tmp_name'],$target))
	{
		echo "File ".basename($_FILES['f1']['name'])." has been created";
	}
	else{
		echo("Problem Occured");
	}
?>
<body>
	Uploaded Files Details<br/>
	File Name <?php echo $_FILES['f1']['name']?><br/>
	File Type <?php echo $_FILES['f1']['type']?><br/>
	File Size <?php echo $_FILES['f1']['size']?><br/>
</body>
</html>