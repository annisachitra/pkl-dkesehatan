<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dinas Kesehatan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{ asset("lib/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

  <link href="{{ asset("lib/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
  <link href="{{ asset("lib/animate/animate.min.css") }}" rel="stylesheet">
  <link href="{{ asset("lib/ionicons/css/ionicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
  <link href="{{ asset("lib/lightbox/css/lightbox.min.css") }}" rel="stylesheet">
  @yield('css')

  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

</head>

<body>

  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">

        <h1 class="text-light"><a href="{{ route('home') }}" class="scrollto"><span>Dinas Kesehatan</span></a></h1>

      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home') }}">beranda</a></li>
          <li class="drop-down"><a href="">Profil</a>
            <ul>
                <li><a href="{{ route('tentang') }}">Tentang</a></li>
                <li><a href="{{ route('visimisi') }}">Visi dan Misi</a></li>
            </ul>
          </li>
          <li><a href="{{ route('berita') }}">Berita</a></li>
          <li><a href="{{ route('artikel') }}">Artikel</a></li>
          <li><a href="{{ route('galeri') }}">Galeri</a></li>
          <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">
    @yield('content')
  </main>

  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-6">
                  <div class="footer-info">
                    <h3>Dinas Kesehatan</h3>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Beranda</a></li>
                      <li><a href="#">Berita</a></li>
                      <li><a href="#">Galeri</a></li>
                    </ul>
                  </div>


                </div>
            </div>
          </div>
          <div class="col-lg-6">
			<div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      Jl. Milono No.1 <br>
                      75122, Bugis, Kec. Samarinda Kota<br>
                      Kalimantan Timur <br>
                      <strong>Phone:</strong> (0541) 735660<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>2020</strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="{{ asset("lib/jquery/jquery.min.js") }}"></script>
  <script src="{{ asset("lib/jquery/jquery-migrate.min.js") }}"></script>
  <script src="{{ asset("lib/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("lib/easing/easing.min.js") }}"></script>
  <script src="{{ asset("lib/mobile-nav/mobile-nav.js") }}"></script>
  <script src="{{ asset("lib/wow/wow.min.js") }}"></script>
  <script src="{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
  <script src="{{ asset("lib/counterup/counterup.min.js") }}"></script>
  <script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("lib/isotope/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("lib/lightbox/js/lightbox.min.js") }}"></script>
  <script src="{{ asset("contactform/contactform.js") }}"></script>
  <script src="js/main.js"></script>
  @yield('js')

</body>
</html>
