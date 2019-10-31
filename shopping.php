<html>
<head>
<?php
include("connect.php");
if(isset($_POST['finish'])){
	
	header("location:finish.html");
}
?>
<title>Shopping Cart</title>
<link rel="stylesheet" href="bootstrap.css"></link>
<link rel="stylesheet" href="homestyle.css"></link>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			color:#819D2F;
			}
  </style>
 <script type="text/javascript">
 function delFunc (a)
	{
		var req = new XMLHttpRequest();
		req.open("GET","request.php?id="+a, true);
		req.send();	
		req.onreadystatechange = function(){
			if(req.readyState == 4){
				getContent();
				}
		}
	}
function editFunc (a)
{
		$.get("requestEdit.php",
			{id:a,
			qty:$("input[name=quanty]").val(),
			nama:$("div[name=namaMak]").text(),},function(){
				getContent();
			});
}
 function getContent()
	{
		$.get("shoppingrequest.php", {}, function(e){
			var data = JSON.parse(e);
			var total=0;
			document.getElementById("fin").style.display="block";
			$("#isi").html("");
			$("#tot").html("");
			for(var i=0;i<data.length;i++)
			{
				var str ="";
				str += "<div class='row' id='isi'>";
				str += "<div class='col-md-3' id='isi' name='namaMak'><h3>" + data[i].Nama + " </h3></div> ";
				str += "<div class='col-md-3' id='isi'><input type='number' value='"+data[i].Qty+"' name='quanty' style='margin-top:18px;width:50px;margin-left:40px;'></div>";
				str += "<div class='col-md-3' id='isi'><h3>" + data[i].Total + "</h3></div>";
				str += "<div class='col-md-3' id='isi'><input type ='button' value='Delete' onclick='delFunc("+data[i].ID_Cart+")' style='margin-top:18px;width:50px;'><input type='button' value='Edit' onclick='editFunc("+data[i].ID_Cart+")' style='margin-top:18px;width:50px;'></div>"
				str += "</div><br>";
				total = total + parseInt(data[i].Total);
				$("#isi").append(str);
			}
			$("#tot").append(total);
		});
	}
	$(function(){ getContent();});
	
 </script>
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
						<li>
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
						<li class="active">
							<a href="shopping.php">Shopping Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-12" ">
			<div class="row">
				<div class="col-md-3">
				<h1>Name</h1>
				</div>
				<div class="col-md-3">
				<h1>Quantity</h1>
				</div>
				<div class="col-md-3">
				<h1>Price</h1>
				</div>
			</div>
				<div class="row" id="isi">
					<div class="col-md-3" >
					</div>
					<div class="col-md-3" >
					</div>
					<div class="col-md-3" >
					</div>
					<div class="col-md-3" >
					</div>
				</div>
				<div class="row">
					<div class="col-md-9" style="border-style:solid;" >
						<h1>Total : <label id="tot"> 0 </label></h1>
					</div>
					<div class="col-md-3">
					<form method="post">
					<button type="submit" class='btn btn-primary btn-md btn-block' name="finish" id="fin" style="width:100px; margin-left:7px;margin-top:20px;display:none;" >FINISH</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 </body>
 </html>