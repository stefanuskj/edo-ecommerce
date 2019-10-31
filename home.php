<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="bootstrap.css"></link>
<link rel="stylesheet" href="homestyle.css"></link>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			color:#819D2F;
			}
  </style>
<!--<script type="text/javascript">
	function showMenu (pil)
	{
		if (pil==1)
		{
			document.getElementById("menu1").style.display = "block";
			
		}
		else if (pil==2)
		{
			document.getElementById("menu2").style.display = "block";
		}
		else if (pil==3)
		{
			document.getElementById("menu3").style.display = "block";
		}
	}
	function hideMenu (pil)
	{
		if (pil==1)
		{
			document.getElementById("menu1").style.display = "none";
			
		}
		else if (pil==2)
		{
			document.getElementById("menu2").style.display = "none";
		}
		else if (pil==3)
		{
			document.getElementById("menu3").style.display = "none";
		}
	}
</script>-->
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
				include("connect.php");
				if (!isset($_SESSION['fnama']))
				{
					echo "<label style='margin-left:89.5%;'>Welcome, Guest</label>";
				}
				if (isset($_SESSION['fnama']))
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
						<li class="active">
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="AboutUs.php">About Us</a>
						</li>
						<li>
							<a href="menu.php">Menu</a>
						</li>
						<li>
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
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
					<div class="item active">
					<img src="foodImg/1.jpg" alt="Udon" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Yaki Udon</h3>
							<p>(焼きうどん, "fried udon") are thick, smooth, white Japanese noodles eaten with a special sauce, meat and vegetables.</p>
						</div>
					</div>

					<div class="item">
					<img src="foodImg/8.jpg" alt="Katsu" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Menchi-katsu</h3>
							<p>(メンチカツ) is a breaded and deep-fried ground meat cutlet or croquette,a fried meat cake.</p>
						</div>
					</div>

					<div class="item">
					<img src="foodImg/11.jpg" alt="Sashimi" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Salmon Sashimi</h3>
							<p>The most favourite sashimi all time</p>
						</div>
					</div>

					<div class="item">
					<img src="foodImg/14.jpg" alt="Sushi" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Dragon Roll</h3>
							<p>The dragon roll is an outside thick roll of eel, and cucumbers that are wrapped with thinly sliced avocado.</p>
						</div>
					</div>
					
					<div class="item">
					<img src="foodImg/18.jpg" alt="Flower" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Gyudon Bento</h3>
							<p>Mouth watering food contain tamagoyaki, furikake rice, and mixed vegetables.</p>
						</div>
					</div>

					<div class="item">
					<img src="foodImg/22.jpg" alt="Flower" style="height:500px;width:900px;">
						<div class="carousel-caption">
							<h3>Ujikintoki</h3>
							<p> flavored with green tea syrup and anko (sweet azuki beans). Sweetened condensed milk is often poured.</p>
						</div>
					</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="row2">
			<a href="menu.php" style="color:white;"><div class="col-md-3" style="border-radius:2px;border-style:solid;border-color:white;height:300px"  onmouseover="showMenu(1)" onmouseout="hideMenu(1)">
				<div id="menu1" style="display:none;" >
					<h2>Our recipe is from generation to generation</h2>
				</div>
				<h1 id="m1"><center>See Our Menu</h1>
				<br><center><img src="img/c1.png" id="m11">
				<br><h3 id="m111"><center>Discover our delicate menu</h3>
			</div></a>
			<div class="col-md-1 " style="">
			</div>
			<a href="signupre.php" style="color:white;"> <div class="col-md-3" style="border-radius:2px;border-style:solid;border-color:white;height:300px;margin-left:50px;" onmouseover="showMenu(2)" onmouseout="hideMenu(2)">
				<div id="menu2" style="display:none;">
				</div>
				<h1 id="m2"><center>Sign Up Now</h1>
				<br><center><img src="img/signup.png" id="m22" style="height:100px;width:150px;">
				<br><h3 id="m222"><center>to get special offer</h3>
			</div>
			</a>
			<div class="col-md-2 " style="">
			</div>
			<a href="contactus.php" style="color:white;">
			<div class="col-md-3" style="border-radius:2px;border-style:solid;border-color:white;height:300px;margin-left:140px" onmouseover="showMenu(3)" onmouseout="hideMenu(3)">
				<div id="menu3" style="display:none;">
				</div>
				<h1 id="m3"><center>Join our FanPage</h1>
				<br><center><img src="img/instagram.png" id="m33" style="height:100px;width:150px;">
				<br><h3 id="m333"><center>to get newest information</h3>
			</div>
			</a>
		</div>
		
	</div>
</body>
</html>