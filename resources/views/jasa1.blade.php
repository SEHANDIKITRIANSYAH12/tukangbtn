<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tukangbanten</title>
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
        <li><a href="{{ url('/home') }}" class="active">Jadimitra</a></li>

          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <li><a href="{{ url('/jasa1') }}">JASABANGUNRUMAH</a></li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
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
            <li><a href="/">JASARENOVASIRUMAH</a></li>
            <li class="current">JASABANGUNRUMAH</li>
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
        <h2 class="inner-title">KENAPA HARUS PAKAI JASA KAMI</h2>
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
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About Section -->


    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Model Contoh Rumah Yang Kami Kerjakan</h2>
        
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
            <img src="{{ asset('assets/img/rumah/rumah1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Contoh 1</h4>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
            <img src="{{ asset('assets/img/rumah/rumah2.jpg') }}" class="img-fluid" alt="">

            </div>
            <div class="member-info text-center">
              <h4>Contoh 2</h4>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets/img/rumah/rumah3.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Contoh 3</h4>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
            <img src="{{ asset('assets/img/rumah/rumah4.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Contoh 4</h4>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
            <img src="{{ asset('assets/img/rumah/rumah5.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Contoh 5</h4>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
            <img src="{{ asset('assets/img/rumah/rumah6.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Contoh 6</h4>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

   
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Cerita Jujur Dari Clien Tukang Banten</h2>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        Designed by <a href="https://bootstrapmade.com/">SehanDikiTriansyah</a>
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