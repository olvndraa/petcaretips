<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Kucing</title>
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
            <h3 class="fw-bold" style="color: #6d4c7d">Ide Nama Kucing Lucu dan Kekinian untuk Anabul Tercinta</h3>
        </div>
        <div class="img" style="height: 30%; margin-top: 5%;" >
            <img src="https://akcdn.detik.net.id/community/media/visual/2023/05/13/kucing-kalian-gemesin-kayak-deretan-foto-ini-nggak-7_43.jpeg?w=700&q=90" alt="" style="margin-left: 18%; height: 30%" height="30%">
        </div>
        <h5 style="margin-top: 3%">Kucing merupakan hewan peliharaan yang cukup digemari, baik anak-anak hingga orang dewasa. Tak jarang, hewan ini diberikan nama-nama lucu oleh para pemiliknya.
            Kucing sendiri kerap disebut "anabul" yang merupakan singkatan dari "anak bulu". Nama ini kerap disematkan pada kucing karena bulunya yang menggemaskan.
        </h5>    
        <h5 style="margin-top: 2%">Tak jarang pula para pemilik hewan berbulu ini bingung dalam menentukan nama bagi peliharaannya tersebut. Nah buat teman-teman, berikut ini petcaretips telah merangkum berbagai ide nama kucing yang lucu dan kekinian untuk anabul tercinta. Simak yuk!</h5>
    </div>
    <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Kucing Betina: </h6>
        <p>
            1. Luna - Bulan, cocok untuk kucing yang aktif di malam hari.
            <br>
            2. Bella - Cantik dalam bahasa Italia.
            <br>
            3. Misty - Berkabut, cocok untuk kucing dengan bulu abu-abu.
            <br>
            4. Cleo - Singkatan dari Cleopatra, berarti kemuliaan.
            <br>
            5. Willow - Pohon willow, melambangkan kelembutan.
            <br>
            6. Pearl - Mutiara, untuk kucing yang elegan.
            <br>
            7. Ivy - Tanaman merambat, simbol kekuatan.
            <br>
            8. Nova - Bintang baru yang bersinar terang.
            <br>
            9. Hazel - Warna mata yang hangat, cocok untuk kucing dengan mata coklat atau hijau.
            <br>
            10. Zara - Bunga mekar, dalam bahasa Arab.
            <br>
            11. Saffron - Nama rempah yang mahal, menunjukkan keindahan.
            <br>
            12. Daisy - Bunga daisy yang cerah.
            <br>
            13. Poppy - Bunga poppy merah, simbol ketenangan.
            <br>
            14. Lily - Bunga lily, simbol kemurnian.
            <br>
            15. Olive - Pohon zaitun, melambangkan kedamaian.
            <br>
            16. Aurora - Cahaya fajar yang indah.
            <br>
            17. Skye - Langit, cocok untuk kucing yang suka melompat.
            <br>
            18. Blossom - Bunga mekar, untuk kucing yang ceria.
            <br>
            19. Amber - Batu permata berwarna oranye.
            <br>
            20. Sapphire - Permata biru yang indah.
            <br>
            21. Flora - Dewi bunga dalam mitologi Romawi.
            <br>
            22. Maple - Pohon maple, cocok untuk kucing yang lembut.
            <br>
            23. Ruby - Permata merah, simbol keberanian.
            <br>
            24. Serena - Tenang dan damai.
            <br>
            25. Violet - Bunga violet, simbol kesederhanaan.
        </p>     
    </div>
    <div class="nama2">
      <div class="nama" style="margin-left: 9%; margin-top 5%">
        <h6 class="fw-bold" style="margin-top: 2%; color: #6d4c7d; ">Nama Kucing Jantan: </h6>
        <p>
          1. Leo - Singa, untuk kucing yang berani.
          <br>
          2. Milo - Berarti 'tenang' dan 'baik hati'.
          <br>
          3. Theo - Singkatan dari Theodore, berarti hadiah dari Tuhan.
          <br>
          4. Max - Singkatan dari Maximilian, berarti yang terbesar.
          <br>
          5. Finn - Berarti 'putih' atau 'adil'.
          <br>
          6. Oliver - Nama klasik, cocok untuk kucing yang bijaksana.
          <br>
          7. Simba - Diambil dari Lion King, berarti singa dalam bahasa Swahili.
          <br>
          8. Felix - Berarti 'beruntung' dalam bahasa Latin.
          <br>
          9. Jasper - Nama permata yang berharga.
          <br>
          10. Rocky - Berarti tangguh dan kuat.
          <br>
          11. Oscar - Nama yang elegan dan klasik.
          <br>
          12 Zeus - Raja para dewa dalam mitologi Yunani.
          <br>
          13. Archie - Singkatan dari Archibald, berarti berani.
          <br>
          14. Ace - Nama yang melambangkan kesuksesan.
          <br>
          15. Apollo - Dewa matahari dalam mitologi Yunani.
          <br>
          16. Ozzy - Nama yang keren dan modern.
          <br>
          17. Casper - Nama yang ramah dan manis.
          <br>
          18. Loki - Dewa kenakalan, cocok untuk kucing yang jahil.
          <br>
          19. Ziggy - Nama yang funky dan ceria.
          <br>
          20. Phoenix  -Burung legendaris yang bangkit dari abu.
          <br>
          21. Shadow - Bayangan, cocok untuk kucing yang misterius.
          <br>
          22. Rusty - Nama yang cocok untuk kucing berbulu merah.
          <br>
          23. Hunter - Pemburu, cocok untuk kucing yang aktif.
          <br>
          24. Niko - Berarti 'kemenangan' dalam bahasa Yunani.
          <br>
          25. Tigger - Diambil dari karakter Winnie the Pooh yang energik.
        </p>

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
