<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="mahasiswa.css" rel="stylesheet">
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
                    <h1 class="text-center fw-bold welcome-text">Daftar Mahasiswa</h1>
                    <p class="text-center portal-text mb-4">Lihat List Mahasiswa yang Terdaftar</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ahmad Ali</td>
                                <td>2100012345</td>
                                <td>Teknik Informatika</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Siti Fatimah</td>
                                <td>2100012346</td>
                                <td>Manajemen</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>John Doe</td>
                                <td>2100012347</td>
                                <td>Akuntansi</td>
                                <td>Cuti</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap dan Icon -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
