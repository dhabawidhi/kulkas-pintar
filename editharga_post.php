<?php
	$conn=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	//$id=$_GET['kirim_nama'];
	$nama=$_GET['nama'];
	$harga=$_POST['harga'];
	$queri=pg_query("update bahannya set harga='$harga' where bahan='$nama'");
	if($queri==TRUE)
	{
		echo "Bahan Berhasil Diedit, silahkan lihat beranda <a href='admin.php'>menu</a>";
	}
	else echo "error";
?>