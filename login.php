<?php
// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// TODO: Proses validasi dan autentikasi pengguna

// Contoh autentikasi sederhana
if ($email == 'user@example.com' && $password == 'password') {
    // Autentikasi berhasil
    header('Location: index.html');
    exit();
} else {
    // Autentikasi gagal
    echo "Email atau password salah.";
}
?>
