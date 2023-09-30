var istekSayisi = 0;

function istekKontrol() {
    istekSayisi++;

    if (istekSayisi > 10) {
        // 10'dan fazla istek geldiğinde istekleri engelle veya yönlendir
        // Örneğin:
       window.location.href = "engelleme-sayfasi.html";
        // veya
        // alert("Çok fazla istek!");
    }
}

// Her istek geldiğinde istekKontrol fonksiyonunu çağır
istekKontrol();


var lastRefreshTime = localStorage.getItem('lastRefreshTime');
        var currentTime = new Date().getTime();

        // Sayfa yenilendiğinde zamanı güncelle
        localStorage.setItem('lastRefreshTime', currentTime);

        // Eğer son yenileme zamanı null veya 5 dakikadan daha önceyse, sayfayı yenile
        if (!lastRefreshTime || (currentTime - lastRefreshTime > 5 * 60 * 1000)) {
            // Sayfa yenileme işlemi
            location.reload();
        } else {
            // Yenileme izni yoksa, kullanıcıyı bilgilendir
            alert("Lütfen 5 dakika bekleyin, sonra sayfayı yenileyebilirsiniz.");
        }