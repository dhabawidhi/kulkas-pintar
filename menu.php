<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>
<?php
	pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	$query="select nama from menu";
	$query2="select count(distinct nama) from menu3";
	$banyak=pg_query($query2);
	$rows=pg_query($query);
	while($row2=pg_fetch_array($banyak))
	{
		echo 'menu masakan hari ini sebanyak '.$row2['count'].' menu';
	}
	echo '<br><br>';
	echo '<table border="1">';
	echo '<tr><th>Menu</th><th>Masak</th><th>edit</th><th>hapus</th></tr>';
	while($row=pg_fetch_array($rows))
	{
		echo '<tr>';
		echo '<td>'.$row['nama'].'</td>';
		
		?>
		<td><a href="lihat.php?kirim_nama=<?php echo $row['nama']?>">Lihat</a></td>
		<td><a href="edit.php?kirim_nama=<?php echo $row['nama']?>">Edit</a></td>
		<td><a href="delete.php?kirim_nama=<?php echo $row['nama']?>">Delete</a></td>
		<?php
		echo '</tr>';
	}
	echo '</table>';
	?>
	<a href="tambah.php">Tambah Menu</a>
</body>
</html>