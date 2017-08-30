<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>
	<?php
	pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	$query="select * from bahannya order by bahan";
	$banyak=pg_query($query);
	$rows=pg_query($query);
	echo '<table border="1">';
	echo '<tr><th>Bahan</th><th>Harga</th><th>edit</th><th>hapus</th></tr>';
	while($row=pg_fetch_array($rows))
	{
		echo '<tr>';
		echo '<td>'.$row['bahan'].'</td>';
		echo '<td>'.$row['harga'].'</td>';
		
		?>
		<td><a href="editharga.php?kirim_nama=<?php echo $row['bahan']?>">Edit Harga</a></td>
		<td><a href="deleteharga.php?kirim_nama=<?php echo $row['bahan']?>">Hapus Data</a></td>
		<?php
		echo '</tr>';
	}
	echo '</table>';
	?>
	<a href="tambahbahan.php">Tambah Bahan</a>
</body>
</html>