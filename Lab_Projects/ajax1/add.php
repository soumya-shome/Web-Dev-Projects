<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function showHint(str) {
	a=document.getElementById("p").innerHTML;
	b=document.getElementById("q").innerHTML;
	document.getElementById("txtHint1").innerHTML=a.value;
if (str1.length == 0 || str1.length == 0) {
	document.getElementById("r").innerHTML = "";
	return;
}else {
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("txtHint").innerHTML =
				this.responseText;
		}
	};
	xmlhttp.open("GET", "sugession.php?q=" + str, true);
	xmlhttp.send();
	}
}
</script>
</head>
<body>
<p><b>Type first character of the name:</b></p>
<form>
1: <input type="text" name="p" id="p">
2: <input type="text" name="q" id="q">
Sum: <input type="text" id="r" onkeyup="showHint(this.value)">
</form>
<p>A: <span id="txtHint1"></span></p>
<p>B: <span id="txtHint2"></span></p>
</body>
</html>