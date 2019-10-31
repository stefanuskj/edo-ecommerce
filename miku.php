<?php
if ( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['password']) && isset($_POST['gender']))
{
  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=proyek','root', '');
  $us = "INSERT INTO user (ID, Password, FNama, LNama, Email, Address, Sex, Bonus)
               VALUES (:username, :password, :firstName, :lastName, :email, :address, :gender, 0)";
  $stmt = $pdo->prepare($us);
  $stmt->execute(array(
        ':username' => $_POST['username'],
        ':password' => $_POST['password'],
		':firstName' => $_POST['firstName'],
        ':lastName' => $_POST['lastName'],
		':email' => $_POST['email'],
		':address' => $_POST['address'],
		':gender' => $_POST['gender']));
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Success!!</title>
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="bootstrap-3.3.4-dist/css/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css"></link>
		<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
		<style>
		body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 18px;
			background:url('background4.jpg');
			color:#FF9B32;}
			
		.well, row{background-color:gray;
		}
		
		ul, img{width:30px;
		height:30px;
		display:inline;
		}
		
		li{display:inline;}
		
		a{color:#FF9B32;
		text-decoration:underline;}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<h2>Sign up for Miku Sushi Account</h2>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="row well well-lg">
					<h3>Welcome</h3>
					<p>Thank you for signing up to receive Miku Sushi updates by email.</p>
					<p>Be sure to watch your inbox for exclusive offers, sneak previews of<br>what's new, invitations to online events and much more.<br>
					You can expect to receive one to two emails per week, with the first<br>arriving within 24 hours.</p>
					<!--<ul>
						<li><img src="facebook.png"><a href="https://facebook.com">Facebook</a></li>
						<li><img src="instagram.png"><a href="https://instagram.com/">Instagram</a></li>
						<li><img src="flickr.png"><a href="https://www.flickr.com/">Flickr</a></li>
					</ul>-->
					<div class="col-md-6">
						<a href="LogIn(2).php">Go to Login>></a>
					</div>
					
					<br>
					<br>
					<div class="col-md-1">
						<img src="img/facebook.png"><a href="https://facebook.com">Facebook</a>
					</div>
					<div class="col-md-1 col-md-offset-1">
						<img src="img/instagram.png"><a href="https://instagram.com/">Instagram</a>
					</div>
					<div class="col-md-1 col-md-offset-1">
						<img src="img/flickr.png"><a href="https://www.flickr.com/">Flickr</a>
					</div>
					<div class="col-md-1 col-md-offset-1">
						<img src="img/path1.png"><a href="https://www.path.com/">Path</a>
					</div>
				</div>
			</div>
			
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
		<script src='bootstrap-3.3.4-dist/js/bootstrap.js'></script>
		</div>
	</body>
</html>
