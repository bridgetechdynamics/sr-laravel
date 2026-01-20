@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_dark')
    @include('components.shared.navbar_light_2')
    @include('components.shared.hero_2', [
        'title'   => 'Overview on Memberships', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Sign Up', 
    ])

<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center pb-4">
        <h2>Benefits of getting a membership</h2>
        <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.</p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-4 col-md-6">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-warning text-center">
            <i class="ni ni-single-02 opacity-10"></i>
          </div>
          <h5 class="mt-4">Lorem Ipsum</h5>
          <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-warning text-center">
            <i class="ni ni-email-83 opacity-10"></i>
          </div>
          <h5 class="mt-4">Lorem Ipsum</h5>
          <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-md-auto">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-warning text-center">
            <i class="ni ni-atom opacity-10"></i>
          </div>
          <h5 class="mt-4">Lorem Ipsum</h5>
          <p class="mb-0">Ut enim ad minim veniam, quis nostrud exer</p>
        </div>
      </div>
    </div>
  </div>
</section>

    @include('components.shared.memberships_pricing')
    @include('components.shared.faq')
    @include('components.shared.thin_banner', [
        'title'   => 'Header about viewing policies', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.',
        'cta_1'   => 'Contact Us', 
    ])
    @include('components.shared.bottom_header', [
        'title'   => 'Header about signing up for a membership', 
        'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore.',
        'cta_1'   => 'Sign Up', 
    ])
    @include('components.shared.footer')
@endsection
