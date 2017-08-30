<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>What's in your refrigerator?</title>
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
				<h1><a href="index.php">Powered</a> by Google Inc.</h1>
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
	<section id="main" class="container 75%">
				<header>
					<h2>Tambah Bahan</h2>
				</header>
				<form method="post" >
				<div class="box">
						<div class="row uniform 50%">
							<div class="6u 12u(mobilep)">
							<input type="text" name="bahan" placeholder="Masukkan Nama Bahan" required/>
							</div>
							<div class="6u 12u(mobilep)">
							<input type="integer" name="harga" placeholder="Masukkan Harga bahan">
							</div>
						</div>	
						<br>
						<br>
							<center><input type="submit" name="tambah" value="Add"></center>
						</form>
				</section>

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
					<li>&copy; Smart Refrigerator</li><li>Google Inc.</a></li>
				</ul>
			</footer>
	</body>
	</html>