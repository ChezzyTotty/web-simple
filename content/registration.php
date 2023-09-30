<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');

if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    // E-posta adresinin doğru bir formatla girilip girilmediğini kontrol edin
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='form'>
              <h3>Geçerli bir e-posta adresi girin.</h3><br/>
              <p class='link'>Yeniden <a href='registration.php'>kayıt</a> olmayı deneyin.</p>
              </div>";
        exit();
    }

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $create_datetime = date("Y-m-d H:i:s");
    
    // E-posta adresi ve kullanıcı adının daha önce kullanılıp kullanılmadığını kontrol edin
    $check_query = "SELECT * FROM `users` WHERE `email`='$email' OR `username`='$username'";
    $check_result = mysqli_query($con, $check_query);
    
    if (mysqli_num_rows($check_result) > 0) {
        echo "<div class='form'>
              <h3>Belirtilen e-posta veya kullanıcı adı zaten kullanılıyor.</h3><br/>
              <p class='link'>Yeniden <a href='registration.php'>kayıt</a> olmayı deneyin.</p>
              </div>";
        exit();
    }

    // Şifreyi hashleyin
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT into `users` (username, password, email, create_datetime)
              VALUES ('$username', '$hashed_password', '$email', '$create_datetime')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
    }
} else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Kayıt Ol</h1>
        <input type="text" class="login-input" name="username" placeholder="Kullanıcı Adı" required />
        <input type="text" class="login-input" name="email" placeholder="Mail Adress">
        <input type="password" class="login-input" name="password" placeholder="Şifre">
         <label style=" text-decoration: none; color: #ffffff; font-weight: bold; display: block; margin-bottom:10px;">
    <input type="checkbox" name="privacy_policy" required>
    <a   target="_blank" href="gizlilik-sartlari.html"style="color:#fff">Gizlilik şartlarını</a><a style="color :#ff000f">  kabul ediyorum.</a>
</label>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Zaten hesabın var mı? <a href="login.php">Giriş Yap</a></p>
    </form>
<?php
}
?>
</body>
</html>
