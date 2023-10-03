<html>
<head><title>JavaScript Captcha Example</title></head>
<body onload="generateCaptcha()">
 
<script>
mtcap=new Array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','0','1','2','3','4','5','6','7','8','9')
var captcha;
 
function generateCaptcha() {
    var a = mtcap[Math.floor(Math.random()*mtcap.length)];
    var b = mtcap[Math.floor(Math.random()*mtcap.length)];
    var c = mtcap[Math.floor(Math.random()*mtcap.length)];
    var d = mtcap[Math.floor(Math.random()*mtcap.length)];
 	var e = mtcap[Math.floor(Math.random()*mtcap.length)];
	
	captcha=a.toString()+b.toString()+c.toString()+d.toString()+e.toString();
	
    document.getElementById("captcha").value = captcha;
}
function check(a){
	var input=document.getElementById("inputText").value;
		if(input=="hello"){
			window.location.href="17.php";
		}
		else{
			alert("Wrong Activation Code. Enter Again !!!");
		}
	}
</script>
<input type="text" id="captcha" name="a"  ><br/><br/>
<input type="text" id="inputText"/><br/><br/>
<button onclick="generateCaptcha()">Refresh</button>
<button onclick="check(<?php echo "hello" ?>)">Submit</button>
</body>
</html>