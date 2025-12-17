<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Selamat Datang Kembali</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            border-radius: 30px;
            padding: 50px 40px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border: 8px solid #9ca3af;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 80px;
            height: 80px;
        }

        .title {
            color: #064e3b;
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #1f2937;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #064e3b;
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus {
            outline: none;
            border-color: #047857;
            box-shadow: 0 0 0 3px rgba(4, 120, 87, 0.1);
        }

        .forgot-password {
            text-align: left;
            margin-top: 8px;
            margin-bottom: 25px;
        }

        .forgot-password a {
            color: #1f2937;
            font-size: 13px;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: #064e3b;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #047857;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(6, 78, 59, 0.3);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #1f2937;
        }

        .register-link a {
            color: #064e3b;
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #d1d5db;
        }

        .divider span {
            padding: 0 15px;
            color: #6b7280;
            font-size: 13px;
        }

        .google-login {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px;
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #1f2937;
            font-weight: 500;
        }

        .google-login:hover {
            border-color: #d1d5db;
            background: #f9fafb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .google-login img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 40px 30px;
            }

            .title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <!-- Replace with your actual logo -->
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%23f59e0b'/%3E%3Cpath d='M50 20 L60 45 L50 70 L40 45 Z' fill='white'/%3E%3C/svg%3E" alt="Logo">
        </div>

        <h1 class="title">Selamat Datang Kembali!</h1>

        <form method="POST">
            @csrf
            
            <div class="form-group">
                <label for="username">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required
                    value="{{ old('username') }}"
                >
                @error('username')
                    <span style="color: #dc2626; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required
                >
                @error('password')
                    <span style="color: #dc2626; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="forgot-password">
                <a href="">Lupa password?</a>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="register-link">
            belum punya akun? <a href="http://127.0.0.1:8000">Buat Akun</a><br>
            atau Masuk menggunakan
        </div>

        <div class="divider">
            <span></span>
        </div>

        <a href="" class="google-login">
            <img src="https://www.google.com/favicon.ico" alt="Google">
            Masuk dengan Google
        </a>
    </div>
</body>
</html>