{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Petcare Tips</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <style>
        body {
            background-color: #E6E6FA; 
        }
        .header {
            background-color: #947393; 
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .card-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #6D4C7D;
        }
        .btn-primary {
            background-color: #706585;
            border: none;
        }
        .btn-primary:hover {
            background-color: #8b7a9b; /* Warna ungu lebih gelap saat hover */
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <header class="header">
            <h1>🐾 Admin Dashboard Petcare Tips 🐾</h1>
        </header>
        
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">🌟 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">📝 Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">📦 Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">👥 Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">⚙️ Pengaturan</a>
                    </li>
                </ul>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <h2>📊 Statistik</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Jumlah Artikel</div>
                            <div class="card-body">
                                <h5 class="card-title">50 Artikel Siap Dibaca!</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Pengunjung Bulan Ini</div>
                            <div class="card-body">
                                <h5 class="card-title">10 Orang Berkunjung!</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <h2>🐶 Artikel Terbaru</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fakta Menarik tentang Anjing</td>
                            <td>Hewan</td>
                            <td>01-09-2024</td>
                            <td>Diterbitkan</td>
                            <td>
                                <button class="btn btn-warning btn-sm"> Edit</button>
                                <button class="btn btn-danger btn-sm"> Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak artikel -->
                    </tbody>
                </table>
                <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">➕ Tambah Artikel Baru</a>

            </main>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Petcare Tips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
     .navbar-lilac {
          background-color: #917b91;
       
        }
        </style>
     <nav class="navbar navbar-expand-lg navbar-lilac">
        <div class="container" style="text-color: white">
            <a class="navbar-brand" href="#" style="color: white">Petcare Tips Admin</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}" style="color: white">Dashboard</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link" style="color: white;">LOGOUT</button>
                    </form>  
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
