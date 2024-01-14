<?php
// Konfigurasi database
session_start();
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

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo '<script type="text/javascript">alert("Username telah digunakan, silahkan pilih username yang lain"); </script>';;;
    } else {
    $query = "INSERT INTO users(username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $query)) {
        echo '<script type="text/javascript">alert("Registrasi berhasil!\nSilahkan login menggunakan akun anda"); window.location.href = "login.php"; </script>';;
    }
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $data = mysqli_query($conn ,"SELECT  * from users where username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        echo "<script type='text/javascript'>confirm('Login berhasil! Selamat datang, $username'); window.location.href = 'index.php'; </script>";
    }else{
        echo '<script type="text/javascript">alert("Login gagal, harap periksa username dan password Anda"); window.location.href = "login.php"; </script>';;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simlab | Sistem Informasi Manajemen Laboratorium</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css\app.css">

</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            <form class="sign-in-form" method="POST">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class='bx bxs-user'></i>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-field">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" value="Login" class="btn solid" name="login">
                <p class="social-text">Or sign in with social platforms</p>

                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-google'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </div>
            </form>
            <form class="sign-up-form" method="POST">
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class='bx bxs-user'></i>
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-field">
                    <i class='bx bxs-envelope'></i>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="input-field">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" value="Sign Up" class="btn solid" name="register">
                <p class="social-text">Or sign up with social platforms</p>

                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-google'></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </div>
            </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>SIMLAB</h3>
                    <p>Sistem Informasi Manajemen Lab
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="image\Profiling_Monochromatic.png" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>SIMLAB</h3>
                    <p>Sistem Informasi Manajemen Lab
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="image\Authentication_Outline.png" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="jss\app.js"></script>
</body>
</html>