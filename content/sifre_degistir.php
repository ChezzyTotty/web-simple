<?php
echo "<style>
.success-message {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}

.success-message a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.error-message {
    background-color: #FF5733;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}

</style>";

session_start();

// Kullanıcının oturum açtığını kontrol et
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Oturum açılmadıysa giriş sayfasına yönlendir
    exit();
}

// Veritabanı bağlantısını içe aktarın (db.php'yi kullanacağımızı varsayalım)
require('db.php');

// Formdan gelen verileri alın
$current_password = mysqli_real_escape_string($con, $_POST['current_password']);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
$username = $_SESSION['username'];

// Mevcut şifreyi veritabanından kontrol edin
$sql = "SELECT password FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) {
    $stored_password = $row['password'];

    // Mevcut şifre doğru mu kontrol edin (hashlı)
    if (password_verify($current_password, $stored_password)) {
        // Yeni şifre ile doğrulama şifresi eşleşiyor mu kontrol edin
        if ($new_password === $confirm_password) {
            // Yeni şifreyi hashleyin
            $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            
            // Yeni hashli şifreyi veritabanında güncelle
            $update_sql = "UPDATE users SET password = '$new_hashed_password' WHERE username = '$username'";
            $update_result = mysqli_query($con, $update_sql);

            if ($update_result) {
                echo "<div class='success-message'>Şifre başarıyla güncellendi. <a href='../AnaSayfa.php'>Profil'e dön</a></div>";
            } else {
                echo "<div class='error-message'>Şifre güncelleme işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.<a href='sifre_degis.php'>Profil'e dön</a></div>";
            }
        } else {
            echo "<div class='error-message'>Yeni şifre ve doğrulama şifresi eşleşmiyor. Lütfen tekrar deneyin.<a href='sifre_degis.php'>Profil'e dön</a></div>";
        }
    } else {
        echo "<div class='error-message'>Mevcut şifre yanlış. Lütfen doğru bir şekilde girin. <a href='sifre_degis.php'>Profil'e dön</a></div>";
    }
} else {
    echo "<div class='error-message'>Kullanıcı bulunamadı. Lütfen tekrar oturum açın.</div>";
}

// Veritabanı bağlantısını kapat
mysqli_close($con);
?>
