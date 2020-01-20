@extends('template.layout')
@section('content')
  <section id="about"><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset("img/00.png") }}" class="img-fluid" alt="">
          </div>

        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
          <div class="about-content">
            <h2>Visi</h2>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Visi 1 Visi 1 Visi 1 Visi 1 Visi 1 Visi 1 Visi 1</li>
              <li><i class="ion-android-checkmark-circle"></i> Visi 2 Visi 2 Visi 2 Visi 2 Visi 2 Visi 2 Visi 2</li>
              <li><i class="ion-android-checkmark-circle"></i> Visi 3 Visi 3 Visi 3 Visi 3 Visi 3 Visi 3 Visi 3</li>
            </ul>
            <h2>Misi</h2>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Misi 1 Misi 1 Misi 1 Misi 1 Misi 1 Misi 1 Misi 1</li>
              <li><i class="ion-android-checkmark-circle"></i> Misi 2 Misi 2 Misi 2 Misi 2 Misi 2 Misi 2 Misi 2</li>
              <li><i class="ion-android-checkmark-circle"></i> Misi 3 Misi 3 Misi 3 Misi 3 Misi 3 Misi 3 Misi 3</li>
            </ul><br>
          </div>
        </div>
      </div>
    </div>

  </section><!-- #about -->
@endsection
