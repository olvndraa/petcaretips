
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
                  <div class="dropdown-menu p-4" style="margin-left: -430%;">
                    <div class="d-flex" style="margin-left: 7%;">
                      <div class="category-col">
                        <div class="header">
                          <span class="category-icon">🐕</span> Kategori Anjing
                        </div>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="/rasanjing">Daftar Ras Anjing</a></li>
                          <li class="text-danger">Artikel berdasarkan topik:</li>
                          <li><a class="dropdown-item" href="/namaanjing">Nama Anjing</a></li>
                          <li><a class="dropdown-item" href="#">Jenis Anjing</a></li>
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
                          <li><a class="dropdown-item" href="#">Jenis Kucing</a></li>
                          <li><a class="dropdown-item" href="/artikelkucing">Lihat semua artikel kucing</a></li>
                        </ul>
                      </div>
                      <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐇</span> Kategori Kelinci
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/raskelinci">Daftar Ras Kelinci</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="#">Nama Kelinci</a></li>
                            <li><a class="dropdown-item" href="#">Jenis Kelinci</a></li>
                            <li><a class="dropdown-item" href="#">Lihat semua artikel kelinci</a></li>
                          </ul>
                        </div>
                        <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐹</span> Kategori Hamster
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/rashamster">Daftar Ras Hamster</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="#">Nama Hamster</a></li>
                            <li><a class="dropdown-item" href="#">Jenis Hamster</a></li>
                            <li><a class="dropdown-item" href="#">Lihat semua artikel hamster</a></li>
                          </ul>
                        </div>
                        <div class="category-col">
                          <div class="header">
                            <span class="category-icon">🐦</span> Kategori Burung
                          </div>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="/rasburung">Daftar Ras Burung</a></li>
                            <li class="text-danger">Artikel berdasarkan topik:</li>
                            <li><a class="dropdown-item" href="#">Nama burung</a></li>
                            <li><a class="dropdown-item" href="#">Jenis Burung</a></li>
                            <li><a class="dropdown-item" href="#">Lihat semua artikel burung</a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                    Tips Perawatan
                  </a>
                  <div class="dropdown-menu" style="margin-left: -790px;">
                    <div class="dropdown-column" style="margin-left: 150px;">
                      <h4>Top artikel</h4>
                      <ul>
                        <li><a href="#">Pengaturan tidur anak anjing</a></li>
                        <li><a href="#">Cara Membuat Anak Anjing Anda Berolahraga</a></li>
                        <li><a href="#">Memberi Makan Anak Anjing Anda - Panduan Lengkap</a></li>
                        <li><a href="#">Lihat semua artikel anjing</a></li>
                      </ul>
                    </div>
                    <div class="dropdown-column"  style="margin-left: 150px;">
                      <h4>Top artikel</h4>
                      <ul>
                        <li><a href="#">Membeli Anak Kucing dari Pembiak</a></li>
                        <li><a href="#">Mengapa Mengadopsi Kucing yang Lebih Tua?</a></li>
                        <li><a href="#">7 Ras Kucing Abu-abu</a></li>
                        <li><a href="#">Lihat semua artikel kucing</a></li>
                      </ul>
                    </div>
                    <div class="dropdown-column">
                      <img src="https://static.cdntap.com/tap-assets-prod/wp-content/uploads/sites/24/2020/11/family-with-a-large-dog-and-puppy.jpg" alt="Gambar Kucing" width="25%"; height="25%" style="margin-left: 60%; margin-top: -20%;">
      
                      <a href="#" class="btn btn-lilac" style="margin-left: -350px;">Temukan semua informasi perawatan hewan</a>
                    </div>
                  </div>
                </li>
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
    <h2 class="text-orange mb-4" style="margin-top: 10%; color:#7c5092;">Artikel kucing</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Artikel 1">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title" >Tips Memilih Makanan Kucing Sesuai Kebutuhan</h5></a>
            <p class="card-text">Untuk memberi makanan, sebaiknya sesuaikan kandungan pada makanan dengan kebutuhan kucing kita, ya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://asset.kompas.com/crops/FNEK-rqZJnJyA8BiJwa9z_GlCbk=/0x0:1000x667/750x500/data/photo/2023/10/31/65409464aa7a3.jpg" class="card-img-top" alt="Artikel 2">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Tips Agar Kucingmu Tidak Berontak Saat Potong Kuku. Ajaklah Bermain!</h5></a> 
            <p class="card-text">Siapa nih yang kewalahan potong kuku kucing kesayangan?</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://asset.kompas.com/crops/n5on9A50IirjzlJKOEzDsfn3kkQ=/0x2:495x332/1200x800/data/photo/2023/03/08/6408915c253b6.png" class="card-img-top" alt="Artikel 3">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Kenali Bahasa Tubuh Kucingmu: Apa Arti Gerakan Ekor dan Kupingnya?</h5></a> 
            <p class="card-text">Kucing berkomunikasi dengan bahasa tubuh. Yuk kenali bahasa tubuhnya!</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://asset.kompas.com/crops/xDFSeaemFA4amoeZeP_np22y9Hg=/0x0:2560x1707/1200x800/data/photo/2021/11/01/617f9685c9fa8.jpg" class="card-img-top" alt="Artikel 4">
          <div class="card-body">
           <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Cara Membuat Kucingmu Lebih Aktif: Permainan yang Dapat Mengusir Kebosanan</h5></a>
            <p class="card-text">Temukan cara membuat mereka lebih aktif dengan permainan yang menyenangkan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-4" style="margin-top: 5%">
    <div class="row" style="margin-top: 5%">
        <div class="col-md-3">
          <div class="card">
            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Artikel 1">
            <div class="card-body">
             <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title" >Tips Memilih Makanan Kucing Sesuai Kebutuhan</h5></a>
              <p class="card-text">Untuk memberi makanan pada kucing, sebaiknya sesuaikan kandungan pada makanan dengan kebutuhan kucing kita, ya!</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="https://asset.kompas.com/crops/FNEK-rqZJnJyA8BiJwa9z_GlCbk=/0x0:1000x667/750x500/data/photo/2023/10/31/65409464aa7a3.jpg" class="card-img-top" alt="Artikel 2">
            <div class="card-body">
             <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Tips Agar Kucingmu Tidak Berontak Saat Potong Kuku. Ajaklah Bermain!</h5></a> 
              <p class="card-text">Kucing juga butuh pemanasan sebelum dipotong kukunya.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="https://asset.kompas.com/crops/n5on9A50IirjzlJKOEzDsfn3kkQ=/0x2:495x332/1200x800/data/photo/2023/03/08/6408915c253b6.png" class="card-img-top" alt="Artikel 3">
            <div class="card-body">
             <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Kenali Bahasa Tubuh Kucingmu: Apa Arti Gerakan Ekor dan Kupingnya?</h5></a> 
              <p class="card-text">Siapa nih yang kewalahan potong kuku kucing kesayangan?</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="https://asset.kompas.com/crops/xDFSeaemFA4amoeZeP_np22y9Hg=/0x0:2560x1707/1200x800/data/photo/2021/11/01/617f9685c9fa8.jpg" class="card-img-top" alt="Artikel 4">
            <div class="card-body">
             <a href="" style="text-decoration: underline; color:#6d4c7d;"><h5 class="card-title">Cara Membuat Kucingmu Lebih Aktif: Permainan yang Dapat Mengusir Kebosanan</h5></a>
              <p class="card-text">Deskripsi artikel lainnya tentang perawatan kucing.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      @if($artikel->image)
          <img src="{{ asset('storage/public/images/'.$artikel->image) }}" class="card-img-top" alt="{{ $artikel->title }}">
      @endif
      <div class="card-body">
          <h5 class="card-title">{{ $artikel->title }}</h5>
          <p class="card-text">{{ $artikel->content }}</p>
          <p><strong>Kategori:</strong> {{ $artikel->category }}</p>
          <p><strong>Status:</strong> {{ $artikel->status }}</p>
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
@endsection