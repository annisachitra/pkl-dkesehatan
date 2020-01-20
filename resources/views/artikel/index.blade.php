@extends('template.layout')
@section('content')
<section id="services" class="section-bg">
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <img src="{{ asset("img/3.jpg") }}" class="d-block w-100" alt="..."><br>
            <h3 class="title"><a href="{{ route('contentt') }}">Hari Ini</a></h3>
            <p class="description">Berita hari ini. Nanti ...</p>
          </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <img src="{{ asset("img/3.jpg") }}" class="d-block w-100" alt="..."><br>
              <h3 class="title"><a href="">Hari Ini</a></h3>
              <p class="description">Berita hari ini. Nanti ...</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <img src="{{ asset("img/3.jpg") }}" class="d-block w-100" alt="..."><br>
                  <h3 class="title"><a href="">Hari Ini</a></h3>
                  <p class="description">Berita hari ini. Nanti ...</p>
                </div>
                </div>
        </div>
    </div>
  </section><!-- #services -->
@endsection
