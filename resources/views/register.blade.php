<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun | Klinik Digital</title>

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
            padding: 20px;
            margin: 0;
        }

        /* Container Card */
        .login-card {
            background: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: var(--soft-shadow);
            max-width: 1000px;
            width: 100%;
            display: flex;
            min-height: 650px;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Sisi Kiri: Visual Information */
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
            margin-bottom: 30px;
            filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        /* Sisi Kanan: Form Section */
        .login-form-side {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand-text {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Input Customization */
        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            color: #555;
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
            outline: none;
        }

        /* Button Customization */
        .btn-regis {
            background: var(--primary-gradient);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-regis:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
            opacity: 0.95;
        }

        /* Responsive Breakpoints */
        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                max-width: 450px;
                min-height: auto;
            }
            .login-form-side {
                padding: 40px 30px;
            }
            .login-visual {
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">
        
        <div class="login-visual d-none d-md-flex">
            <img src="https://cdn-icons-png.flaticon.com/512/2859/2859733.png" alt="Registration Icon">
            <h2 class="fw-bold">Mulai Sekarang</h2>
            <p class="opacity-75">
                Dapatkan akses penuh ke layanan kesehatan digital terbaik untuk Anda dan keluarga.
            </p>
        </div>

        <div class="login-form-side">
            
            <div class="mb-4">
                <div class="brand-text mb-3">
                    <i class="bi bi-heart-pulse-fill"></i> Klinik Digital
                </div>
                <h4 class="fw-bold mt-2">Buat Akun Baru</h4>
                <p class="text-muted small">
                    Lengkapi data di bawah ini untuk mendaftar.
                </p>
            </div>

            <form method="POST" action="/register">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Contoh: Andi Saputra" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-regis mb-4">
                    Daftar Akun
                </button>

                <p class="text-center text-muted small">
                    Sudah punya akun? 
                    <a href="login.html" class="fw-bold text-decoration-none text-primary">Login Sekarang</a>
                </p>
            </form>

            <div class="mt-4 pt-3 border-top text-center text-md-start">
                <a href="index.html" class="text-muted text-decoration-none small">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>