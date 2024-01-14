<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMLAB - Riwayat Peminjaman Alat</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" type="text/css" href="css\table.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="container">
			<h1><a href="index.php">SIMLAB</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="sch.php">SCHEDULE</a></li>
				<li class="active"><a href="laboratorium.php">LABORATORIUM</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><?php
                    if (isset($_SESSION['status'])){?>
                    	<a href='logout.php'>SIGN OUT</a>
                    <?php } else { ?>
                        <a href='login.php'>SIGN IN</a>
                    <?php } ?>
                </li>
			</ul>
		</div>
	</header>	

    <?php
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "simlab";

    // For the best practice, don’t use your “real” password when submitting your work
    $db_charset = "utf8mb4"; // Optional 
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
    $opt = array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    try {
        $pdo = new PDO($dsn, $db_username, $db_password, $opt);?>
        <h1 class="title"> Riwayat Peminjaman Alat </h1>
        <?php
        $stmt = $pdo->query("SELECT * FROM `form_alat`");
        echo "<table>\n";
        echo "<tr>
            <th>ID alat</th>
            <th>Nama</th>
            <th>Matkul</th>
			<th>Nim</th>
            <th>Alat yang dipinjam</th>
            <th>Email</th>
			<th>No HP</th>
            <th>Tanggal Peminjaman</th>
            <th>Update Data</th>
            <th>Delete Data</th>
            </tr>";
        foreach ($stmt as $row) {
            echo "<tr>";
            echo "<input type='hidden' name='id' value=",$row['alat_id'],">";
            echo "<td class='data' name='id'>", $row["alat_id"], "</td>\n";
            echo "<td class='data'>", $row["fa_name"], "</td>\n";
            echo "<td class='data'>", $row["fa_matkul"], "</td>\n";
            echo "<td class='data'>", $row["fa_nim"], "</td>\n";
            echo "<td class='data'>", $row["fa_alat"], "</td>\n";
            echo "<td class='data'>", $row["fa_email"], "</td>\n";
			echo "<td class='data'>", $row["fa_nohp"], "</td>\n";
            echo "<td class='data'>", $row["fa_tanggal"], "</td>\n";
            echo "<td><a class='crud' href='updateform_alat.php?id=",$row["alat_id"],"'><img src='image/edit.png' style='width:30px;height:30px;'> Update</a></td>\n'";
            echo "<td><a class='crud' href='deleteform_alat.php?id=",$row["alat_id"],"'><img src='image/delete.png' style='width:30px;height:30px;'> Delete</a>
            </td>\n";
            echo "</tr>";
        }
        echo "</table>\n";
        ?>
        
        <form action="form alat.php">
        <button type="submit" class="btn"> Tambah Riwayat Peminjaman
        </button></form>

    <?php
        $pdo = NULL;
    } catch (PDOException $e) {
        exit("PDO Error: " . $e->getMessage() . "<br>");
    }
    ?>

</body>

</html>