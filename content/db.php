<?php
    // Host adı, veritabanı kullanıcı adı, şifre ve veritabanı adınızı girin.
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "logres";

    // Veritabanına bağlantıyı kurma
    $con = mysqli_connect($host, $db_user, $db_password, $db_name);

    // Bağlantıyı kontrol et
    if (mysqli_connect_errno()){
        echo "MySQL'ye bağlanma başarısız: " . mysqli_connect_error();
    }
?>