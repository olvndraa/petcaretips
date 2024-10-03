
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saran Perawatan Hewan Peliharaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-lilac {
      background-color: #8b7497;
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
      color: #6d4c7d; 
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

    .dropdown-column {
      margin-right: 2em;
    }

    .dropdown-column h4 {
      color: #917b91;
      margin-bottom: 0.5em;
    }

    .dropdown-column ul {
      list-style: none;
      padding: 0;
    }

    .dropdown-column ul li a {
      text-decoration: none;
      color: #000;
      display: block;
      margin-bottom: 0.5em;
    }

    .dropdown:hover .dropdown-menu {
      display: flex;
    }

    .btn {
      background-color: #917b91;
      color: white;
      padding: 0.5em 1em;
      text-align: center;
      display: block;
      text-decoration: none;
      border-radius: 5px;
    }
    .wave-container {
      position: relative;
      background-color: #6d4c7d;
      height: 300px;
      overflow: hidden;
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
  <div class="container content-section" style="margin-top: 10%;">
    <div class="row">
      <div class="col-md-5 image-wrapper" style="border-radius: 5%;">
        <img src="https://asset.kompas.com/crops/0AwjOq_golcbh4bSG5_t2uOS5Ks=/0x0:612x408/750x500/data/photo/2023/09/11/64fe7f09d0eeb.jpeg" alt="Gambar Anjing" width="100%"; height="90%" >
      </div>

      <div class="col-md-7">
        <h2 class="header" style="margin-top: 10%;">Tips Perawatan
          Hewan Peliharaan</h2>
        <p>
          Kami menyediakan semua informasi yang Anda butuhkan tentang hewan peliharaan.
          Mulai dari anak anjing, anak kucing, anak kelinci, anak hamster, hingga hewan peliharaan yang lebih tua, serta solusi masalah perilaku, makanan dan kesehatan. 
        </p>
      </div>
    </div>
  </div>
  <div class="container content-section">
    <div class="row">
      <div class="col-md-7">
        <h2 class="header" style="margin-top: 10%;">Perawatan Kucing</h2>
        <p>
          Dalam hal merawat kucing Anda, Anda perlu mendapatkan informasi dari ahlinya. 
          Untuk melihat apa yang dikatakan para ahli tentang nutrisi kucing, perilaku, 
          perkembangan, kesehatan, dan lainnya, jelajahi artikel kami di bawah ini.
        </p>
        <a href="/kucing" class="btn btn-outline-primary btn-lilac">Pelajari tips merawat kucing</a>
      </div>
      <div class="col-md-5 image-wrapper" style="margin-top: 3%;">
        <img src="https://asset.kompas.com/crops/Hv3Nrvok7Orgn34xizt68IE5mQE=/128x85:1151x768/750x500/data/photo/2021/09/24/614d804885393.jpg" alt="Gambar Responsive" width="100%"; height="90%">
      </div>
    </div>
  </div>
  <div class="container content-section" style="margin-top: 3%;">
    <div class="row">
      <div class="col-md-5 image-wrapper" style="border-radius: 5%;">
        <img src="https://makassar.terkini.id/wp-content/uploads/2022/04/terkiniid_o.jpeg" alt="Gambar Anjing" width="100%"; height="90%" >
      </div>

      <div class="col-md-7" style="margin-top: 4%;">
        <h2 class="header">Perawatan Anjing</h2>
        <p>
          Dalam hal merawat anjing Anda, Anda perlu mendapatkan informasi dari ahlinya. 
          Untuk melihat apa yang dikatakan para ahli tentang nutrisi anjing, perilaku, 
          perkembangan, kesehatan, dan lainnya, jelajahi artikel kami di bawah ini.
        </p>
        <a href="/anjing" class="btn btn-outline-primary btn-lilac">Pelajari tips merawat anjing</a>
      </div>
    </div>
  </div>
  <div class="container content-section">
    <div class="row">
      <div class="col-md-7">
        <h2 class="header" style="margin-top: 10%;">Perawatan Kelinci</h2>
        <p>
          Dalam hal merawat kelinci Anda, Anda perlu mendapatkan informasi dari ahlinya. 
          Untuk melihat apa yang dikatakan para ahli tentang nutrisi kelinci, perilaku, 
          perkembangan, kesehatan, dan lainnya, jelajahi artikel kami di bawah ini.
        </p>
        <a href="/kelinci" class="btn btn-outline-primary btn-lilac">Pelajari tips merawat kelinci</a>
      </div>
      <div class="col-md-5 image-wrapper" style="margin-top: 3%;">
        <img src="https://cdn0-production-images-kly.akamaized.net/G4aHigoqLmt2YGibsdOYZJNanQU=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3062948/original/096624100_1582864559-rabbit-2174679_1920.jpg" alt="Gambar Kucing" width="110%"; height="100%">
      </div>
    </div>
  </div>
  <div class="container content-section" style="margin-top: 3%;">
    <div class="row">
      <div class="col-md-5 image-wrapper" style="border-radius: 5%;">
        <img src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/678030_12-5-2021_19-3-50.jpeg" alt="Gambar Anjing" width="100%"; height="90%" >
      </div>

      <div class="col-md-7" style="margin-top: 3%;">
        <h2 class="header">Perawatan Hamster</h2>
        <p>
          Dalam hal merawat hamster Anda, Anda perlu mendapatkan informasi dari ahlinya. 
          Untuk melihat apa yang dikatakan para ahli tentang nutrisi hamster, perilaku, 
          perkembangan, kesehatan, dan lainnya, jelajahi artikel kami di bawah ini.
        </p>
        <a href="/hamster" class="btn btn-outline-primary btn-lilac">Pelajari tips merawat hamster</a>
      </div>
    </div>
  </div>

  <div class="container content-section">
    <div class="row">
      <div class="col-md-7">
        <h2 class="header" style="margin-top: 10%;">Perawatan Burung</h2>
        <p>
          Dalam hal merawat burung Anda, Anda perlu mendapatkan informasi dari ahlinya. 
          Untuk melihat apa yang dikatakan para ahli tentang nutrisi burung, perilaku, 
          perkembangan, kesehatan, dan lainnya, jelajahi artikel kami di bawah ini.
        </p>
        <a href="/burung" class="btn btn-outline-primary btn-lilac">Pelajari tips merawat burung</a>
      </div>
      <div class="col-md-5 image-wrapper" style="margin-top: 3%;">
        <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/08/18043109/X-Hal-yang-Perlu-Dipertimbangkan-Sebelum-Memelihara-Burung-Nuri_Halodoc.jpg" alt="Gambar Anjing" width="100%"; height="90%" >
      </div>
    </div>
  </div>
</div>
  <div class="wave-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#917b91" fill-opacity="1" d="M0,256L26.7,218.7C53.3,181,107,107,160,90.7C213.3,75,267,117,320,160C373.3,203,427,245,480,234.7C533.3,224,587,160,640,122.7C693.3,85,747,75,800,80C853.3,85,907,107,960,112C1013.3,117,1067,107,1120,85.3C1173.3,64,1227,32,1280,37.3C1333.3,43,1387,85,1413,106.7L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6d4c7d"  fill-opacity="1" d="M0,96L26.7,128C53.3,160,107,224,160,213.3C213.3,203,267,117,320,117.3C373.3,117,427,203,480,202.7C533.3,203,587,117,640,117.3C693.3,117,747,203,800,208C853.3,213,907,139,960,122.7C1013.3,107,1067,149,1120,181.3C1173.3,213,1227,235,1280,208C1333.3,181,1387,107,1413,69.3L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg> -->
  </div>
  <div class="container" style="margin-left: 13%">
    <div class="img1">
      <img src="https://i.pinimg.com/564x/06/08/1b/06081b35dc0fe41e6f8bbbeb3f2a751b.jpg" alt="Gambar Responsif" style="width: 150px; height: auto;  border-radius: 5%; margin-left: 80%; margin-top: -13%;" >
    </div>
    <div class="img2">
      <img src="https://i.pinimg.com/564x/ad/7a/ac/ad7aac4cb0bf1dc955c581c82d42a83c.jpg" alt="Gambar Responsif" style="height: auto; width: 150px; border-radius: 5%; margin-left: 65%; margin-top: -7%;">
    </div>
    <div class="img1">
      <img src="https://i.pinimg.com/564x/98/f6/ef/98f6efe91bdf2c8cc30b3eb480ffe6b3.jpg" alt="Gambar Responsif" style="width: 150px; height: auto;  border-radius: 5%; margin-left: 80%; margin-top: -8%;" >
    </div>
  </div>
  <div class="textt" style="color:  #6e546e; text-align: left; margin-left: 5%; margin-top: -300px">
      <h3 class="fw-bold" style="margin-top: -20%;">Sayangi Hewan Peliharaanmu, </h3>
      <h3 class="fw-bold">Berikan Perawatan Terbaik untuk Mereka!</h3>
      <h5>Hewan peliharaan bukan hanya teman setia, mereka adalah bagian dari keluarga kita.
      <br>Mereka membawa kebahagiaan, cinta tanpa syarat, dan keceriaan ke dalam hidup kita.
      <br>Oleh karena itu, penting bagi kita untuk memberikan perhatian dan perawatan yang
        <br> layak bagi mereka.</h5>
      <h3 class="fw-bold" style="margin-top: 3%;">Ayo, Mulai Merawat dan Mencintai Hewan Peliharaanmu Hari Ini!</h3>
  </div>

<footer class="bg-light text-white py-4" style="background-color:rgb(102, 81, 104) !important; margin-top: 10%;">
  <div class="container">
    <div class="row">
    <div class="text-center mt-3">
      <p>&copy; 2024 Petcare Tips. All Rights Reserved.</p>
    </div>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
