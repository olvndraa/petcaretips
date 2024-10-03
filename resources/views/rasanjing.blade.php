<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ras Anjing</title>
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
    <h3 class="fw-bold" style="color: #917b91; text-align: center;">Daftar Ras Anjing</h3>

    <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: 2%;">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/luke-macgillivray-p_qco2Eo-E0-unsplash.jpg" class="card-img-top" alt="American Bobtail" height="100%">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Anjing Beagle</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/matt-briney-hfkd6G6Pmz4-unsplash.jpg" class="card-img-top" alt="American Wirehair" height="100%">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Anjing Bichon Frise</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/mink-mingle-UAsFSsMDpa0-unsplash.jpg" class="card-img-top" alt="Australian Mist" height="100%">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Anjing Pug</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/fatty-corgi-g-Dui8tCdrI-unsplash.jpg" class="card-img-top" alt="Bengal">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Anjing Corgi</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container grid-container" style="margin-top: 5%">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/Smooth_Miniature_Dachshund_puppy_11zon-696x462.jpg" class="card-img-top" alt="American Bobtail">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Dachshund (Tekel)</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-pixabay-60050.jpg" class="card-img-top" alt="American Wirehair">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Anjing Siberian Husky</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-yuliya-strizhkina-1198802.jpg" class="card-img-top" alt="Australian Mist">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Samoyed</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="margin-top: -1%;">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-fox-6063241.jpg" class="card-img-top" alt="Bengal">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Alaskan Malamute</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container grid-container" style="margin-top: 5%">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-sharmaine-monticalbo-4083564.jpg" class="card-img-top" alt="American Bobtail">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d"> Chow Chow</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-80">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-evgeny-tchebotarev-2187304.jpg" class="card-img-top" alt="American Wirehair" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Shiba Inu</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/kintamani2-696x434.jpg" class="card-img-top" alt="Australian Mist">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d">Kintamani</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="margin-top: -1%;">
                <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/pexels-k-zoltan-342214.jpg" class="card-img-top" alt="Bengal" height="100%" width="auto">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #6d4c7d"> German Shepherd (Helder)</h5>
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
