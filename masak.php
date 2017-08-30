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
		$queri=pg_query("delete from menu where nama='$nama'");
		$queri1=pg_query("delete from menu3 where nama='$nama'");
		if($queri==TRUE && $queri1==TRUE)
		echo "$nama siap disajikan";
		else echo "Error";
	?>
</body>
</html>