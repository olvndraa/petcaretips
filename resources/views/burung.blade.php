<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burung</title>
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
            <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -110%;" >Tips Merawat Burung</h3>
        </div>
    
        <div class="img">
                <img src="https://cdn.rri.co.id/berita/Singaraja/o/1717137492000-F9395082-D46C-4DCA-BACF-DDB7C2ABA5B7/ic1u7lyed5sdzvm.jpeg" style=" width: 90%; height: 20%; margin-left: 3%; margin-top: -4%;">
        </div>
    </div>
    <div class="container">
        <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -7%; margin-left: 27%;">Cara Merawat Burung dengan Baik</h3>
        <h6 style="margin-top: 10px;">Merawat burung peliharaan memerlukan perhatian khusus untuk memastikan mereka tetap sehat, bahagia, dan nyaman. Berikut adalah panduan lengkap tentang cara merawat burung peliharaan dengan baik: </h6>
        <h4 class="fw-bold" style="margin-top: 3%;">1. Memberi Makan yang Seimbang</h4>  
        <p>*Pelet Burung: Berikan pelet yang diformulasikan khusus untuk jenis burung Anda. Pelet ini mengandung nutrisi yang lengkap dan seimbang.
            <br>
            *Biji-Bijian: Banyak burung juga menyukai biji-bijian. Pastikan biji-bijian yang diberikan adalah variasi yang sehat dan tidak terlalu tinggi lemak.
            <br>
            *Sayuran dan Buah-Buahan: Tambahkan sayuran segar seperti wortel, brokoli, atau bayam serta buah-buahan seperti apel atau pisang. Pastikan makanan ini dicuci bersih dan dipotong kecil-kecil.
            <br>
            *Protein: Beberapa burung membutuhkan tambahan protein dari telur rebus, cacing, atau makanan khusus burung.</p>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam makanan burung :</h5>
        <div class="gallery-item">
            <img src="https://www.pethouse.co.id/cfind/source/thumb/images/produk/cover_w420_h420_20200227_juara%20seaweed.png" alt="Makanan Kucing 1" style="width: 20%; height: 20%; margin-left: 13%;">
        </div>
        <div class="gallery-item">
            <img src="https://www.pethouse.co.id/cfind/source/thumb/images/produk/cover_w420_h420_20200227_juaraminipelet.png" style="width: 20%; height: 20%; margin-left: 30%; margin-top: -22%;" alt="Makanan Kucing 2" >
        </div>
        <div class="gallery-item">
            <img src="https://flexypack.com/wp-content/uploads/2022/03/kemasan-pakan-burung-bentuk-standing-pouch.jpg" alt="Makanan Kucing 3" style="width: 20%; height: 20%; margin-left: 47%; margin-top: -25%;">
        </div>
        <div class="gallery-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-104524109/oem_oem_full01.jpg" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
        </div>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam snack burung :</h5>
        <div class="photo" style="margin-top: -3%;">
            <div class="gallery-item">
                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/29/296336e9-2a02-45a6-b87b-1599129c71a9.jpg" alt="Makanan Kucing 1" style="width: 17%; height: 17%; margin-left: 17%; margin-top: 5%;">
            </div>
            <div class="gallery-item">
                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/29/eae0f5cf-f8ca-4f15-856f-9ca066cfb7db.jpg" style="width: 15%; height: 15%; margin-left: 32%; margin-top: -19%;" alt="Makanan Kucing 2" >
            </div>
            <div class="gallery-item">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-61108607/oem_oem_full01.jpg" alt="Makanan Kucing 3" style="width: 20%; height: 10%; margin-left: 47%; margin-top: -22%; height: 20%; width: 20%;">
            </div>
            <div class="gallery-item">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/97/MTA-104528157/oem_oem_full01.jpg" alt="Makanan Kucing 4" style="width: 20%; height: 15%; margin-left: 65%; margin-top: -27%;">
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">2. Air Bersih</h4>
        <div class="text" style="margin-left: 4%;">
            <p>Pastikan burung selalu memiliki akses ke air bersih dan segar.
            Ganti air minum kucing setiap hari untuk menjaga kebersihannya.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">3. Perawatan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Vaksinasi dan Pencegahan</p>
                <p style="margin-top: -1%;">Diskusikan dengan dokter hewan mengenai vaksinasi yang diperlukan untuk burung Anda dan cara pencegahan penyakit.</p>
            <p class="fw-bold">2. Pemeriksaan Rutin</p>
                <p style="margin-top: -1%;">Bawa burung ke dokter hewan yang berpengalaman dalam merawat burung untuk pemeriksaan kesehatan secara rutin. Ini membantu mendeteksi masalah kesehatan sejak dini.</p>
            <p class="fw-bold">3. Perawatan Paruh dan Kuku</p>
                <p style="margin-top: -1%;">Pastikan paruh burung tidak terlalu panjang atau tajam. Jika perlu, konsultasikan dengan dokter hewan tentang perawatan paruh.
                    <br>
                    Pangkas kuku burung jika mereka terlalu panjang. Ini dapat dilakukan dengan hati-hati menggunakan alat pemangkas kuku yang sesuai.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">4. Perawatan Bulu</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Mandi</p>
                <p style="margin-top: -1%;">Beberapa burung memerlukan mandi secara teratur untuk menjaga kebersihan bulu mereka. Sediakan mangkuk mandi atau semprotkan air lembut di atas burung untuk membantu mereka mandi.
                    <br>
                    Beberapa burung juga menyukai mandi dengan menggunakan air bersih dari semprotan.</p>
            <p class="fw-bold">2. Menyisir bulu</p>
                <p style="margin-top: -1%;">Beberapa jenis burung memerlukan penyisiran bulu secara rutin untuk menghindari kusut dan mengurangi jumlah bulu yang rontok.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Tempat Tinggal dan Kebersihan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Kandang</p>
                <p style="margin-top: -1%;">Pilih kandang yang cukup besar dan sesuai dengan ukuran burung. Kandang harus memiliki cukup ruang untuk burung bergerak dan terbang.
                    <br>
                    Pastikan kandang memiliki tempat bertengger yang nyaman dan aman serta tempat makan dan minum yang mudah dijangkau.</p>
            <p class="fw-bold">2. Kebersihan</p>
                <p style="margin-top: -1%;">Bersihkan kandang secara rutin, termasuk mengganti alas, membersihkan tempat makan, dan menghapus kotoran. Ini membantu menjaga kebersihan dan mencegah penyakit.
                    <br>
                    Pastikan kandang ditempatkan di area yang bersih dan aman dari gangguan.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">7. Aktivitas dan Stimulasi</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Aktivitas</p>
                <p style="margin-top: -1%;">*Sediakan mainan yang aman dan menarik di dalam kandang untuk merangsang aktivitas fisik burung. Mainan bisa berupa ayunan, cermin, atau mainan kunyah.</p>
                <p style="margin-top: -1%;">*Jika memungkinkan, biarkan burung terbang di ruangan yang aman di luar kandang.</p>
            <p class="fw-bold">2. Stimulasi Mental</p>
                <p style="margin-top: -1%;">Berikan burung mainan dan aktivitas yang menantang secara mental, seperti puzzle makanan atau permainan interaktif.</p>

        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">8. Keamanan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Lingkungan Aman</p>
                <p style="margin-top: -1%;">* Pastikan lingkungan sekitar kandang burung aman dan bebas dari benda berbahaya, seperti racun atau kabel listrik.</p>
                <p style="margin-top: -1%;">*                     Hindari menempatkan kandang burung di tempat yang terpapar langsung sinar matahari atau di area yang terlalu dingin.</p>
            <p class="fw-bold">2. Identifikasi</p>
                <p style="margin-top: -1%;">Jika burung Anda sering keluar dari kandang, pertimbangkan untuk memberikan gelang identifikasi yang aman.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">9. Pemantauan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1.  Perubahan Kebiasaan</p>
                <p style="margin-top: -1%;">Pantau perubahan dalam kebiasaan makan, minum, atau perilaku burung. Jika burung menunjukkan gejala seperti penurunan nafsu makan, kesulitan bernafas, atau perubahan perilaku, segera konsultasikan dengan dokter hewan.</p>
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
