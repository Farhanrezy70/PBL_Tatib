<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DPA</title>
    <!-- Link ke file CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="DPA.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dongker navbar-dark">
        <div class="container-fluid">
            <!-- Logo atau Judul Navbar -->
            <a class="navbar-brand" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>Dashboard DPA
            </a>

            <!-- Toggler untuk Menu Burger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person-circle me-2"></i>Profil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li><a href="DPA.html"><i class="bi bi-house-door me-2"></i>Dashboard</a></li>
            <li><a href="mahasiswa.html"><i class="bi bi-list-task me-2"></i>Daftar Mahasiswa</a></li>
            <li><a href="pelanggaran.html"><i class="bi bi-bar-chart-line me-2"></i>Memantau Pelanggaran</a></li>
            <li><a href="bimbingan.html"><i class="bi bi-chat-square-dots me-2"></i>Memberikan Bimbingan</a></li>
        </ul>
    </div>

    <!-- Konten Utama dengan Card -->
    <main class="content py-5">
        <div class="container">
            <div class="card shadow mx-auto" style="max-width: 20000px;">
                <div class="card-body">
                    <h1 class="text-center fw-bold welcome-text">Selamat Datang, Dosen Pembimbing Akademik!</h1>
                    <p class="text-center portal-text mb-4">Di Portal Akademik Polinema</p>

                    <!-- Grid untuk Card -->
                    <div class="row g-4 justify-content-center">
                        <!-- Card 1 -->
                        <div class="col-md-3">
                            <div class="card shadow h-95">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold-blue">Daftar Mahasiswa</h5>
                                    <p class="card-text">Lihat List Absensi Kelas Mahasiswa </p>
                                    <a href="mahasiswa.html" class="btn btn-custom">Lihat Daftar Mahasiswa</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-3">
                            <div class="card shadow h-95">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold-blue">Memantau Pelanggaran</h5>
                                    <p class="card-text">Pantau status pelanggaran mahasiswa secara langsung.</p>
                                    <a href="pelanggaran.html" class="btn btn-custom">Pantau Pelanggaran</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-3">
                            <div class="card shadow h-95">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold-blue">Memberikan Bimbingan</h5>
                                    <p class="card-text">Berikan bimbingan dan arahan kepada mahasiswa.</p>
                                    <a href="bimbingan.html" class="btn btn-custom">Berikan Bimbingan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
