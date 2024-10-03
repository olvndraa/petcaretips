<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Anjing</title>
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
            <h3 class="fw-bold" style="color: #6d4c7d">Ide  Nama Anjing yang Bagus, Lucu, dan Unik.</h3>
        </div>
        <div class="img" style="height: 30%; margin-top: 5%;">
          <img src="https://berita.99.co/wp-content/uploads/2023/03/nama-anjing-yang-bagus-2.jpg" alt="" style="height: 30%; width: 70%; margin-left: 13%;" >
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
      <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Anjing Betina: </h6>
      <p> 1. Audrey: Anjing yang cantik
        <br>
          2. Belle: Cantik dalam bahasa Italia
          <br>
          3. Candy: Nama sempurna untuk anak anjing manis dan nakal
          <br>
          4. Alexa: pembela manusia
          <br>
          5. Adelina: anjing yang mulia
          <br>
          6. Adela: lucu dan menyenangkan
          <br>
          7. Chelsea: anjing yang mewah
          <br>
          8. Daisy: Berasal dari nama bunga yang cocok untuk anjing mungil menggemaskan
          <br>
          9. Adrina: ceria, suka bermain-main, dan aktif
          <br>
          10. Brownie: anjing berbulu cokelat kemerahan.
          <br>
          11. Dolly: Anjing periang yang selalu gembira.
          <br>
          12. Aiko: artinya adalah kekasih
          <br>
          13. Aimi: kecantikan
          <br>
          14. Airi: cinta melati
          <br>
          15. Peach: Anjing yang cantik dan menawan.
          <br>
          16. Latte: anjing dengan bulu berwarna putih.
          <br>
          17. Poppy: anjing yang nakal
          <br>
          18. Amber: permata merah
          <br>
          19. Vanilla: anjing yang cantik
          <br>
          20. Blondie: Untuk anjing betina kecil dengan bulu berwarna emas.
          <br>
          21. Ammery: anjing yang besar
          <br>
          22. Lola: anjing betina bertubuh tinggi
          <br>
          23. Bella: anjing yang suka malam hari
          <br>
          24. Berry: anjing yang peduli, manis, murung, dan sombong
          <br>
          25. Bumble: baik hati, santai
       </p>
    </div>
    <div class="nama2">
      <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Anjing Jantan: </h6>
        <p> 1. Ale: Anjing nakal.
          <br>
            2. Blu: Anjing bermata biru nan indah
            <br>
            3. Chester: Anjing cerdas.
            <br>
            4. Dean: Anjing muda yang kalem.
            <br>
            5. Jackie: Anjing yang aktif.
            <br>
            6. Jimmy: Anjing yang cocok untuk pemenang.
            <br>
            7. Joe: Anjing yang menggemaskan dan pemalu.
            <br>
            8. Mario: Anjing muda dari Italia.
            <br>
            9. Milo: Anjing yang selalu aktif.
            <br>
            10. Chris: Anjing menawan
            <br>
            11. Dolly: Anjing periang yang selalu gembira.
            <br>
            12. Woody: Anjing yang luar biasa.
            <br>
            13. Coco: Anjing berbulu cokelat.
            <br>
            14. Shadow: Anjing berbulu hitam.
            <br>
            15. Derby: Anjing atletis.
            <br>
            16. Frankie: Anjing setia.
            <br>
            17. Charlie: Untuk anjing yang bisa menjadi teman menyenangkan
            <br>
            18. Foxy: Anjing berbulu kemerahan.
            <br>
            19. Toffee: Cocok untuk anjing kecil yang selalu aktif dan berbulu cokelat.
            <br>
            20. Bean: Nama yang kerap diberikan untuk anjing menggemaskan dan lincah.
            <br>
            21. Oreo: Nama yang sering digunakan untuk anjing yang ramah pada siapa pun
            <br>
            22. Lucky: Nama yang paling umum, menandakan kesehatan dan keberuntungan dalam hidup Anda.
            <br>
            23. Diamond: Nama yang sempurna untuk anjing kecil Anda yang akan membuat hidup Anda penuh cinta.
            <br>
            24. Bonbon: Nama yang menggemaskan untuk anjing kecil yang berharga
            <br>
            25. Hunter: Untuk anjing yang selalu merencanakan sesuatu
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