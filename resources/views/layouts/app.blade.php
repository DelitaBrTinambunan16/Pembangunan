<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Pembangunan') }} - @yield('title')</title>

        <!-- Google Fonts & Material Icons -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <!-- Materially local CSS -->
        <link href="{{ asset('vendor/materially/css/materially.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('vendor/materially/favicon.svg') }}" />
            <!-- Simple custom Materially-like CSS -->
            <style>
                :root{--primary:#1e88e5;--accent:#4fc3f7;--muted:#f5f7fb}
                body{font-family:'Poppins',system-ui,-apple-system,Segoe UI,Roboto,Arial;background:var(--muted);color:#344054}
                /* Sidebar */
                .mat-sidebar{width:260px;position:fixed;top:0;bottom:0;left:0;background:#ffffff;border-right:1px solid rgba(16,24,40,0.04);padding:18px 16px;display:flex;flex-direction:column}
                .mat-sidebar .nav{margin-top:8px}
                .mat-sidebar .nav-link{color:#475569;padding:.6rem .75rem;border-radius:8px;margin-bottom:.25rem}
                .mat-sidebar .nav-link:hover{background:rgba(30,136,229,0.06);color:var(--primary)}
                .mat-sidebar .nav-link.active{background:linear-gradient(90deg,var(--primary),#1565c0);color:#fff}
                .brand {display:flex;align-items:center;gap:.6rem;margin-bottom:.25rem}
                .brand .logo{width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--primary),var(--accent));display:inline-block}

                /* Topbar */
                .mat-topbar{height:64px;position:fixed;left:260px;right:0;top:0;background:linear-gradient(90deg,var(--primary),#1565c0);color:#fff;display:flex;align-items:center;padding:0 1rem;z-index:1030}
                .mat-topbar .btn-outline-light{opacity:.95}

                /* Content */
                .mat-content{margin-left:260px;padding-top:88px;padding:1.25rem}

                /* Cards */
                .card-dash{border-radius:12px;box-shadow:0 10px 30px rgba(2,6,23,0.08);background:#ffffff}
                .card-dash .h5{font-weight:600}

                /* Footer spacing on desktop */
                footer{margin-left:260px}

                @media(max-width:991px){
                    .mat-sidebar{position:relative;width:100%;display:flex}
                    .mat-topbar{left:0}
                    .mat-content{margin-left:0;padding-top:140px}
                    footer{margin-left:0}
                }
            </style>

        @stack('styles')
    </head>
    <body>

        <!-- Sidebar -->
            <aside class="mat-sidebar">
                <div class="brand mb-3">
                    <img src="{{ asset('vendor/materially/images/logo.svg') }}" alt="logo" style="height:36px" />
                    <div>
                        <div class="fw-bold">Materially</div>
                        <div class="text-muted small">Admin Template</div>
                    </div>
                </div>

                    <nav class="nav flex-column">
                        <a class="nav-link py-2 {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><span class="material-icons align-middle">dashboard</span> Dashboard</a>
                        <a class="nav-link py-2 {{ request()->routeIs('warga.*') ? 'active' : '' }}" href="{{ route('warga.index') }}"><span class="material-icons align-middle">people</span> Data Warga</a>
                        <a class="nav-link py-2 {{ request()->routeIs('lokasi-proyek.*') ? 'active' : '' }}" href="{{ route('lokasi-proyek.index') }}"><span class="material-icons align-middle">map</span> Lokasi Proyek</a>
                    </nav>

            <div class="mt-auto pt-3 small text-muted">
                <div>Halo, <strong>{{ session('username') ?? 'Admin' }}</strong></div>
            </div>
        </aside>

        <!-- Topbar -->
        <header class="mat-topbar">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-outline-light d-md-none" id="matToggle"><span class="material-icons">menu</span></button>
                            <h5 class="mb-0 text-white">@yield('title', 'Dashboard')</h5>
                        </div>
                <div class="d-flex align-items-center gap-2">
                            <div class="search-wrap me-3 d-none d-md-block">
                                <input class="search-input" placeholder="Search..." />
                            </div>
                            <form action="{{ route('auth.logout') }}" method="POST" style="margin:0">
                                @csrf
                                <button type="submit" class="btn btn-light btn-sm">Logout</button>
                            </form>
                </div>
            </div>
        </header>

        <!-- Main -->
            <main class="mat-content">
                <div class="container-fluid px-3">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @yield('content')
            </div>
        </main>

        <footer class="text-center text-muted py-3" style="margin-left:260px">
            &copy; {{ date('Y') }} Pembangunan — Bina Desa
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.getElementById('matToggle')?.addEventListener('click', function(){
                document.querySelector('.mat-sidebar')?.classList.toggle('d-none');
            });
        </script>

        @stack('scripts')
    </body>
</html>
