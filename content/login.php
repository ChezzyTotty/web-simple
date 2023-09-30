<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>



<?php
require('db.php');

session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    
    // Veritabanından kullanıcıyı alın
    $query = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Veritabanında şifreyi alın ve doğrulayın
        $hashed_password = $row['password'];
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Geçersiz kullanıcı adı/şifre.</h3><br/>
                  <p class='link'>Tekrar <a href='login.php'>Giriş Yap</a> deneyin.</p>
                  </div>";
        }
    } else {
        echo "<div class='form'>
              <h3>Geçersiz kullanıcı adı/şifre.</h3><br/>
              <p class='link'>Tekrar <a href='login.php'>Giriş Yap</a> deneyin.</p>
              </div>";
    }
} else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Giriş Yap</h1>
        <input type="text" class="login-input" name="username" placeholder="Kullanıcı Adı" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Şifre"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Henüz hesabın yok mu? <a href="registration.php">Hemen Kayıt Ol</a></p>
    </form>
<?php
}
?>
</body>
</html>
