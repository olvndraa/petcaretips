
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
            <h3 class="fw-bold" style="color: #6d4c7d">Ide  Nama Burung yang Bagus, Lucu, dan Unik.</h3>
        </div>
        <div class="img" style="height: 30%; margin-top: 5%;">
          <img src="https://cdn.pixabay.com/photo/2016/06/05/20/09/parrots-1438063_960_720.jpg" alt="" style="height: 30%; width: 70%; margin-left: 13%;" >
        </div>
        <h5 style="margin-top: 3%">Nama adalah gambaran diri penggunanya berlaku juga bagi hewan peliharaan. Untuk itu, memilih nama bagi hewan peliharaan tentu harus melakukan riset yang mendalam supaya cocok dengan kepribadian mereka. Nah, buat kamu yang saat ini sedang mencari nama anjing yang bagus, yuk lihat rekomendasinya pada artikel ini!
          Saat merawat burung, biasanya kamu akan mencari julukan untuk memberikan mereka sebuah identitas. </h5>
          <h5 style="margin-top: 2%">
          Tak sedikit orang yang menamakan mereka dengan mengambil inspirasi dari berbagai hal, misalnya sebutan tempat, artis, dan lainnya. 
          Dari mana pun ide nama itu diperoleh, yang terpenting adalah nama yang akan disematkan harus cocok dengan sifat dan karakter anjing peliharaan kamu. 
        </h5>
        <h5 style="margin-top: 1%">Nah, kali ini petcaretips telah menghimpun rekomendasi nama anjing yang bagus, lucu, dan unik.
        </h5>
    </div>
    <div class="nama" style="margin-left: 9%; margin-top 5%">
      <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Burung Betina: </h6>
      <p> 1. Luna - Berarti "bulan," cocok untuk burung yang aktif di malam hari.
        <br>
          2.Bella - Berarti "cantik," cocok untuk burung yang anggun.
          <br>
          3.Cleo - Berarti "kemuliaan," cocok untuk burung yang memiliki aura elegan
          <br>
          4. Daisy - Berarti "bunga aster," cocok untuk burung yang manis dan ceria.
          <br>
          5. Rosie - Berarti "bunga mawar," cocok untuk burung yang lembut.
          <br>
          6. Willow - Berarti "pohon willow," cocok untuk burung yang tenang dan anggun.
          <br>
          7. Poppy - Berarti "bunga poppy," cocok untuk burung yang ceria dan berwarna cerah
          <br>
          8. Ruby - Terinspirasi dari batu permata, cocok untuk burung dengan bulu merah terang.
          <br>
          9. Skye - Berarti "langit," cocok untuk burung yang suka terbang tinggi.
          <br>
          10. Peach - Terinspirasi dari buah persik, cocok untuk burung dengan warna bulu lembut.
          <br>
          11. Hazel - Berarti "pohon hazel," cocok untuk burung dengan warna bulu coklat muda.
          <br>
          12. Aiko: artinya adalah kekasih
          <br>
          13. Aimi: kecantikan
          <br>
          14. Airi: cinta melati
          <br>
          15. Olive - Berarti "pohon zaitun," cocok untuk burung yang tenang dan damai.
          <br>
          16. Penny - Nama klasik yang cocok untuk burung yang sederhana dan penuh kasih.
          <br>
          17. Snowy - Berarti "bersalju," cocok untuk burung berwarna putih atau abu-abu.
          <br>
          18. Trixie - Nama yang ceria, cocok untuk burung yang aktif dan suka bermain.
          <br>
          19. Honey - Berarti "madu," cocok untuk burung yang manis dan penuh kasih sayang
          <br>
          20. Zoe - Berarti "kehidupan," cocok untuk burung yang energik dan penuh semangat.
          <br>
          21. Fifi - Nama feminin yang cocok untuk burung yang anggun dan imut.
          <br>
          22. Ivy - Berarti "tanaman ivy," cocok untuk burung yang memiliki warna hijau atau coklat.
          <br>
          23. Violet - Berarti "ungu," cocok untuk burung dengan warna ungu atau biru muda
          <br>
          24. Ginger - Berarti "jahe," cocok untuk burung dengan bulu berwarna coklat kemerahan.
          <br>
          25. Bumble: baik hati, santai
       </p>
    </div>
    <div class="nama2">
      <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Burung Jantan: </h6>
        <p> 1. Skipper - Berarti "kapten," cocok untuk burung yang suka memimpin.
          <br>
            2. Phoenix - Berarti "burung mitos yang bangkit dari abu," cocok untuk burung yang kuat dan berani.
            <br>
            3. Zephyr - Berarti "angin sepoi-sepoi," cocok untuk burung yang terbang dengan lembut.
            <br>
            4. Echo - Berarti "pantulan suara," cocok untuk burung yang suka berkicau.
            <br>
            5. Apollo - Nama dewa matahari Yunani, cocok untuk burung yang bersinar cerah.
            <br>
            6. Jet - Terinspirasi dari kecepatan, cocok untuk burung yang terbang cepat.
            <br>
            7. Blaze - Berarti "api," cocok untuk burung yang energik dan cerah.
            <br>
            8. Finn - Berarti "putih," cocok untuk burung yang memiliki bulu terang.
            <br>
            9. Rio - Berarti "sungai," cocok untuk burung yang penuh kebebasan.
            <br>
            10. Chico - Berarti "anak laki-laki" dalam bahasa Spanyol, cocok untuk burung yang ceria.
            <br>
            11. Cosmo - Berarti "alam semesta," cocok untuk burung yang suka terbang tinggi.
            <br>
            12. Storm - Berarti "badai," cocok untuk burung yang energik.
            <br>
            13. Ace - Berarti "yang terbaik," cocok untuk burung yang cerdas dan cepat.
            <br>
            14. Hawk - Berarti "elang," cocok untuk burung yang kuat dan gesit.
            <br>
            15. Shadow - Berarti "bayangan," cocok untuk burung yang terbang dengan diam-diam..
            <br>
            16. Buddy - Berarti "teman," cocok untuk burung yang setia dan akrab.
            <br>
            17. Quill - Terinspirasi dari bulu, cocok untuk burung dengan bulu yang indah.
            <br>
            18. Sunny - Berarti "cerah," cocok untuk burung yang ceria dan bersuara riang.
            <br>
            19. Jasper - Nama permata, cocok untuk burung yang berwarna cemerlang.
            <br>
            20. Rex - Berarti "raja," cocok untuk burung yang anggun.
            <br>
            21. Hunter - Berarti "pemburu," cocok untuk burung yang lincah dan cepat.
            <br>
            22. Zorro - Berarti "rubah," cocok untuk burung yang cerdas dan gesit.
            <br>
            23. Falco - Berarti "elang," cocok untuk burung yang terbang tinggi.
            <br>
            24. Drake - Nama yang berarti "naga kecil," cocok untuk burung yang kuat.
            <br>
            25. Cobalt - Terinspirasi dari warna biru, cocok untuk burung yang memiliki warna bulu biru.
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