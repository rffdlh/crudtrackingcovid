<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>covid-19</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">UTAMA</a></li>
        <li><a class="nav-link scrollto" href="#pricing">INDONESIA</a></li>
        <li><a class="nav-link scrollto" href="#services">PROVINSI</a></li>
        <li><a class="nav-link scrollto" href="#resume">GLOBAL</a></li>
        <li class="dropdown"><a href="#"><span>MASUK</span><i class="bi bi-chevron-down"></i></a>
          <ul>
          @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">HOME</a></li>
              @else
                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">LOGIN</a></li>
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">REGISTER</a></li>
              @endif
              @endauth
            </div>
          @endif
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </header>
  <!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Covid-19</h1>
      <h2>Selamatkan Dunia Dengan Tinggal Di Rumah</h2>
      <a href="#pricing" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section>
  <!-- End Home -->

  <!-- ======= Main ======= -->
  <main id="main">
    <!-- ======= Indonesia Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
        <span>Kasus Indonesia</span>
          <h2>Kasus Indonesia</h2>
          <p>Data Coronavirus Global & Indonesia</p>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>POSITIF</h3>
              <strong class="d-block text">Total Positif</strong>
              <strong class="d-block number">{{$positif}}</strong>
              <strong class="d-block text">Orang</strong>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>SEMBUH</h3>
              <strong class="d-block text">Total Sembuh</strong>
              <strong class="d-block number">{{$sembuh}}</strong>
              <strong class="d-block text">Orang</strong>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>MENINGGAL</h3>
              <strong class="d-block text">Total Meninggal</strong>
              <strong class="d-block number">{{$meninggal}}</strong>
              <strong class="d-block text">Orang</strong>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Indonesia Section -->
    
    <!-- ======= Provinsi Section ======= -->
    <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Data Coronavirus Berdasarkan Provinsi</span>
        <h2>Data Kasus Coronavirus Di Indonesia Berdasarkan Provinsi</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>PROVINSI</center></th>
            <th><center>JUMLAH POSITIF</center></th>
            <th><center>JUMLAH SEMBUH</center></th>
            <th><center>JUMLAH MENINGGAL</center></th>
          </tr>
        </thead>
        <tbody>
          @php $no=1; @endphp
          @foreach ($provinsi as $data)
          <tr>
            <td><center>{{$no++}}</center></td>
            <td><center>{{$data->nama_provinsi}}</center></td>
            <td><center>{{$data->jumlah_positif}}</center></td>
            <td><center>{{$data->jumlah_sembuh}}</center></td>
            <td><center>{{$data->jumlah_meninggal}}</center></td>
          </tr>
          @endforeach
        </tbody>
        </table>
        </div>
      </div>
    </div>
    </section>
    <!-- End Provinsi Section -->

    <!-- ======= Global Section ======= -->
    <section id="resume" class="resume">
    <div class="container">
      <div class="section-title">
        <span>Data Coronavirus Berdasarkan Global</span>
        <h2>Data Kasus Coronavirus Berdasarkan Global</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <?php
          $data = file_get_contents('https://api.kawalcorona.com');
          $negara = json_decode($data, true);
        ?>
        <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><center>NO</center></th>
            <th scope="col"><center>NEGARA</center></th>
            <th scope="col"><center>JUMLAH POSITIF</center></th>
            <th scope="col"><center>JUMLAH SEMBUH</center></th>
            <th scope="col"><center>JUMLAH MENINGGAL</center></th>
          </tr>
        </thead>
        <tbody>
          @php $no=1; @endphp
          @foreach ($negara as $data)
          <tr>
            <td scope="row"><center>{{$no++}}</center></td>
            <td scope="row"><center>{{$data['attributes']['Country_Region']}}</center></td>
            <td scope="row"><center>{{$data['attributes']['Confirmed']}}</center></td>
            <td scope="row"><center>{{$data['attributes']['Recovered']}}</center></td>
            <td scope="row"><center>{{$data['attributes']['Deaths']}}</center></td>
          </tr>
          @endforeach
        </tbody>
        </table>
        </div>
      </div>
    </div>
    </section>
    <!-- End Global Section -->
  </main>
  <!-- End Main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Covid-19</h3>
      <p>Mari Jadikan Dunia Ini Tempat Yang Lebih Aman Hanya Dengan Tetap Berada Di Rumah</p>
      <div class="social-links">
        <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Rofi Fadilah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>