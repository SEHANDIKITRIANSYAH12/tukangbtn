<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jasa Bangun Rumah Tukangbanten</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="about-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logoheader.png') }}" alt="Logo" class="me-2 logo-header">
        <h1 class="sitename">Tukang</h1> <span>Banten.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="{{ url('/home') }}" class="">Jadimitra</a></li>

        <li class="dropdown"><a href="#" class="active"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <li><a href="{{ url('/jasa1') }}">Jasa Bangun Rumah</a></li>
            <li><a href="{{ url('/jasa2') }}">Jasa Desain Bar dan Kafe</a></li>
            <li><a href="{{ url('/jasa3') }}">Jasa Pemasangan Parquet</a></li>
            </ul>
          </li>
        </ul>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
      <h1 class="sitename">Tukang<span class="highlight">Banten.</span></h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="jasa1">JADIMITRA</a></li>
            <li class="current">JASA BANGUN RUMAH</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

   <!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row position-relative">
      <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/gmbrjasarumah.jpg" alt="Gambar Jasa Renovasi Rumah">
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <h2 class="inner-title">KENAPA HARUS PAKAI JASA KAMI ?</h2>
        <div class="our-story">
          <h4></h4>
          <h3>PERJALANAN KAMI</h3>
          <p>Kami telah menjadi pilihan utama dalam jasa renovasi rumah. Dengan pengalaman dan keahlian yang mumpuni, kami memberikan sentuhan baru pada setiap sudut rumah, menghadirkan hasil yang melebihi harapan Anda. Kami memahami bahwa setiap proyek renovasi adalah investasi besar bagi Anda, sehingga kami berkomitmen untuk menyediakan layanan yang jujur, profesional, dan berkualitas tinggi. Kami melayani berbagai kebutuhan renovasi, mulai dari perbaikan kecil hingga renovasi total. Setiap pekerjaan dilakukan dengan penuh perhatian terhadap detail, kualitas material, dan ketepatan waktu, memastikan rumah Anda menjadi tempat yang nyaman dan indah untuk ditinggali.</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>"Kami bekerja dengan dedikasi penuh untuk menghadirkan hasil renovasi yang berkualitas, tepat waktu, dan sesuai keinginan Anda."</span></li>
            <li><i class="bi bi-check-circle"></i> <span>"Tim ahli kami siap membantu Anda mewujudkan visi rumah impian dengan layanan yang dapat diandalkan."</span></li>
            <li><i class="bi bi-check-circle"></i> <span>"Menggunakan material terbaik dan teknik renovasi terkini, kami memastikan setiap sudut rumah direnovasi dengan standar tertinggi."</span></li>
          </ul>
          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            <a href="https://www.youtube.com/watch?v=_QMEmCHDFMw" class="glightbox stretched-link">Watch Video</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About Section -->
<section id="alt-services" class="alt-services section">
  <div class="container">
    <div class="row justify-content-around gy-4">
      <!-- Carousel Section for Images -->
      <div id="carouselExample" class="carousel slide col-lg-6" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/furniture/bar.jpeg" class="d-block w-100" alt="Desain Interior 1">
          </div>
          <div class="carousel-item">
            <img src="assets/img/furniture/kamarmandicafe.jpeg" class="d-block w-100" alt="Desain Interior 2">
          </div>
          <div class="carousel-item">
            <img src="assets/img/furniture/ruangpijat.jpeg" class="d-block w-100" alt="Desain Interior 3">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Text and Icon Boxes -->
      <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
    <h3>Desain Interior Rumah Impian Anda</h3>
    <p>Kami menawarkan berbagai konsep desain interior untuk menciptakan suasana rumah yang hangat dan fungsional sesuai gaya hidup Anda. Dari ruang tamu yang nyaman dengan pencahayaan yang tepat hingga kamar tidur yang memberikan relaksasi optimal. Kami juga menyediakan solusi penyimpanan praktis melalui desain kabinet yang sesuai dengan kebutuhan Anda serta mempercantik ruang makan dengan meja dan kursi yang elegan. Setiap elemen interior kami dirancang agar serasi dengan tema rumah dan menghadirkan keindahan sekaligus kenyamanan di setiap sudutnya.</p>
    
    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-couch flex-shrink-0"></i> <!-- Ganti dengan ikon baru -->
        <div>
            <h4><a href="" class="stretched-link">Ruang Tamu</a></h4>
            <p>Desain yang menyambut dan nyaman dengan sofa, meja, dan pencahayaan estetis.</p>
        </div>
    </div>
    
    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
        <i class="fas fa-bath flex-shrink-0"></i> <!-- Ganti dengan ikon baru -->
        <div>
            <h4><a href="" class="stretched-link">Kamar Mandi</a></h4>
            <p>Desain elegan dengan shower, wastafel, dan perlengkapan lain yang tahan lama.</p>
        </div>
    </div>
    
    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
        <i class="fas fa-utensils flex-shrink-0"></i> <!-- Ganti dengan ikon baru -->
        <div>
            <h4><a href="" class="stretched-link">Dapur Modern</a></h4>
            <p>Kabinet, countertop, dan peralatan dapur yang fungsional untuk memaksimalkan ruang.</p>
        </div>
    </div>
    
    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
        <i class="fas fa-chair flex-shrink-0"></i> <!-- Ganti dengan ikon baru -->
        <div>
            <h4><a href="" class="stretched-link">Ruang Makan</a></h4>
            <p>Meja dan kursi bergaya yang menghadirkan keindahan dan kenyamanan saat makan bersama.</p>
        </div>
    </div>
</div>


    <!-- Contoh Model Rumah Section -->
    <section id="projects" class="projects section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contoh Desain Interor Dan Eksterior Yang Kami Kerjakan</h2>
        <p> Kami berkomitmen untuk mewujudkan desain yang sesuai dengan kebutuhan dan selera klien, mulai dari konsep modern minimalis hingga klasik yang elegan.</p>
      </div>
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

<ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
  <li data-filter="*" class="filter-active">All</li>
  <li data-filter=".filter-remodeling">Interior</li>
  <li data-filter=".filter-construction">Eksterior</li>
</ul><!-- End Portfolio Filters -->

      <div class="container">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah1.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 1</h4>
                  <a href="assets/img/rumah/gambarumah1.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah2.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 2</h4>
                  <a href="assets/img/rumah/gambarumah2.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah3.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 3</h4>
                  <a href="assets/img/rumah/gambarumah3.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah4.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 4</h4>
                  <a href="assets/img/rumah/gambarumah4.png" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah5.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 5</h4>
                  <a href="assets/img/rumah/gambarumah5.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/rumah/gambarumah6.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/rumah/gambarumah6.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/kamarmandicafe.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/kamarmandicafe.jpeg" title="Cafe Tip tap toe Jogjakarta (interior)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/bar.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/bar.jpeg" title="Cafe Tip tap toe Jogjakarta (interior)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/cafe.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/cafe.jpeg" title="Cafe Tip tap toe Jogjakarta (interior)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/kamar.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/kamar.jpeg" title="Villa Bianti Bali" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/ruangpijat.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/ruangpijat.jpeg" title="Natashia cilegon" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/parquet.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Example 6</h4>
                  <a href="assets/img/furniture/parquet.jpeg" title="Parquet Villa Bianti Bali" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
        <h3>Hubungi Kami</h3>
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