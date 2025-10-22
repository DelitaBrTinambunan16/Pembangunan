<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pembangunan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0; padding: 0;
            background: #f4f6fa;
            color: #1f2937;
        }

        /* Layout utama */
        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background: #0ea5e9;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 14px;
            margin-bottom: 8px;
            border-radius: 6px;
            transition: background 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255,255,255,0.2);
        }

        /* Konten utama */
        .main {
            flex: 1;
            padding: 30px 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
        }

        .logout-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.05);
        }

        .card p {
            color: #4b5563;
            margin-top: 8px;
        }

        .actions {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #0ea5e9;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            margin-right: 8px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #0284c7;
        }
    </style>
</head>
<body>
    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Pembangunan & Monitoring Proyek Bina Desa</h2>
            <a href="#" class="active">🏠 Dashboard</a>
            <a href="#">📁 Data Proyek</a>
            <a href="#">🧱 Tahapan Proyek</a>
            <a href="#">📸 Progres Proyek</a>
            <a href="#">📍 Lokasi Proyek</a>
            <a href="#">👷 Kontraktor</a>
        </div>

        <!-- Konten utama -->
        <div class="main">
            <div class="header">
                <h1>Dashboard</h1>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>

            <div class="card">
                <h2>Selamat Datang, {{ $username }} 👋</h2>
                <p>Ini adalah halaman utama dashboard <strong> Pembangunan & Monitoring Proyek Bina Desa</strong>.</p>

                <div class="actions">
                    <a href="#" class="btn">Lihat Data Proyek</a>
                    <a href="#" class="btn">Laporan Progres</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
