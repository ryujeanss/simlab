<?php
// Konfigurasi database
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "simlab";

// Membuat koneksi ke database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Memeriksa koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Memeriksa apakah form registrasi telah dikirimkan
    $fa_name = $_POST['fa_name'];
    $fa_matkul = $_POST['fa_matkul'];
    $fa_nim = $_POST['fa_nim'];
    $fa_alat = $_POST['fa_alat'];
    $fa_email = $_POST['fa_email'];
    $fa_nohp = $_POST['fa_nohp'];
    $fa_tanggal = $_POST['fa_tanggal'];

    $sql = $conn->query("INSERT INTO  form_alat(fa_name, fa_matkul, fa_alat, fa_nim, fa_email, fa_nohp, fa_tanggal) VALUES ('$fa_name', '$fa_matkul', '$fa_alat','$fa_nim', '$fa_email', '$fa_nohp', '$fa_tanggal')");
    if ($sql) {
        Echo '<script type="text/javascript">confirm("Data riwayat telah ditambahkan!"); window.location.href = "tampilform_alat.php"; </script>';;
    }
    $conn = null;

?>