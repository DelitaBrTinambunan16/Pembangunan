<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Pembangunan & Monitoring Proyek</title>
    <!-- ✅ TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-900 to-blue-600 min-h-screen flex items-center justify-center">

    <div class="bg-white bg-opacity-95 backdrop-blur-md p-10 rounded-2xl shadow-2xl w-full max-w-md border border-blue-200">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-blue-800 mb-2 tracking-wide">Admin Login</h1>
            <p class="text-gray-500 text-sm">Pembangunan & Monitoring Proyek</p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center font-semibold">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('auth.login') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Username</label>
                <input type="text" name="username"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                       placeholder="Masukkan username" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                       placeholder="Masukkan password">
                @error('password')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                    class="w-full bg-blue-700 text-white py-2.5 rounded-lg font-semibold shadow-md hover:bg-blue-800 transition-all duration-200">
                Masuk Sekarang
            </button>
        </form>

        <div class="mt-6 text-center text-gray-500 text-sm">
            © 2025 Sistem Pembangunan & Monitoring Proyek
        </div>
    </div>

</body>
</html>
