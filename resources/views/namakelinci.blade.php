
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
          <img src="https://ecocampus.unesa.ac.id/storage/foto_hewan/bac3969b-4887-4913-9e2a-dbb73f3126a5.jpg" alt="" style="height: 30%; width: 70%; margin-left: 13%;" >
        </div>
        <h5 style="margin-top: 3%">Nama adalah gambaran diri penggunanya berlaku juga bagi hewan peliharaan. Untuk itu, memilih nama bagi hewan peliharaan tentu harus melakukan riset yang mendalam supaya cocok dengan kepribadian mereka. Nah, buat kamu yang saat ini sedang mencari nama anjing yang bagus, yuk lihat rekomendasinya pada artikel ini!
          Saat merawat anjing, biasanya kamu akan mencari julukan untuk memberikan mereka sebuah identitas. </h5>
          <h5 style="margin-top: 2%">
          Tak sedikit orang yang menamakan mereka dengan mengambil inspirasi dari berbagai hal, misalnya sebutan tempat, artis, dan lainnya. 
          Dari mana pun ide nama itu diperoleh, yang terpenting adalah nama yang akan disematkan harus cocok dengan sifat dan karakter anjing peliharaan kamu. 
        </h5>
        <h5 style="margin-top: 1%">Nah, kali ini petcaretips telah menghimpun rekomendasi nama anjing yang bagus, lucu, dan unik.
        </h5>
    </div>
    <div class="nama" style="margin-left: 9%; margin-top 5%">
      <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Hamster Betina: </h6>
      <p> 1. Luna : Berarti 'bulan,' cocok untuk kelinci yang memiliki bulu lembut seperti malam.
        <br>
          2. Daisy : Berarti 'bunga aster,' cocok untuk kelinci yang manis dan ceria.
          <br>
          3. Bella : Berarti 'cantik,' cocok untuk kelinci yang anggun.
          <br>
          4. Lily : Berarti 'bunga lili,' cocok untuk kelinci yang lembut.
          <br>
          5. Rosie : Berarti 'bunga mawar,' cocok untuk kelinci yang manis.
          <br>
          6. Willow : Berarti 'pohon willow,' untuk kelinci yang anggun dan tenang.
          <br>
          7. Molly : Nama yang ceria dan cocok untuk kelinci yang ramah.
          <br>
          8. Zoe : Berarti 'kehidupan,' cocok untuk kelinci yang energik.
          <br>
          9. Olive : Berarti 'pohon zaitun,' cocok untuk kelinci yang tenang dan bijaksana.
          <br>
          10. Ruby : Terinspirasi dari batu permata, cocok untuk kelinci yang berkilau.
          <br>
          11. Hazel : Berarti 'pohon hazel,' untuk kelinci yang memiliki warna coklat hangat.
          <br>
          12. Hazel : Berarti 'pohon hazel,' untuk kelinci yang memiliki warna coklat hangat.
          <br>
          13. Coco : Nama imut untuk kelinci yang kecil dan manis.
          <br>
          14. Fifi : Nama feminin yang cocok untuk kelinci yang anggun.
          <br>
          15. Nala : Berarti 'ratu,' untuk kelinci yang memiliki aura kerajaan.
          <br>
          16. Penny : Nama klasik yang cocok untuk kelinci yang sederhana.
          <br>
          17. PopSnowy : Untuk kelinci yang berwarna putih seperti salju.
          <br>
          18. Honey : Berarti 'madu,' cocok untuk kelinci yang manis.
          <br>
          19. Lulu : Nama yang imut untuk kelinci yang kecil dan energik.
          <br>
          20. Peach : Terinspirasi dari buah persik, cocok untuk kelinci yang berwarna lembut.
          <br>
          21. Poppy : Berarti 'bunga poppy,' cocok untuk kelinci yang ceria.
          <br>
          22. Mimi : Nama yang manis untuk kelinci kecil.
          <br>
          23. Skye : Berarti 'langit,' cocok untuk kelinci yang memiliki warna lembut.
          <br>
          24. Fiona : Berarti 'putih,' cocok untuk kelinci berwarna terang.
          <br>
          25. Buttercup : Nama bunga yang manis untuk kelinci yang ceria dan bahagia.
       </p>
    </div>
    <div class="nama2">
      <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Hamster Jantan: </h6>
        <p> 1. Leo : Singa kecil, cocok untuk kelinci yang kuat dan berani.
          <br>
            2. Max : Artinya 'yang terbesar,' bagus untuk kelinci yang tampak besar atau memiliki kepribadian besar.
            <br>
            3. Charlie : Berarti 'bebas,' sempurna untuk kelinci yang suka berlari-lari.
            <br>
            4. Milo : Berarti 'penuh kasih,' cocok untuk kelinci yang lembut dan penyayang.
            <br>
            5. Rocky : Terinspirasi dari batu, untuk kelinci yang tangguh.
            <br>
            6. Benny : Berarti 'anak yang diberkati,' cocok untuk kelinci yang sangat disayangi.
            <br>
            7. Ollie : Nama modern yang ceria, cocok untuk kelinci yang aktif.
            <br>
            8.Finn : Berarti 'putih,' cocok untuk kelinci berwarna terang.
            <br>
            9. Oscar : Berarti 'pejuang yang kuat,' untuk kelinci yang bersemangat.
            <br>
            10. Buster : Nama yang berarti 'penghancur,' cocok untuk kelinci yang suka menggigiti barang.
            <br>
            11. Gizmo : Nama yang terdengar canggih untuk kelinci yang pintar.
            <br>
            12. Rusty : Terinspirasi dari warna coklat karat, cocok untuk kelinci berwarna merah atau coklat.
            <br>
            13. Ziggy : Berarti 'kemenangan,' cocok untuk kelinci yang lincah.
            <br>
            14. Dash : Berarti 'berlari cepat,' cocok untuk kelinci yang suka berlari.
            <br>
            15. Chester : Berarti 'kubu pertahanan,' untuk kelinci yang protektif.
            <br>
            16. Scout : Berarti 'penjelajah,' untuk kelinci yang suka menjelajah.
            <br>
            17. Shadow : Cocok untuk kelinci yang suka bergerak diam-diam.
            <br>
            18. Whiskey : Nama yang hangat dan klasik, cocok untuk kelinci yang memiliki warna bulu keemasan.
            <br>
            19. Toffee: Cocok untuk kelinci kecil yang selalu aktif dan berbulu cokelat.
            <br>
            20. Bean: Nama yang kerap diberikan untuk kelinci menggemaskan dan lincah.
            <br>
            21. Oreo: Nama yang sering digunakan untuk kelinci yang ramah pada siapa pun
            <br>
            22. Lucky: Nama yang paling umum, menandakan kesehatan dan keberuntungan dalam hidup Anda.
            <br>
            23. Tank : Untuk kelinci yang kuat dan kokoh
            <br>
            24. Smokey : Terinspirasi dari warna abu-abu, cocok untuk kelinci berwarna abu-abu atau hitam.
            <br>
            25. Duke : Nama kerajaan, cocok untuk kelinci yang anggun.
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