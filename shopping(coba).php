<html>
<head>
<?php
include("connect.php");
?>
<title>Shopping Cart</title>
<link rel="stylesheet" href="bootstrap.css"></link>
<link rel="stylesheet" href="homestyle.css"></link>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			color:#819D2F;
			}
  </style>
 <script type="text/javascript">
 function getContent()
	{
		$.get("shoppingrequest.php", {}, function(e){
			var data = JSON.parse(e);
			var total=0;
			for(var i=0;i<data.length;i++)
			{
				var str ="";
				str += "<li class='row' id='isi'>";
				str += "<span class='quantity' >" + data[i].Qty + "</span>";
				str += "<span class='itemName' >" + data[i].Nama + " </span> ";
				str += "<span class='popbtn'><a class='arrow'></a></span>";
				str += "<span class='price' >" + data[i].Total + "</span>";
				str += "</li>";
				var  temp = parseInt(data[i].Total);
				total = total + temp;
				$("#isi").append(str);
			}
			$("#tot").append(total);
		});
	}
	$(function(){ getContent();});
 </script>
 </head>
 <body>
	<div class="container ">
		<div class="rows">
			<div class="col-md-12">
					<div class="row" style="height:100px;">
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
						INI DIISI LOGO KITA
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="menu.php">Menu</a>
						</li>
						<li>
							<a href="ContactUs.html">Contact Us</a>
						</li>
						<li>
							<a href="LogIn.php">Log In</a>
						</li>
						<li class="active">
							<a href="#">Shopping Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<div class="container text-center"style="margin-left:-35px;">
			<div class="col-md-12 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions" >
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<li class="row" id="isi">
					</li>
					<li class="row totals" >
						<span class="itemName">Total:</span>
						<span class="price" id="tot"></span>
						<span class="order"> <a class="text-center">ORDER</a></span>
					</li>
				</ul>
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>
	</div>
 </body>
 </html>