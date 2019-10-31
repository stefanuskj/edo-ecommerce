<?php 
	include("connect.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" href="bootstrap.css"></link>
	<link rel="stylesheet" href="menustyle.css"></link>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="popup.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
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
						<li class="active">
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
		<div class="row" style="margin-top:40px;">
			<div class="col-md-2" style="top:-30px"><a href="#" onClick="drop()"><img id="i1" src="img/g5.png"></a></div>
			<div class="col-md-2" style="left:-25px"><a href="#" onClick="drop1()"><img id="i2" src="img/g2.png" ></a></div>
			<div class="col-md-2"><a href="#" onClick="drop2()"><img id="i3" src="img/g3.png" ></a></div>
			<div class="col-md-2"><a href="#" onClick="drop3()"><img id="i4" src="img/g4.png" ></a></div>
			<div class="col-md-2"><a href="#" onClick="drop4()"><img id="i5" src="img/g1.png" ></a></div>
			<div class="col-md-2"><a href="#" onClick="drop5()"><img id="i6" src="img/g6.png" ></a></div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:20px;">
		<div id="blanket" style="display:none"></div>
		<div id="popUpDiv" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/1.jpg"></div>
				<p id="p1">  </p>
					<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(1);
						?>
					</table>
				<form method="post" action="connect.php">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv1" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv1')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/2.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(2);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv2" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv2')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/3.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(3);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv3" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv3')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/4.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(4);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d1">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv')"><img id="i7" src="img/1.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv1')"><img id="i7" src="img/2.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv2')"><img id="i7" src="img/3.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv3')"><img id="i7" src="img/4.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px;">
		<div id="popUpDiv4" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv4')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/5.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(5);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv5" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv5')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/6.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(6);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv6" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv6')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/7.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(7);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv7" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv7')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/8.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(8);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d2">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv4')"><img id="i7" src="img/5.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv5')"><img id="i7" src="img/6.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv6')"><img id="i7" src="img/7.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv7')"><img id="i7" src="img/8.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px;">
		<div id="popUpDiv8" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv8')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/9.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(9);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv9" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv9')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/10.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(10);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv10" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv10')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/11.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(11);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv11" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv11')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/12.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(12);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d3">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv8')"><img id="i7" src="img/9.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv9')"><img id="i7" src="img/10.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv10')"><img id="i7" src="img/11.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv11')"><img id="i7" src="img/12.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px;">
		<div id="popUpDiv12" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv12')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/13.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(13);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv13" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv13')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/14.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(14);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv14" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv14')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/15.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(15);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv15" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv15')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/16.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(16);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d4">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv12')"><img id="i7" src="img/13.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv13')"><img id="i7" src="img/14.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv14')"><img id="i7" src="img/15.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv15')"><img id="i7" src="img/16.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px;">
		<div id="popUpDiv16" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv16')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/17.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(17);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv17" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv17')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/18.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(18);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv18" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv18')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/19.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(19);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv19" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv19')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/20.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(20);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d5">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv16')"><img id="i7" src="img/17.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv17')"><img id="i7" src="img/18.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv18')"><img id="i7" src="img/19.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv19')"><img id="i7" src="img/20.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:40px;">
		<div id="popUpDiv20" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv20')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/21.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(21);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv21" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv21')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/22.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(22);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv22" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv22')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/23.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(23);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
		<div id="popUpDiv23" style="display:none"><a id="a1" href="#" onclick="popup('popUpDiv23')"><img id="i30" src="img/x.png"></a>
				<div id="f1"><img id="i8" src="img/24.jpg"></div>
				<p id="p1">  </p>
				<table id="t1">
						<?php
							$newobj= new MyClass;
							echo $newobj->draw(24);
						?>
					</table>
				<form method="post" action="#">
				<p id="p2">Quantity:</p>
				<input id="n1" type="number" name="qty" min=1 required>
				<input id="b1" type="submit" name="submit" value="ADD TO CART" class="btn btn-default">
				</form>
		</div>
			<div id="d6">
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv20')"><img id="i7" src="img/21.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv21')"><img id="i7" src="img/22.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv22')"><img id="i7" src="img/23.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="#" onClick="popup('popUpDiv23')"><img id="i7" src="img/24.jpg"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>