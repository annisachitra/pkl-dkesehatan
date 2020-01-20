@extends('template.layout')
@section('content')
<section id="team" class="about-content">
    <div class="container"><br><br><br>

      <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp">
          <div class="member">
            <img src="{{ asset("img/1.png") }}" style="width:80%" alt="" class="img-fluid">
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
            <img src="{{ asset("img/2.png") }}" style="width:80%" alt="" class="img-fluid">
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
        <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <form action="" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control {{$errors->first('nama') ? "is-invalid": ""}}" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control {{$errors->first('email') ? "is-invalid": ""}}" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control {{$errors->first('subjek') ? "is-invalid": ""}}" name="subjek" placeholder="subjek">
                </div>
                <div class="form-group">
                  <textarea name="pesan" placeholder="Pesan" class="form-control {{$errors->first('pesan') ? "is-invalid": ""}}" id="pesan" cols="20" rows="5">{{ old('pesan') }}</textarea>
                </div>

                <div id="sendmessage">Terimakasih !</div>
                <div id="errormessage"></div>

                <div class="text-center"><button  type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>
      </div>

    </div>
  </section>
@endsection
