
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign In</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="http://www.google.com">Powered</a> by Google Inc.</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Layouts</a>
							<ul>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="testimonial.php">Testimonial</a></li>
								<li><a href="menu.php">Menu</a></li>
								<li><a href="refrigerator.php">Refrigerator</a></li>
							</ul>
						</li>
						<li><a href="#" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>

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

		<!-- Main -->
			<section id="main" class="container 75%">
				<header>
					<h2>Add Menu</h2>
				</header>
				<div class="box">
					<form method="post">
						<div class="row uniform 50%">
							<div class="12u">
								<input type="text" name="nama" placeholder="Masukkan Nama Menu" required/>
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 1" name="bahan1">
		<datalist id="bahan"
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas1" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas2" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
						</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas3" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas4" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas5" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas6" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas7" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas8" value="0"> 
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas9" value="0">
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
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
							</div>
							<div class="6u 12u(mobilep)">
								<input type="integer" name="kuantitas10" value="0">
							</div>
						</div>
					
						
						<div class="row uniform 50%">
							<div class="12u">
								<textarea name="cara_masak" placeholder="Cara memasak" rows="6"></textarea>
							</div>
						</div>
						<div class="row uniform">
							<div class="12u">
								<ul class="actions align-center">
									<li><input type="submit" name="tambah" value="Add" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Smart Refrigator</li><li>Google Inc.</a></li>
				</ul>
			</footer>

	</body>
</html>