<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
   <style></style>
    <meta charset="utf-8">
    <title>Kullanıcı Paneli</title>
    <link rel="stylesheet" href="style.css" />
</>
<body>
    <div class="form">
        <p style="color: #66ff00; font-weight: bold;">Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p style="color: #66ff00; font-weight: bold;">Burası senin kullanıcı panelin .</p>
        <p><a style="color: #ffffff; font-weight: bold; text-decoration:none;" href="../AnaSayfa.php">Ana Sayfa</a></p>
        <p><a style="color: #ffffff; font-weight: bold; text-decoration:none;" href="sifre_degis.php">Şifre değiştir</a></p>
        <p><a style="color: #ffffff; font-weight: bold; text-decoration:none;" href="logout.php">Logout</a></p>
    </div>
</body>
</html>
