<?php
include("connect.php");
$id=$_GET['id'];
$qty = $_GET['qty'];
$nama = $_GET['nama'];
$que = mysqli_query($con,"select * from makanan where Nama='$nama'");
$row = mysqli_fetch_array($que);
$total = $row['Harga'] * $qty;
mysqli_query($con,"update cart set Qty='$qty',Total='$total' where ID_Cart='$id'");
?>
