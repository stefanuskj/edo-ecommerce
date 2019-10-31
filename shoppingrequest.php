<?php
	include("connect.php");
	echo json("select * from cart where ID_User ='".$_SESSION['uname']."'");
?>