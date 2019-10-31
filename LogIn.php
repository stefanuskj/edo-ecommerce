<?php
	include("connect.php");
	if(isset($_POST['login']))
	{
		$user = $_POST['uname'];
		$_SESSION['uname']=$user;
		$pwd = $_POST['pwd'];
		$que = mysqli_query ($con,"select * from user where id='$user' and password ='$pwd'");
		if (mysqli_num_rows($que) >=1)
		{
			$row=mysqli_fetch_array($que);
			$_SESSION['fnama']=$row['FNama'];
			header("location:home.php");
		}
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("You must Sign Up first!")';
			echo '</script>';
			header("location:signupre.php");
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Miku Sushi</title>
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="bootstrap-3.3.4-dist/css/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css"></link>
		<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
		<style>
		.new {font-weight: bold;
			font-style: normal;
			color:#819D2F;
			font-weight: bold;}
			
		body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			background:url('background4.jpg');
			color:#FF9B32;}
			
		.glyphicon {display: inline-block;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;}
			
		</style>
	</head>
	<body>
	<div class='container'>
		<div class='row features text-center'>
			<div class='col-md-12'>
						<img src="logo2.png" style="margin-left:-40px;">
			</div>
		</div>
	</div>
	<div class='container'>
		<div class='col-md-6'>
			<h3>Login</h3>
			 <p>Login with your personal Edo JR ID below:</p>
			 
			<form role="form" method="post" action='#'>
				  <div class='form-group'>
				   <div class='row'>
					<div class='col-md-8'>
						<label for='InputUname'>Username</label>
						<input type='text' class='form-control' id='InputUname' placeholder='Username' name="uname">
					</div>
				   </div>
				  </div>
				  <div class='form-group'>
					<div class='row'>
						<div class='col-md-8'>
							<label for='InputPassword'>Password</label>
							<input type='password' class='form-control' id='InputPassword' placeholder='Password' name="pwd">
						</div>
					</div>
				  </div>
				  <div class='checkbox'>
					<label>
					  <input type='checkbox'> Keep me logged in
					</label>
				  </div>
					<div class='row'>
						<div class='col-md-3'>
							<button type="submit" class='btn btn-primary btn-md btn-block' name="login">LOGIN</button>
						</div>
					</div>
			</form>
		</div>
		<div class='row features'>
			<div class='col-md-6'>
				<h3>Sign up</h3>
					<p>Sign up for your own personal Edo JR ID:</p>					
				<div class='row  features'>	
					<div class='col-md-10'>
						<ul class='list-unstyled'>
							<i class='glyphicon glyphicon-cloud text-center'></i>
								<li><p><em class='new'>NEW!</em> <b>CLOUD BACKUP</b> Save your Edo JR data in the cloud.</p></li>
							<i class='glyphicon glyphicon-refresh'></i>
								<li><p><em class='new'>NEW!</em> <b>CLOUD SYNC</b> Autosync Edo JR data between multiple computers</p></li>
							<i class='glyphicon glyphicon-user'></i>
								<li><p><em class='new'>NEW!</em> <b>MANAGE YOUR EDO JR ID</b> Preferences, subscriptions, delivery info and more.</p></li>
							<i class='glyphicon glyphicon-bell'></i>
								<li><p><em class='new'>NEW!</em> <b>INSIDER INFO</b> Get the latest announcements, events and promotions before anyone else.</p></li>
							<i class='glyphicon glyphicon-gift'></i>
								<li><p><em class='new'>NEW!</em> <b>EXPEDITED SUPPORT</b> Store product and purchase info for quick and easy support.</p></li>
							<i class='glyphicon glyphicon-star'></i>
								<li><p><em class='new'>NEW!</em> <b>BETA ACCESS</b>  Elite members may be selected for advanced confidential product testing.</p></li>
						</ul>
					</div>
				</div>
				<form role="form" method="post" action='#'>
					<div class='form-group'>
					   <div class='row'>
						<div class='col-md-3'>
							<a href="signupre.php" class="btn btn-primary btn-md btn-block' role="button">SIGN UP</a>
						</div>
					   </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	  <script src='bootstrap-3.3.4-dist/js/bootstrap.js'></script>
	</body>
</html>