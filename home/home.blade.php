<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentBetter - Solusi Rental Mobil Anda</title>
    <meta name="description" content="RentBetter adalah platform web dinamis yang memberdayakan mitra untuk mengelola penyewaan transportasi dengan mudah dan membuat operasi lebih lancar dari sebelumnya.">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
    <style>
        body {
            font-family: var(--font-primary);
            color: var(--color-dark);
            background-color: var(--color-light);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-secondary);
            color: var(--color-primary);
        }

        /* Navbar styles */
        .navbar {
            background-color: var(--color-light);
            padding-left: 0;
            box-shadow: none;
        }

        .navbar .container {
            padding-left: 15px;
        }

        .navbar .navbar-brand,
        .navbar-nav .nav-link {
            color: var(--color-dark);
        }

        .navbar-brand {
            margin-right: 2rem;
        }

        .navbar-brand img {
            height: 40px;
            width: auto;
        }

        .navbar-nav {
            margin-left: -1rem;
        }

        .navbar-nav .nav-item {
            margin-right: 1.5rem;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--color-primary);
        }

        /* Banner styles */
        .banner {
            background: linear-gradient(rgba(52, 152, 219, 0.7), rgba(52, 152, 219, 0.7)), url('home/background.jpeg') no-repeat center center/cover;
            color: var(--color-white);
            padding: 100px 0;
        }

        .banner h1 {
            color: var(--color-white);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .banner p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        /* Button styles */
        .btn-primary {
            background-color: var(--color-accent);
            border-color: var(--color-accent);
            color: var(--color-dark);
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--color-secondary);
            border-color: var(--color-secondary);
            color: var(--color-white);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Section styles */
        section {
            padding: 4rem 0;
        }

        #about {
            background-color: var(--color-white);
        }

        #services {
            background-color: var(--color-light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Service item styles */
        .services-row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }

        .service-col {
            display: flex;
            padding: 10px;
            margin-bottom: 20px;
        }

        .service-item {
            background-color: var(--color-white);
            transition: all 0.3s ease;
            padding: 2rem 1.5rem;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            justify-content: space-between;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .service-item:nth-child(odd) {
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        .service-item:nth-child(even) {
            background-color: var(--color-light);
            color: var(--color-dark);
        }

        .service-icon {
            color: var(--color-accent);
            font-size: 3rem;
            margin-bottom: 1.25rem;
            flex-shrink: 0;
            max-width: 60px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-item h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            flex-shrink: 0;
        }

        .service-item p {
            font-size: 1rem;
            margin-bottom: 0;
            flex-grow: 1;
        }

        /* Adjusting margin between cards */
        .service-col {
            display: flex;
            padding: 30px;
            margin-bottom: 50px;
        }

        @media (max-width: 768px) {
            .service-item {
                padding: 1.75rem 1.25rem;
            }
            
            .service-icon {
                font-size: 2.5rem;
            }
            
            .service-item h3 {
                font-size: 1.3rem;
            }
        }

        .service-item p {
            font-size: 0.9rem;
            margin-bottom: 0.5;
            flex-grow: 1;
        }

        /* Contact section styles */
        #contact {
            background-color: var(--color-dark);
            color: var(--color-light);
        }

        /* Footer styles */
        .footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 2rem 0;
            text-align: center;
        }

        .footer a {
            color: var(--color-light);
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--color-accent);
            text-decoration: none;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar-brand {
                margin-right: 1rem;
            }
            
            .navbar-nav {
                margin-left: 0;
            }
            
            .navbar-nav .nav-item {
                margin-right: 0.5rem;
            }
            
            .banner h1 {
                font-size: 2rem;
            }
            
            .banner p {
                font-size: 1rem;
            }
            
            .btn-primary {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-col {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 769px) {
            .service-col {
                flex: 0 0 33.333%;
                max-width: 33.333%;
            }
        }

        @media (max-width: 575px) {
            .service-col {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #f8f9fa;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 0.5rem;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.90);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .header.scrolled {
            padding: 0.3rem;
            background-color: rgba(255, 255, 255, 0.90);
        }

        .logo img {
            height: 50px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .header.scrolled .logo img {
            height: 40px;
        }

        .nav-link {
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffd700;
        }

        .banner {
            background: url('home/background.jpeg') no-repeat center center/cover;
            min-height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
            position: relative;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .banner-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            width: 100%;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .banner h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .banner p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        section {
            padding: 4rem 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }

        .banner {
            box-shadow: none;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .about, .services, .contact {
            max-width: 1000px;
            margin: 0 auto;
        }

        .about p, .services p, .contact p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        .services {
            background-color: #f8f9fa;
        }

        .service-item {
            text-align: center;
            margin-bottom: 2rem;
            padding: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .service-icon {
            font-size: 3rem;
            color: #ffd700;
            margin-bottom: 1rem;
        }

        .service-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-item p {
            font-size: 1rem;
            color: #666;
        }

        .footer {
            background-color: #ffd700;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-learn {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-login {
            background-color: #ffdd00;
            color: black;
            border: none;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.4s ease;
            transform: translate(-50%, -50%) scale(0);
            z-index: 0;
        }

        .btn:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        .btn span {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .banner h1 {
                font-size: 1.8rem;
            }
            .banner p {
                font-size: 0.9rem;
            }
            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
            .service-item {
                padding: 1.5rem;
            }
            .section-title {
                font-size: 2rem;
            }
        }

        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: #000;
            color: white;
            padding: 8px;
            z-index: 100;
        }
        .skip-link:focus {
            top: 0;
        }

        .lazy {
            opacity: 0;
            transition: opacity 0.3s;
        }
        .lazy.loaded {
            opacity: 1;
        }

        .png-image {
            background: transparent;
            object-fit: contain;
            width: 100%;
            height: auto;
        }

        /* Styling untuk menu yang dapat digeser */
        .navbar-nav-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
            position: relative;
        }
        .navbar-nav-wrapper::-webkit-scrollbar {
            display: none;
        }
        .navbar-nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 5px;
            transition: transform 0.3s ease-out;
        }
        .nav-item {
            flex: 0 0 auto;
            white-space: nowrap;
        }
        
        @media (max-width: 991px) {
            .navbar-nav-wrapper {
                max-width: 100%;
                overflow-x: auto;
            }
            .navbar-nav {
                flex-wrap: nowrap;
            }
        }
    </style>
</head>
<body>
    <a href="#main-content" class="skip-link">Langsung ke konten utama</a>
    
    <header class="header navbar" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pl-0">
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img src="home/Tran.png" alt="Logo RentBetter" class="lazy" data-src="home/Tran.png">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav-wrapper">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <section class="banner" id="banner" role="region" aria-label="Banner Selamat Datang">
            <div class="banner-content">
                <h1>Sederhana, Cepat, Terorganisir</h1>
                <p>RentBetter adalah platform web dinamis yang memberdayakan mitra untuk mengelola penyewaan transportasi dengan mudah dan membuat operasi lebih lancar dari sebelumnya</p>
                <a href="#about" class="btn btn-primary btn-learn"><span>Pelajari Lebih Lanjut</span></a>
                <a href="#" class="btn btn-primary btn-login"><span>Masuk</span></a>
            </div>
        </section>

        <section id="about" class="about" role="region" aria-label="Tentang Kami">
            <div class="container">
                <h2 class="section-title">Tentang Kami</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="home/about.png" alt="Tentang RentBetter" class="img-fluid rounded lazy png-image" data-src="home/about.png">
                    </div>
                    <div class="col-md-6">
                        <p>RentBetter adalah penyedia solusi rental mobil terkemuka yang menawarkan platform mudah dan efisien untuk mengelola penyewaan transportasi. Misi kami adalah merampingkan operasi dan memberdayakan mitra kami dengan alat untuk mengelola bisnis rental mereka dengan mudah.</p>
                        <h4>Keunggulan Kami</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-check-circle" style="color: #ffdd00;"></i> <strong>Efisiensi:</strong> Operasi yang disederhanakan untuk layanan yang lebih baik.
                            </li>
                            <li>
                                <i class="fas fa-check-circle" style="color: #ffdd00;"></i> <strong>Transparansi:</strong> Komunikasi yang jelas dengan mitra kami.
                            </li>
                            <li>
                                <i class="fas fa-check-circle" style="color: #ffdd00;"></i> <strong>Dukungan:</strong> Bantuan 24/7 untuk semua pengguna.
                            </li>
                        </ul>
                        <a href="#services" class="btn btn-primary btn-learn mt-3">Jelajahi Layanan Kami</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services" role="region" aria-label="Layanan Kami">
            <div class="container">
                <h2 class="section-title">Layanan Kami</h2>
                <div class="row services-row">
                    <div class="col-md-4 service-col">
                        <div class="service-item card bg-yellow h-100">
                            <div class="service-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h3>Sistem Manajemen Rental Mobil</h3>
                            <p>Platform kami memungkinkan Anda mengelola rental mobil dengan mudah, menyediakan alat untuk pemesanan dan pelacakan.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-col">
                        <div class="service-item card bg-white h-100">
                            <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Alat Manajemen Armada</h3>
                            <p>Pantau dan kelola armada Anda dengan data real-time dan analitik untuk mengoptimalkan kinerja.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-col">
                        <div class="service-item card bg-yellow h-100">
                            <div class="service-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h3>Dukungan Mitra</h3>
                            <p>Kami menawarkan dukungan khusus kepada mitra kami untuk memastikan operasi yang lancar.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-col">
                        <div class="service-item card bg-white h-100">
                            <div class="service-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <h3>Pelacakan Pesanan Real-time</h3>
                            <p>Lacak semua pesanan Anda secara real-time, meningkatkan pengalaman rental untuk pelanggan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact cta" role="region" aria-label="Hubungi Kami">
            <div class="container">
                <h2 class="section-title">Hubungi Kami</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <p>Jika Anda memiliki pertanyaan atau ingin mendiskusikan kebutuhan rental mobil Anda, jangan ragu untuk menghubungi kami langsung melalui WhatsApp dengan mengklik tautan di bawah ini:</p>
                        <a href="https://wa.me/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg mt-3">
                            <i class="fab fa-whatsapp mr-2"></i> Chat dengan kami di WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <p>&copy; 2024 RentBetter. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
    
    <script>
        // Efek scroll pada header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Lazy loading gambar
        document.addEventListener("DOMContentLoaded", function() {
            var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                            lazyImage.classList.add("loaded");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback untuk browser yang tidak mendukung IntersectionObserver
                lazyImages.forEach(function(lazyImage) {
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImage.classList.add("loaded");
                });
            }
        });

        // Implementasi menu yang dapat digeser dengan halus
        document.addEventListener('DOMContentLoaded', function() {
            const navWrapper = document.querySelector('.navbar-nav-wrapper');
            const nav = document.querySelector('.navbar-nav');
            let isDown = false;
            let startX;
            let scrollLeft;
            let velocity = 0;
            let rafId;

            function easeOutQuad(t) {
                return t * (2 - t);
            }

            function momentumScroll() {
                if (!isDown && Math.abs(velocity) > 0.1) {
                    navWrapper.scrollLeft += velocity;
                    velocity *= 0.95;
                    rafId = requestAnimationFrame(momentumScroll);
                } else {
                    cancelAnimationFrame(rafId);
                }
            }

            function onDown(e) {
                isDown = true;
                startX = e.pageX || e.touches[0].pageX;
                scrollLeft = navWrapper.scrollLeft;
                cancelAnimationFrame(rafId);
                
                nav.style.transition = 'none';
            }

            function onUp() {
                isDown = false;
                nav.style.transition = 'transform 0.3s ease-out';
                
                momentumScroll();
            }

            function onMove(e) {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX || e.touches[0].pageX;
                const walk = (x - startX) * 2;
                const newScrollLeft = scrollLeft - walk;
                navWrapper.scrollLeft = newScrollLeft;
                
                velocity = walk * 0.1;
            }

            navWrapper.addEventListener('mousedown', onDown);
            navWrapper.addEventListener('touchstart', onDown);

            navWrapper.addEventListener('mousemove', onMove);
            navWrapper.addEventListener('touchmove', onMove);

            navWrapper.addEventListener('mouseleave', onUp);
            navWrapper.addEventListener('mouseup', onUp);
            navWrapper.addEventListener('touchend', onUp);

            // Smooth scroll untuk link menu
            document.querySelectorAll('.navbar-nav a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const navRect = navWrapper.getBoundingClientRect();
                        const targetRect = targetElement.getBoundingClientRect();
                        const offset = targetRect.top + window.pageYOffset - navRect.bottom;
                        
                        window.scrollTo({
                            top: offset,
                            behavior: 'smooth'
                        });
                        
                        const linkRect = this.getBoundingClientRect();
                        const scrollLeft = linkRect.left - navRect.left + navWrapper.scrollLeft - (navRect.width / 2) + (linkRect.width / 2);
                        
                        navWrapper.scrollTo({
                            left: scrollLeft,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        // Scrolling halus untuk link anchor
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>