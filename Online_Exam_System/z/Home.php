<!doctype html>
<html>
<head>
<title>Student Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.navbar{
	border-radius:1;
	background-color: #03033C;
	}		
</style>
</head>
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mySHome">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="mySHome"> 
<ul class="nav navbar-nav">
<li class="active"><a href="#">HOME PAGE</a></li>
</ul>
	
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Log In</a></li>
</ul>
</div>
<div class="container-fluid">
<div id="myslide" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myslide" data-slide-to="0" class="active"></li>
<li data-target="#myslide" data-slide-to="1" class="active"></li>

</ol>
<div class="carousel-inner">

<div class="item active">
<img src="Images/home-carousel-28.jpg" alt="Carousal" class="img-responsive">
</div>


<div class="item">
<img src="Images/home-carousel-11.jpg" alt="Carousal" class="img-responsive">
</div>


<a class="left carousel-control " href="#myslide" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control " href="#myslide" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
</div>
</div>
</nav>
</body>
</html>