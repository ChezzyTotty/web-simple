


<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <meta charset="UTF-8" />
  <meta http-equiv="Strict-Transport-Security" content="max-age=31536000">

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Ahmet Serçe</title>
  <script src="ddos.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <br />
  
  </a>
      
  

  
  


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">


</head>
<!--  edit contain 1 -->

<body>
  <br/>
  <div class="container">

   
    <br/>
    <nav>
      <br/>
      <ul>
        <li id="about"><strong><span style="color: rgb(71, 155, 155);">/</span>hakkımda</strong></li>
        <li id="eğitim"><strong><span style="color: rgb(71, 155, 155);">/</span>eğitim</strong></li>
        <li id="project"><strong><span style="color: rgb(71, 155, 155);">/</span>projeler</strong></li>
        <li id="sistemim"><strong><span style="color: rgb(71, 155, 155);">/</span>sistem</strong></li>
        <li id="fotograf"><strong><span style="color: rgb(71, 155, 155);">/</span>fotograf</strong></li>
        <li id="contact"><strong><span style="color: rgb(71, 155, 155);">/</span>iletişim</strong></li>
        <li id="makineler"><strong><span style="color: rgb(71, 155, 155);">/</span>sanal</strong></li>
        <li id="smspanel"><strong><span style="color: rgb(71, 155, 155);">/</span>smspanel</strong></li>
        <li id="botlar"><strong><span style="color: rgb(71, 155, 155);">/</span>bot</strong></li>
        <li id="pardus"><strong><span style="color: rgb(71, 155, 155);">/</span>pardus</strong></li>
        <li id="veritabanı"><strong><span style="color: rgb(71, 155, 155);">/</span>veritabanı</strong></li>
        
      </ul>
      
 
    </nav>
  
    <main>
      <br/>
      <br/>
      <h1><span id="animation"></span><span class="cursor">|</span></h1>

<script>
  const text = "ahmetserce@$";
  const animationElement = document.getElementById("animation");
  let index = 0;

  function showNextLetter() {
    if (index < text.length) {
      animationElement.textContent += text[index];
      index++;
    } else {
      animationElement.textContent = ""; // Yazı tamamlandıktan sonra temizlenir
      index = 0;
    }
    setTimeout(showNextLetter, 500); // Her harften sonra 3000ms'lik bir gecikme
  }

  showNextLetter();
</script>

      
      <h3>Kullandığım Uygulamalar:</h3>
      <div class="process">
        <div class="box">
          <img
            src="https://readme-typing-svg.herokuapp.com?color=F76A22&lines=Html+%23%23%23%23%23%23%23%23%23%23+100%25"></img>
          
          <img
            src="https://readme-typing-svg.herokuapp.com?color=0EE6F7&lines=Css+%23%23%23%23%23%23%23%23%23+100%25"></img>
          <img src="https://readme-typing-svg.herokuapp.com?color=EFF727&lines=Javas+%23%23%23%23%23%23%23%23+100%25"></img>
          <img
            src="https://readme-typing-svg.herokuapp.com?color=8DF724&lines=Php+%23%23%23%23%23%23%23%23%23+50%25"></img>
          <img
            src="https://readme-typing-svg.herokuapp.com?color=1F25F7&lines=Python+%23%23%23%23%23%23%23%23+50%25"></img>
          <img
            src="https://readme-typing-svg.herokuapp.com?color=ff0000&lines=React+%23%23%23%23%23%23%23%23%23%23+40%25"></img>
          <img
            src="https://readme-typing-svg.herokuapp.com?color=660099&lines=Sql+%23%23%23%23%23%23%23%23%23%23+30%25"></img>


        </div>
    </main>
  </div>
</div>


<?php
session_start();


// Kullanıcının oturum açtığını kontrol et
if (!isset($_SESSION['username'])) {
    // Oturum açılmadıysa giriş sayfasına yönlendir
    header("Location: content/login.php");
    exit(); // Diğer kodların çalışmasını engellemek için exit() kullanın
}

// Oturum açık olduğunda buraya kullanıcı içeriği veya sayfa içeriği ekleyebilirsiniz
?>
<style>
  /* CSS ile dropdown menüyü stilize edin */
.user-dropdown {
    position: relative;
    display: inline-block;
}

#user-trigger {
    cursor: pointer;
    padding: 10px 20px; /* Dropdown menüyü daha kolay tıklanabilir hale getirmek için alan ekleyin */
}

#user-trigger:hover {
    background-color: #f0f0f0; /* Kullanıcı adı yanındaki alana hover efekti ekleyin */
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-content a {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    color: #333;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: #333;
}

.user-dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    transform: translateY(0);
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
<div id="menu">
    <?php
    if (isset($_SESSION['username'])) {
        // Kullanıcı giriş yapmışsa
        echo '<div class="user-dropdown">';
        echo '<span id="user-trigger" class="menu-link" onclick="toggleMenu()">Merhaba, ' . $_SESSION['username'] . ' <i class="fa fa-caret-down"></i></span>';
        echo '<div id="user-dropdown-content" class="dropdown-content">';
        echo '<a href="content/sifre_degis.php">Şifre Değiş</a>';
        echo '<a href="content/ayarlar.php">Ayar Değiş</a>';
        echo '<a href="content/dashboard.php">Dash Board</a>';
        echo '<a href="content/spoti.php" target="_blank">Spotify</a>';
        echo '<a href="content/logout.php">Çıkış Yap</a>';
        echo '</div>';
        echo '</div>';
    } else {
        // Kullanıcı giriş yapmamışsa
        echo '<a href="content/login.php" class="menu-link">Giriş</a>';
        echo '<a href="content/registration.php" class="menu-link">Kayıt</a>';
    }
    ?>
</div>

<script>
function toggleMenu() {
    var dropdown = document.getElementById("user-dropdown-content");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Sayfa dışında bir yere tıklanırsa dropdown menüyü gizleme
document.addEventListener("click", function(event) {
    var userTrigger = document.getElementById("user-trigger");
    var dropdown = document.getElementById("user-dropdown-content");
    if (!event.target.matches("#user-trigger") && !event.target.matches(".fa-caret-down")) {
        dropdown.style.display = "none";
    }
});
</script>




























<style> 
.modal-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .modal-content h2, .modal-content p {
    margin: 0;
    font-weight: bold;
  }
  .modal-content p {
    display: inline;
    margin-right: 20px; /* İstediğiniz boşluk miktarını ayarlayabilirsiniz */
  }
</style>





<div id="myModal" class="modal">
  <div class="modal-content">
    <h2   style="color:#000000 ; font-weight: bold; ">İban Kopyalandı ve Yönlendiriliyor<span id="cursorlar">...</span></h2>
    <p   style="color:#000000 ; font-weight: bold;">İban:  <span id="ibanValue"></span></p>
    <p  style="color:#000000 ; font-weight: bold;"  >İsim:  <span id="isimValue"></span></p>
    <p style="color:#000000 ; font-weight: bold;">Bekleyin, yönlendiriliyorsunuz</p>
  </div>
</div>


<script>
  function copyToClipboard(text) {
    var dummyElement = document.createElement("textarea");
    dummyElement.value = text;
    dummyElement.setAttribute("readonly", "");
    dummyElement.style.position = "absolute";
    dummyElement.style.left = "-9999px";
    document.body.appendChild(dummyElement);
    dummyElement.select();
    document.execCommand("copy");
    document.body.removeChild(dummyElement);
  }

  function showNotification() {
    var isim = "Ahmet Erdem Serçeoğlu"
    var iban ="TR123456789012345678901234"; // Otomatik olarak doldurulacak IBAN burada
    var url = "https://www.akbank.com/tr-tr/Sayfalar/default.aspx" + encodeURIComponent(iban);

    var modal = document.getElementById("myModal");
    var ibanValue = document.getElementById("ibanValue");

    ibanValue.textContent = iban; // İban değerini ayarla
    isimValue.textContent = isim;
    modal.style.display = "inline-block"; // Modalı görünür yap

    // İban'ı panoya kopyala
    copyToClipboard(iban + " " + isim);


    setTimeout(function() {
      modal.style.display = "none"; // Modalı gizle
      window.open(url, "_blank"); // Yönlendirme işlemi
    }, 2000);
  }
</script>

<button onclick="showNotification()">Destek Olma</button>






<script>

  // IP bazlı istemci sınırlaması için gerekli kod
var requestLimit = 100; // İzin verilen maksimum istek sayısı
var requestInterval = 1000; // İstek aralığı (milisaniye cinsinden)

var ipRequests = {}; // IP adreslerinin istek sayılarını saklayan nesne

function handleRequest(req, res, next) {
  var clientIp = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
  
  if (ipRequests[clientIp]) {
    ipRequests[clientIp]++;
  } else {
    ipRequests[clientIp] = 1;
  }

  if (ipRequests[clientIp] > requestLimit) {
    res.status(429).send('Too Many Requests');
  } else {
    next();
  }

  setTimeout(function() {
    ipRequests[clientIp]--;
    if (ipRequests[clientIp] === 0) {
      delete ipRequests[clientIp];
    }
  }, requestInterval);
}

// Kullanım örneği
app.use(handleRequest);
</script>

<script>
  
  // JavaScript ile noktaların sırayla gösterilmesi
  var cursor = document.getElementById('cursorlar');
  var dots = ['.', '..', '...'];
  var currentDotIndex = 0;
  
  function showNextDot() {
    cursor.textContent = dots[currentDotIndex];
    currentDotIndex = (currentDotIndex + 1) % dots.length;
  }
  
  setInterval(showNextDot, 500); // Her 500ms'de bir noktayı güncelle
  </script>

<script src="ddos.js"></script>

<div class="hidden">
  <div id="eğitim-content">
    <h2>Eğitim@$<span class="cursor">|</span></h2>

    <ul>
      <p class="item">Statü<span></span><br> <span><br>Anadolu Meslek Lisesi</span></p>
      <p class="item">Alan<span></span><br> <span><br>Sayısal</span></p>
      <p class="item">Yer<span></span><br> <span><br>Mamak/Ankara/Türkiye</span></p>
      <p class="item">Düzey<span></span><br> <span><br>Lise 4 (12.Sınıf)</span></p>
      
    </ul>





    

  <div class="hidden">
    <div id="sistemim-content">
      <h2>Sistem@$<span class="cursor">|</span></h2>

      <ul>
        <p style="color: rgb(255, 0, 0);"> > Ekran Kartı : RTX 3050 Ti</p>
        <p style="color: rgb(255, 0, 0);"> > İşlemci : 11.Nesil i5 </p>
        <p style="color: rgb(255, 0, 0);"> > Bellek : 16 GB </p>
        <p style="color: rgb(255, 0, 0);"> > Yerel Disk : 1 TB </p>
        <p style="color: rgb(255, 2, 2);"> > SSD : 512 GB </p>
        <p style="color: rgb(255, 0, 0);"> > Ekran Çözünürlüğü: 1920x1080</p>
        <p style="color: rgb(255, 0, 0);"> > Ekran Yenileme : 60 Hz</p>
        <p style="color: rgb(255, 0, 0);"> > Tip : Dizüstü Bilgisayar</p>


      </ul>
      <div class="hidden">
        <div id="botlar-content">
          <h2>Botlar:$<span class="cursor">|</span></h2>

          <ul>
            <p style="color:rgb(255, 0, 0) ;"> > Panelli Kayıt Sistemi </p>
            <p style="color:rgb(255, 0, 0) ;"> > Panelli Müzik Sistemi </p>
            <p style="color:rgb(255, 0, 0) ;"> > Panelli Moderasyon Sistemi </p>
            <p style="color:rgb(255, 0, 0) ;"> > Sunucu Kopyalama Sistemi </p>
            <p style="color:rgb(255, 0, 0) ;"> > Uptime (Hosting) Sistemi</p>
            <p style="color:rgb(255, 0, 0) ;"> > Sunucu Patlatma Botu</p>

            <p>Bana ulaşıp altyapı alabilirsiniz.Gmail veya Sosyal medyadan ulaşabilirsiniz. </p>
          </ul>

          <div class="hidden">
            <div id="pardus-content">
              <h2>Pardus@$<span class="cursor">|</span></h2>
        
              <p id="pardus-photo" >
                <img id="pardus-photo" src="https://d33wubrfki0l68.cloudfront.net/87f0b325a985da28ccd148b5a7e117e9452fc10e/5a94a/img/pardus.jpg" alt='pardus screenshot'>
              </p>


              <div class="hidden">
                <div id="veritabanı-content">
                  <h2>Veritabanı Denemeleri:$<span class="cursor">|</span></h2>
        
                  <ul>
                    <p style="color:rgb(255, 0, 0) ;"> > Veritabanlı Kayıt Sistemi </p>
                    <p style="color:rgb(255, 0, 0) ;"> > Kütüphane Otomsyon Sistemi </p>
                    <p style="color:rgb(255, 0, 0) ;"> > Php ve Mysql ile Web </p>
                    <p style="color:rgb(255, 0, 0) ;"> > Okul öğrenci kayıt Sistemi</p>
                    <p style="color:rgb(255, 0, 0) ;"> > Zamanlı randevu Sitesi</p>
                    
        
                    <p>İsteyene altyapı veririm ama çaldırırsanız sorumluluk tamamıyla sizdedir
                      Kişisel verilerin kayıt edildiği dosyaların çalınması bilişim suçudur.
                    </p>
                  </ul>



          <!--  edit contain 1 -->
          <div class="hidden">
            <div id="smspanel-content">
              <h2>Panel:$<span class="cursor">|</span></h2>
              <ul>
                <li>Sms Panel uygulamasının demosunu almak için burdan bana ulaşın: </li>
                <li><a href="https://discord.com/users/825484846205108295">Discord</a></li>
                <li>Bir miktar ücret ödeyerek özelleştirilmiş Sms-Panel alabilirsiniz</li>

              </ul>
              <div class="hidden">
                <div id="about-content">
                  <h2>Hakkımda:$<span class="cursor">|</span></h2>
                  <p>Merhaba,Ben <a href="https://www.instagram.com/ahmetserce06/" target="_blank">Ahmet Erdem</a> ,
                    Front End ile uğraşıyorum birazcık Back End bilgim var . Sizin için <strong><span style="color: red;" >PERSONEL/KURUM </span></span></strong>
                    Websiteleri yapabilirim.</p>
                  <p>
                    Hack işlemlerine birazcık ilgi duyuyorum ve uğraşıyorum kendi programım olmasada <strong><span style="color: red;"> QUASAR RAT</span>
                      ve <strong><span style="color: red;"> DARKCOMET</span> kullanarak Rat "Remote Access Trojan" ile uzaktan bilgisayar kontrolü ve işletimi
                    yapabiliyorum.
                  </p>

                  
                </div>

                <div id="project-content">
                  <h2>Projelerim:$<span class="cursor">|</span></h2>
                  <h3>Ana Projelerim</h3>
                  <ul>
                    <li>
                      <a>Front-End Websiteler</a>
                    </li>
                    <li>
                      <a>Back-End Websiteler</a>
                    </li>
                    <li>
                      <a>Deneme Aşaması 'Hack Programı'</a>
                    </li>
                    <li>
                      <a>Panelli Sms-Bomb</a>
                    </li>
                    <li>
                      <a>Tkinter Projeleri</a>
                    </li>
                    <li>
                      <a>Sanal Sertifikalar</a>
                    </li>
                  </ul>


                  <h3>Yazılım Öğrendiğim Siteler</h3>
                  <ul>
                    <li class="small">Chat-Gpt 3.5</li>
                    <li class="small">BlackBox.oi</li>
                    <li class="small">Templates Projeler</li>
                    <li class="small">CodeAcademy</li>
                    <li class="small">Online Canlı Dersler</li>
                  </ul>



                  <p> Kod Desteği Aldığım Siteler </p>
                  <li class="small">Chat-Gpt 3.5 </li>
                  <li class="small">BlackBox.oi</li>
                  <li class="small">CodePen.io</li>
                </div>

                <div id="contact-content">
                  <h2>İletişim:$<span class="cursor">|</span></h2>
                  <p>Mailden yada Sosyal medya hesaplarım üzerinden bana ulaşabilirsiniz</p>
                  <ul>




                    <h6>Burdan Ulaşın</h6>


                  <a href="https://www.discord.com/users/825484846205108295" target="_blank"
                    class="social-button discord-button">
                    <i class="fab fa-discord"aria-hidden="true"></i>
                  </a>
                  <a href="https://github.com/ahmedigollik1" target="_blank" class="social-button github-button">
                    <i class="fab fa-github"aria-hidden="true"></i>
                  </a>
                  <a href="https://www.instagram.com/ahmetserce06/" target="_blank"
                    class="social-button instagram-button">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                  </a>

                  <a href="mailto:ahmeterdemserceoglo@gmail.com" 
                  class="social-button google-button">
                  <i class="fab fa-google"></i>
                </a>
                    
                  </ul>
                </div>

                <div class="hidden">
                  <div id="fotograf-content">

                    <h2>Fotoğraf:$<span class="cursor">|</span></h2>
                    <p>
                      <img src="https://d33wubrfki0l68.cloudfront.net/d8929ac4ab7c7e9943324d4067e7e4204f29e691/74aba/img/ahmet.jpg" alt="Kim Bu yakışıklı">
                    </p>

                  </div>
                  <div id="makineler-content">

                    <h2>Makineler:$<span class="cursor">|</span></h2>

                    <ul>
                      <p>Sanal Makineler</p>
                      <p style="color: rgb(255, 8, 8);">Wm Ware : Windows 10 , Linux</p>
                      <p style="color: rgb(255, 8, 8);"> VirtualBox : Kali Linux </p>

                    </ul>

                    <ol>
                      <p> Port Uygulamalarım </p>
                      <p style="color: rgb(255, 8, 8);">Ngrok</p>
                      <p style="color: rgb(255, 8, 8);">Port Forward</p>

                    </ol>

                    <ul>Dns Uygulamalarım

                      <p style="color: rgb(255, 8, 8);">DuckDns</p>
                      <p style="color: rgb(255, 8, 8);">OpenDns</p>
                      <p style="color: rgb(255, 8, 8);">PublicDns</p>
                      <p style="color: rgb(255, 8, 8);">ComodokDns</p>

                    </ul>

                    <ul>Kali Linux
                      <p style="color: rgb(255, 8, 8);">Sızma Testleri</p>
                      <p style="color: rgb(255, 8, 8);">Sunucu Trafiği</p>
                      <p style="color: rgb(255, 8, 8);">Şifre Deşifre</p>
                      <p style="color: rgb(255, 8, 8);">Ağ Trafiği İzleme</p>
                      <p style="color: rgb(255, 8, 8);">Website Açığı</p>
                      <p style="color: rgb(255, 8, 8);">Windows Güvenlik Çökertme</p>

                      <ul>Parsus
                        <p style="color: rgb(255, 8, 8);">Türk mühendisler tarafından geliştirilen TÜBİTAK projesi
                          yakında öğrenip kullanmaya başlayacağım</p>
                  </div>
                </div>

                <footer aline="center">

                </footer>
                <script src="js/winbox.bundle.js"></script>
                <script src="js/main.js"></script>
                <script src="js/tamekran.js"></script>




</body>

</html>