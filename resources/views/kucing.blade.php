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
      <div class="container-fluid vh-100 d-flex justify-content-center align-items-center p-0" style="margin-top: 5%;">
        <div class="position-absolute text-center">
            <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -100%;">Tips Merawat Kucing</h3>
        </div>
    
        <div class="ratio ratio-4x3 w-50">
            <video autoplay muted loop class="w-100">
                <source src="https://marketplace.canva.com/EAGGg03XMbk/1/0/800w/canva-co5e6V6ddVQ.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container">
        <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -7%; margin-left: 27%;">Cara Merawat Kucing dengan Baik</h3>
        <h6 style="margin-top: 10px;">Merawat kucing memerlukan perhatian dan pemahaman tentang kebutuhan spesifik mereka. Berikut adalah panduan lengkap tentang cara merawat kucing dengan baik: </h6>
        <h4 class="fw-bold" style="margin-top: 3%;">1. Memberi Makan yang Seimbang</h4>  
        <p>Pilih makanan kucing yang berkualitas tinggi dan sesuai dengan usia, berat badan, serta kondisi kesehatan kucing.
            Berikan makanan kucing yang mengandung protein, lemak, vitamin, dan mineral yang dibutuhkan.
            Hindari memberikan makanan manusia atau makanan yang tidak sesuai dengan kebutuhan nutrisi kucing.</p>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam makanan kucing :</h5>
        <div class="gallery-item">
            <img src="https://cdn.onemars.net/sites/whiskas_id_xGoUJ_mwh5/image/mockup_wks_pouch_ad_tuna_new-look_-80g_f_1705068714309_1705677823811_1709124238936.png" alt="Makanan Kucing 1" style="width: 20%; height: 20%; margin-left: 15%;">
        </div>
        <div class="gallery-item">
            <img src="https://cdn.onemars.net/sites/whiskas_id_xGoUJ_mwh5/image/mockup_whiskas-tasty-mix-1-years-tuna-kanikama-carrot-in-gravy_f_1705608433388_1709112738521.png" style="width: 20%; height: 20%; margin-left: 30%; margin-top: -22%;" alt="Makanan Kucing 2" >
        </div>
        <div class="gallery-item">
            <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul2-lgdfdmw0tbpvc9" alt="Makanan Kucing 3" style="width: 20%; height: 20%; margin-left: 47%; margin-top: -25%;">
        </div>
        <div class="gallery-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWWidsS4BR9jg9EmMM7TJFTY7TnmIwMFg2qPorww9ocxbhUno3FRk9ujjHAB3Ws1Y2PL0&usqp=CAU" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
        </div>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam snack kucing :</h5>
        <div class="photo" style="margin-top: -3%;">
            <div class="gallery-item">
                <img src="https://cdn1.productnation.co/stg/sites/5/Vitakraft-Cat-Sticks-with-Salmon-Trout-300x300.png" alt="Makanan Kucing 1" style="width: 17%; height: 17%; margin-left: 17%; margin-top: 5%;">
            </div>
            <div class="gallery-item">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//102/MTA-53964912/me-o_meo-creamy-treats-4x15gr-snack-kucing-meo-me-o-treat-makanan-kucing_full01.jpg" style="width: 20%; height: 20%; margin-left: 32%; margin-top: -19%;" alt="Makanan Kucing 2" >
            </div>
            <div class="gallery-item">
                <img src="https://www.purina.co.id/sites/default/files/2021-12/FR_Friskies%20PM_3Pack_Lineup.png" alt="Makanan Kucing 3" style="width: 30%; height: 30%; margin-left: 47%; margin-top: -25%; height: 20%; width: 20%;">
            </div>
            <div class="gallery-item">
                <img src="https://img.id.my-best.com/product_images/3533739707a17aa937be62ef91f45219.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=95139bb4556108c1024b00f72cc2c5f3" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
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
            <p class="fw-bold">1. Vaksinasi
                <p style="margin-top: -1%;">Berikan vaksinasi sesuai jadwal yang dianjurkan oleh dokter hewan untuk melindungi kucing dari penyakit menular.</p>
            <p class="fw-bold">2. Pemeriksaan Rutin</p>
                <p style="margin-top: -1%;">Bawa kucing ke dokter hewan untuk pemeriksaan kesehatan secara rutin, termasuk pembersihan gigi jika diperlukan.</p>
            <p class="fw-bold">3. Pengendalian Parasit</p>
                <p style="margin-top: -1%;">Gunakan obat cacing dan obat anti-kutu yang direkomendasikan oleh dokter hewan untuk mengendalikan parasit.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">4. Perawatan Kucing</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Bulu</p>
                <p style="margin-top: -1%;">Sikat bulu kucing secara rutin untuk mengurangi kusut dan menghilangkan bulu yang rontok.
                Frekuensi penyikatan bergantung pada jenis bulu kucing.</p>
            <p class="fw-bold">2. Kuku</p>
                <p style="margin-top: -1%;">Pangkas kuku kucing secara teratur agar tidak terlalu panjang dan menghindari kuku yang tumbuh ke dalam.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Tempat Tinggal dan Kebersihan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Kotak Pasir</p>
                <p style="margin-top: -1%;">Sediakan kotak pasir yang bersih dan letakkan di tempat yang mudah dijangkau oleh kucing.
                    Bersihkan kotak pasir setiap hari dan ganti pasirnya secara berkala.</p>
            <p class="fw-bold">2. Tempat Tidur</p>
                <p style="margin-top: -1%;">Berikan tempat tidur yang nyaman dan bersih untuk kucing.
                Pastikan tempat tidur kucing berada di tempat yang aman dan tenang.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Aktivitas dan Stimulasi</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Permainan</p>
                <p style="margin-top: -1%;">* Berikan mainan yang dapat merangsang aktivitas fisik dan mental kucing, seperti mainan interaktif atau tiang garukan.</p>
                <p style="margin-top: -1%;">* Luangkan waktu untuk bermain dan berinteraksi dengan kucing setiap hari.</p>
            <p class="fw-bold">2. Tempat Tidur</p>
                <p style="margin-top: -1%;">* Berikan tempat tidur yang nyaman dan bersih untuk kucing.
                <p style="margin-top: -1%;">* Pastikan tempat tidur kucing berada di tempat yang aman dan tenang.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">7. Keamanan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Lingkungan</p>
                <p style="margin-top: -1%;">* Pastikan lingkungan rumah aman dari benda-benda berbahaya seperti kabel listrik atau tanaman beracun.</p>
                <p style="margin-top: -1%;">* Jaga agar kucing tidak mengakses area berbahaya.</p>
            <p class="fw-bold">2. Identifikasi</p>
                <p style="margin-top: -1%;">Pertimbangkan untuk memberikan microchip atau kalung identifikasi kepada kucing, terutama jika mereka sering berada di luar rumah.
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">8. Pemantauan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1.  Perubahan Kebiasaan</p>
                <p style="margin-top: -1%;">* Pantau perubahan dalam kebiasaan makan, minum, dan perilaku kucing.</p>
                <p style="margin-top: -1%;">* Segera konsultasikan dengan dokter hewan jika Anda melihat gejala yang tidak biasa seperti muntah, diare, atau kesulitan bernafas.</p>
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
