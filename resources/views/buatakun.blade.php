<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>

    {{-- Font & Style --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 420px;
            padding: 32px 28px;
            border: 3px solid #cfcfcf;
            border-radius: 24px;
            text-align: center;
        }

        .logo {
            width: 70px;
            margin-bottom: 12px;
        }

        h2 {
            color: #003d2b;
            margin-bottom: 24px;
            font-size: 28px;
            font-weight: 700;
        }

        label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #4f7f73;
            margin-bottom: 14px;
            font-size: 14px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .checkbox input {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #003d2b;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 14px;
        }

        button:hover {
            background-color: #002a1e;
        }

        .login-link {
            font-size: 13px;
            margin-bottom: 8px;
        }

        .login-link a {
            color: #003d2b;
            font-weight: 600;
            text-decoration: none;
        }

        .divider {
            font-size: 12px;
            color: #555;
            margin-bottom: 10px;
        }

        .google-btn img {
            width: 32px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="card">
        {{-- Logo --}}
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">

        <h2>Buat Akun</h2>

        {{-- Form --}}
        <form>
            <label>Email</label>
            <input type="email" placeholder="Masukkan email">

            <label>Password</label>
            <input type="password" placeholder="Masukkan password">

            <label>Konfirmasi Password</label>
            <input type="password" placeholder="Ulangi password">

            <div class="checkbox">
                <input type="checkbox">
                <span>Saya menyetujui kebijakan privasi</span>
            </div>

            <button type="submit">Buat</button>
        </form>

        <div class="login-link">
            sudah punya akun? <a href="#">Masuk</a>
        </div>

        <div class="divider">atau Buat Akun menggunakan</div>

        <div class="google-btn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google">
        </div>
    </div>

</body>
</html>
