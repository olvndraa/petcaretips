<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Kucing</title>
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
  <div class="container my-4">
    <h2 class="text-orange mb-4" style="margin-top: 10%; color:#7c5092;">Artikel Burung</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="https://berita.99.co/wp-content/uploads/2020/10/jenis-makanan-burung.jpg" class="card-img-top" alt="Artikel 1">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title" >Tips Memilih Makanan Burung Sesuai Kebutuhan</h5></a>
            <p class="card-text">Untuk memberi makanan, sebaiknya sesuaikan kandungan pada makanan dengan kebutuhan kelinci kita, ya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://assets.petpintar.com/cache/760/450/article/156/1609311926-cara-memandikan-lovebird-banner.jpg" class="card-img-top" alt="Artikel 2">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Cara memandikan Burung dengan aman</h5></a> 
            <p class="card-text">Siapa nih yang kewalahan mandiin burung kesayangan?</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWLsXm0Fm1nTCG-M1cPHolOEwF_59TvqQekQ38z3iBhr9XBxkGnNg5AcEaitqjdCUAlsvh8aCLtJL2KMxc8CyYdf-JKesZJ6lD449hVibDs9wBiAYDa8NI-Cm2S9dusY4lBoQlLG1CY8M/s1600/Burung+Pelatuk.jpg" class="card-img-top" alt="Artikel 3">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Kenali Bahasa Tubuh Burung</h5></a> 
            <p class="card-text">Burung berkomunikasi dengan bahasa tubuh. Yuk kenali bahasa tubuhnya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://asset-2.tstatic.net/kaltim/foto/bank/images/Tribun-Medan-Jalak-Suren-dan-Murai-Batu.jpg" class="card-img-top" alt="Artikel 4">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Jenis jenis burung yang sering berkicau</h5></a>
            <p class="card-text">Burung apa saja yang sering berkicau? Yuk cari tau!!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-4" style="margin-top: 5%">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="https://berita.99.co/wp-content/uploads/2020/10/jenis-makanan-burung.jpg" class="card-img-top" alt="Artikel 1">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title" >Tips Memilih Makanan Burung Sesuai Kebutuhan</h5></a>
            <p class="card-text">Untuk memberi makanan, sebaiknya sesuaikan kandungan pada makanan dengan kebutuhan kelinci kita, ya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://assets.petpintar.com/cache/760/450/article/156/1609311926-cara-memandikan-lovebird-banner.jpg" class="card-img-top" alt="Artikel 2">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Cara memandikan Burung dengan aman</h5></a> 
            <p class="card-text">Siapa nih yang kewalahan mandiin burung kesayangan?</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWLsXm0Fm1nTCG-M1cPHolOEwF_59TvqQekQ38z3iBhr9XBxkGnNg5AcEaitqjdCUAlsvh8aCLtJL2KMxc8CyYdf-JKesZJ6lD449hVibDs9wBiAYDa8NI-Cm2S9dusY4lBoQlLG1CY8M/s1600/Burung+Pelatuk.jpg" class="card-img-top" alt="Artikel 3">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Kenali Bahasa Tubuh Burung</h5></a> 
            <p class="card-text">Burung berkomunikasi dengan bahasa tubuh. Yuk kenali bahasa tubuhnya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://asset-2.tstatic.net/kaltim/foto/bank/images/Tribun-Medan-Jalak-Suren-dan-Murai-Batu.jpg" class="card-img-top" alt="Artikel 4">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Jenis jenis burung yang sering berkicau</h5></a>
            <p class="card-text">Burung apa saja yang sering berkicau? Yuk cari tau!!</p>
          </div>
        </div>
      </div>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
