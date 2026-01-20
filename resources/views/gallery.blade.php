@extends('layouts.base')

@section('content')
    @include('components.navbar_dark')
    @include('components.navbar_light_2')

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto text-center mb-5">
        <h2 class="text-warning">Sed do eiusmod tempor incidid</h2>
        <p class="text-warning text-lg mb-lg-5">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut la.</p>
      </div>
    </div>
    <div class="row min-vh-25">
      <div class="col-sm-4 col-5 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
      <div class="col-sm-3 col-7 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
      <div class="col-sm-5 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
    </div>
    <div class="row min-vh-25 mt-4">
      <div class="col-sm-3 col-7 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
      <div class="col-sm-5 col-5 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
      <div class="col-sm-4 mb-sm-0 mb-3">
        <div style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)" class="w-100 h-100 border-radius-lg bg-cover"></div>
      </div>
    </div>
  </div>
</section>

    @include('components.footer')
@endsection
