@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.promo_banner')
    @include('components.shared.hero_1', [
        'title'   => 'Overview of Location goes here', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Book Membership', 
        'cta_2'   => 'Book a Party',
    ])
    @include('components.shared.contact_hero')

<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 order-2 order-md-2 order-lg-1">
        <div class="position-relative ms-md-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
          <img src="https://www.safarirun.com/public/images/safari/logo.png" class="w-100 border-radius-xl shadow ms-5 position-absolute" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
        <div class="p-3 pt-0">
            <div class="icon icon-shape bg-gradient-warning rounded-circle shadow text-center mb-4">
              <i class="ni ni-sound-wave text-white opacity-10"></i>
            </div>
            <h4 class="mb-4">More detailed overview here</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
            <a href="javascript:;" class="text-dark text-decoration-underline-hover">More about us</a>
          </div>
      </div>
    </div>
    </div>
  </div>
</section>

    @include('components.shared.program_highlights')
    @include('components.shared.testimonials')
    @include('components.shared.gallery_hero')
    @include('components.shared.locations_hero', ['title' => 'Check out our other locations'])
    @include('components.shared.bottom_header', [
        'title'   => 'Header about being ready to play at Safari Run', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Book Membership', 
        'cta_2'   => 'Book a Party',
    ])
    @include('components.shared.footer')
@endsection
