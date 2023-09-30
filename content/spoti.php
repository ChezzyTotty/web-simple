<!DOCTYPE html>
<html>
<head>
    <title>Spotify</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow: hidden;
}

body {
  background-color: #1e1e1e;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 60px 40px;
}

h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 40px;
}

.playlist-selector p {
  font-size: 18px;
  margin-bottom: 20px;
}

.playlist-selector select {
  padding: 12px 18px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  background-color: #4a4a4a;
  color: #fff;
  cursor: pointer;
  outline: none;
  box-shadow: none;
}
.playlist-selector select:hover {
  background-color: #777;
}

#spotifyPlaylist {
  margin-top: 50px;
  width: 100%;
  height: 700px;
}

.play-icon {
  font-size: 50px;
  color: #1DB954;
  margin-right: 20px;
  vertical-align: middle;
}

.btn {
  display: inline-block;
  padding: 12px 18px;
  font-size: 20px;
  font-weight: bold;
  text-transform: uppercase;
  color: #fff;
  background-color: #1DB954;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

.btn:hover {
  background-color: #169443;
  transform: translateY(-2px);
}

@media only screen and (max-width: 768px) {
  .container {
    padding: 40px 20px;
  }

  h2 {
    font-size: 30px;
  }

  .playlist-selector select {
    font-size: 16px;
  }

  #spotifyPlaylist {
    height: 300px;
  }

  .play-icon {
    font-size: 40px;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-play-circle play-icon"></i> Spotify Çalma Listesi</h2>
        <div class="playlist-selector">
            <p style="color: #696969; font-size: 20px;">Lütfen bir çalma listesi seçin:</p>
            <p style="color: #696666; font-size: 20px;">Made İn Ahmet Serçe</p>
            <select id="playlistSelect">
                <option value="4sdbV0uJfxZUk09OTd3avU?si=c2a73896e79a47a2">Çalma Listesi 1</option>
                <option value="4MqpoEfrgIcBCl2EYApuFL?si=15fcf4ecf0824fb5">Çalma Listesi 2</option>
                <option value="7MpXb0ziWFIU1khibSUC1Z?si=0ed81966daab4433">Çalma Listesi 3</option>
                
            </select>
        </div>
        <iframe
            id="spotifyPlaylist"
            title="Spotify Çalma Listesi"
            src=""
            frameborder="0"
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            loading="lazy"
        ></iframe>
    </div>

    <script>
        const playlistSelect = document.getElementById('playlistSelect');
        const spotifyPlaylist = document.getElementById('spotifyPlaylist');

        // Çalma listesi seçildiğinde iframe'in src'sini güncelle
        playlistSelect.addEventListener('change', () => {
            const selectedPlaylistId = playlistSelect.value;
            const embedUrl = `https://open.spotify.com/embed/playlist/${selectedPlaylistId}?utm_source=generator&theme=0`;
            spotifyPlaylist.src = embedUrl;
        });

        // Sayfa yüklendiğinde ilk çalma listesini yükle
        window.addEventListener('load', () => {
            const initialPlaylistId = playlistSelect.value;
            const initialEmbedUrl = `https://open.spotify.com/embed/playlist/${initialPlaylistId}?utm_source=generator&theme=0`;
            spotifyPlaylist.src = initialEmbedUrl;
        });
    </script>
</body>
</html>
