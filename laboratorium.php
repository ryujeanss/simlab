<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMLAB | Laboratorium</title>
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
				<li  class="active"><a href="laboratorium.php">LABORATORIUM</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><?php
                    if (isset($_SESSION['status'])){?>
                    	<a href='logout.php'>SIGN OUT</a>
                    <?php } else { ?>
                        <a href='login.php'>SIGN IN</a>
                    <?php } ?></li>
			</ul>
		</div>
	</header>		

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Sistem Informasi Manajemen Laboratorium</p>
		</div>
	</section>

	<!-- FITUR -->
	<section class="FITUR">
		<div class="container">
			<h3>FITUR</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon">
						<i class="fa-solid fa-building-user" style="color: #4da858;">
						</i>
					</div>
					<h4><a href="tampilform_lab.php">Peminjaman Laboratorium</a></li></h4>
				</div>
				<div class="col-4">
					<div class="icon">
						<i class="fa-solid fa-computer">
						</i>
					</div>
					<h4><a href="tampilform_alat.php">Peminjaman alat Laboratorium</a></li></h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-qrcode" style="color: #5abf6b;"></i></div>
					<h4><a href="qrcode.php">ABSEN</a></li></h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar"></i></div>
					<h4>TUGAS</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - SIMLAB. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>