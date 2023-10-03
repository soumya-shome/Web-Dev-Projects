<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script>
	//var elem = document.getElementById("world");
	var elem =document.documentElement;
	function check(a){
		//alert(a);
		window.location.href="17.php";
	}
	function openFullscreen() {
  		if (elem.requestFullscreen) {
			elem.requestFullscreen();
		  } else if (elem.mozRequestFullScreen) { /* Firefox */
			elem.mozRequestFullScreen();
		  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
		elem.webkitRequestFullscreen();
		} else if (elem.msRequestFullscreen) { /* IE/Edge */
		elem.msRequestFullscreen();
		}
	}
	
	function closeFullscreen() {
	  if (document.exitFullscreen) {
		document.exitFullscreen();
	  } else if (document.mozCancelFullScreen) { /* Firefox */
		document.mozCancelFullScreen();
	  } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
		document.webkitExitFullscreen();
	  } else if (document.msExitFullscreen) { /* IE/Edge */
		document.msExitFullscreen();
	  }
	}
	//$(document).keydown(function(e) {
    //if (e.keyCode == 27) return false;
//});
	//$( ".selector" ).dialog({ closeOnEscape: false });
	
/*document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        return false;
    }
};*/

/*$(document).on('keyup',function(evt) {
    if (evt.keyCode == 27) {
       alert('Esc key pressed.');
    }
});*/
	
	document.onkeydown = function (e) {
        return false;
}
	</script>
<body >
	<div onLoad="openFullscreen()">
	<input type="button" onClick="check(<?php echo "'ello'" ?>)" value="Hello">
	<input type="button" onClick="openFullscreen()" value="FullScreen">
	<input type="button" onClick="closeFullscreen()" value="Exit FullScreen">
	<p onclick="myFunction(this, 'red')">Click me to change my text color.</p>
<textarea  ></textarea>
<script>
function myFunction(elmnt,clr) {
  elmnt.style.color = clr;
}
</script>
	
	<div id="world">
	Hello World
	</div>
		</div>
	</body>
	
</html>