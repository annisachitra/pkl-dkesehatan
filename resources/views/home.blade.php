@extends('template.layout')
@section('content')
<section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
            <h2><span>Dinas</span> is for Your <span>kesehatan!</span></h2>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="about-content ">
    <div class="container">

      <header class="section-header">
        <h3>Berita</h3>
        <p>Berita Terbaru Minggu Ini</p>
      </header>

      <div class="row">

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="ion-ios-paper-outline" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="{{ route('content') }}">Hari Ini</h4>
            <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"></a>
            <p class="description">Berita hari ini. Nanti ...</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fff0da;"><i class="ion-ios-paper-outline" style="color: #e98e06;"></i></div>
            <h4 class="title"><a href="">Esok Hari</h4>
            <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"></a>
            <p class="description">Berita Untuk Besok. Kita ...</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="">Lusa</h4>
            <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"></a>
            <p class="description">Berita untuk besok lusan. Cerita ...</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="pricing" class="section-bg">

    <div class="container">

      <header class="section-header">
        <h3>Artikel</h3>
        <p>Artikel Terbaru Minggu ini</p>
      </header>

      <div class="row flex-items-xs-middle flex-items-xs-center ">

        <div class="col-xs-12 col-lg-4 about-content">
          <div class="card ">
            <div class="card-header">
              <h3>Manfaat</h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">Minum Air Putih </h4>
              <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"><br><br>
              <a href="{{ route('contentt') }}" class="btn">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-lg-4 about-content">
          <div class="card">
            <div class="card-header">
              <h3>Manfaat</h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Regular Plan
              </h4>
              <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"><br><br>
              <a href="#" class="btn">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-lg-4 about-content">
          <div class="card">
            <div class="card-header">
              <h3>Manfaat</h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Baca Buku
              </h4>
              <img src="{{ asset("img/3.jpg") }}" style="width:80%" alt="" class="img-fluid"><br><br>
              <a href="#" class="btn">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #pricing -->
  <section id="team" class="about-content">
    <div class="container">
      <div class="section-header">
        <h3>Link Terkait</h3>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp">
          <div class="member">
            <img src="{{ asset("img/logo.png") }}" style="width:80%" alt="" class="img-fluid">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Samarinda</h4>
                <span>Samarinda kota</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="member">
            <img src="{{ asset("img/logo.png") }}" style="width:80%" alt="" class="img-fluid">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Samarinda</h4>
                <span>Kota Samarinda</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection
