<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>
	<?php
$conn=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
$nama=$_GET['kirim_nama'];
	$sqlTampil="select * from bahannya where bahan='$nama'";
	$qryTampil=pg_query($sqlTampil);
	$dataTampil=pg_fetch_array($qryTampil);
	$sdataTampil=pg_fetch_array($qryTampil);
	echo "Mengedit Harga Bahan $nama per Gram";
?>
<form action="editharga_post.php?nama=<?php echo "$nama"; ?>" method="post">
<p>Nama = <?php echo $dataTampil['bahan'] ?></p><br>
Harga = <input type="integer" name="harga" value="<?php echo $dataTampil['harga']; ?>">
<input type="submit" name="update" value="update">
</form>
</body>
</html>