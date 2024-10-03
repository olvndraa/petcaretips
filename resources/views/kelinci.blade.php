<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelinci</title>
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
            <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -110%;" >Tips Merawat Kelinci</h3>
        </div>
    
        <div class="img">
                <img src="https://asset.kompas.com/crops/NLWjVDejksnADFEqKYshuqOyi7I=/0x0:1000x667/750x500/data/photo/2023/01/21/63cb51180cb07.jpg" style=" width: 90%; height: 20%; margin-left: 3%; margin-top: -4%;">
        </div>
    </div>
    <div class="container">
        <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -7%; margin-left: 27%;">Cara Merawat Kelinci dengan Baik</h3>
        <h6 style="margin-top: 10px;">Merawat kelinci memerlukan perhatian khusus karena mereka adalah hewan yang sensitif dan memiliki kebutuhan khusus. Berikut adalah panduan lengkap tentang cara merawat kelinci dengan baik: </h6>
        <h4 class="fw-bold" style="margin-top: 3%;">1. Memberi Makan yang Seimbang</h4>  
        <p>*Rumput Kering dan Hay: Berikan hay berkualitas tinggi sebagai makanan utama kelinci. Hay membantu menjaga kesehatan pencernaan dan mencegah masalah gigi.
            <br>
            *Sayuran Segar: Tambahkan sayuran segar seperti wortel, brokoli, atau bayam dalam jumlah kecil setiap hari. Hindari memberikan sayuran yang berdaun gelap terlalu banyak, seperti selada Romaine.
            <br>
            *Pelet Kelinci: Berikan pelet kelinci yang diformulasikan khusus untuk kelinci, tetapi hanya dalam jumlah terbatas untuk menghindari obesitas.
            <br>
            *Buah-Buahan: Berikan buah-buahan seperti apel atau pisang sebagai camilan sesekali. Hindari buah-buahan yang tinggi gula atau yang dapat menyebabkan masalah pencernaan.</p>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam makanan kelinci :</h5>
        <div class="gallery-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//938/vitakraft_menu-vital-rabbit-makanan-kelinci--3-kg-_full02.jpg" alt="Makanan Kucing 1" style="width: 20%; height: 20%; margin-left: 15%;">
        </div>
        <div class="gallery-item">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/3/21/4dbf4f8c-007e-48d7-aa00-40b018a70435.jpg" style="width: 20%; height: 20%; margin-left: 30%; margin-top: -22%;" alt="Makanan Kucing 2" >
        </div>
        <div class="gallery-item">
            <img src="https://res.cloudinary.com/ruparupa-com/image/upload/w_400,h_400,f_auto,q_auto/v1476952705/278434_1.jpg" alt="Makanan Kucing 3" style="width: 20%; height: 20%; margin-left: 47%; margin-top: -25%;">
        </div>
        <div class="gallery-item">
            <img src="https://balifoodstore.com/10-large_default/wortel-500gr.jpg" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
        </div>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam snack kelinci :</h5>
        <div class="photo" style="margin-top: -3%;">
            <div class="gallery-item">
                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/5/20/252e352d-8996-4d2a-84ca-f4463c8e8172.jpg" alt="Makanan Kucing 1" style="width: 17%; height: 17%; margin-left: 17%; margin-top: 5%;">
            </div>
            <div class="gallery-item">
                <img src="https://petshopindonesia.com/wp-content/uploads/2022/12/l200051-smart-heart-rabbit-food-1kg-makanan-kelinci-4-1.jpg" style="width: 25%; height: 20%; margin-left: 30%; margin-top: -19%;" alt="Makanan Kucing 2" >
            </div>
            <div class="gallery-item">
                <img src="https://petshopindonesia.com/wp-content/uploads/2022/12/l200051-smart-heart-rabbit-food-1kg-makanan-kelinci-3-1.jpg" alt="Makanan Kucing 3" style="width: 18%; height: 18%; margin-left: 47%; margin-top: -25%;>
            </div>
            <div class="gallery-item">
                <img src="https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2024/5/25/ad648c26-d0f0-4989-97e8-4e7d13a630c2.jpg" alt="Makanan Kucing 4" style="width: 18%; height: 18%; margin-left: 65%; margin-top: -27%;">
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">2. Air Bersih</h4>
        <div class="text" style="margin-left: 4%;">
            <p>Pastikan kucing selalu memiliki akses ke air bersih dan segar.
            Ganti air minum kucing setiap hari untuk menjaga kebersihannya.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">3. Perawatan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Vaksinasi dan Pencegahan</p>
                <p style="margin-top: -1%;">Kelinci mungkin memerlukan vaksinasi untuk mencegah penyakit tertentu. Diskusikan dengan dokter hewan mengenai vaksinasi yang diperlukan.</p>
            <p class="fw-bold">2. Pemeriksaan Rutin</p>
                <p style="margin-top: -1%;">Bawa kelinci ke dokter hewan untuk pemeriksaan kesehatan secara rutin. Ini penting untuk memastikan kelinci dalam keadaan sehat dan mendeteksi masalah kesehatan sejak dini.</p>
            <p class="fw-bold">3. Perawatan Gigi</p>
                <p style="margin-top: -1%;">Gigi kelinci terus tumbuh, jadi berikan mereka kayu atau mainan yang aman untuk menghindari masalah gigi. Jika Anda mencurigai masalah gigi, segera konsultasikan dengan dokter hewan.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">4. Perawatan Bulu</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Bulu</p>
                <p style="margin-top: -1%;">Kelinci dengan bulu panjang memerlukan penyisiran rutin untuk mencegah kusut dan mengurangi jumlah bulu yang rontok.
                <br>
                Kelinci berbulu pendek juga perlu disisir untuk menjaga kebersihan kulit dan bulunya.</p>
            <p class="fw-bold">2. Mandi</p>
                <p style="margin-top: -1%;">Kelinci umumnya tidak memerlukan mandi. Jika perlu, bersihkan dengan lembut menggunakan kain basah. Hindari merendam kelinci dalam air.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Tempat Tinggal dan Kebersihan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Kandang</p>
                <p style="margin-top: -1%;">Sediakan kandang yang cukup besar dan nyaman untuk kelinci. Kandang harus cukup luas untuk memungkinkan kelinci bergerak dengan bebas.
                    <br>
                    Gunakan alas kandang yang aman dan mudah dibersihkan, seperti serutan kayu atau kertas daur ulang.</p>
            <p class="fw-bold">2. Tempat Tidur</p>
                <p style="margin-top: -1%;">Bersihkan kandang secara rutin, ganti alas dan bersihkan area makan serta tempat tidur untuk mencegah bau dan menjaga kebersihan.</p>
                <p>Pastikan kandang berada di area yang aman dan terlindungi dari cuaca ekstrem.p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">7. Aktivitas dan Stimulasi</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Aktivitas</p>
                <p style="margin-top: -1%;">* Kelinci memerlukan ruang untuk bergerak dan berlari. Sediakan area aman di luar kandang untuk mereka bermain setiap hari.</p>
                <p style="margin-top: -1%;">*Gunakan mainan yang aman, seperti tiang garukan atau mainan dari bahan alami untuk merangsang aktivitas fisik dan mental</p>
            <p class="fw-bold">2. Sosialisasi</p>
                <p style="margin-top: -1%;">Luangkan waktu untuk berinteraksi dengan kelinci Anda setiap hari. Berbicara dengan lembut dan memberikan perhatian akan membantu kelinci merasa nyaman dan bahagia.
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">8. Keamanan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Lingkungan Aman</p>
                <p style="margin-top: -1%;">* Pastikan lingkungan sekitar kandang kelinci aman dan bebas dari benda-benda berbahaya, seperti kabel listrik atau racun.</p>
                <p style="margin-top: -1%;">* Jaga agar kelinci tidak mengakses area yang tidak aman, seperti tanaman beracun.</p>
            <p class="fw-bold">2. Identifikasi</p>
                <p style="margin-top: -1%;">Pertimbangkan untuk memberikan kalung identifikasi dengan informasi kontak jika kelinci Anda sering keluar dari kandang.
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">9. Pemantauan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1.  Perubahan Kebiasaan</p>
                <p style="margin-top: -1%;">* Pantau perubahan dalam kebiasaan makan, minum, atau aktivitas kelinci. Jika kelinci menunjukkan tanda-tanda seperti kehilangan nafsu makan, diare, atau kesulitan bergerak, segera konsultasikan dengan dokter hewan</p>
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
