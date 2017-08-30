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
	$sqlDelete="delete from menu where nama='$id'";
	$sqlTampil="delete from menu3 where nama='$id'";
	$qryDelete=pg_query($sqlDelete);
	$qryTampil=pg_query($sqlTampil);
	echo "Berhasil menghapus menu masakan $id";
?>
<br>
<br>
<font size="3" face="Arial">&nbsp;<a href="Index.php">Kembali ke Index</a></font>
<font size="3" face="Arial">&nbsp;<a href="menu.php">Kembali ke Menu Makanan</a></font>
</body>
</html>