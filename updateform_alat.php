<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simlab | Form Alat</title>
	<link rel="stylesheet" href="css\form alat.css">
</head>
<?php
if (isset($_POST['update'])) {
   $alat_id = $_POST['id'];
   $fa_name = $_POST['fa_name'];
   $fa_matkul = $_POST['fa_matkul'];
   $fa_nim = $_POST['fa_nim'];
   $fa_alat = $_POST['fa_alat'];
   $fa_email = $_POST['fa_email'];
   $fa_nohp = $_POST['fa_nohp'];
   $fa_tanggal = $_POST['fa_tanggal'];
   
   $server = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "simlab";

   $koneksi = mysqli_connect($server,$user,$pass,$dbname);
   if(mysqli_connect_errno()){
      echo "Koneksi database gagal".mysqli_connect_error();
   }

    $result = mysqli_query($koneksi, "UPDATE form_alat SET fa_name='$fa_name', fa_email = '$fa_email', fa_nim = '$fa_nim', fa_matkul = '$fa_matkul', fa_alat ='$fa_alat', fa_nohp ='$fa_nohp', fa_tanggal = '$fa_tanggal' WHERE alat_id = '$alat_id'");

    if ($result === TRUE) {
        echo '<script type="text/javascript">alert("Data Berhasil Di Update"); window.location.href = "tampilform_alat.php"; </script>';
    } else {
        echo '<script type="text/javascript">alert("Data Gagal Di Update");</script>';
    }
}
?>

<?php
     $id = $_GET['id'];
     $server = "localhost";
     $user = "root";
     $pass = "";
     $dbname = "simlab";
     $koneksi = mysqli_connect($server,$user,$pass,$dbname);
   if(mysqli_connect_errno()){
      echo "Koneksi database gagal".mysqli_connect_error();
   }
   $result = mysqli_query($koneksi, "SELECT * FROM form_alat WHERE alat_id= '$id' ");
   while ($data = mysqli_fetch_array($result)) {
   $id = $data['alat_id'];
   $name = $data['fa_name'];
   $matkul = $data['fa_matkul'];
   $nim = $data['fa_nim'];
   $alat = $data['fa_alat'];
   $email = $data['fa_email'];
   $nohp = $data['fa_nohp'];
   $tanggal = $data['fa_tanggal'];
   }
?>
<body>
<div class="wrapper">
    <div class="title">
      PEMINJAMAN ALAT LABORATORIUM
    </div>
    <form class="form" method="POST">
    <input type="hidden" name="id" value="<?php echo $id?>">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input" name="fa_name" value="<?php echo $name?>">
       </div>  
        <div class="inputfield">
          <label>Mata Kuliah</label>
          <input type="text" class="input" name="fa_matkul" value="<?php echo $matkul?>">
       </div>  
       <div class="inputfield">
          <label>Nomor Identitas</label>
          <input type="password" class="input" name="fa_nim" value="<?php echo $nim?>">
       </div> 
       <div class="inputfield">
          <label>ID Alat yang dipinjam</label>
          <input type="text" class="input" name="fa_alat" value="<?php echo $alat?>">
       </div> 
        <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="fa_email" value="<?php echo $email?>">
       </div> 

      <div class="inputfield">
          <label>Nomor hp</label>
          <input type="text" class="input" name="fa_nohp" value="<?php echo $nohp?>">
       </div> 
      <div class="inputfield">
          <label>Tanggal</label>
          <input type="date" class="text" name="fa_tanggal" value="<?php echo $tanggal?>">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Setuju mengikuti peraturan yang berlaku</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="edit" class="btn" name="update">
      </div>
</form>
</div>	
	
</body>
</html>