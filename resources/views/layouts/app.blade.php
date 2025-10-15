<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Pembangunan') }} - @yield('title')</title>

    <!-- Prefer Vite-built assets (Tailwind + app JS); fall back to CDN and local Argon if present -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Tailwind CDN fallback -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Prefer local Argon CSS in public/assets-admin if available, otherwise small inline fallback -->
        @if (file_exists(public_path('assets-admin/css/argon-dashboard-tailwind.min.css')))
            <link href="{{ asset('assets-admin/css/argon-dashboard-tailwind.min.css') }}" rel="stylesheet">
        @elseif (file_exists(public_path('assets-admin/css/argon-dashboard-tailwind.css')))
            <link href="{{ asset('assets-admin/css/argon-dashboard-tailwind.css') }}" rel="stylesheet">
        @else
            {{-- no local argon css found; small inline fallback so the dashboard remains usable --}}
            <style>
                body { font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
                header { background: #0f62fe; }
                header .font-bold { color: #fff; }
                aside { background: #ffffff; border-right: 1px solid rgba(0,0,0,0.06); }
                .shadow-xl { box-shadow: 0 10px 30px rgba(2,6,23,0.08); }
                .rounded-2xl { border-radius: 1rem; }
                .bg-white { background-color: #fff; }
                .text-slate-700 { color: #334155; }
                .text-white { color: #fff; }
                .bg-blue-500 { background-color: #3b82f6; }
                .bg-blue-700 { background-color: #1d4ed8; }
                .btn { display:inline-block; padding:0.5rem 0.75rem; border-radius:0.375rem; }
                @media (min-width:1024px) { main { margin-left: 18rem; } }
            </style>
        @endif
    @endif

    @stack('styles')
</head>
<body class="bg-gray-50 text-slate-700">

    <header class="bg-blue-700 text-white px-6 py-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="{{ asset('favicon.ico') }}" alt="logo" class="h-8">
                <div>
                    <div class="font-bold">Pembangunan & Monitoring</div>
                    <div class="text-sm opacity-80">Proyek Bina Desa</div>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden md:block">Halo, <strong>{{ session('username') ?? 'Admin' }}</strong></div>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <div class="max-w-7xl mx-auto p-6">
            @yield('content')
        </div>
    </main>

    <footer class="text-center text-sm text-slate-500 py-6">
        &copy; {{ date('Y') }} Sistem Pembangunan & Monitoring Proyek Bina Desa
    </footer>

    <!-- Chart.js CDN (used by some widgets) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Prefer local JS from public/js or public/assets-admin/js when available -->
    @if (file_exists(public_path('js/argon-dashboard-tailwind.js')))
        <script src="{{ asset('js/argon-dashboard-tailwind.js') }}"></script>
    @elseif (file_exists(public_path('assets-admin/js/argon-dashboard-tailwind.js')))
        <script src="{{ asset('assets-admin/js/argon-dashboard-tailwind.js') }}"></script>
    @endif

    {{-- optional plugins if present --}}
    @if (file_exists(public_path('js/plugins/chartjs.min.js')))
        <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    @elseif (file_exists(public_path('assets-admin/js/plugins/chartjs.min.js')))
        <script src="{{ asset('assets-admin/js/plugins/chartjs.min.js') }}"></script>
    @endif

    @stack('scripts')
</body>
</html>
