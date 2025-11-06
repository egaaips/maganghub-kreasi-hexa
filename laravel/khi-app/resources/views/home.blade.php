<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Kreasi hexa Indonesia</title>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="logo">KREASI HEXA INDONESIA</h1>
            <h2 class="tagline">Meningkatkan Kinerja Organisasi Melalui Keunggulan SDM</h2>
            <p>Kami adalah mitra penyedia dan pengelolaan SDM yang terpercaya untuk mengembangkan potensi terbaik Anda.</p>
            <a href="{{ route('register') }}" class="cta-button">Join Us Now!</a>
        </div>
    </section>

    <!-- Benefits Section -->
    <div class="container">
        <section class="section">
            <h2 class="section-title">Benefit Join di Kreasi Hexa Indonesia</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3>Motivasi Developer</h3>
                    <p>Mendapatkan motivasi dan inspirasi dari sesama developer yang berpengalaman dalam berbagai bidang teknologi.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3>Sharing Knowledge</h3>
                    <p>Belajar langsung dari para mastah Sanber dengan berbagi pengetahuan dan best practices terkini.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3>Developer Terbaik</h3>
                    <p>Dikembangkan oleh calon developer terbaik dengan standar kualitas tinggi dan profesional.</p>
                </div>
            </div>
        </section>

        <!-- Steps Section -->
        <section class="section">
            <h2 class="section-title">Cara Bergabung ke Kreasi Hexa Indonesia</h2>
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Kunjungi Website</h3>
                        <p>Anda sudah berada di tempat yang tepat! Selamat datang di Kreasi Hexa Indonesia.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Daftar Akun</h3>
                        <p>Lengkapi data diri Anda di <a href="{{ route('register') }}">Form Sign Up</a> dengan informasi yang valid.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Selesai!</h3>
                        <p>Selamat! Anda sudah menjadi bagian dari komunitas Hexanian.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Kreasi Hexa Indonesia. All rights reserved. | Meningkatkan SDM Indonesia</p>
    </footer>
</body>
</html>