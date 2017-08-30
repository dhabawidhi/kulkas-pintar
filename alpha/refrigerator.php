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

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Your Box</h2>
				</header>
				
					<?php
						$db=pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
						$query="select bahan, sum(kuantitas) from menu3 where kuantitas > 0 group by bahan order by bahan";
						$query2="select count(distinct nama) from menu3";
						$rows=pg_query($query);
						$banyak=pg_query($query2);
						$rows=pg_query($query);
						$rows1=pg_fetch_array($banyak);
						$banyak3=$rows1['count'];
						if($banyak3==0)
						{
							echo '<header>'.'<h2>'."is".'</h2>'.'</header>';
							echo '<header>'.'<h2>'."Empty".'</h2>'.'</header>';
						}
						else
						{
							echo '<section class="box">';
							echo '<div class="row">';
							echo '<div class="12u">';
							echo '<div class="table-wrapper">';
							echo '<table class="alt">';
							echo '<thead>';
							echo '<tr><th>Bahan</th><th>Kuantitas (dalam gram)</th></tr>';
							echo '</thead>';
							while($row=pg_fetch_array($rows))
							{
								echo '<tr>';
								echo '<td width="50%">'.$row['bahan'].'</td>';
								echo '<td>'.$row['sum'].'</td>';
								echo '</tr>';
							}
							echo '</table>';
						}	

					?>
				</div>															
				</div>
			</section>
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
					<li>&copy; Smart Refrigerator</li><li>Google Inc.</a></li>
				</ul>
			</footer>

	</body>
</html>