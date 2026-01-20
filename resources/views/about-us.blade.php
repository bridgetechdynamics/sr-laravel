@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.shared.hero_1', [
        'title'   => 'About Safari Run header', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])

<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 order-2 order-md-2 order-lg-1">
        <h1 class="mb-4">Our History</h1>
        <div class="position-relative ms-md-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
          <img src="https://www.safarirun.com/public/images/safari/logo.png" class="w-100 border-radius-xl shadow ms-5 position-absolute" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
        <div class="p-3 pt-0">
            <div class="icon icon-shape bg-gradient-warning rounded-circle shadow text-center mb-4">
              <i class="ni ni-sound-wave text-white opacity-10"></i>
            </div>
            <h4 class="mb-4">History beginning </h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
          </div>
      </div>
    </div>
    <div class="row mt-0 mt-md-5 mt-lg-8">
      <div class="col-lg-5 col-md-12 ms-auto">
        <div class="p-3 pt-0">
          <div class="icon icon-shape bg-gradient-warning rounded-circle shadow text-center mb-4">
            <i class="fas fa-trophy"></i>
          </div>
          <h4 class="mb-4">History continued </h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="position-relative ms-md-5 d-none d-md-block d-lg-block d-xl-block h-75">
          <img src="https://www.safarirun.com/public/images/safari/logo.png" class="w-100 border-radius-xl shadow ms-n5 position-absolute end-0" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-sm-7 py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="mb-0 mt-2">About the facility</h3>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.</p>
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-warning text-center">
            <i class="ni ni-chart-bar-32  opacity-10"></i>
          </div>
          <div class="description ps-3">
            <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer. Ut enim ad minim veniam, quis nostrud exer</p>
          </div>
        </div>

        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-warning text-center">
            <i class="ni ni-cloud-upload-96 opacity-10"></i>
          </div>
          <div class="description ps-3">
            <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer. Ut enim ad minim veniam, quis nostrud exer</p>
          </div>
        </div>
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-warning text-center">
            <i class="ni ni-note-03 opacity-10"></i>
          </div>
          <div class="description ps-3">
            <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer. Ut enim ad minim veniam, quis nostrud exer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Attractions</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut labore et.</p>
      </div>
      <div class="col-lg-6 text-end d-flex flex-column justify-content-center">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-6 col-lg-4 mt-lg-0 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-atlassian.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-0 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-asana.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-0 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-shopify.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-invision.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-slack.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-webdev.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-invision.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-slack.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
      <div class="col-sm-6 col-lg-4 mt-lg-5 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-webdev.svg">
        <p class="text-sm me-2">Duis aute irure dolor in reprehenderit</p>
      </div>
    </div>
  </div>
</section>

    @include('components.shared.bottom_header', [
        'title'   => 'Header about finding a Safari Run near you', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'View Locations', 
        'cta_2'   => 'Contact Us',
    ])
    @include('components.shared.footer')
@endsection
