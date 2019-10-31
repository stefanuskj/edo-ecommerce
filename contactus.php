<?php
include("connect.php");
?>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="bootstrap.css"></link>
	<link rel="stylesheet" href="contact.css"></link>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="popup.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>

	<script src="http://maps.googleapis.com/maps/api/js">
	</script>

	<script>
	function initialize() {
	  var mapProp = {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<style>
		.col-md-1 {margin-top:-95px;
		margin-left:5px;}
	</style>
</head>
<body>
	
	
	<div class="container">
		<div class="rows">
			<div class="col-md-12">
					<div class="row" style="height:60px;">
					</div>
			</div>
		</div>
		<nav class="navbar navbar-default" style="background-image:url('background/header.jpg');background-size:cover;">
			<?php
				
				if (!isset($_SESSION['uname']))
				{
					echo "<label style='margin-left:89.5%;'>Welcome, Guest</label>";
				}
				if (isset($_SESSION['uname']))
				{
					echo  "<label style='margin-left:89.5%;'>Welcome, ".$_SESSION['fnama']."</label>";
				}
			?>
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img src="logo2.png" style="width:200px;margin-top:-35px;">
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li >
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="AboutUs.php">About Us</a>
						</li>
						<li>
							<a href="menu.php">Menu</a>
						</li>
						<li class="active">
							<a href="contactus.php">Contact Us</a>
						</li>
						<li>
							<a href="LogIn.php">Log In</a>
						</li>
						<li>
							<a href="shopping.php">Shopping Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
	</div>
	<div class="container">
		<div class="row"> 
			<div class="col-md-12">
				<h1>Contact Us</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">	
				<h3>Contact us at:<p><a href="gmail.com" style="color:#819D2F; text-decoration:none">HCI_CreativeTeam@gmail.com</a><p>(081259235786)</p>	
				<div class="col-md-1">
					<a href="www.facebook.com"><img id="im1" src="fb2.png"></a>
				</div>
				<div class="col-md-1">
					<a href="www.instagram.com"><img id="im1" src="insta2.png"></a>
				</div>
				<div class="col-md-1">
					<a href="www.path.com"><img id="im1" src="path2.png"></a>
				</div>
				<div class="col-md-1">
					<a href="www.flickr.com"><img id="im1" src="flickr2.png"></a>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<div id="googleMap" style="width:700px;height:400px;margin-top:-40px;"></div>
			</div>
		</div>
	</div>
</body>
</html>