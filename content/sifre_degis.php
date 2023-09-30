<?php
session_start();

// Kullanıcının oturum açtığını kontrol et
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Oturum açılmadıysa giriş sayfasına yönlendir
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Değiştir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* Genel sayfa stilini düzenleyin */
    body {
        font-family: Arial, sans-serif;
        background-color: #34495e;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #fff;
        margin: 20px auto;
        padding: 20px;
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

    /* Profil bilgileri bölümü */
    p {
        color: #444;
        font-size: 16px;
        line-height: 1.5;
    }

    /* Şifre değiştirme formu */
    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #666;
        font-size: 18px;
    }

    .password-input {
        width: 99%;
        padding: 11px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        
        position: sticky; /* Göz simgesini hizalamak için */
    }

    .password-input:focus {
        border-color: #55a1ff;
        outline: none;
    }

    .password-toggle {
        position: absolute; /* Göz simgesini mutlak pozisyona alın */
        right: 10px;
        top: 50%; /* Dikey hizalama */
        transform: translateY(-50%); /* Dikey hizalama */
        cursor: pointer;
    }

    .password-toggle i {
        color: #666;
        font-size: 18px;
    }

    button[type="submit"] {
        background-color: #55a1ff;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    a {

         background-color: #55a1ff;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size: 18px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;

    }
    button[type="submit"]:hover {
        background-color: #3f8ae0;
    }

    /* Kullanıcı adını beyaz yapın */
    #user-trigger {
        color: #fff;
    }

    /* Kullanıcı adının beyaz rengini düzeltmek için hover efekti ekleyin */
    #user-trigger:hover {
        background-color: transparent;
    }
</style>
<body>
    <div id="menu">
        <?php
        // Açılır menü kodu
        ?>
    </div>

    <div class="container">
        <h2>Şifre Değiştir</h2>
        <p><strong>Merhaba, <?php echo $_SESSION['username']; ?>!</strong></p>
        <p><strong>Burada şifre bilgilerinizi görüntüleyebilir ve şifrenizi değiştirebilirsiniz.</strong></p>
        
        <h3><strong>Şifre Değiştir</strong></h3>
        <form action="sifre_degistir.php" method="post">
            <label for="current_password"><strong>Mevcut Şifre:</strong></label>
            <div style="position: relative; ">
                <input type="password" id="current_password" placeholder="Mevcut Şifrenizi Giriniz" name="current_password" class="password-input" required>
                <div class="password-toggle" onclick="togglePassword('current_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <label for="new_password"><strong>Yeni Şifre:</strong></label>
            <div style="position: relative; font-weight: bold;  color: black;">
                <input type="password"  id="new_password" name="new_password" placeholder="Şifrenizi Giriniz" class="password-input" required>
                <div class="password-toggle" onclick="togglePassword('new_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <label for="confirm_password"   ><strong>Yeni Şifre Tekrar:</strong></label>
            <div style="position: relative;">
                <input type="password" id="confirm_password" name="confirm_password" class="password-input"      placeholder="Şifrenizi Tekrarlayın" required>
                <div class="password-toggle" onclick="togglePassword('confirm_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <button type="submit">Şifre Değiştir</button>
            <a href="../AnaSayfa.php ">Ana Sayfa</a>
        </form>
    </div>

    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var icon = passwordInput.nextElementSibling.querySelector('i');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.className = "fa fa-eye-slash";
            } else {
                passwordInput.type = "password";
                icon.className = "fa fa-eye";
            }
        }
    </script>
</body>
</html>
