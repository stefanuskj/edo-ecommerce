<?php
include("connect.php");
$id = $_GET['id'];
mysqli_query($con,"delete from cart where ID_Cart='$id'");
?>