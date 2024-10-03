
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anjing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <style>
        .navbar-lilac {
          background-color: #917b91;
        }
        .dropdown:hover .dropdown-menu {
          display: block;
        }
        .dropdown-menu {
          width: 1000%; 
        }
        .dropdown-item {
          display: block;
        }
    
        .category-icon {
          font-size: 24px;
          margin-right: 10px;
        }
        .header {
          font-weight: bold;
          color: #917b91;
          padding-bottom: 10px;
          body {
          background-color: #f8f9fa;
        }
        .content-section {
          padding: 50px 0;
          color: #6c757d;
        }
        .content-section .header {
          color: #6d4c7d; /* Warna Lilac */
        }
        .content-section .btn-lilac {
          border-color: #6d4c7d;
          color: #6d4c7d;
        }
        .content-section .btn-lilac:hover {
          background-color: #6d4c7d;
          color: white;
        }
        .image-wrapper img {
          border-radius: 10px;
          width: 40%;
        }
        .dropdown-menu {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          background-color: #fff;
          border: 1px solid #ddd;
          padding: 1em;
          z-index: 999;
          width: 600px;
          display: flex;
          justify-content: space-between;
          text-decoration: none;
        }
    }
      </style>
    </head>
    <body>
      <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-lilac">
          <div class="container-fluid" >
            <a class="navbar-brand" href="#" style="color: white;">PetCare Tips</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"  style="margin-left: -5%;">
                  <a class="nav-link active" aria-current="page" href="/petcaretips" style="color: white;">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                    Kategori Hewan
                  </a>
                  <div class="dropdown-menu p-4" style="margin-left: -530%">
                    <div class="d-flex" style="margin-left: 7%;">
                      <div class="category-col">
                        <div class="header">
                          <span class="category-icon">🐕</span> Kategori Anjing
                        </div>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="/rasanjing">Daftar Ras Anjing</a></li>
                          <li class="text-danger">Artikel berdasarkan topik:</li>
                          <li><a class="dropdown-item" href="/namaanjing">Nama Anjing</a></li>
                          <li><a class="dropdown-item" href="/anjing">Tips merawat Anjing</a></li>
                          <li><a class="dropdown-item" href="/artikelanjing">Lihat semua artikel anjing</a></li>
                        </ul>
                      </div>
      
                      <div class="category-col">
                        <div class="header">
                          <span class="category-icon">🐱</span> Kategori Kucing
                        </div>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="/raskucing">Daftar Ras Kucing</a></li>
                          <li class="text-danger">Artikel berdasarkan topik:</li>
                          <li><a class="dropdown-item" href="/namakucing">Nama Kucing</a></li>
                          <li><a class="dropdown-item" href="/kucing">Tips Merawat Kucing</a></li>
                          <li><a class="dropdown-item" href="/artikelkucing2">Lihat semua artikel kucing</a></li>
                        </ul>
                      </div>
                      <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐇</span> Kategori Kelinci
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/raskelinci">Daftar Ras Kelinci</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="/namakelinci">Nama Kelinci</a></li>
                            <li><a class="dropdown-item" href="/kelinci">Tips Merawat Kelinci</a></li>
                            <li><a class="dropdown-item" href="/artikelkelinci">Lihat semua artikel kelinci</a></li>
                          </ul>
                        </div>
                        <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐹</span> Kategori Hamster
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/rashamster">Daftar Ras Hamster</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="/namahamster">Nama Hamster</a></li>
                            <li><a class="dropdown-item" href="/hamster">Tips Merawat Hamster</a></li>
                            <li><a class="dropdown-item" href="/artikelhamster">Lihat semua artikel hamster</a></li>
                          </ul>
                        </div>
                        <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐦</span> Kategori Burung
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/rasburung">Daftar Ras Burung</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="/namaburung">Nama burung</a></li>
                            <li><a class="dropdown-item" href="/burung">Tips Merawat Burung</a></li>
                            <li><a class="dropdown-item" href="/artikelburung">Lihat semua artikel burung</a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about" style="color: white;">Tentang Kami</a>
                </li>
                <li class="nav-item ms-3">
                  <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search" name="query">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="container" style="margin-top: 5%; color: #6d4c7d;">
        <div class="text-center">
            <h3 class="fw-bold" style="color: #6d4c7d">Ide  Nama Hamster yang Bagus, Lucu, dan Unik.</h3>
        </div>
        <div class="img" style="height: 30%; margin-top: 5%;">
          <img src="https://lapauseinfo.fr/wp-content/uploads/2024/01/combien-coute-un-hamster-a-l26230393Bachat-et-par-mois-3F-1.jpg" alt="" style="height: 30%; width: 70%; margin-left: 13%;" >
        </div>
        <h5 style="margin-top: 3%">Nama adalah gambaran diri penggunanya berlaku juga bagi hewan peliharaan. Untuk itu, memilih nama bagi hewan peliharaan tentu harus melakukan riset yang mendalam supaya cocok dengan kepribadian mereka. Nah, buat kamu yang saat ini sedang mencari nama hamster yang bagus, yuk lihat rekomendasinya pada artikel ini!
          Saat merawat hamster, biasanya kamu akan mencari julukan untuk memberikan mereka sebuah identitas. </h5>
          <h5 style="margin-top: 2%">
          Tak sedikit orang yang menamakan mereka dengan mengambil inspirasi dari berbagai hal, misalnya sebutan tempat, artis, dan lainnya. 
          Dari mana pun ide nama itu diperoleh, yang terpenting adalah nama yang akan disematkan harus cocok dengan sifat dan karakter hamster peliharaan kamu. 
        </h5>
        <h5 style="margin-top: 1%">Nah, kali ini petcaretips telah menghimpun rekomendasi nama hamster yang bagus, lucu, dan unik.
        </h5>
    </div>
    <div class="nama" style="margin-left: 9%; margin-top 5%">
      <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Hamster Betina: </h6>
      <p> 1. Daisy - Berarti "bunga aster," cocok untuk hamster yang ceria dan manis.
        <br>
          2. Bella - Berarti "cantik," cocok untuk hamster yang anggun
          <br>
          3. Luna - Berarti "bulan," cocok untuk hamster yang aktif di malam hari.
          <br>
          4. Nala - Berarti "ratu," cocok untuk hamster yang memiliki sikap anggun dan regal.
          <br>
          5. Poppy - Berarti "bunga poppy," cocok untuk hamster yang ceria dan energik.
          <br>
          6. Momo - Nama imut yang cocok untuk hamster kecil dan menggemaskan.
          <br>
          7. Lulu - Nama pendek dan manis, cocok untuk hamster yang mungil.
          <br>
          8. Rosie - Berarti "bunga mawar," cocok untuk hamster yang manis dan penuh kasih sayang.
          <br>
          9. Mimi - Nama yang lembut, cocok untuk hamster yang ramah dan penyayang.
          <br>
          10. Peanut - Nama kacang yang cocok untuk hamster yang kecil dan lucu.
          <br>
          11. Hazel - Berarti "pohon hazel," cocok untuk hamster yang berwarna coklat muda.
          <br>
          12. Tilly - Nama pendek yang ceria, cocok untuk hamster yang aktif.
          <br>
          13. Willow - Berarti "pohon willow," cocok untuk hamster yang tenang dan anggun.
          <br>
          14. Ruby - Berarti "permata merah," cocok untuk hamster yang berharga dan cantik.
          <br>
          15. Zoe - Berarti "kehidupan," cocok untuk hamster yang energik.
          <br>
          16. Skye - Berarti "langit," cocok untuk hamster yang lembut dan tenang.
          <br>
          17. Olive - Berarti "pohon zaitun," cocok untuk hamster yang tenang dan damai.
          <br>
          18. Ginger - Berarti "jahe," cocok untuk hamster berwarna coklat kemerahan.
          <br>
          19. Coco - Nama manis yang cocok untuk hamster dengan warna bulu coklat muda.
          <br>
          20. Honey - Berarti "madu," cocok untuk hamster yang manis dan penuh kasih.
          <br>
          21. Penny - Nama sederhana dan klasik, cocok untuk hamster yang mungil.
          <br>
          22. Pebbles - Berarti "kerikil kecil," cocok untuk hamster yang kecil dan lucu.
          <br>
          23. Snowy - Berarti "bersalju," cocok untuk hamster berwarna putih.
          <br>
          24. Cookie - Nama yang manis dan lezat, cocok untuk hamster yang kecil dan lucu.
          <br>
          25. Fifi - Nama feminin yang cocok untuk hamster yang anggun dan imut.
       </p>
    </div>
    <div class="nama2">
      <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Hamster Jantan: </h6>
        <p> 1. Max - Berarti "yang terbesar," cocok untuk hamster yang kuat atau dominan.
          <br>
            2. Rocky - Terinspirasi dari batu, cocok untuk hamster yang tangguh dan gigih.
            <br>
            3. Milo - Berarti "penuh kasih sayang," untuk hamster yang lembut dan penyayang.
            <br>
            4. Oscar - Berarti "pejuang yang kuat," cocok untuk hamster yang aktif.
            <br>
            5. Bubbles - Nama yang berarti "gelembung," untuk hamster yang riang dan energik.
            <br>
            6. Gizmo - Nama yang terdengar canggih, cocok untuk hamster yang pintar dan suka menjelajah.
            <br>
            7. Chester - Berarti "kubu pertahanan," cocok untuk hamster yang protektif.
            <br>
            8. Finn - Berarti "putih," cocok untuk hamster berwarna terang.
            <br>
            9. Rusty - Terinspirasi dari warna coklat kemerahan atau karat.
            <br>
            10. Bruno - Berarti "coklat," cocok untuk hamster dengan bulu coklat.
            <br>
            11. Toby - Nama lembut yang cocok untuk hamster yang ramah.
            <br>
            12. Bandit - Berarti "pencuri," cocok untuk hamster yang suka mencuri makanan atau bersembunyi.
            <br>
            13. Peanut - Nama yang terinspirasi dari kacang, cocok untuk hamster yang kecil dan lucu.
            <br>
            14. Benny - Berarti "anak yang diberkati," cocok untuk hamster yang disayangi.
            <br>
            15. Ace - Berarti "yang terbaik," cocok untuk hamster yang cerdas dan cepat.
            <br>
            16. Leo - Berarti "singa kecil," cocok untuk hamster yang pemberani.
            <br>
            17. Dash - Berarti "berlari cepat," cocok untuk hamster yang lincah.
            <br>
            18. Ziggy - Nama yang penuh energi, cocok untuk hamster yang selalu bergerak.
            <br>
            19. Coco - Nama manis, cocok untuk hamster dengan warna bulu coklat muda.
            <br>
            20. Squeak - Berarti "bunyi decit," cocok untuk hamster yang sering membuat suara.
            <br>
            21. Spike - Berarti "runcing," cocok untuk hamster yang punya kepribadian tajam.
            <br>
            22. Tank - Nama yang berarti "besar dan kuat," cocok untuk hamster yang terlihat kokoh.
            <br>
            23. Whiskey - Nama yang terinspirasi dari minuman, cocok untuk hamster berwarna keemasan.
            <br>
            24. Scout - Berarti "penjelajah," cocok untuk hamster yang suka menjelajah.
            <br>
            25. Shadow - Berarti "bayangan," cocok untuk hamster yang bergerak dengan diam-diam.
         </p>
      </div>
    </div>
    <footer class="bg-light text-white py-4" style="background-color:rgb(102, 81, 104) !important; margin-top: 10%;">
      <div class="container">
        <div class="row">
        <div class="text-center mt-3">
          <p>&copy; 2024 Petcare Tips. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>