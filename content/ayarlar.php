<?php
session_start();
require('db.php');

// Kullanıcının oturum açtığını kontrol et
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Oturum açılmadıysa giriş sayfasına yönlendir
    exit();
}

if (isset($_POST['delete_confirm'])) {
    // Kullanıcı hesabını sil
    $username = $_SESSION['username'];

    // Hesap silme işlemini gerçekleştir
    $delete_user_sql = "DELETE FROM users WHERE username = '$username'";
    $delete_user_result = mysqli_query($con, $delete_user_sql);

    if ($delete_user_result) {
        // Oturumu kapat
        session_unset();
        session_destroy();

        // Giriş sayfasına yönlendir
        header("Location: login.php");
        exit();
    } else {
        echo "<script>
            function showNotification(message, type) {
                const notification = document.getElementById('notification');
                notification.innerHTML = message;
                notification.className = 'notification ' + type;
                notification.style.display = 'block';

                // 5 saniye sonra bildirimi gizle
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 5000);
            }
            showNotification('Hesap silme işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.', 'error');
        </script>";
    }
}

// Kullanıcıya hesabı silme işlemini onaylaması için bir form göster

if (isset($_POST['submit'])) {
    $new_username = mysqli_real_escape_string($con, $_POST['new_username']);
    $new_email = mysqli_real_escape_string($con, $_POST['new_email']);
    $username = $_SESSION['username'];

    // Kullanıcı adını ve e-posta adresini daha önce kullanılıp kullanılmadığını kontrol edin
    $check_query = "SELECT * FROM users WHERE (username='$new_username' OR email='$new_email') AND username != '$username'";
    $check_result = mysqli_query($con, $check_query);
    
    if (mysqli_num_rows($check_result) > 0) {
        echo "Belirtilen kullanıcı adı veya e-posta adresi zaten kullanılıyor.";
    } else {
        // Kullanıcı adını güncelle
        $update_username_sql = "UPDATE users SET username = '$new_username' WHERE username = '$username'";
        $update_username_result = mysqli_query($con, $update_username_sql);

        // E-posta adresini güncelle
        $update_email_sql = "UPDATE users SET email = '$new_email' WHERE username = '$username'";
        $update_email_result = mysqli_query($con, $update_email_sql);

        if ($update_username_result && $update_email_result) {
            $_SESSION['username'] = $new_username; // Oturum verilerini güncelle
            header("Location: ../AnaSayfa.php"); // Ana menüye yönlendir
            exit();
        } else {
            echo "<script>
                function showNotification(message, type) {
                    const notification = document.getElementById('notification');
                    notification.innerHTML = message;
                    notification.className = 'notification ' + type;
                    notification.style.display = 'block';

                    // 5 saniye sonra bildirimi gizle
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 5000);
                }
                showNotification('Ayarlar güncelleme işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.', 'error');
            </script>";
        }
    }
}

// Mevcut kullanıcı bilgilerini al
$username = $_SESSION['username'];
$sql = "SELECT email FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$existing_email = $row['email'];

// Veritabanı bağlantısını kapat
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>/* Genel sayfa stilini düzenleyin */
body {
    font-family: Arial, sans-serif;
    background-color: #34495e;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    margin: 30px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    max-width: 800px;
}

h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}


h3 {
    color: #555;
    font-size: 20px;
    margin-bottom: 10px;
}

/* Ayarlar formu */
form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #666;
    font-size: 18px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #55a1ff;
    outline: none;
}

button[type="submit"],
button[type="button"] {
    background-color: #55a1ff;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover,
button[type="button"]:hover {
    background-color: #3f8ae0;
}

/* Silme butonunu kırmızı yapın */
button[type="button"] {
    background-color: #ff5555;
}

/* Silme butonunu hover durumunda daha koyu bir kırmızı yapın */
button[type="button"]:hover {
    background-color: #ff5555;
}

/* Bildirim stilini düzenleyin */
.notification {
    display: none;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
}

.error {
    background-color: #ff5555;
}

a {
  background-color: #008000; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 6px;
}

.success {
    background-color: #55a1ff;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Hesap Ayarları</h2>
        <form action="" method="post">
            <label  for="new_username">Yeni Kullanıcı Adı:  </label>
            <input   placeholder="Değişmek istemezseniz önceki kullanıcı adınızı yazınız"  type="text" id="new_username" name="new_username" required>
            
            <label for="new_email">Yeni E-posta Adresi:</label>
            <input  placeholder="Değişmek istemezseniz önceki Mail adresinizi yazınız" type="email" id="new_email" name="new_email" value="<?php echo $existing_email; ?>" required>
            
            <button type="submit" name="submit">Ayarları Kaydet</button>
        </form>
        
        <form action="" method="post">
            <button style="background-color:#ff0000" type="submit" name="delete_confirm">Hesabı Sil</button>
            <a href="../AnaSayfa.php"  type="submit" name="homepage">Ana Menü</a>
        </form>

        <!-- Bildirim bölümü -->
        <div id="notification" class="notification"></div>
    </div>

    <!-- JavaScript kodu -->
    <script>
    function showNotification(message, type) {
        const notification = document.getElementById("notification");
        notification.innerHTML = message;
        notification.className = "notification " + type;
        notification.style.display = "block";

        // 5 saniye sonra bildirimi gizle
        setTimeout(function() {
            notification.style.display = "none";
        }, 5000);
    }
    </script>
</body>
</html>
