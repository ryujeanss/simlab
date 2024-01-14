<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simlab | Form Lab</title>
	<link rel="stylesheet" href="css\form lab.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      PEMINJAMAN LAB
    </div>
    <form class="form" method="POST" action="create_lab.php">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input" name="fl_name">
       </div>  
        <div class="inputfield">
          <label>Mata Kuliah</label>
          <input type="text" class="input" name="fl_matkul">
       </div>  
       <div class="inputfield">
          <label>Nomor Identitas</label>
          <input type="password" class="input" name="fl_nim">
       </div>  
       <div class="inputfield">
        <label>Identitas</label>
        <div class="custom_select">
          <select  name="fl_lab">
            <option value="">Select</option>
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
          </select>
        </div>
     </div> 
        <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="fl_email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="fl_nohp">
       </div> 
      <div class="inputfield">
          <label>Tanggal</label>
          <input type="date" name="fl_tanggal"></textarea>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Setuju mengikuti peraturan yang berlaku</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
</form>
</div>	
	
</body>
</html>