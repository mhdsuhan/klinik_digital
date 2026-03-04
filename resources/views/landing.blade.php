<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Digital | Solusi Kesehatan Modern</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #00f2fe;
            --dark-blue: #0a2647;
            --soft-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* NAVBAR CUSTOMIZATION */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9) !important;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: -0.5px;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #0d6efd 0%, #00f2fe 100%);
            color: white;
            padding: 140px 0 100px;
            border-radius: 0 0 50px 50px;
            position: relative;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            line-height: 1.2;
        }

        .hero-img {
            filter: drop-shadow(20px 20px 30px rgba(0,0,0,0.2));
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* CARDS & FEATURES */
        .feature-card {
            border: none;
            border-radius: 24px;
            padding: 40px 30px;
            background: #fff;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(13, 110, 253, 0.15);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary-color);
            font-size: 2rem;
            transition: 0.3s;
        }

        .feature-card:hover .icon-circle {
            background: var(--primary-color);
            color: white;
        }

        /* DOCTOR SECTION */
        .doctor-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .doctor-img-wrapper {
            overflow: hidden;
            height: 300px;
        }

        .doctor-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .doctor-card:hover img {
            transform: scale(1.1);
        }

        /* CTA SECTION */
        .cta-box {
            background: var(--dark-blue);
            border-radius: 30px;
            padding: 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-box::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        /* FOOTER */
        footer {
            background: #fdfdfd;
            border-top: 1px solid #eee;
            padding: 60px 0 20px;
        }

        .social-links a {
            font-size: 1.2rem;
            margin: 0 10px;
            color: #666;
            transition: 0.3s;
        }

        .social-links a:hover { color: var(--primary-color); }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">
            <i class="bi bi-heart-pulse-fill me-2"></i>Klinik Digital
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3 fw-medium" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-medium" href="#fitur">Fitur</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-medium" href="#dokter">Dokter</a></li>
                <a class="btn btn-primary rounded-pill px-4 ms-lg-3" href="/login">Portal Pasien</a>
            </ul>
        </div>
    </div>
</nav>

<section class="hero" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="badge bg-white text-primary px-3 py-2 rounded-pill mb-3 fw-bold">Transformasi Digital Kesehatan</span>
                <h1 class="fw-700 mb-4">Layanan Kesehatan <br><span class="text-warning">Lebih Dekat,</span> Lebih Cepat.</h1>
                <p class="lead opacity-90 mb-5">Kelola rekam medis, janji temu dokter, dan konsultasi kesehatan dalam satu platform yang terintegrasi dan aman.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-light btn-lg rounded-pill px-5 shadow">Daftar</button>
                    <button class="btn btn-outline-light btn-lg rounded-pill px-4"><i class="bi bi-play-circle me-2"></i>Lihat Demo</button>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="zoom-in">
                <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" class="hero-img img-fluid" alt="Digital Health" width="500">
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5" id="fitur">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary fw-bold text-uppercase">Mengapa Kami?</h6>
            <h2 class="fw-bold display-6">Kemudahan dalam Genggaman</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card feature-card text-center">
                    <div class="icon-circle">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <h4 class="fw-bold">Manajemen Dokter</h4>
                    <p class="text-muted">Database dokter spesialis terlengkap dengan jadwal praktek yang real-time.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card feature-card text-center border-primary border" style="background: #f0f7ff;">
                    <div class="icon-circle">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="fw-bold">Data Aman</h4>
                    <p class="text-muted">Enkripsi tingkat tinggi untuk menjaga privasi rekam medis pasien kami.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card feature-card text-center">
                    <div class="icon-circle">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4 class="fw-bold">Reservasi Online</h4>
                    <p class="text-muted">Antri tanpa menunggu lama. Booking jadwal dokter langsung dari smartphone.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5" id="dokter">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-5" data-aos="fade-up">
            <div>
                <h6 class="text-primary fw-bold">Tenaga Medis</h6>
                <h2 class="fw-bold">Bertemu Ahlinya</h2>
            </div>
            <button class="btn btn-outline-primary rounded-pill px-4 mb-2">Lihat Semua</button>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="100">
                <div class="card doctor-card">
                    <div class="doctor-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=500&q=80" alt="Doctor">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Andi Saputra</h5>
                        <p class="text-primary small fw-bold mb-3">Spesialis Jantung</p>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm rounded-pill px-3">Buat Janji</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="200">
                <div class="card doctor-card">
                    <div class="doctor-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=500&q=80" alt="Doctor">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Siti Aulia</h5>
                        <p class="text-primary small fw-bold mb-3">Spesialis Anak</p>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm rounded-pill px-3">Buat Janji</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="300">
                <div class="card doctor-card">
                    <div class="doctor-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=500&q=80" alt="Doctor">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Budi Santoso</h5>
                        <p class="text-primary small fw-bold mb-3">Spesialis Bedah</p>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm rounded-pill px-3">Buat Janji</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-5 py-5">
    <div class="cta-box text-center shadow-lg" data-aos="zoom-in">
        <h2 class="display-5 fw-bold mb-4">Siap Memulai Layanan <br>Kesehatan Digital Anda?</h2>
        <p class="lead mb-5 opacity-75">Gabung dengan ribuan pasien lainnya yang telah merasakan <br> kemudahan layanan kesehatan modern.</p>
        <button class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold shadow">Hubungi Kami Sekarang</button>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <a class="navbar-brand fw-bold text-primary mb-3 d-block" href="#">
                    <i class="bi bi-heart-pulse-fill me-2"></i>Klinik Digital
                </a>
                <p class="text-muted small">Membangun masa depan kesehatan Indonesia melalui teknologi yang inklusif dan mudah diakses.</p>
            </div>
            <div class="col-lg-4 text-center">
                <h6 class="fw-bold mb-3">Tautan Cepat</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Tentang Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Kebijakan Privasi</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Syarat & Ketentuan</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-lg-end text-center">
                <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center pb-3">
            <small class="text-muted">&copy; 2026 Klinik Digital - Dedicated to Your Health.</small>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS Animation
    AOS.init({
        duration: 1000,
        once: true
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar').classList.add('shadow-sm');
        } else {
            document.querySelector('.navbar').classList.remove('shadow-sm');
        }
    });
</script>

</body>
</html>