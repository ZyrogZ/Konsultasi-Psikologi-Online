<?php
$host = "nama_host"; // Ganti dengan nama host server database Anda
$user = "nama_pengguna"; // Ganti dengan nama pengguna database Anda
$password = "kata_sandi"; // Ganti dengan kata sandi database Anda
$database = "nama_database"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa apakah terjadi kesalahan saat koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data yang dikirimkan melalui form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Menyimpan data pengguna ke dalam database
    $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Mengarahkan pengguna ke halaman login.html setelah berhasil registrasi
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
