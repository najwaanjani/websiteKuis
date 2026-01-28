<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz | Platform Kuis Gratis Online</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
  <!--
    
  TemplateMo 606 String Master
  
  https://templatemo.com/tm-606-string-master
  
  -->
</head>
<body>
  
  <!-- Navigation -->
  <nav>
    <div class="nav-container">
      <a href="#" class="logo">
        <div class="logo-icon">?</div>
        Quiz
      </a>
      <!-- <ul class="nav-links">
        <li><a href="#features">Fitur</a></li>
        <li><a href="#pricing">Harga</a></li>
        <li><a href="#instructors">Kategori</a></li>
        <li><a href="#testimonials">Testimoni</a></li>
      </ul> -->
      <a href="/profile" class="nav-cta"><span>Profile</span></a>
      <button class="mobile-menu-btn">☰</button>
    </div>
  </nav>

  <!-- Hero Section -->
  <!-- TIP: To enable full-screen hero, uncomment "min-height: 100vh" in the .hero CSS -->
  <section class="hero">
    <div class="hero-container">
      <div class="hero-content">
        <!-- <div class="hero-badge">
          <span>●</span> Baru: AI-powered quiz generator
        </div> -->
        <h1>Kuis Interaktif <span class="highlight">Kapan Saja</span> dan <span class="highlight">Dimana Saja</span></h1>
        <p class="hero-description">
          Belajar sesuai kecepatan Anda dengan platform kuis interaktif kami. 
          Dari pengetahuan dasar hingga topik advanced — semua dalam satu platform.
        </p>
        <div class="hero-buttons">
          <a href="/quiz" class="btn-primary">
            Mulai Kuis →
          </a>
        </div>
        <div class="hero-stats">
          <div class="stat">
            <div class="stat-value">1</div>
            <div class="stat-label">Pengguna Aktif</div>
          </div>
          <div class="stat">
            <div class="stat-value">1</div>
            <div class="stat-label">Soal Kuis</div>
          </div>
          <div class="stat">
            <div class="stat-value">5.0</div>
            <div class="stat-label">Rating Platform</div>
          </div>
        </div>
      </div>

      <!-- Interactive Quiz Demo -->
      <div class="guitar-wrapper">
        <div class="guitar-card">
          <div class="guitar-neck"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features" id="features">
    <div class="section-container">
      <div class="section-header">
        <div class="section-label">Fitur</div>
        <h2 class="section-title">Semua yang Anda butuhkan untuk belajar</h2>
        <p class="section-description">
          Platform kami menggabungkan pembelajaran visual dengan praktik langsung 
          untuk mempercepat perjalanan belajar Anda.
        </p>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11.5 2a8.5 8.5 0 0 1 0 17v3l-3-3-3 3v-3a8.5 8.5 0 0 1 6-16z"/>
              <circle cx="11.5" cy="10.5" r="3"/>
              <path d="M11.5 7.5v-2M14.5 10.5h2M11.5 13.5v2M8.5 10.5h-2"/>
            </svg>
          </div>
          <h3>Kuis Interaktif</h3>
          <p>Berbagai jenis soal yang dirancang untuk menguji pemahaman Anda. Latihan kapan saja, di mana saja.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="4" width="20" height="14" rx="2"/>
              <circle cx="12" cy="11" r="3"/>
              <path d="M10.5 9.5l4 3-4 3z" fill="currentColor"/>
            </svg>
          </div>
          <h3>Cara Belajar Modern</h3>
          <p>5000+ materi kuis dari berbagai kategori dan tingkat kesulitan.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
              <circle cx="12" cy="12" r="4"/>
              <path d="M12 8v4l2 2"/>
            </svg>
          </div>
          <h3>Pelacakan Progress</h3>
          <p>Tetapkan target, pantau waktu belajar, dan lihat perkembangan kemampuan Anda dari waktu ke waktu.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <!-- <section class="pricing" id="pricing">
    <div class="section-container">
      <div class="section-header">
        <div class="section-label">Harga</div>
        <h2 class="section-title">Pilih paket yang sesuai untuk Anda</h2>
        <p class="section-description">
          Mulai gratis, upgrade kapan saja. Semua paket termasuk garansi uang kembali 30 hari.
        </p>
      </div>
      <div class="pricing-toggle">
        <span>Bulanan</span>
        <div class="toggle-switch" id="pricingToggle"></div>
        <span>Tahunan <span class="toggle-badge">Hemat 20%</span></span>
      </div>
      <div class="pricing-grid">
        <div class="pricing-card">
          <div class="pricing-name">Gratis</div>
          <div class="pricing-price">
            <span class="currency">Rp</span>0<span class="period">/bulan</span>
          </div>
          <div class="pricing-billed">Selamanya gratis</div>
          <p class="pricing-description">Sempurna untuk pemula</p>
          <ul class="pricing-features">
            <li>50 soal kuis per hari</li>
            <li>5 kategori dasar</li>
            <li>Pelacakan progress dasar</li>
            <li>Akses komunitas</li>
            <li>Mode latihan</li>
          </ul>
          <a href="#" class="pricing-btn">Mulai Gratis</a>
        </div>
        <div class="pricing-card featured">
          <div class="pricing-badge">Paling Populer</div>
          <div class="pricing-name">Pro</div>
          <div class="pricing-price">
            <span class="currency">Rp</span><span id="proPrice">50.000</span><span class="period">/bulan</span>
          </div>
          <div class="pricing-billed" id="proBilled"></div>
          <div class="pricing-savings" id="proSavings"></div>
          <p class="pricing-description">Untuk pembelajar serius</p>
          <ul class="pricing-features">
            <li>Kuis unlimited</li>
            <li>Semua kategori (50+)</li>
            <li>AI feedback & analisis</li>
            <li>Pelacakan progress lengkap</li>
            <li>Download materi offline</li>
          </ul>
          <a href="#" class="pricing-btn">Mulai Uji Coba Gratis</a>
        </div>
        <div class="pricing-card">
          <div class="pricing-name">Lifetime</div>
          <div class="pricing-price">
            <span class="currency">Rp</span>500.000
          </div>
          <div class="pricing-billed">Bayar sekali selamanya</div>
          <div class="pricing-savings">Nilai terbaik</div>
          <p class="pricing-description">Akses selamanya, tanpa biaya berulang</p>
          <ul class="pricing-features">
            <li>Semua fitur Pro</li>
            <li>Sesi coaching 1-on-1</li>
            <li>Materi eksklusif</li>
            <li>Prioritas support</li>
            <li>Semua update mendatang</li>
          </ul>
          <a href="#" class="pricing-btn">Dapatkan Akses Lifetime</a>
        </div>
      </div>
    </div>
  </section> -->

    <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <div class="section-container">
      <div class="section-header">
        <div class="section-label">Testimoni</div>
        <h2 class="section-title">Kata pengguna kami</h2>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Saya sudah coba beberapa platform kuis, tapi Quiz paling interaktif dan mudah digunakan. Nilai ujian saya meningkat drastis dalam 2 bulan!"</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">
              <img src="{{ asset('images/alex-student.jpg')}}" alt="Alex Thompson">
            </div>
            <div>
              <div class="testimonial-name">Andi Pratama</div>
              <div class="testimonial-title">Siswa SMA, 3 bulan</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Saya sudah coba beberapa platform kuis, tapi Quiz paling interaktif dan mudah digunakan. Nilai ujian saya meningkat drastis dalam 2 bulan!"</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">
              <img src="{{ asset('images/maria-student.jpg')}}" alt="Maria Garcia">
            </div>
            <div>
              <div class="testimonial-name">Siti Nurhaliza</div>
              <div class="testimonial-title">Mahasiswa, 6 bulan</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Saya sudah coba beberapa platform kuis, tapi Quiz paling interaktif dan mudah digunakan. Nilai ujian saya meningkat drastis dalam 2 bulan!"</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">
              <img src="{{ asset('images/david-student.jpg')}}" alt="David Kim">
            </div>
            <div>
              <div class="testimonial-name">Budi Santoso</div>
              <div class="testimonial-title">Pro subscriber, 8 bulan</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Instructors Section -->
  <section class="instructors" id="instructors">
    <div class="section-container">
      <div class="section-header">
        <div class="section-label">Kategori</div>
        <h2 class="section-title">Kategori kuis yang tersedia</h2>
        <p class="section-description">
          Kami menyediakan berbagai kategori kuis untuk semua tingkat kemampuan.
        </p>
      </div>
      <div class="instructors-grid">
        <div class="instructor-card">
          <div class="instructor-name">Akademik</div><br>
          <button type="button" class="btn btn-outline-dark" disabled>Coming soon...</button>
        </div>
        <div class="instructor-card">
          <div class="instructor-name">Non Akademik</div><br>
          <button type="button" class="btn btn-outline-dark" disabled>Coming soon...</button>
        </div>
        <div class="instructor-card">
          <div class="instructor-name">Umum</div><br>
          <a href="/quiz" class="btn-secondary">Mulai Kuis</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="section-container cta-content">
      <h2>Siap memulai perjalanan kuis Anda?</h2>
      <p>Bergabunglah dengan pengguna yang belajar dengan cara modern. Mulai kuis hari ini.</p>
      <a href="#pricing" class="btn-primary">Mulai Kuis  →</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#" class="logo">
            <div class="logo-icon">?</div>
            Quiz
          </a>
          <p>Platform kuis modern untuk belajar. Soal interaktif, menyenangkan, dan komunitas yang suportif.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2026 Quiz. All rights reserved.</span>
        <span>Developed by <a href="https://www.templatemo.com" target="_blank" rel="nofollow noopener">TemplateMo</a></span>
      </div>
    </div>
  </footer>

<script src="{{ asset('js/landingPage.js') }}"></script>
</body>
</html>