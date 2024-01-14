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
    $fl_name = $_POST['fl_name'];
    $fl_matkul = $_POST['fl_matkul'];
    $fl_nim = $_POST['fl_nim'];
    $fl_lab = $_POST['fl_lab'];
    $fl_email = $_POST['fl_email'];
    $fl_nohp = $_POST['fl_nohp'];
    $fl_tanggal = $_POST['fl_tanggal'];

    $sql = $conn->query("INSERT INTO  form_lab(fl_nama, fl_matkul, fl_lab, fl_nim, fl_email, fl_nohp, fl_tanggal) VALUES ('$fl_name', '$fl_matkul', '$fl_lab','$fl_nim', '$fl_email', '$fl_nohp', '$fl_tanggal')");
    if ($sql) {
        Echo '<script type="text/javascript">confirm("Data riwayat telah ditambahkan!"); window.location.href = "tampilform_lab.php"; </script>';;
    }
    $conn = null;

?>