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
					<h2>Your Menu</h2>
				</header>
			
				<?php
					pg_connect('host=localhost dbname=kulkas user=postgres password=alumuniumferum');
					/*$query="select nama from menu";
					$query2="select count(distinct nama) from menu3";
					$banyak=pg_query($query2);
					$rows=pg_query($query);
					$row=pg_fetch_array($rows);
					$row2=pg_fetch_array($banyak);
					$tipu2=$row2['count']-1;

					if(!$row || $tipu2==0)
						{
							echo '<header>'.'<h2>'."is".'</h2>'.'</header>';
							echo '<header>'.'<h2>'."Empty".'</h2>'.'</header>';
							echo '<center><a href="tambahmenu.php" class="button special">Tambah menu</a><center>';
						}
					else
					{

							while($row3=pg_fetch_array($banyak))
							{
								echo '<div class="table-wrapper">';
								echo '<table class="alt">';
								echo '<thead>';
								echo '<tr>';
								echo '<th>'.'Nama Menu'.'</th>';
								echo '<th colspan="3">'."Menu masakan hari ini sebanyak = "; 
								$tipu3=$row3['count']-1;
								echo $tipu3;
								echo '</th>';
								echo '</tr>';
								echo '</thead>';
							}
							echo '<tbody>';
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
								echo '</tbody>';
							}
							echo '</table>';
							echo '</div>';
							echo '<a href="tambahmenu.php" class="button special">Tambah menu</a>';
					}*/
						$query="select nama from menu";
						$query2="select count(distinct nama) from menu3";
						$banyak=pg_query($query2);
						$rows=pg_query($query);
						$rows1=pg_fetch_array($banyak);
						$banyak3=$rows1['count'];
						if($banyak3==0)
						{
							echo '<header>';
							echo '<h2>'.'is'.'</h2>';
							echo '</header>';
							echo '<header>';
							echo '<h2>'.'empty'.'</h2>';
							echo '</header>';						
							echo '<center>';
							echo '<a href="tambahmenu.php" class="button special">'.'Add Menu'.'</a>';
							echo '</center>';
						}
						else
						{
						?>
						<section class="box">
						<div class="row">
						<div class="12u">
						<?php
							while($row2=pg_fetch_array($banyak))
							{
								$banyak2=$row2['count'];
								echo '<div class="6u 12u(mobilep)">';
								echo '<h4>'.'Menu masakan hari ini sebanyak = '.$banyak2.' menu'.'</h4>';
								echo '</div>';
							}
							
							echo '<div class="table-wrapper">';
							echo '<table>';
							
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
							echo '</div>';
							echo '<center><a href="tambahmenu.php" class="button special">'.'Add Menu'.'</a></center>';							
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