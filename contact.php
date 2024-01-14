<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMLAB - Sistem Informasi Manajemen Laboratorium</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<header>
		<div class="container">
			<h1><a href="index.php">SIMLAB</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="sch.php">SCHEDULE</a></li>
				<li><a href="laboratorium.php">LABORATORIUM</a></li>
				<li class="active"><a href="contact.php">CONTACT</a></li>
				<li><?php
                    if (isset($_SESSION['status'])){?>
                    	<a href='logout.php'>SIGN OUT</a>
                    <?php } else { ?>
                        <a href='login.php'>SIGN IN</a>
                    <?php }?></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Contact</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Gedung A1, Jl. Ketintang Wiyata, Ketintang, Gayungan, Surabaya, Jawa Timur, Indonesia</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p></p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>3028402420</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>081749-247284</p>
				</div>
			</div>
			<a href="https://goo.gl/maps/2XGakGcDJkUTspGt6" target="_blank">Lihat Lokasi di Google Maps</a>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023. SIMLAB - Sistem Informasi Manajemen Laboratorium All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>