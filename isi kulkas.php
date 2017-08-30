<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JS Bin</title>
	</head>
<body>
<?php
	pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
	$query="select bahan, sum(kuantitas) from menu3 where kuantitas > 0 group by bahan order by bahan";
	$rows=pg_query($query);
	echo 'Isi Kulkas <br><br>';
	echo '<table border="1">';
	echo '<tr><th>Bahan</th><th>Kuantitas (dalam gram)</th></tr>';
	while($row=pg_fetch_array($rows))
	{
		echo '<tr>';
		echo '<td>'.$row['bahan'].'</td>';
		echo '<td>'.$row['sum'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
	?>
</body>
</html>