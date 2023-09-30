// Veritabanından kullanıcının profil fotoğrafını alır
function getProfilFoto($username) {
    // Veritabanı sorgusu ile profil fotoğrafını alın
    // Örnek bir sorgu:
    $query = "SELECT profile_photo FROM users WHERE username = '$username'";
    
    // Sorguyu çalıştırın ve sonucu alın
     $result = mysqli_query($db_connection, $query);
    
    // Eğer sonuç varsa, veritabanından profil fotoğrafını alın
    // Örnek bir kod:
     if ($row = mysqli_fetch_assoc($result)) {
        return $row['profile_photo'];
    }
    
    // Eğer sonuç yoksa veya bir hata oluşursa, varsayılan bir profil fotoğrafı döndürebilirsiniz
     return 'default_profile_photo.jpg'; // Varsayılan profil fotoğrafının dosya adını buraya yazın
    
    
    
}
