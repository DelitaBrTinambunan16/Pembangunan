
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Berhasil</title>
    <style>
        body {
            background: linear-gradient(135deg, #00C9FF, #92FE9D);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .success-box {
            background: white;
            text-align: center;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease-in-out;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            font-size: 18px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #00C9FF;
            color: white;
            padding: 10px 25px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        a:hover {
            background: #009edc;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="success-box">
        <h2>Selamat Datang, {{ $username }} 👋</h2>
        <p>Login berhasil! Anda kini berada di halaman admin.</p>
        <a href="/auth">Logout</a>
    </div>
</body>
</html>
