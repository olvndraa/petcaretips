<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-radius: 10px;
            object-fit: cover;
        }
      
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
    
    /* .grid-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        .grid-item img {
            width: 20%;
            height: 20%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .text-content {
            text-align: right;
        }
        .grid-item:nth-child(odd) {
            margin-top: 50px; /* Untuk zigzag pada item pertama, ketiga, dll. */
            .footer-custom {
            background-color: #d8bfd8; /* Warna lilac */
            color: white;
            padding: 20px 0;
        }
        .footer-custom a {
            color: white;
            text-decoration: none;
        }
        .footer-custom a:hover {
            text-decoration: underline;
        }
        .card-tittle {
            color: #6d4c7d;
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
<div class="container grid-container" style="margin-top: 7%">
    <h3 class="fw-bold" style="color: #917b91; text-align: center;">Daftar Ras Burung</h3>

    <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: 2%;">
        <div class="col">
            <div class="card h-100">
                <img src="https://asset.kompas.com/crops/61HEFW7AojfIEAc-WWHhJJ9bugI=/0x223:633x856/340x340/data/photo/2021/09/19/614707000f24f.jpg" class="card-img-top" alt="American Bobtail">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Burung Beo Abu-Abu Afrika</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://asset.kompas.com/crops/HRz8KUVs313vDo86GfYtZ85hFMY=/3x68:629x693/340x340/data/photo/2021/09/19/614707c34fb42.jpg" class="card-img-top" alt="American Wirehair">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Macaw</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://asset.kompas.com/crops/xVWm_HUkiBqO5p0O2cCtS2uiURs=/6x68:747x808/340x340/data/photo/2021/09/19/6147085c6b613.jpg" class="card-img-top" alt="Australian Mist">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Kakatua</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://asset.kompas.com/crops/ovqMlkTu9ezdLI-MTyMpvbeZeR8=/0x43:774x817/340x340/data/photo/2021/09/19/6147097bcff9f.jpg" class="card-img-top" alt="Bengal">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Budgerigar</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container grid-container" style="margin-top: 5%">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://asset.kompas.com/crops/5qF0jOuilUeU_gB1EBO9osJsSaY=/100x0:700x600/340x340/data/photo/2021/09/19/6147068aa98ea.jpg" class="card-img-top" alt="American Bobtail">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Conure</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2024/04/pexels-photo-4117452-561x395.webp" class="card-img-top" alt="American Wirehair" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Burung Chestnut Headed Bee Eater</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2024/04/pexels-photo-1123767-561x374.webp" class="card-img-top" alt="Australian Mist" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d"> Burung Toco Toucan</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="margin-top: -1%;">
                <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2024/04/pexels-photo-18284253-561x396.webp" class="card-img-top" alt="Bengal" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Burung Cockatiel</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container grid-container" style="margin-top: 5%">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="data:image/webp;base64,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" class="card-img-top" alt="American Bobtail" style="height: 100%">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Cenderawasih</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="data:image/webp;base64,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" class="card-img-top" alt="American Wirehair">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Jay biru</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="data:image/webp;base64,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" class="card-img-top" alt="Australian Mist" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Kolibri</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="margin-top: -1%;">
                <img src="data:image/webp;base64,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" class="card-img-top" alt="Bengal" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Elang Botak</h5>
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
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
