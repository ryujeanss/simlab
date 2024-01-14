<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simlab | Form Lab</title>
	<link rel="stylesheet" href="css\form lab.css">
</head>
<?php
if (isset($_POST['update'])) {
   $lab_id = $_POST['id'];
   $fl_name = $_POST['fl_name'];
   $fl_matkul = $_POST['fl_matkul'];
   $fl_nim = $_POST['fl_nim'];
   $fl_lab = $_POST['fl_lab'];
   $fl_email = $_POST['fl_email'];
   $fl_nohp = $_POST['fl_nohp'];
   $fl_tanggal = $_POST['fl_tanggal'];
   
   $server = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "simlab";

   $koneksi = mysqli_connect($server,$user,$pass,$dbname);
   if(mysqli_connect_errno()){
      echo "Koneksi database gagal".mysqli_connect_error();
   }

    $result = mysqli_query($koneksi, "UPDATE form_lab SET fl_nama='$fl_name', fl_email = '$fl_email', fl_nim = '$fl_nim', fl_matkul = '$fl_matkul', fl_lab ='$fl_lab', fl_nohp ='$fl_nohp', fl_tanggal = '$fl_tanggal' WHERE lab_id = '$lab_id'");

    if ($result === TRUE) {
        echo '<script type="text/javascript">alert("Data Berhasil Di Update"); window.location.href = "tampilform_lab.php"; </script>';
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
   $result = mysqli_query($koneksi, "SELECT * FROM form_lab WHERE lab_id= '$id' ");
   while ($data = mysqli_fetch_array($result)) {
   $id = $data['lab_id'];
   $name = $data['fl_nama'];
   $matkul = $data['fl_matkul'];
   $nim = $data['fl_nim'];
   $lab = $data['fl_lab'];
   $email = $data['fl_email'];
   $nohp = $data['fl_nohp'];
   $tanggal = $data['fl_tanggal'];
   }
?>
<body>
<div class="wrapper">
    <div class="title">
      PEMINJAMAN LAB
    </div>
    <form class="form" method="POST">
    <input type="hidden" name="id" value="<?php echo $id?>">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input" name="fl_name" value="<?php echo $name?>">
       </div>  
        <div class="inputfield">
          <label>Mata Kuliah</label>
          <input type="text" class="input" name="fl_matkul" value="<?php echo $matkul?>">
       </div>  
       <div class="inputfield">
          <label>Nomor Identitas</label>
          <input type="password" class="input" name="fl_nim" value="<?php echo $nim?>">
       </div> 
       <div class="inputfield">
        <label>Identitas</label>
        <div class="custom_select">
          <select name="fl_lab">
          <option value="">Select</option>
            <?php
            $val_prev = "$lab";
            $opsi = array("Dosen", "Mahasiswa");
            foreach ($opsi as $pilihan) {
               $selected = ($pilihan == $val_prev) ? "selected" : "";
               echo "<option value='$pilihan' $selected>$pilihan</option>";
            }
            ?>
</select> 
        </div>
     </div> 
        <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="fl_email" value="<?php echo $email?>">
       </div> 

      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="fl_nohp" value="<?php echo $nohp?>">
       </div> 
      <div class="inputfield">
          <label>Tanggal</label>
          <input type="date" class="text" name="fl_tanggal" value="<?php echo $tanggal?>">
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