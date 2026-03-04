<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Klinik Digital Premium</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #0d6efd, #00d2ff);
            --primary-color: #0d6efd;
            --soft-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: var(--soft-shadow);
            max-width: 1000px;
            width: 100%;
            display: flex;
            min-height: 600px;
            transition: transform 0.3s ease;
        }

        /* Sisi Kiri (Visual) */
        .login-visual {
            background: var(--primary-gradient);
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 40px;
            text-align: center;
        }

        .login-visual img {
            max-width: 70%;
            height: auto;
            margin-bottom: 30px;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        /* Sisi Kanan (Form) */
        .login-form-side {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #fff;
        }

        .brand-text {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1);
            border-color: var(--primary-color);
        }

        .btn-login {
            background: var(--primary-gradient);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
            opacity: 0.95;
        }

        .register-link a {
            color: var(--primary-color);
            transition: 0.2s;
        }

        .register-link a:hover {
            color: #0056b3;
            text-decoration: underline !important;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                max-width: 450px;
            }
            .login-visual {
                padding: 30px;
            }
            .login-form-side {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">
        
        <div class="login-visual d-none d-md-flex">
            <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" alt="Medical Illustration">
            <h2 class="fw-bold">Sehat Lebih Mudah</h2>
            <p class="opacity-75">Pantau kesehatan keluarga dan buat janji temu dalam satu pintu digital.</p>
        </div>

        <div class="login-form-side">
            
            <div class="mb-5">
                <div class="brand-text">
                    <i class="bi bi-heart-pulse-fill"></i> Klinik Digital
                </div>
                <h4 class="fw-bold mt-4">Selamat Datang</h4>
                <p class="text-muted small">Silakan masuk menggunakan akun terdaftar Anda.</p>
            </div>

            <form method="POST" action="/login">
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="nama@email.com" required autofocus>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <a href="#" class="text-decoration-none small opacity-75">Lupa sandi?</a>
                    </div>
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-login text-white mb-4">
                    Masuk ke Sistem
                </button>

                <p class="text-center text-muted small register-link">
                    Belum punya akun? 
                    <a href="/register" class="fw-bold text-decoration-none">Daftar Sekarang</a>
                </p>
            </form>

            <div class="mt-4 pt-3 border-top text-center text-md-start">
                <a href="/" class="text-muted text-decoration-none small">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>