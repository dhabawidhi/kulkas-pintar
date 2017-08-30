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
	$nama_makanan=$_POST['nama'];
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
	$query1="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan1','$kuantitas1','$cara_masak')";
	$query2="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan2','$kuantitas2','$cara_masak')";
	$query3="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan3','$kuantitas3','$cara_masak')";
	$query4="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan4','$kuantitas4','$cara_masak')";
	$query5="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan5','$kuantitas5','$cara_masak')";
	$query6="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan6','$kuantitas6','$cara_masak')";
	$query7="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan7','$kuantitas7','$cara_masak')";
	$query8="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan8','$kuantitas8','$cara_masak')";
	$query9="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan9','$kuantitas9','$cara_masak')";
	$query10="insert into menu3(nama,bahan,kuantitas,cara_masak) values('$nama_makanan', '$bahan10','$kuantitas10','$cara_masak')";
	
	$ok1=pg_query($query1);
	$ok2=pg_query($query2);
	$ok3=pg_query($query3);
	$ok4=pg_query($query4);
	$ok5=pg_query($query5);
	$ok6=pg_query($query6);
	$ok7=pg_query($query7);
	$ok8=pg_query($query8);
	$ok9=pg_query($query9);
	$ok10=pg_query($query10);
	
	$query="insert into menu(nama,bahan1,kuantitas1,bahan2,kuantitas2,bahan3,kuantitas3,bahan4,kuantitas4,bahan5,kuantitas5,bahan6,kuantitas6,bahan7,kuantitas7,bahan8,kuantitas8,bahan9,kuantitas9,bahan10,kuantitas10,cara_masak) values('$nama_makanan','$bahan1','$kuantitas1','$bahan2','$kuantitas2','$bahan3','$kuantitas3','$bahan4','$kuantitas4','$bahan5','$kuantitas5','$bahan6','$kuantitas6','$bahan7','$kuantitas7','$bahan8','$kuantitas8','$bahan9','$kuantitas9','$bahan10','$kuantitas10','$cara_masak')";
	$ok=pg_query($query);
	//$ok2=pg_query($query2);
	if(!$ok1&&!$ok2&&!$ok3&&!$ok4&&!$ok5&&!$ok6&&!$ok7&&!$ok8&&!$ok9&&!$ok10&&!$ok)
		echo "ERROR: $query";
	else echo "$nama_makanan berhasil ditambah";
	//if(!$ok2)
		//echo "ERROR: $query2";
	}	

		?>
	<form method="post">
		Nama Menu <br><input type="text" name="nama" placeholder="Masukkan Nama Menu" required/><br><br>
		<label for="bahan1"> Bahan 1  </label>
		<input type="text" list="bahan" placeholder="bahan 1" name="bahan1">
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas1" value="0"> gram <br> <br>
		
		<label for="bahan2"> Bahan 2 </label>
		<input type="text" list="bahan" placeholder="bahan 2" name="bahan2" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas2" value="0"> gram <br> <br>
		
		<label for="bahan3"> Bahan 3 </label>
		<input type="text" list="bahan" placeholder="bahan 3" name="bahan3" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas3" value="0"> gram <br> <br>
		
		<label for="bahan1"> Bahan 4 </label>
		<input type="text" list="bahan" placeholder="bahan 4" name="bahan4" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas4" value="0"> gram <br> <br>
		
		<label for="bahan5"> Bahan 5 </label>
		<input type="text" list="bahan" placeholder="bahan 5" name="bahan5" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas5" value="0"> gram <br> <br>
		
		<label for="bahan6"> Bahan 6 </label>
		<input type="text" list="bahan" placeholder="bahan 6" name="bahan6" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas6" value="0"> gram <br> <br>
		
		<label for="bahan7"> Bahan 7 </label>
		<input type="text" list="bahan" placeholder="bahan 7" name="bahan7" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas7" value="0"> gram <br> <br>
		
		<label for="bahan8"> Bahan 8 </label> 
		<input type="text" list="bahan" placeholder="bahan 8" name="bahan8" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas8" value="0"> gram <br> <br>
		
		<label for="bahan9"> Bahan 9 </label> 
		<input type="text" list="bahan" placeholder="bahan 9" name="bahan9" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas9" value="0"> gram <br> <br>
		
		<label for="bahan10"> Bahan 10 </label>
		<input type="text" list="bahan" placeholder="bahan 10" name="bahan10" >
		<datalist id="bahan">
			<option value="">
			<option value="nasi">
			<option value="daun bawang">
			<option value="telur">
			<option value="bawang putih">
			<option value="tomat">
			<option value="saus">
			<option value="bawang merah">
			<option value="minyak goreng">
			<option value="cabai">
			<option value="kerupuk">
			<option value="ayam">
			<option value="sosis">
			<option value="ikan">
			<option value="spageti">
			<option value="kornet">
			<option value="garam">
			<option value="mentega">
			<option value="wortel">
			<option value="kubis">
			<option value="toge">
			<option value="air">
			<option value="terigu">
			<option value="kecap">
			<option value="santan kelapa">
			<option value="susu">
			<option value="jahe">
			<option value="lengkuas">
			<option value="daun pandan">
			<option value="daging sapi">
			<option value="kentang">
		</datalist>
		<br>
		kuantitas <input type="integer" name="kuantitas10" value="0"> gram <br> <br>
		
		Cara Memasak<br><textarea cols="40" rows="5" placeholder="Bagaimana cara memasak" name="cara_masak"></textarea> <br> <br>
		<br>
		<input type="submit" name="tambah" value="Tambah">
	</form>
	<font size="3" face="Arial">&nbsp;<a href="menu.php">Menu</a></font>
</body>
</html>