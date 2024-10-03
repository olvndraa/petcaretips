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
            <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -110%;">Tips Merawat Anjing</h3>
        </div>
    
        <!-- <div class="ratio ratio-4x3 w-50">
            <video autoplay muted loop class="w-100">
                <source src="https://marketplace.canva.com/EAE6P4ZCfl8/1/0/800w/canva-A5uP1M0YGp0.mp4" type="video/mp4">
            </video>
        </div> -->
    </div>
    <div class="container">
        <img src="https://i.pinimg.com/736x/e2/d8/40/e2d840540d2b9d29f878d1b7cc049352.jpg" alt="" style="margin-top: -60%; margin-left: 16%;">
    </div>
    <div class="container">
        <h3 class="fw-bold" style="color: #6d4c7d; margin-top: -7%; margin-left: 27%;">Cara Merawat Anjing dengan Baik</h3>
        <h6 style="margin-top: 10px;">Merawat anjing tidak hanya sekadar memberi makan, tetapi juga memastikan anjing tetap sehat, bahagia, dan terawat. Berikut adalah panduan cara merawat anjing dengan baik: </h6>
        <h4 class="fw-bold" style="margin-top: 3%;">1. Memberi Makan yang Seimbang</h4>  
        <p>Pilih makanan anjing yang sesuai dengan usia, ukuran, dan kebutuhan kesehatan anjing. Makanan khusus anjing akan memberikan nutrisi yang seimbang.
            Untuk anjing dewasa, pilih makanan yang tinggi protein dan rendah karbohidrat. Untuk anak anjing, pilih makanan yang diformulasikan untuk mendukung pertumbuhan mereka.
            Hindari memberikan makanan manusia karena beberapa makanan bisa berbahaya bagi anjing, seperti coklat, bawang, dan anggur.
            </p>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam makanan anjing :</h5>
        <div class="gallery-item">
            <img src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2018/05/1423015565957.jpg" alt="Makanan Kucing 1" style="width: 20%; height: 20%; margin-left: 15%;">
        </div>
        <div class="gallery-item">
            <img src="https://cdn1.productnation.co/stg/sites/5/5e98f8a1eaa87.jpeg" style="width: 20%; height: 20%; margin-left: 30%; margin-top: -22%;" alt="Makanan Kucing 2" >
        </div>
        <div class="gallery-item">
            <img src="https://cdn1.productnation.co/stg/sites/5/5e98f56047c70.jpeg" alt="Makanan Kucing 3" style="width: 20%; height: 20%; margin-left: 47%; margin-top: -25%;">
        </div>
        <div class="gallery-item">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//102/MTA-2828388/bolt-dog_bolt-dog-food-repack-makanan-anjing--1-kg-_full03.jpg" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
        </div>
    </div>
    <div class="gallery">
        <h5 style="margin-left: 40%;">Macam-macam snack anjing :</h5>
        <div class="photo" style="margin-top: -3%;">
            <div class="gallery-item">
                <img src="https://www.pedigree.id/sites/g/files/fnmzdf2951/files/migrate-product-files/images/jlz9sfzarxjitabb1kcq.png" alt="Makanan Kucing 1" style="width: 17%; height: 17%; margin-left: 17%; margin-top: 5%;">
            </div>
            <div class="gallery-item">
                <img src="https://www.sikumis.com/media/frontend/products/Jerhigh-Blueberry-70gr.jpg" style="width: 20%; height: 20%; margin-left: 32%; margin-top: -19%;" alt="Makanan Kucing 2" >
            </div>
            <div class="gallery-item">
                <img src="https://media.os.fressnapf.com/products-v2/0/8/1/9/08190afce9e8889837e974133f1e8034f0620169_1696295__4_.jpg" alt="Makanan Kucing 3" style=" margin-left: 50%; margin-top: -25%; height: 20%; width: 15%;">
            </div>
            <div class="gallery-item">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/MTA-13598045/jerhigh_snack_anjing_jerhigh_milky_sticks_100g_full01_qnb99lbg.jpg" alt="Makanan Kucing 4" style="width: 20%; height: 20%; margin-left: 65%; margin-top: -27%;">
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">2. Air Bersih</h4>
        <div class="text" style="margin-left: 4%;">
            <p>Pastikan kucing selalu memiliki akses ke air bersih dan segar.
                Ganti air minum secara rutin, terutama di cuaca panas untuk menghindari dehidrasi.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">3. Perawatan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Vaksinasi
                <p style="margin-top: -1%;">Vaksinasi wajib untuk menjaga anjing dari penyakit serius seperti rabies, parvovirus, dan distemper. Konsultasikan dengan dokter hewan mengenai jadwal vaksinasi yang tepat untuk anjing Anda.</p>
            <p class="fw-bold">2. Pemeriksaan Rutin</p>
                <p style="margin-top: -1%;">Bawa anjing ke dokter hewan untuk pemeriksaan rutin. Ini penting untuk memastikan anjing dalam keadaan sehat dan mendeteksi penyakit sejak dini. Lakukan pemeriksaan gigi secara rutin untuk mencegah masalah kesehatan mulut.
                </p>
            <p class="fw-bold">3. Pengendalian Parasit</p>
                <p style="margin-top: -1%;">Gunakan obat cacing, kutu, dan caplak sesuai petunjuk dokter hewan.
                    Jaga kebersihan lingkungan anjing untuk mengurangi risiko parasit.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">4. Perawatan Harian</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Mandi dan Kebersihan</p>
                <p style="margin-top: -1%;">Mandikan anjing Anda secara rutin, biasanya satu kali dalam satu atau dua minggu, tergantung pada jenis bulu dan aktivitasnya.
                    Gunakan sampo khusus anjing agar kulit mereka tidak iritasi.
                    Bersihkan telinga dan potong kuku secara berkala.</p>
            <p class="fw-bold">2. Bulu</p>
                <p style="margin-top: -1%;">Sisir bulu anjing Anda secara rutin, terutama untuk anjing berbulu panjang yang cenderung mudah kusut.
                    Anjing berbulu pendek juga perlu disisir untuk menghilangkan bulu yang rontok dan menjaga kebersihan kulitnya.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">5. Tempat Tinggal yang Aman dan Nyaman</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Tempat Tidur</p>
                <p style="margin-top: -1%;">Sediakan tempat tidur yang nyaman dan sesuai dengan ukuran anjing. Tempat tidur yang empuk membantu menjaga kesehatan sendi, terutama untuk anjing yang lebih tua.</p>
            <p class="fw-bold">2. Kebersihan Lingkungan</p>
                <p style="margin-top: -1%;">Pastikan lingkungan tempat tinggal anjing bersih, baik di dalam maupun di luar rumah. Bersihkan tempat tidur dan area bermainnya secara rutin.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">6. Aktivitas Fisik dan Mental</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Olahraga</p>
                <p style="margin-top: -1%;">Anjing membutuhkan olahraga harian untuk menjaga kesehatan fisik dan mental. Jenis dan durasi aktivitas fisik bisa disesuaikan dengan jenis anjing, seperti berjalan, berlari, atau bermain lempar tangkap bola.</p>
            <p class="fw-bold">2. Permainan dan Stimulasi Mental</p>
                <p style="margin-top: -1%;">* Berikan mainan interaktif seperti puzzle atau bola agar anjing tetap terstimulasi secara mental.</p>
                <p style="margin-top: -1%;">* Anjing yang bosan bisa menjadi destruktif, sehingga bermain secara rutin membantu mereka merasa lebih bahagia dan seimbang.
                </p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">7.  Pelatihan dan Disiplin</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Pelatihan Dasaran</p>
                <p style="margin-top: -1%;">Ajarkan perintah dasar seperti "duduk," "datang," dan "tinggal" sejak dini. Ini membantu menjaga keamanan dan perilaku anjing di sekitar keluarga dan masyarakat.</p>
            <p class="fw-bold">2. Sosialisasi</p>
                <p style="margin-top: -1%;">
                    Anjing perlu sosialisasi dengan manusia dan anjing lain sejak usia muda. Sosialisasi yang baik membantu anjing menjadi lebih percaya diri dan tenang dalam berbagai situasi.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">8.  Keamanan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1. Lingkungan Aman</p>
                <p style="margin-top: -1%;">Pastikan rumah Anda aman bagi anjing, dengan tidak ada benda berbahaya seperti kabel listrik terbuka atau bahan kimia yang mudah dijangkau anjing.p>
            <p class="fw-bold">2. Identifikasi</p>
                <p style="margin-top: -1%;">
                    Pertimbangkan untuk memberikan kalung identifikasi atau microchip untuk anjing Anda, terutama jika anjing sering keluar rumah. Ini memudahkan pencarian jika anjing tersesat.</p>
        </div>
    </div>
    <div class="container">
        <h4 class="fw-bold">9. Pemantauan Kesehatan</h4>
        <div class="text" style="margin-left: 4%;">
            <p class="fw-bold">1.  Perubahan Kebiasaan</p>
                <p style="margin-top: -1%;">Pantau perubahan pada kebiasaan makan, minum, atau aktivitas anjing. Jika anjing menunjukkan tanda-tanda seperti kelelahan, muntah, diare, atau nafsu makan yang menurun, segera konsultasikan dengan dokter hewan.</p>
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

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

