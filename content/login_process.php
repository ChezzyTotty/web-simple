<?php
// Veritabanı bağlantısını yapın
$servername = "localhost"; // MySQL sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "logres"; // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatasını kontrol edin
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen kullanıcı adı ve şifre değerlerini alın
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcıyı veritabanında sorgulayın
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Kullanıcı bulunursa giriş yapın
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Giriş başarılıysa yönlendirilecek sayfa
} else {
    echo "Hatalı kullanıcı adı veya şifre.";
}

// Veritabanı bağlantısını kapatın
$conn->close();
?>
