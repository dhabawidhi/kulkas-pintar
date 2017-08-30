
<!DOCTYPE HTML>
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
$nama=$_GET['kirim_nama'];
	$query="select * from menu3 where nama='$nama'";
	$query2="select * from menu where nama='$nama'";
	$banyak=pg_query($query2);
	$rows=pg_query($query);
	$sqlTampil="select * from menu where nama='$nama'";
	$qryTampil=pg_query($sqlTampil);
	$dataTampil=pg_fetch_array($qryTampil);
	$sdataTampil=pg_fetch_array($qryTampil);
?>
		<!-- Main -->
			<section id="main" class="container 75%">
				<header>
					<h2>Edit Menu</h2>
				</header>
				<div class="box">
					<form action="edit_post.php?nama=<?php echo "$nama"; ?>" method="post">
						<div class="row uniform 50%">
							<div class="12u">
								<input type="text" name="id" placeholder="Masukkan nama menu" value="<?php echo $dataTampil['nama'];?>" required />
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="Bahan 1" name="bahan1" value="<?php echo $dataTampil['bahan1'];?>">
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
								<input type="integer" name="kuantitas1" placeholder="Kuantitas" value="<?php echo $dataTampil['kuantitas1'];?>" >
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="Bahan 2" name="bahan2" value="<?php echo $dataTampil['bahan2'];?>" >
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
								<input type="integer" name="kuantitas2" value="<?php echo $dataTampil['kuantitas2'];?>" placeholder="Kuantitas">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
							<input type="text" list="bahan" placeholder="Bahan 3" name="bahan3" value="<?php echo $dataTampil['bahan3'];?>">
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
								<input type="integer" name="kuantitas3" value="<?php echo $dataTampil['kuantitas3'];?>" placeholder="Kuantitas">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 4" name="bahan4" value="<?php echo $dataTampil['bahan4'];?>" >
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
								<input type="integer" name="kuantitas4" value="<?php echo $dataTampil['kuantitas4'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 5" name="bahan5" value="<?php echo $dataTampil['bahan5'];?>">
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
								<input type="integer" name="kuantitas5" value="<?php echo $dataTampil['kuantitas5'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 6" name="bahan6" value="<?php echo $dataTampil['bahan6'];?>">
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
								<input type="integer" name="kuantitas6" value="<?php echo $dataTampil['kuantitas6'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 7" name="bahan7" value="<?php echo $dataTampil['bahan7'];?>">
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
								<input type="integer" name="kuantitas7" value="<?php echo $dataTampil['kuantitas7'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 8" name="bahan8" value="<?php echo $dataTampil['bahan8'];?>">
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
								<input type="integer" name="kuantitas8" value="<?php echo $dataTampil['kuantitas8'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 9" name="bahan9" value="<?php echo $dataTampil['bahan9'];?>">
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
								<input type="integer" name="kuantitas9" value="<?php echo $dataTampil['kuantitas9'];?>">
							</div>
						</div>
						<div class="row uniform 50%">
						<div class="6u 12u(mobilep)">
								<input type="text" list="bahan" placeholder="bahan 10" name="bahan10" value="<?php echo $dataTampil['bahan10'];?>">
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
								<input type="integer" name="kuantitas10" value="<?php echo $dataTampil['kuantitas10'];?>">
							</div>
						</div>
					
						
						<div class="row uniform 50%">
							<div class="12u">
								<textarea name="cara_masak" placeholder="Cara memasak" rows="6" value="<?php echo $dataTampil['cara_masak'];?>"></textarea>
							</div>
						</div>
						<div class="row uniform">
							<div class="12u">
								<ul class="actions align-center">
									<li><input type="submit" name="update" value="Update" /></li>
								</ul>
							</div>
						</div>

		<input type="hidden" list="bahan" placeholder="bahan 1" name="namamakan" value="<?php echo $dataTampil['nama'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahansatu" value="<?php echo $dataTampil['bahan1'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahandua" value="<?php echo $dataTampil['bahan2'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahantiga" value="<?php echo $dataTampil['bahan3'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahanempat" value="<?php echo $dataTampil['bahan4'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahanlima" value="<?php echo $dataTampil['bahan5'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahanenam" value="<?php echo $dataTampil['bahan6'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahantujuh" value="<?php echo $dataTampil['bahan7'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahandelapan" value="<?php echo $dataTampil['bahan8'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahansembilan" value="<?php echo $dataTampil['bahan9'];?>">
		<input type="hidden" list="bahan" placeholder="bahan 1" name="bahansepuluh" value="<?php echo $dataTampil['bahan10'];?>">
		<input type="hidden" name="kuantitassatu" value="<?php echo $dataTampil['kuantitas1'];?>">
		<input type="hidden" name="kuantitasdua" value="<?php echo $dataTampil['kuantitas2'];?>">
		<input type="hidden" name="kuantitastiga" value="<?php echo $dataTampil['kuantitas3'];?>">
		<input type="hidden" name="kuantitasempat" value="<?php echo $dataTampil['kuantitas4'];?>">
		<input type="hidden" name="kuantitaslima" value="<?php echo $dataTampil['kuantitas5'];?>">
		<input type="hidden" name="kuantitasenam" value="<?php echo $dataTampil['kuantitas6'];?>">
		<input type="hidden" name="kuantitastujuh" value="<?php echo $dataTampil['kuantitas7'];?>">
		<input type="hidden" name="kuantitasdelapan" value="<?php echo $dataTampil['kuantitas8'];?>">
		<input type="hidden" name="kuantitassembilan" value="<?php echo $dataTampil['kuantitas9'];?>">
		<input type="hidden" name="kuantitassepuluh" value="<?php echo $dataTampil['kuantitas10'];?>">

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