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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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

</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logoheader.png') }}" alt="Logo" class="me-2 logo-header">
        <h1 class="sitename">Tukang</h1><span>Banten.</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="{{ url('/home') }}" class="active">Jadimitra</a></li>

        <li class="dropdown">
          <a href="#" class=""><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ url('/jasa1') }}" target="_blank">Jasa Tukang Bangun Civil</a></li>
            <li><a href="{{ url('/jasa2') }}" target="_blank">Jasa Tukang Desain Gambar<br>Dan Perencanaan</a></li>
            <li><a href="{{ url('/jasa3') }}" target="_blank">Jasa Tukang Parquet</a></li>
            <li><a href="{{ url('/jasa4') }}" target="_blank">Jasa Tukang Gajebo</a></li>
            <li><a href="{{ url('/jasa5') }}" target="_blank">Jasa Tukang Cleaning</a></li>
            <li><a href="{{ url('/jasa6') }}" target="_blank">Jasa Tukang Instalasi listrik</a></li>
            <li><a href="{{ url('/jasa8') }}" target="_blank">Jasa Tukang Pemasangan<br>Pipa</a></li>
            <li><a href="{{ url('/jasa7') }}" target="_blank">Jasa Tukang Pemasangan<br>AC & Service</a></li>
            <li><a href="{{ url('/jasa9') }}" target="_blank">Jasa Tukang Tralis dan kanopi</a></li>
            <li><a href="{{ url('/jasa10') }}" target="_blank">Jasa Tukang Angkut</a></li>
            <li><a href="{{ url('/jasa11') }}" target="_blank">Jasa Tukang Buang Puing<br>Bangunan atau Proyek </a></li>
            <li><a href="{{ url('/jasa12') }}" target="_blank">Jasa Tukang Pengecatan<br>Rumah</a></li>
            <li><a href="{{ url('/jasa13') }}" target="_blank">Jasa Tukang Pembuatan<br>Lanscape Taman</a></li>
          </ul>
        </li>
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
              <a href="https://wa.me/6281292948453" class="btn-get-started" target="_blank">Hubungi Kami</a>

              
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
    
    <section class="max-w-7xl mx-auto p-6">
  <div class="text-center mb-12">
    <h2 class="text-black text-lg font-semibold"></h2>
    <h1 class="text-4xl font-bold text-gray-600 mt-2">Layanan Konstruksi Terpercaya di Banten</h1>
    <p class="text-gray-500 mt-4">
      Tukang Banten menawarkan tenaga tukang yang terampil dan terpercaya untuk membantu Anda membangun dan memelihara proyek dengan  kualitas tinggi.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="flex flex-col items-center md:items-start">
      <div class="flex justify-between w-full mb-8">
        <div class="text-center md:text-left">
          <h3 class="text-4xl font-bold text-yellow-500">10+</h3>
          <p class="text-gray-500">Tahun Pengalaman</p>
        </div>
        <div class="text-center md:text-left">
          <h3 class="text-4xl font-bold text-yellow-500">100+</h3>
          <p class="text-gray-500">Proyek Selesai</p>
        </div>
        <div class="text-center md:text-left">
          <h3 class="text-4xl font-bold text-yellow-500">200+</h3>
          <p class="text-gray-500">Tenaga Kerja Terampil</p>
        </div>
      </div>
      <img alt="Situs konstruksi dengan crane dan bangunan yang sedang dibangun" class="rounded-lg shadow-lg" height="400" src="https://sheltersengineering.com/wp-content/uploads/2023/06/Construction-Company-in-Islamabad.png" width="600"/>
    </div>
    <div class="flex flex-col justify-center">
      <img alt="Gedung pencakar langit dan crane konstruksi" class="rounded-lg shadow-lg mb-8" height="400" src="https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?q=80&w=3394&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="600"/>
      <ul class="space-y-4">
        <li class="flex items-center">
          <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
          <span>Tenaga Kerja Konstruksi Terpercaya di Banten</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
          <span>Layanan Berkualitas Tinggi, Tepat Waktu, dan Efisien Biaya</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
          <span>Tukang Terampil untuk Setiap Pekerjaan</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
          <span>Beragam Layanan Konstruksi</span>
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
          <span>Ahli dalam Proyek Residensial dan Komersial</span>
        </li>
      </ul>
    </div>
  </div>
</section>

    <!-- Layanan kami section -->
    <section id="constructions" class="constructions section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <br>
        <p>Layanan Konstruksi yang Ditawarkan</p>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <a href="/jasa1" class="text-decoration-none text-dark">
    <div class="card-item">
      <div class="row">
        <div class="col-xl-5">
          <div class="card-bg">
            <img src="{{ asset('assets/img/constructions-4.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-center">
          <div class="card-body">
            <h4 class="card-title">Jasa Tukang Bangun Civil</h4>
            <p>• Bangunan perumahan  
            <br>• Bangunan komersial (ruko, kantor)  
            <br>• Renovasi dan perbaikan</p>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>


<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <a href="/jasa4" class="text-decoration-none text-dark">
    <div class="card-item">
      <div class="row">
        <div class="col-xl-5">
          <div class="card-bg">
            <img src="{{ asset('assets/img/biangbambo/bambo3.jpeg') }}" alt="">
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-center">
          <div class="card-body">
            <h4 class="card-title">Jasa Tukang Gazebo</h4>
            <table style="width: 100%; border-spacing: 0; color: white;">
              <tr>
                <td style="vertical-align: top; padding-right: 10px;">•</td>
                <td>Gazebo Bambu dan Kayu</td>
              </tr>
              <tr>
                <td style="vertical-align: top; padding-right: 10px;">•</td>
                <td>Villa dan Bangunan Custom</td>
              </tr>
              <tr>
                <td style="vertical-align: top; padding-right: 10px;">•</td>
                <td>Furniture seperti Rak Sepatu dari Bambu dan Kayu</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>


<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
<a href="/jasa2" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/erd.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Desain Gambar dan Perencanaan</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Desain Interior yang Memikat</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Konsultasi Konsep dan Gaya</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengoptimalan Tata Ruang</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
<a href="/jasa3" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/furniture/parquet3.png') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Pemasangan Parquet</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Desain Parquet dan Vinyl Yang Elegan</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Material Berkualitas</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan Profesional</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Finishing & Perawatan</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div>

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
<a href="/jasa5" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/bersih/bersih1.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Cleaning</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembersihan Rumah dan Kantor</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Cuci Karpet dan Sofa</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembersihan Kaca dan Lantai</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Jasa Disinfeksi dan Sterilisasi</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Instalasi Listrik -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
<a href="/jasa6" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/listrik/listrik1.jpeg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Instalasi Listrik</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan Instalasi Listrik Rumah & Gedung</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Perbaikan dan Pemeliharaan Instalasi</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan Panel Listrik & Stop Kontak</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Grounding dan Sistem Keamanan Listrik</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Pemasangan Pipa -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="700">
<a href="/jasa8" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/pipa/pipa1.png') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Pemasangan Pipa</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan Instalasi Pipa Air Bersih & Air Kotor</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Perbaikan dan Deteksi Kebocoran Pipa</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan Toren dan Pompa Air</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembersihan dan Perawatan Saluran Air</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Pemasangan & Service AC -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="800">
<a href="/jasa7" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/ac/ac2.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Pemasangan & Service AC</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan AC Baru & Bekas</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Perawatan & Cuci AC Berkala</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengisian & Perbaikan Freon</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Perbaikan AC Mati atau Tidak Dingin</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Tralis & Kanopi -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="900">
<a href="/jasa9" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/tralis/tralis3.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Tralis & Kanopi</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembuatan dan pemasangan tralis jendela & pintu</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan kanopi baja ringan & besi hollow</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Perbaikan & pengecatan ulang kanopi</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Angkut -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="1000">
<a href="/jasa10" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/tukangangkut/angkut1.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Angkut</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemindahan barang proyek atau rumah</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Jasa angkut material bangunan</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pindahan rumah atau kantor</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Buang Puing Bangunan atau Proyek -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="1100">
<a href="/jasa11" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/puing/puing.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Buang Puing Bangunan atau Proyek</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembersihan dan pembuangan puing proyek</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembuangan sampah konstruksi</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengangkutan material bekas</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Pengecatan Rumah -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="1200">
<a href="/jasa12" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/cat/cat2.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Pengecatan Rumah</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengecatan rumah, gedung, dan kantor</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengecatan interior dan eksterior</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pengecatan ulang dan finishing</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->

<!-- Jasa Tukang Pembuatan Landscape Taman -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="1300">
<a href="/jasa13" class="text-decoration-none text-dark">
  <div class="card-item" style="color: white;">
    <div class="row">
      <div class="col-xl-5">
        <div class="card-bg">
          <img src="{{ asset('assets/img/taman/taman2.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-xl-7 d-flex align-items-center">
        <div class="card-body">
          <h4 class="card-title">Jasa Tukang Pembuatan Landscape Taman</h4>
          <table style="width: 100%; border-spacing: 0;">
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Desain dan pembuatan taman minimalis & modern</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pemasangan rumput sintetis & alami</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembuatan taman kering dan taman vertikal</td>
            </tr>
            <tr>
              <td style="vertical-align: top; padding-right: 10px;">•</td>
              <td>Pembuatan kolam ikan dan air mancur hias</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</a>
</div><!-- End Card Item -->


<!-- End Card Item -->
    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Mulai Proyek Anda Sekarang</h2>
        <br>
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
        <br>
        <p>Kami telah menyelesaikan berbagai proyek berkualitas tinggi, termasuk pembangunan rumah, desain interior, konstruksi bangunan komersial, pembuatan gazebo kayu dan beton, serta pemasangan parquet dengan material berkualitas. Setiap proyek dirancang dan dikerjakan dengan standar terbaik untuk memastikan hasil yang memuaskan dan tahan lama.</p>
      </div>
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">


          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/biangbambo/bambo3.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 1</h4>
                  <p></p>
                  <a href="assets/img/biangbambo/bambo3.jpeg" title="Gazebo1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/bar.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 2 </h4>
                  <p></p>
                  <a href="assets/img/furniture/bar.jpeg" title="Project 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/kamarmandicafe.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 3</h4>
                  <p></p>
                  <a href="assets/img/furniture/kamarmandi.jpeg" title="Project 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/cafe.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 4</h4>
                  <p></p>
                  <a href="assets/img/projects/furniture/cafe.jpeg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/parquet.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 5</h4>
                  <p></p>
                  <a href="assets/img/furniture/parquet.jpeg" title="Project 5" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/biangbambo/bambo4.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 6</h4>
                  <a href="assets/img/biangbambo/bambo4.jpeg" title="Project 6" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/bar2.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 9</h4>
                  <p></p>
                  <a href="assets/img/furniture/bar2.jpeg" title="Project 9" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
              <img src="{{ asset('assets/img/furniture/kamar.jpeg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 7</h4>
                  <a href="assets/img/furniture/kamar.jpeg" title="Project 7" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/biangbambo/bambo11.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Project 8</h4>
                  <a href="assets/img/biangbambo/bambo11.jpeg" title="Project 8" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
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
        <br>
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

    <!-- Hubungi  kami section -->
    <div class="container section-title" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <br>
            <p>Kami siap membantu Anda dengan segala kebutuhan renovasi dan pembangunan rumah. Jangan ragu untuk menghubungi kami!</p>
          </div><!-- End Section Title -->
         <!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            <!-- Info Section -->
            <div class="col-lg-4">
                <div class="info-item text-center p-4" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt fs-2 text-primary"></i>
                    <h4 class="mt-3">Alamat</h4>
                    <p>Rangkasbitung, Lebak, Banten</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-item text-center p-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://wa.me/6281292948453" target="_blank" class="info-link text-decoration-none text-dark">
                        <i class="bi bi-telephone fs-2 text-success"></i>
                        <h4 class="mt-3">Hubungi Kami</h4>
                        <p>0812-9294-8453</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-item text-center p-4" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope fs-2 text-danger"></i>
                    <h4 class="mt-3">Email Kami</h4>
                    <p><a href="mailto:TukangBanten@gmail.com" class="text-decoration-none text-dark">TukangBanten@gmail.com</a></p>
                </div>
            </div>

        </div>

        <!-- Google Maps & Contact Form -->
        <div class="row gy-4 mt-3">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3975577621322!2d106.2597275!3d-6.3425288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4211b6429ba411%3A0xf618ecda7031e570!2sPERUMAHAN%20ROYAL%20SOETA!5e0!3m2!1sid!2sid!4v1736418545992!5m2!1sid!2sid" 
                    class="rounded shadow-sm w-100" style="height: 400px; border: 0;" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="col-lg-6">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="post" class="php-email-form p-4 border rounded shadow-sm" data-aos="fade-up" data-aos-delay="400">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda *" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Email Anda *" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Judul Pesan *" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="5" placeholder="Tulis pesan Anda *" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                            <button type="submit" class="btn btn-primary px-4 py-2 mt-2">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>>
    
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center">
          <span class="sitename">Tukang<span class="highlight">Banten.</span></span>
          </a>
          <div class="footer-contact pt-3">
            <p>PERUMAHAN ROYAL SOETA</p>
            <p>Cijoro Pasir, Kec. Rangkasbitung, Kabupaten Lebak, Banten 42316</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>0812-9294-8453</span></p>
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
  <script src="https://cdn.tailwindcss.com"></script>


  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>