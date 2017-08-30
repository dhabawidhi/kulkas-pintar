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
			//$query2="select * from menu where nama='$nama'";
			//$banyak=pg_query($query2);
			//$rows=pg_query($query);
			$sqlTampil="select * from menu where nama='$nama'";
			$qryTampil=pg_query($sqlTampil);
			$dataTampil=pg_fetch_array($qryTampil);
			$sdataTampil=pg_fetch_array($qryTampil);
			$sqlTampil2="select * from bahannya";
			$qryTampil2=pg_query($sqlTampil2);
			$dataTampil2=pg_fetch_array($qryTampil);
			echo "Menu $nama";
		function harga($bahan,$kuantitas)
		{
			$qryTampil3=pg_query("select * from bahannya where bahan='$bahan'");
			$dataTampil3=pg_fetch_array($qryTampil3);
			if(!$dataTampil3['bahan'])
			return 0;
			else
			return $kuantitas*$dataTampil3['harga'];
		}
		function cekbahan($bahan)
		{
			$qryTampil4=pg_query("select bahan from bahannya where bahan='$bahan'");
			$dataTampil4=pg_fetch_array($qryTampil4);
				if(!$dataTampil4['bahan'])
					$c=0;
				else $c=1;
				return $c;
		}
	?>
	<form method="post" action="masak.php?kirim_nama=<?php echo $dataTampil['nama']?>">
	<a href="edit.php?kirim_nama=<?php echo $dataTampil['nama']?>">Edit Menu</a>
	<a href="delete.php?kirim_nama=<?php echo $dataTampil['nama']?>">Hapus Menu</a><br>
	
	bahan 1 : <?php echo $dataTampil['bahan1']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas1']?> gram<br>
		<?php echo "harga = Rp";
		$nama=$dataTampil['bahan1'];
		$kuantitas=$dataTampil['kuantitas1'];
		$harga1=harga($nama,$kuantitas);
	if($nama=='') $c1=1;
	else	
	{	
		echo $harga1;
		$c1=cekbahan($nama);
	} 
	?> <br>
	bahan 2 : <?php echo $dataTampil['bahan2']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas2']?> gram<br>
		<?php echo "harga = Rp";
		$nama=$dataTampil['bahan2'];
		$kuantitas=$dataTampil['kuantitas2'];
		$harga2=harga($nama,$kuantitas);
	if($nama=='') $c2=1;
	else	
	{	
		echo $harga1;
		$c2=cekbahan($nama);
	} 
	?> <br>
	bahan 3 : <?php echo $dataTampil['bahan3']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas3']?> gram<br>
		<?php echo "harga = Rp";
		$nama=$dataTampil['bahan3'];
		$kuantitas=$dataTampil['kuantitas3'];
		$harga3=harga($nama,$kuantitas);
	if($nama=='') $c3=1;
	else
	{	echo $harga3;
		$c3=cekbahan($nama);
		} ?> <br>
	bahan 4 : <?php echo $dataTampil['bahan4']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas4']?> gram<br>
		<?php echo "harga = Rp";
		$nama=$dataTampil['bahan4'];
		$kuantitas=$dataTampil['kuantitas4'];
		$harga4=harga($nama,$kuantitas);
	if($nama=='') $c4=1;
	else
	{	echo $harga4;
		$c4=cekbahan($nama);
		} ?> <br>
	bahan 5 : <?php echo $dataTampil['bahan5']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas5']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan5'];
		$kuantitas=$dataTampil['kuantitas5'];
		$harga5=harga($nama,$kuantitas);
	if($nama=='') $c5=1;
	else
	{	echo $harga5;
		$c5=cekbahan($nama);
		} ?> <br>
	bahan 6 : <?php echo $dataTampil['bahan6']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas6']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan6'];
		$kuantitas=$dataTampil['kuantitas6'];
		$harga6=harga($nama,$kuantitas);
	if($nama=='') $c6=1;
	else
	{	echo $harga6;
		$c6=cekbahan($nama);
		} ?> <br>
	bahan 7 : <?php echo $dataTampil['bahan7']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas7']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan7'];
		$kuantitas=$dataTampil['kuantitas7'];
		$harga7=harga($nama,$kuantitas);
	if($nama=='') $c7=1;
	else
	{	echo $harga7;
		$c7=cekbahan($nama);
		} ?> <br>
	bahan 8 : <?php echo $dataTampil['bahan8']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas8']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan8'];
		$kuantitas=$dataTampil['kuantitas8'];
		$harga8=harga($nama,$kuantitas);
	if($nama=='') $c8=1;
	else
	{	echo $harga8;
		$c8=cekbahan($nama);
		} ?> <br>
	bahan 9 : <?php echo $dataTampil['bahan9']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas9']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan9'];
		$kuantitas=$dataTampil['kuantitas9'];
		$harga9=harga($nama,$kuantitas);
	if($nama=='') $c9=1;
	else
	{	echo $harga9;
		$c9=cekbahan($nama);
		} ?> <br>
	bahan 10 : <?php echo $dataTampil['bahan10']?>
	yang diperlukan : <?php echo  $dataTampil['kuantitas10']?> gram<br>
	<?php echo "harga = Rp";
		$nama=$dataTampil['bahan10'];
		$kuantitas=$dataTampil['kuantitas10'];
		$harga10=harga($nama,$kuantitas);
		if($nama=='') $c10=1;
	else
	{	echo $harga10;
		$c10=cekbahan($nama);
		} ?> <br>
	Cara masak:<br>
	<?php echo $dataTampil['cara_masak'] ?>
	<br>
	<br>
	<?php 
		$ctotal=$c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10;
		//echo $ctotal;
		$hargatotal=$harga1+$harga2+$harga3+$harga4+$harga5+$harga6+$harga7+$harga8+$harga9+$harga10;
		echo "total harga Rp$hargatotal";
		echo '<br>';
		if($ctotal==10) echo '<input type="submit" name="nama" value="masak">';
		else {
			echo $ctotal;
			echo "Mohon maaf menu makanan tidak dapat disajikan, mohon periksa kembali bahan yang kami sediakan di ";
			echo '<a href="daftarharga.php">Daftar Bahan</a>';
			echo " atau kami akan melakukan verifikasi bahan sesegera mungkin.";
		}
	?>
	
	</form>

	<?php


	?>
</body>
</html>