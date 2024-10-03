<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing</title>
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
   
        body {
            font-family: Arial, sans-serif;
        }
        .headerr {
            background-color: #9c6a95;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .content {
            margin: 20px;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .content img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #917b91; /* Warna lilac */
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
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

    <div class="headerr" style="margin-left: 0%; margin-top: 7%; text-align: center;">
        <h1>Tentang PetcareTips</h1>
        <p>Menghubungkan cinta dan perhatian untuk hewan peliharaan Anda</p>
    </div>

    
  <div class="container">
    <div class="content">
        <h2>Selamat Datang di PetcareTips</h2>
        <p>
            PetcareTips adalah panduan lengkap untuk merawat hewan peliharaan kesayangan Anda.
            Baik Anda memelihara anjing, kucing, kelinci, burung, atau hamster, kami memberikan saran ahli
            untuk menjaga kebahagiaan dan kesehatan mereka.
        </p>
        <p>
            Di situs kami, Anda akan menemukan berbagai tips, artikel, dan sumber daya tentang 
            pemberian makan, perawatan, serta memahami kebutuhan hewan peliharaan Anda. Tujuan kami
            adalah membantu Anda menjadi pemilik hewan peliharaan yang terbaik!
        </p>
    </div>
</div>
    <!-- Konten -->
    <div class="container">
        <div class="content">
            <h2 style="margin-top: -3%">Kenapa Memilih PetcareTips?</h2>
            <p>
                PetcareTips hadir untuk membantu Anda dalam merawat hewan peliharaan dengan sepenuh hati. 
                Kami memahami bahwa setiap hewan peliharaan unik dan memiliki kebutuhan yang berbeda-beda. 
                Oleh karena itu, kami menyediakan berbagai informasi mulai dari tips perawatan harian, 
                pola makan yang sehat, hingga panduan kesehatan yang komprehensif.
            </p>
            <img src="https://media.istockphoto.com/id/1445196818/id/foto/sekelompok-hewan-peliharaan-lucu-dengan-latar-belakang-putih-desain-spanduk.jpg?s=612x612&w=0&k=20&c=lpMghTHnvkbJQ-3oiHv8etgHHnNe7piGDh_uDmzziNE=" alt="Hewan Peliharaan Bahagia">
            <p>
                Apakah Anda memelihara anjing yang energik, kucing yang manja, atau hamster yang menggemaskan, 
                kami memberikan panduan yang komprehensif. Kami menghadirkan solusi yang mudah dipahami dan dapat 
                langsung diterapkan dalam kehidupan sehari-hari.
            </p>
            <h2>PetcareTips Membantu Anda Setiap Langkah</h2>
            <p>
                Kami menyadari bahwa setiap hewan memiliki karakteristik dan kebutuhan yang berbeda. Itulah sebabnya 
                PetcareTips menawarkan solusi yang disesuaikan untuk setiap jenis hewan peliharaan. Anda akan menemukan:
            </p>
            <ul>
                <li><strong>Perawatan Harian:</strong> Rekomendasi terbaik untuk menjaga kesehatan, kebersihan, dan kenyamanan hewan peliharaan Anda.</li>
                <li><strong>Pemilihan Makanan:</strong> Tips memilih makanan yang sesuai dengan kebutuhan gizi hewan peliharaan Anda.</li>
                <li><strong>Kesehatan dan Kebugaran:</strong> Artikel tentang kesehatan fisik dan mental hewan peliharaan, termasuk vaksinasi, perawatan medis, dan tips menjaga kebugaran.</li>
                <li><strong>Perilaku Hewan:</strong> Informasi tentang cara memahami perilaku hewan peliharaan dan memberikan pelatihan yang tepat.</li>
            </ul>
            <h2>Kami Hadir Untuk Semua Hewan Peliharaan</h2>
            <p>
                Tidak peduli apakah Anda baru pertama kali memiliki hewan peliharaan atau sudah berpengalaman selama bertahun-tahun, 
                PetcareTips hadir untuk mendampingi Anda. Dari bayi hewan yang baru lahir hingga hewan senior, kami menyediakan panduan 
                yang lengkap di setiap tahap kehidupan mereka.
            </p>
            <p>
                Dengan tim ahli dan pecinta hewan yang berpengalaman, kami selalu memperbarui informasi berdasarkan penelitian terbaru. 
                Kami di sini untuk memastikan bahwa Anda memiliki akses ke pengetahuan yang dibutuhkan untuk memberikan yang terbaik 
                bagi teman setia Anda.
            </p>
        </div>
    </div>
    <footer class="bg-light text-white py-4" style="background-color:rgb(102, 81, 104) !important; margin-top: 0%;">
        <div class="container" >
          <div class="row">
          <div class="text-center mt-3">
            <p>&copy; 2024 Petcare Tips. All Rights Reserved.</p>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
