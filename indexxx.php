<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <p></p> <p></p>
   
<div class="bg-success p-2" style="--bs-bg-opacity: .5;">
<div class="d-flex justify-content-center"> <h1>Pencarian Film</h1></div></div>
<p></p>
<div class="d-flex justify-content-center">
  
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        
        <input type="submit" value="Cari" name="cari"></input>
    </form>
    </div>
    <?php
    
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
        
            echo "<h1>Hasil</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=be35c0b9&s="'.$judul.'"';


           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }
        ?>
    <header>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>HMM</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="spider-man.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Spider-Man: Homecoming (2017)</h5>
        <p class="card-text">Peter Parker diceritakan sebagai remaja yang memiliki semangat dalam membasmi kejahatan. Peter sangat antusias untuk menanti misi lain agar bisa kembali beraksi dengan kostum Spider-Man canggih pemberian Tony Stark.

Karena tidak ada misi baru dari Tony Stark, Peter memutuskan untuk membasmi penjahat-penjahat di sekitarnya untuk membuktikan bahwa dia mampu dan pantas jadi pahlawan super.

Film ini mempertemukan Spidey dengan Vulture alias Adrian Toomes yang beraksi dengan kostum bersayap canggih selayaknya manusia burung.
.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="ready player one.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Ready Player One (2018)</h5>
        <p class="card-text">Dimana alur cerita dimulai ketika pendiri OASIS meninggal dan mewariskan kepemilikan OASIS kepada orang pertama yang berhasil menyelesaikan teka-teki dengan mencari Easter egg didalamnya.

Dengan jalan cerita seru dan efek visual yang memanjakan mata, Ready Player One berhasil membangkitkan kembali jiwa anak muda di dalam diri kita..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="alita1.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Alita: Battle Angel (2019)</h5>
        <p class="card-text">Cerita dalam film ini berlatar pada abad ke 26 atau 300 tahun setelah keruntuhan dunia akibat perang besar.

Pada saat itu merupakan jaman kegelapan dengan teknologi yang jauh dari kata prestasi. Banyak sekali manusia sebagai pekerja, akan tetapi tidak bekerja untuk ras cyborg. Salah satu yang menonjol dalam film ini visual efeknya, dan adegan-adegan bertarung yang sangat apik.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pinterest.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Shazam! (2019)</h5>
        <p class="card-text">Diangkat dari salah satu komik DC terkenal, Shazam! mengisahkan seorang anak 14 tahun yatim piatu bernama Billy Batson yang nomaden. Sampai suatu hari, dirinya terbawa ke sebuah dunia antah-berantah dan bertemu dengan seorang penyihir yang dapat mengubah dirinya menjadi pahlawan super dengan mantra khusus “Shazam!”.

Kekuatan baru yang diperoleh Billy pun dimanfaatkan untuk menghentikan kejahatan Dr. Thaddeus Sivana. Namun seiring dengan kekuatan itu, berbagai masalah juga datang kepadanya.

Jika nama Shazam terdengar asing bagi kamu, tenang saja. Film ini sangat mudah untuk dicerna, dan dinikmati, terutama bagi pecinta DC Universe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="the daily.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Thor: Ragnarok (2017)</h5>
        <p class="card-text">Dalam film Thor ke-3 ini, sang pahlawan Asgard dikisahkan telah kehilangan senjata andalannya. Thor terperangkap di sebuah penjara dan harus berlomba dengan waktu untuk menghentikan ‘Ragnarok’ yang dapat menghancurkan Asgard dan kehidupan dunia.

Thor harus menghadapi musuh yang sangat kuat bernama Hela. Namun ia harus berhadapan terlebih dahulu dengan sahabatnya yang juga anggota Avengers, Hulk.

Thor: Ragnarok tampil lebih bewarna dari film-film sebelumnya. Cerita dan casting yang solid, ditambah komedi yang segar menjadikan kekuatan dan ciri khas film karya Taika Waititi ini.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="tomb rainder.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tomb Raider (2018)</h5>
        <p class="card-text">Tujuh tahun setellah peristiwa menghilangnya sang ayah, Lara Croft yang kini telah berusia 21 tahun menolak untuk menjalankan kerajaan bisnis keluarganya.

Lara lebih memilih untuk bekerja sebagai kurir di London dan mengambil kuliah di sana. Namun kemudian sebuah peristiwa membuatnya kembali tertarik untuk menyelidiki kasus menghilang ayahnya tersebut.

Hal ini membuatnya berpetualang dan melakukan perjalanan kesebuah situs kuno di pesisir Jepang. Secara tiba-tiba hal ini menjadi petualangan yang diluar dugaan Lara, ia harus mengandalkan kecerdasannya, kegigihan serta semangat yang pantang menyerah. Film ini menceritakan awal mula kenapa Lara disebut sebagai Tomb Raider.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


