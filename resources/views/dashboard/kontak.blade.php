@extends('dashboard.header', ['title' => __('Kontak')])

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75"
    style="background-image: url(&#39;{{ asset('dashboard') }}/assets/img/GEDUNG.jpg&#39;);" loading="lazy">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container ">
      <div class="row">
        <div class="text-center mx-auto my-auto">
          <h1 class="text-white mb-2">Kontak</h1>
          <p class="text-white opacity-8 lead ">Sistem Analisis Jabatan, Beban Kerja, Evaluasi Jabatan, Standar
            Kompensi <br>Pemerintah Provinsi Bengkulu</p>

        </div>
      </div>
    </div>
  </div>
</header>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <!-- Section with four info areas left & one card right with image and waves -->

  <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
  <section class="pt-4 pb-6" id="count-stats">
    <div class="container">

      <div class="row justify-content-center text-center">
        <div class="col-md-3">
          <h1 class="text-gradient text-info" id="state1" countTo="5234">0</h1>
          <h5>Projects</h5>
          <p>Of “high-performing” level are led by a certified project manager</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state2" countTo="3400">0</span>+</h1>
          <h5>Hours</h5>
          <p>That meets quality standards required by our users</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state3" countTo="24">0</span>/7</h1>
          <h5>Support</h5>
          <p>Actively engage team members that finishes on time</p>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <section class="my-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h4>Be the first to see the news</h4>
          <p class="mb-4">
            Your company may not be in the software business,
            but eventually, a software company will be in your business.
          </p>
          <div class="row">
            <div class="col-8">
              <div class="input-group input-group-outline">
                <label class="form-label">Email Here...</label>
                <input type="text" class="form-control mb-sm-0">
              </div>
            </div>
            <div class="col-4 ps-0">
              <button type="button"
                class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="col-md-5 ms-auto">
          <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/macbook.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
@endsection