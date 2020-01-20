@extends('template.layout')
@section('content')
<section id="portfolio" class="section-bg">
    <div class="container">
        <br><br><br>
      <header class="section-header">
        <h3 class="section-title">Galeri</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Nanti</li>
            <li data-filter=".filter-card">Kita</li>
            <li data-filter=".filter-web">Cerita</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset("img/n1.jpg") }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Nanti 1</a></h4>
              <p>Nanti</p>
              <div>
                <a href="{{ asset("img/n1.jpg") }}" data-lightbox="portfolio" data-title="Nanti 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="{{ asset("img/n2.jpg") }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Cerita 1</a></h4>
              <p>Cerita</p>
              <div>
                <a href="{{ asset("img/n2.jpg") }}" class="link-preview" data-lightbox="portfolio" data-title="Cerita 1" title="Preview"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="{{ asset("img/n6.jpg") }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Cerita 1</a></h4>
              <p>Cerita</p>
              <div>
                <a href="{{ asset("img/n6.jpg") }}" class="link-preview" data-lightbox="portfolio" data-title="Cerita 1" title="Preview"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- #portfolio -->
@endsection
