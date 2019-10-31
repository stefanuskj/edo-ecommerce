<?php
include("connect.php");
?>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" href="bootstrap.css"></link>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="popup.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<style>
		body
		{
			background-image:url(background4.jpg);
			background-size:cover;
			font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			color:#819D2F;
		}
		
		.col-md-1 {margin-top:-95px;
		margin-left:5px;}
		
		.col-md-6 {font-size:20px;}
		
		.sideimg{ width:500px;
		height:250px;
		}
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
							<li class="active">
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
		
	</div>
	<div class="container">
		<div class="col-md-12">
			<h2>About Us</h2>
			</div>
			<div class="col-md-6">
			<p>Our restaurant was founded on 1 January 2015 with 4 donors namely Mr. Stefanus, Mr. Robin, Mr. Kenny, and Mr. Halim.
			with the concept of Japanese cuisine that we present on our menu, we want show to the customer that our food was really good quality and we also are giving the best for the customer.
			departing from the unpreparedness of our experience in making this restaurant, we run the restaurant business is hard and perseverance that led to our success so as to satisfy the customers tongue lovers of Japanese food..
			</p>
			</div>
			<div class="col-md-6">
			<img src="chef2.jpg" class="sideimg">
			</div>
	</div>
	<div class="container">
		<div class="col-md-12">
		<h2>Our Menu</h2>
		</div>
		<div class="col-md-6">
		<p>Our restaurant ingredients are fresh, healthy and selected thoroughly. Customers don't need to be concerned about their 
		diet being disturbed because we mentioned each menus nutrition values and facts at the description. Our recipe came from 
		many experiments and trials of Asian spices to keep the Oriental taste of the food
		</p>
		</div>
		<div class="col-md-6">
		<img src="chef1.jpg" class="sideimg">
		</div>
	</div>
</body>
</html>