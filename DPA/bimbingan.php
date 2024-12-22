<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bimbingan.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dongker navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>Dashboard DPA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
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

    <!-- Konten Utama -->
    <main class="content py-5">
        <div class="container">
            <div class="card shadow mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <h1 class="text-center fw-bold welcome-text">Hubungi Dosen Pembimbing Akademik</h1>
                    <p class="text-center portal-text mb-4">Silakan hubungi Dosen Pembimbing Akademik (DPA) untuk konsultasi atau bimbingan lebih lanjut.</p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title text-bold-blue text-center">Contact Person</h5>
                                    <p class="card-text text-center">Untuk mendapatkan bimbingan atau konsultasi mengenai akademik, Anda bisa menghubungi Dosen Pembimbing Akademik melalui informasi berikut:</p>
                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>Nama Dosen:</strong> Dr. Andi Prasetyo, M.T.</li>
                                        <li class="list-group-item"><strong>Nomor Telepon:</strong> +62 812 3456 7890</li>
                                        <li class="list-group-item"><strong>Email:</strong> andi.prasetyo@polinema.ac.id</li>
                                        <li class="list-group-item"><strong>Jam Bimbingan:</strong> Senin - Jumat, 09:00 - 16:00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <p class="text-muted">Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi DPA melalui kontak yang tersedia di atas.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS dan Icon -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
