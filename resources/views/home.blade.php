<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tukangbanten</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">



  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Stylesheets -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logoheader.png') }}" alt="Logo" class="me-2 logo-header">
    <h1 class="sitename">Tukang</h1> <span>Banten.</span>
        </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="{{ url('/home') }}" class="active">Jadimitra</a></li>

          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <li><a href="{{ url('/jasa1') }}">JASABANGUNRUMAH</a></li>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>SOLUSI MUDAH PERTUKANGAN ANDA</h2>
              <p>
              "Layanan jasa profesional dan handal untuk kebutuhan konstruksi Anda. Kami hadir memberikan solusi cepat, tepat, dan terpercaya di setiap proyek."
              </p>
              <a href="#get-started" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

         <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-4.jpg') }}" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->

    <!-- Get Started Section -->
    <section id="#" class="get-started section">
    </section>
    <!-- /Get Started Section -->

    <div class="container section-title" data-aos="fade-up">
      <h2>Tentang Kami</h2>
      <p>Apa itu Tukang Banten?</p>
      </div>
      <!-- About section Title -->

<div class="container about-description" data-aos="fade-up" data-aos-delay="100">
  <p>
    <strong>Tukang Banten</strong> adalah penyedia layanan konstruksi yang berbasis di Banten, menghadirkan solusi profesional untuk pembangunan dan renovasi bangunan serta infrastruktur jalan. Dengan pengalaman dan keahlian yang mendalam, kami berkomitmen untuk memberikan kualitas terbaik dalam setiap proyek, mulai dari perencanaan, desain, hingga eksekusi. Kami memahami pentingnya ketepatan waktu dan ketelitian, sehingga setiap layanan kami dirancang untuk memenuhi kebutuhan dan standar tinggi klien.
  </p>
  <p>
    Di Tukang Banten, kami percaya bahwa setiap proyek adalah investasi untuk masa depan. Oleh karena itu, kami menggunakan material berkualitas dan metode kerja yang efisien untuk memastikan daya tahan dan keamanan setiap hasil pekerjaan kami. Baik untuk kebutuhan konstruksi bangunan, renovasi, maupun infrastruktur jalan, kami siap menjadi mitra terpercaya Anda dalam menciptakan lingkungan yang lebih baik dan berkelanjutan.
  </p>
</div>

    <!-- Layanan kami section -->
    <section id="constructions" class="constructions section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Layanan Konstruksi yang Ditawarkan</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="{{ asset('assets/img/constructions-4.jpg') }}" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Jasa Konstruksi Bangunan</h4>
                    <p>• Bangunan perumahan
                    <br>• Bangunan komersial (ruko, kantor)
                    <br>• Renovasi dan perbaikan </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="{{ asset('assets/img/jalan.jpg') }}" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Jasa Kontruksi Jalan</h4>
                    <p> Kami menawarkan layanan konstruksi jalan berkualitas dengan hasil yang kuat dan tahan lama, dikerjakan oleh tenaga ahli berpengalaman sesuai standar keamanan tinggi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="{{ asset('assets/img/constructions-3.jpg') }}" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Error beatae dolor inventore aut</h4>
                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="{{ asset('assets/img/constructions-4.jpg') }}" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Mulai Proyek Anda Sekarang</h2>
        <p>6 Langkah Mudah untuk Memulai Pengerjaan Kebutuhan Anda</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-bag-shopping"></i>
              </div>
              <h3>Buat Pesanan</h3>
              <p>Isi data pesanan sesuai kebutuhan untuk penjadwalan kedatangan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid  fa-magnifying-glass"></i>
              </div>
              <h3>Survey & Konsultasi</h3>
              <p>Konsultasikan kebutuhan Anda dan dapatkan penawaran harga terbaik melalui Aplikasi.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="fa-solid fa-money-bill"></i>
              </div>
              <h3>Pembayaran</h3>
              <p>Selesaikan pembayaran sesuai penawaran harga pekerjaan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="fa-solid fa-hammer"></i>
              </div>
              <h3>Mulai Pekerjaan</h3>
              <p>Selesaikan pembayaran sesuai penawaran harga pekerjaan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Masa Retensi</h3>
              <p>Tukang Banten berkomitmen untuk memberikan jaminan dan garansi proyek Anda selesai.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="fa-solid fa-handshake"></i>
              </div>
              <h3>Evaluasi & Tindak Lanjut</h3>
              <p>Setelah proyek selesai, kami akan melakukan evaluasi untuk memastikan hasil sesuai standar dan kebutuhan Anda. Kami juga membuka komunikasi untuk segala kebutuhan tambahan atau pemeliharaan di masa mendatang.</p>
             
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- /Services Section -->



    <!-- Projects Section -->
    <section id="projects" class="projects section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Project Kami</h2>
        <p></p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/design-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/remodeling-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/design-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/remodeling-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/projects/design-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Projects Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Cerita Jujur Dari Client Tukang Banten</h2>
        <p>Klien kami di Tukang Banten sering berbagi pengalaman positif tentang hasil kerja kami, mulai dari ketepatan desain hingga kualitas pengerjaan.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/female.jpg') }}" class="testimonial-img" alt="">
                  <h3>Ratnasari</h3>
                  <h4>ibu &amp; Rumahtangga</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Saya sangat puas dengan hasil renovasi rumah dari TUKANG BANTEN. Timnya sangat profesional, ramah, dan selalu menjaga kebersihan selama proses pengerjaan. Hasil akhir melebihi ekspektasi saya, dan rumah terasa seperti baru lagi! Terima kasih, TUKANG BANTEN."</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/male.jpg') }}" class="testimonial-img" alt="">
                  <h3>Herianto</h3>
                  <h4>Pengusaha</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Pembangunan rumah baru saya berjalan dengan lancar berkat TUKANG BANTEN. Mereka tidak hanya bekerja cepat, tetapi juga sangat detail dalam setiap tahap konstruksi. Komunikasi mereka juga sangat baik, sehingga saya selalu mendapat update mengenai perkembangan proyek. Sungguh pengalaman yang menyenangkan!"</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/female.jpg') }}" class="testimonial-img" alt="">
                  <h3>Amelia Kusuma</h3>
                  <h4>Pengusaha</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Awalnya saya ragu menggunakan jasa renovasi, tapi TUKANG BANTEN benar-benar membuktikan profesionalitasnya. Mereka membantu saya merencanakan desain yang modern dan fungsional. Hasil renovasinya sungguh rapi dan sesuai dengan anggaran yang telah kami sepakati. Highly recommended!"</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/male.jpg') }}" class="testimonial-img" alt="">
                  <h3>Aditya</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Sangat merekomendasikan TUKANG BANTEN untuk proyek bangun rumah. Mereka mengerjakan semua dengan cermat, dan hasilnya benar-benar kokoh serta estetis. Timnya penuh perhatian dan detail terhadap setiap keinginan saya, dari desain awal hingga finishing akhir. Terima kasih atas kerja kerasnya!"</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/female.jpg') }}" class="testimonial-img" alt="">
                  <h3>Rina</h3>
                  <h4>Ibu rumah tangga</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"TUKANG BANTEN memberikan layanan renovasi terbaik yang pernah saya dapatkan. Prosesnya cepat dan tanpa hambatan, dan mereka sangat responsif terhadap semua pertanyaan saya. Hasil akhir renovasinya membuat rumah saya jauh lebih nyaman dan menarik. Saya pasti akan menghubungi mereka lagi untuk proyek lainnya!"</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- /Testimonials Section -->

<!-- Layanan kami section -->
<div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
        <p>Kami siap membantu Anda dengan segala kebutuhan renovasi dan pembangunan rumah. Jangan ragu untuk menghubungi kami!</p>
      </div><!-- End Section Title -->
      <!-- Contact Section -->
    <section id="contact" class="contact section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt"></i>
        <h3>Alamat</h3>
        <p>Rangkasbitung Lebak Banten</p>
      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone"></i>
        <h3>Call US</h3>
        <p>081318758831</p>
      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope"></i>
        <h3>Email Kami</h3>
        <p>TukangBanten@gmail.com</p>
      </div>
    </div><!-- End Info Item -->

  </div>

  <div class="row gy-4 mt-1">
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.354887429953!2d106.25091927593708!3d-6.348073193641771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4210cd43fe4189%3A0x4aa6245cde7a84d4!2sJl.%20Kh%20Atim%2C%20Kec.%20Rangkasbitung%2C%20Kabupaten%20Lebak%2C%20Banten!5e0!3m2!1sid!2sid!4v1730389688031!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="col-lg-6">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>

        <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>

        <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
        </div>

        <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
        </div>
    </div>
</form>
    </div><!-- End Contact Form -->
  </div>
</div>
</section><!-- /Contact Section -->
    
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">Tukang<span class="highlight">Banten.</span></span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl Pasir Ona</p>
            <p>Rangkasbitung Lebak Banten</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>081318758831</span></p>
            <p><strong>Email:</strong> <span>TukangBanten@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>



    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Tukang Banten</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://github.com/SEHANDIKITRIANSYAH12">SehanDikiTriansyah</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>


  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>