<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML =
this.responseText;
}
};
	xmlhttp.open("GET", "20.php?q=" + str, true);
xmlhttp.send();
}
}
</script>
</head>
<body>
<p><b>Type first character of the name:</b></p>
<form>
Enter Name: <input type="text" name="p" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>