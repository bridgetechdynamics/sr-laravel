@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
    @include('components.shared.hero_2', [
        'title'   => 'Overview of Franchise Opportunities', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Inquire', 
    ])
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
            <h4 class="mb-4">A header about the available territories</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
          </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ms-auto me-auto text-center">
        <div class="p-3 info-hover-warning">
          <div class="icon icon-shape bg-gradient-warning shadow icon-shape-circle text-primary">
            <i class="ni ni-settings text-white opacity-10"></i>
          </div>
        </div>
        <h3 class="mb-0 mt-4">How to get involved</h3>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 ms-auto my-auto">
        <a href="javascript:;">
          <div class="card card-background tilt" data-tilt="">
            <div class="full-background" style="background-image: url(&#39;../../assets/img/bg26.jpg&#39;)"></div>
            <div class="card-body pt-7 text-center">
              <div class="icon icon-lg up mb-3">
                <svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>chart-pie-35</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1720.000000, -742.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(4.000000, 451.000000)">
                          <path d="M21.6666667,18.3333333 L39.915,18.3333333 C39.11,8.635 31.365,0.89 21.6666667,0.085 L21.6666667,18.3333333 Z" opacity="0.602864583"></path>
                          <path d="M20.69,21.6666667 L7.09833333,35.2583333 C10.585,38.21 15.085,40 20,40 C30.465,40 39.0633333,31.915 39.915,21.6666667 L20.69,21.6666667 Z"></path>
                          <path d="M18.3333333,19.31 L18.3333333,0.085 C8.085,0.936666667 0,9.535 0,20 C0,24.915 1.79,29.415 4.74166667,32.9016667 L18.3333333,19.31 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h1 class="text-white up mb-0">Search and Discover!</h1>
              <p class="lead up">Franchise Owners</p>
              <button type="button" class="btn btn-white btn-lg mt-3 up">Get Started</button>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-5 me-auto my-auto ms-5">
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>1. Duis aute irure dolor in reprehenderit</h5>
            <p>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>

        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>2. Duis aute irure dolor in reprehenderit</h5>
            <p>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>

        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>3. Duis aute irure dolor in reprehenderit</h5>
            <p>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
    @include('components.shared.bottom_header', [
        'title'   => 'Header about franchise opportunities', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Inquire', 
    ])
    @include('components.shared.footer')
@endsection
