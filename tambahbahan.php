<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>
<?php
$conn=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
if(isset($_POST['tambah'])){ //isset apakah ada isinya atau gak, jika tombol 'tambah' diklik	<head>
	$bahan=$_POST['bahan'];
	$harga=$_POST['harga'];
	$query1="insert into bahannya(bahan,harga) values('$bahan','$harga')";
	$ok1=pg_query($query1);
	//$ok2=pg_query($query2);
	if(!$ok1)
		echo "ERROR: $query";
	else echo "$bahan berhasil ditambah";
	//if(!$ok2)
		//echo "ERROR: $query2";
	}	

		?>
	<form method="post">
		Bahan <input type="text" name="bahan" placeholder="Masukkan Nama Bahan" required/><br>
		Harga <input type="integer" name="harga" placeholder="Masukkan Harga bahan" value="0"><br>
		<br>
		<input type="submit" name="tambah" value="tambah">
	</form>
</body>
</html>