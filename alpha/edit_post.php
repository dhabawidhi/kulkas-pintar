
<!DOCTYPE HTML>
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
	//$id=$_GET['kirim_nama'];
	$nama=$_GET['nama'];
	$name=$_POST['id'];
	$bahansatu=$_POST['bahansatu'];
	$bahandua=$_POST['bahandua'];
	$bahantiga=$_POST['bahantiga'];
	$bahanempat=$_POST['bahanempat'];
	$bahanlima=$_POST['bahanlima'];
	$bahanenam=$_POST['bahanenam'];
	$bahantujuh=$_POST['bahantujuh'];
	$bahandelapan=$_POST['bahandelapan'];
	$bahansembilan=$_POST['bahansembilan'];
	$bahansepuluh=$_POST['bahansepuluh'];
	$kuantitassatu=$_POST['kuantitassatu'];
	$kuantitasdua=$_POST['kuantitasdua'];
	$kuantitastiga=$_POST['kuantitastiga'];
	$kuantitasempat=$_POST['kuantitasempat'];
	$kuantitaslima=$_POST['kuantitaslima'];
	$kuantitasenam=$_POST['kuantitasenam'];
	$kuantitastujuh=$_POST['kuantitastujuh'];
	$kuantitasdelapan=$_POST['kuantitasdelapan'];
	$kuantitassembilan=$_POST['kuantitassembilan'];
	$kuantitassepuluh=$_POST['kuantitassepuluh'];
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
	$namamakan=$_POST['namamakan'];
	$cara_masak=$_POST['cara_masak'];
	
	$data="update menu set nama='$name',bahan1='$bahan1',kuantitas1='$kuantitas1',bahan2='$bahan2',kuantitas2='$kuantitas2',bahan3='$bahan3',kuantitas3='$kuantitas3',bahan4='$bahan4',kuantitas5='$kuantitas5',bahan6='$bahan6',kuantitas6='$kuantitas6',bahan7='$bahan7',kuantitas7='$kuantitas7',bahan8='$bahan8',kuantitas8='$kuantitas8',bahan9='$bahan9',kuantitas9='$kuantitas9',bahan10='$bahan10',kuantitas10='$kuantitas10',cara_masak='$cara_masak' where nama='$nama'";
	$queri=pg_query($data);
	$queri1=pg_query("update menu3 set nama='$name', bahan='$bahan1', kuantitas='$kuantitas1', cara_masak='$cara_masak' where nama='$name' and bahan='$bahansatu' and kuantitas='$kuantitassatu'");
	$queri2=pg_query("update menu3 set nama='$name', bahan='$bahan2', kuantitas='$kuantitas2', cara_masak='$cara_masak' where nama='$name' and bahan='$bahandua' and kuantitas='$kuantitasdua'");
	$queri3=pg_query("update menu3 set nama='$name', bahan='$bahan3', kuantitas='$kuantitas3', cara_masak='$cara_masak' where nama='$name' and bahan='$bahantiga' and kuantitas='$kuantitastiga'");
	$queri4=pg_query("update menu3 set nama='$name', bahan='$bahan4', kuantitas='$kuantitas4', cara_masak='$cara_masak' where nama='$name' and bahan='$bahanempat' and kuantitas='$kuantitasempat'");
	$queri5=pg_query("update menu3 set nama='$name', bahan='$bahan5', kuantitas='$kuantitas5', cara_masak='$cara_masak' where nama='$name' and bahan='$bahanlima' and kuantitas='$kuantitaslima'");
	$queri6=pg_query("update menu3 set nama='$name', bahan='$bahan6', kuantitas='$kuantitas6', cara_masak='$cara_masak' where nama='$name' and bahan='$bahanenam' and kuantitas='$kuantitasenam'");
	$queri7=pg_query("update menu3 set nama='$name', bahan='$bahan7', kuantitas='$kuantitas7', cara_masak='$cara_masak' where nama='$name' and bahan='$bahantujuh' and kuantitas='$kuantitastujuh'");
	$queri8=pg_query("update menu3 set nama='$name', bahan='$bahan8', kuantitas='$kuantitas8', cara_masak='$cara_masak' where nama='$name' and bahan='$bahandelapan' and kuantitas='$kuantitasdelapan'");
	$queri9=pg_query("update menu3 set nama='$name', bahan='$bahan9', kuantitas='$kuantitas9', cara_masak='$cara_masak' where nama='$name' and bahan='$bahansembilan' and kuantitas='$kuantitassembilan'");
	$queri10=pg_query("update menu3 set nama='$name', bahan='$bahan10', kuantitas='$kuantitas10', cara_masak='$cara_masak' where nama='$name' and bahan='$bahansepuluh' and kuantitas='$kuantitassepuluh'");
	
	if($queri==TRUE && $queri1==TRUE&& $queri2==TRUE&& $queri3==TRUE&& $queri4==TRUE&& $queri5==TRUE&& $queri6==TRUE&& $queri7==TRUE&& $queri8==TRUE&& $queri9==TRUE&& $queri10==TRUE)
	{
		echo '<section id="main" class="container">';
		echo '<header>';
		echo '<h2>Menu Update Successfully.</h2>';
		echo '</header>';
		echo '<center><a href="menu.php" class="button special">'.'Menu'.'</a></center>';	
		echo '</section>';
	}
	else echo "error";
	?>

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