<?php
	$conn=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	//$id=$_GET['kirim_nama'];
	$nama=$_GET['bahan'];
	$name=$_POST['id'];
	$bahansatu=$_POST['bahansatu'];
	$bahan1=$_POST['bahan1'];
	$kuantitas1=$_POST['kuantitas1'];
	$bahan2=$_POST['bahan2'];
	$kuantitas2=$_POST['kuantitas2'];
	$bahan3=$_POST['bahan3'];
	$kuantitas3=$_POST['kuantitas3'];
	$bahan4=$_POST['bahan4'];
	$kuantitas4=$_POST['kuantitas4'];
	$bahan5=$_POST['bahan5'];
	$kuantitas5=$_POST['kuantitas5'];
	$bahan6=$_POST['bahan6'];
	$kuantitas6=$_POST['kuantitas6'];
	$bahan7=$_POST['bahan7'];
	$kuantitas7=$_POST['kuantitas7'];
	$bahan8=$_POST['bahan8'];
	$kuantitas8=$_POST['kuantitas8'];
	$bahan9=$_POST['bahan9'];
	$kuantitas9=$_POST['kuantitas9'];
	$bahan10=$_POST['bahan10'];
	$kuantitas10=$_POST['kuantitas10'];
	$cara_masak=$_POST['cara_masak'];
	
	echo "$nama ";
	$data="update menu3 set nama='$name', bahan='$bahan1', kuantitas='kuantitas1', cara_masak='$cara_masak' where bahan='$nama'";
	$queri1=pg_query($data);
	if($queri1==TRUE)
	{
		echo "Data Berhasil Diedit, silahkan lihat daftar <a href='menu.php'>menu</a>";
	}
	else echo "error";
	?>