<?php
	$con = mysqli_connect("localhost","root","","proyek");
	function json($query)
	{
		global $con;
		$que = mysqli_query($con,$query);
		$arr = array();
		while($row = mysqli_fetch_assoc($que))
		{
			array_push($arr,$row);
		}
		return json_encode($arr);
	}
	session_start();
?>
<?php
class MyClass
{
	public function draw($num)
	{
	$pdo = new PDO('mysql:host=localhost;dbname=proyek', 'root', '');
	$stmt = $pdo->query("SELECT kategori.Nama Kategori, makanan.Nama, makanan.Harga,makanan.Stock,Makanan.Rating FROM makanan INNER JOIN kategori ON makanan.ID_kategori=kategori.ID_kategori WHERE makanan.ID_makanan='$num'");
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) )
				{
					$_SESSION['nama'] = $row['Nama'];
					echo "<p style='color:white;position:absolute;margin-left:750px;font-size:40px'>".$row['Nama']."</p>";
					echo "<tr><td>Kategori: ";echo  $row['Kategori']."</td></tr>";
					//echo "<tr><td>Nama: ";echo  $row['Nama']."</td></tr>";
					echo "<tr><td>Harga: ";echo  $row['Harga']."</td></tr>";
					echo "<tr><td>Stock: ";echo  $row['Stock']."</td></tr>";
					echo "<tr><td>Rating: ";echo  $row['Rating']."</td></tr>";
				}
	}
}
?>
<?php
if ( isset($_SESSION['uname']) && isset($_SESSION['nama']) && isset($_POST['qty']))
{
	$x = $_POST['qty'];
	$que = mysqli_query($con,"select * from makanan where Nama='".$_SESSION['nama']."'");
	$y=mysqli_fetch_array($que);
	$x= $x * $y['Harga'];
  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=proyek','root', '');
  $ct = "INSERT INTO cart (ID_User, Nama, Qty, Total)
               VALUES (:uname, :nama, :qty, :total)";
  $stmt = $pdo->prepare($ct);
  $stmt->execute(array(
        ':uname' => $_SESSION['uname'],
        ':nama' => $_SESSION['nama'],
		':qty' => $_POST['qty'],
		':total' => $x));
	header("location: menu.php");
}
?>


