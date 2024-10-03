<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamster</title>
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
      <div class="container-fluid vh-100 d-flex justify-content-center align-items-center p-0" style="margin-top: 5%;">
        <div class="position-absolute text-center">
            <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -110%;">Tips Merawat Hamster</h3>
        </div>
    
        <!-- <div class="ratio ratio-4x3 w-50">
            <video autoplay muted loop class="w-100">
                <source src="https://marketplace.canva.com/EAE6P4ZCfl8/1/0/800w/canva-A5uP1M0YGp0.mp4" type="video/mp4">
            </video>
        </div> -->
    </div>
    <div class="container">
        <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/25114511/Apa-Jenis-Hamster-yang-Cocok-untuk-Dipelihara-Keluarga.jpg.webp" alt="" style="margin-top: -60%; margin-left: 16%;">
    </div>
    <div class="container">
        <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -10%; margin-left: 27%; text-align: center;">Cara Merawat Hamster dengan Baik</h3>
        <h6 style="margin-top: 10px;">Hamster adalah hewan peliharaan kecil yang lucu dan mudah dirawat, tetapi mereka memerlukan perhatian khusus untuk memastikan kesehatan dan kebahagiaan mereka. Berikut adalah panduan lengkap tentang cara merawat hamster dengan baik:</h6>
        <h4 class="fw-bold" style="margin-top: 3%;">1. Memberi Makan yang Seimbang</h4>  
        <p>Pelet Hamster: Berikan pelet hamster yang diformulasikan khusus untuk hamster. Pelet ini mengandung semua nutrisi yang dibutuhkan hamster.
            Biji-Bijian dan Kacang-Kacangan: Hamster juga dapat diberikan campuran biji-bijian dan kacang-kacangan sebagai camilan. Namun, berikan dalam jumlah kecil untuk menghindari obesitas.
            Sayuran dan Buah-Buahan: Tambahkan sayuran segar seperti wortel dan brokoli serta buah-buahan seperti apel dalam jumlah kecil. Hindari memberikan sayuran yang terlalu basah atau buah-buahan yang terlalu manis.
            </p>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam makanan hasmter :</h5>
        <div class="gallery-item">
            <img src="https://img.id.my-best.com/product_images/6a6af32ea9a3e5eeda64217eb6881995.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=7729b92fa3b0e12b10c3ab7908487d49" alt="Makanan Kucing 1" style="width: 20%; height: 20%; margin-left: 12%;">
        </div>
        <div class="gallery-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//94/MTA-4704834/hamsfood_makanan_hamster_hamsfood_1_kg_full02_fli17784.jpg" style="width: 20%; height: 20%; margin-left: 30%; margin-top: -22%;" alt="Makanan Kucing 2" >
        </div>
        <div class="gallery-item">
            <img src="data:image/jpeg;base64,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" alt="Makanan Kucing 3" style="width: 20%; height: 20%; margin-left: 47%; margin-top: -25%;">
        </div>
        <div class="gallery-item">
            <img src="https://img.id.my-best.com/contents/3a8945356d6cbc3298dce1a308d20792.jpeg?ixlib=rails-4.3.1&q=70&lossless=0&w=1200&h=900&fit=crop&s=58553ffac5c50f4adc0794e6776a4842" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
        </div>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam snack hasmter :</h5>
        <div class="photo" style="margin-top: -3%;">
            <div class="gallery-item">
                <img src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/9/5/9d96e033-ef61-43a6-9768-53ee250c2be9.jpg" alt="Makanan Kucing 1" style="width: 17%; height: 17%; margin-left: 13%; margin-top: 5%;">
            </div>
            <div class="gallery-item">
                <img src="https://img.id.my-best.com/product_images/06c40906e8dc4ce2621f949c465e680a.jpeg?ixlib=rails-4.3.1&q=70&lossless=0&w=240&h=240&fit=fill&fill=solid&fill-color=FFFFFF&s=401260c406333c260ead36370cc35251" style="width: 20%; height: 15%; margin-left: 32%; margin-top: -19%;" alt="Makanan Kucing 2" >
            </div>
            <div class="gallery-item">
                <img src="https://img.id.my-best.com/product_images/c56e14a083508d75786b4fc2f9b655e3.png?ixlib=rails-4.3.1&q=70&lossless=0&w=240&h=240&fit=fill&fill=solid&fill-color=FFFFFF&s=2b2489340205567798aca4d5fd114d1b" alt="Makanan Kucing 3" style=" margin-left: 53%; margin-top: -25%; height: 20%; width: 15%;">
            </div>
            <div class="gallery-item">
                <img src="https://img.id.my-best.com/product_images/3ba09e83ce740cf399c64620676b03b2.png?ixlib=rails-4.3.1&q=70&lossless=0&w=240&h=240&fit=fill&fill=solid&fill-color=FFFFFF&s=2596c3776699041b0466f545f2ac79ee" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 67%; margin-top: -27%;">
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">2. Air Bersih</h4>
        <div class="text" style="margin-left: 4%;">
            <p>Pastikan hamster selalu memiliki akses ke air bersih dan segar. Gunakan botol minum yang dirancang khusus untuk hamster dan ganti air setiap hari.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">3. Perawatan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Pencegahan Parasit</p>
                <p style="margin-top: -1%;">Periksa hamster secara berkala untuk tanda-tanda parasit seperti kutu atau tungau. Jika ditemukan, konsultasikan dengan dokter hewan untuk perawatan yang tepat.</p>
                    <p class="fw-bold">2. Pemeriksaan Rutin</p>
                <p style="margin-top: -1%;">Bawa hamster ke dokter hewan untuk pemeriksaan kesehatan secara rutin. Ini membantu mendeteksi masalah kesehatan sejak dini dan memastikan hamster dalam kondisi baik.</p>
            <p class="fw-bold">3. Perawatan gigi dan kuku</p>
                <p style="margin-top: -1%;">Hamster memiliki gigi yang terus tumbuh, jadi sediakan mainan kunyah untuk membantu menggosok gigi mereka. Pangkas kuku hamster jika mereka terlalu panjang.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">4. Perawatan Bulu</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Bulu</p>
                <p style="margin-top: -1%;">Hamster berbulu panjang memerlukan penyisiran rutin untuk mencegah kusut. Hamster berbulu pendek umumnya tidak memerlukan penyisiran.
                    Gunakan sikat lembut untuk menyisir bulu hamster.</p>
            <p class="fw-bold">2. Mandi</p>
                <p style="margin-top: -1%;">Hamster umumnya tidak memerlukan mandi. Jika perlu membersihkan, gunakan kain lembut atau sapu dengan tangan untuk membersihkan bulu mereka.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">5. Tempat Tinggal yang Aman dan Nyaman</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Kandang</p>
                <p style="margin-top: -1%;">Pilih kandang yang cukup besar dan aman untuk hamster. Kandang bisa terbuat dari kawat dengan dasar yang bisa dipindahkan atau terbuat dari bahan plastik.
                <br>
                Sediakan tempat tidur yang empuk dan aman, seperti serutan kayu atau bahan yang dapat menyerap kelembapan.</p>
            <p class="fw-bold">2. Kebersihan Lingkungan</p>
                <p style="margin-top: -1%;">Bersihkan kandang secara rutin. Ganti alas dan bersihkan area makan serta tempat tidur untuk mencegah bau dan menjaga kebersihan
                    <br>
                    Pastikan area sekitar kandang juga bersih dari makanan atau kotoran yang bisa menarik parasit.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Aktivitas Fisik dan Stimulasi</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Aktivitas fisik</p>
                <p style="margin-top: -1%;">Sediakan roda lari di dalam kandang untuk memungkinkan hamster bergerak dan berolahraga.
                    Sediakan area bermain yang aman di luar kandang untuk merangsang aktivitas fisik dan mental hamster.</p>
            <p class="fw-bold">2. Permainan dan Stimulasi Mental</p>
                <p style="margin-top: -1%;">Berikan mainan yang dapat merangsang mental hamster, seperti labirin atau mainan kunyah. Ini membantu mencegah kebosanan dan perilaku destruktif.</p>                </p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">7.  Keamanan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Lingkungan Aman</p>
                <p style="margin-top: -1%;">Pastikan kandang hamster ditempatkan di area yang aman dan terlindung dari suhu ekstrem dan gangguan. Jauhkan dari hewan peliharaan lain yang bisa menakut-nakuti hamster.</p>
            <p class="fw-bold">2. Identifikasi</p>
                <p style="margin-top: -1%;">
                    Jika hamster sering keluar dari kandangnya, pertimbangkan untuk memberikan label identifikasi kecil atau pastikan area bermain mereka aman dan tertutup dengan baik.</p>
                </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">8. Pemantauan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1.  Perubahan Kebiasaan</p>
                <p style="margin-top: -1%;"> Pantau perubahan dalam kebiasaan makan, minum, atau perilaku hamster. Jika hamster menunjukkan gejala seperti kehilangan nafsu makan, kesulitan bergerak, atau perubahan berat badan, segera konsultasikan dengan dokter hewan.</p>
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
