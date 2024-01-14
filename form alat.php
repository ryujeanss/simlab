<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simlab | Form Alat</title>
	<link rel="stylesheet" href="css\form alat.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      PEMINJAMAN ALAT LABORATORIUM
    </div>
    <form class="form" method="POST" action="create_alat.php">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input" name="fa_name">
       </div>  
        <div class="inputfield">
          <label>Mata Kuliah</label>
          <input type="text" class="input" name="fa_matkul">
       </div>  
       <div class="inputfield">
          <label>Nomor Identitas</label>
          <input type="password" class="input" name="fa_nim">
       </div> 
       <div class="inputfield">
          <label>ID Alat yang dipinjam</label>
          <input type="text" class="input" name="fa_alat">
       </div> 
        <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="fa_email">
       </div> 

      <div class="inputfield">
          <label>Nomor hp</label>
          <input type="text" class="input" name="fa_nohp">
       </div> 
      <div class="inputfield">
          <label>Tanggal</label>
          <input type="date" class="text" name="fa_tanggal">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Setuju mengikuti peraturan yang berlaku</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="tambahAlat">
      </div>
</form>
</div>	
	
</body>
</html>