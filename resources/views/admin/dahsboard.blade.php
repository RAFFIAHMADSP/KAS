<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kas Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kas Kelas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Dashboard
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Data Anggota</a>
                    <a href="#" class="list-group-item list-group-item-action">Catatan Kas</a>
                    <a href="#" class="list-group-item list-group-item-action">Laporan</a>
                </div>
            </div>

            <div class="col-md-9">
                <h1 class="mb-4">Selamat Datang di Dashboard Kas Kelas</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Total Kas</div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 1.000.000</h5>
                                <p class="card-text">Total kas yang terkumpul sejauh ini.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header">Jumlah Anggota</div>
                            <div class="card-body">
                                <h5 class="card-title">30 Orang</h5>
                                <p class="card-text">Total anggota yang terdaftar.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-header">Transaksi Terakhir</div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 50.000</h5>
                                <p class="card-text">Disetor oleh: Rafi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <h4>Grafik Kas Kelas</h4>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="kasChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Contoh data untuk Chart.js
        const ctx = document.getElementById('kasChart').getContext('2d');
        const kasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Kas Kelas',
                    data: [200000, 400000, 600000, 800000, 1000000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });
    </script>
</body>

</html>
