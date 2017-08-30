<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>

<?php
	$conn=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	$id=$_GET['kirim_nama'];
	$sqlDelete="delete from bahannya where bahan='$id'";

	$qryDelete=pg_query($sqlDelete);

	echo "Berhasil menghapus bahan masakan $id";
?>
<br>
<br>
<font size="3" face="Arial">&nbsp;<a href="Index.php">Kembali ke Index</a></font>
<font size="3" face="Arial">&nbsp;<a href="menu.php">Kembali ke Menu Makanan</a></font>
<font size="3" face="Arial">&nbsp;<a href="updateharga.php">Update Harga dan Bahan</a></font>
</body>
</html>