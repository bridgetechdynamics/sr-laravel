@extends('layouts.base')

@section('content')
    @include('components.shared.navbar_light_1')
<section class="py-7 bg-cover position-relative" style="background-image: url(&#39;https://www.safarirun.com/public/images/safari/logo.png&#39;)">
  <div class="mask bg-gradient-dark"></div>
  <div class="container position-relative z-index-2">
    <div class="row">
      <div class="col-lg-5 my-auto">
        <h2 class="text-white">Get in Touch</h2>
        <p class="text-white text-lg mb-lg-5">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut la.</p>
        <div class="p-3 d-flex">
          <div class="icon icon-xl w-5">
            <i class="ni ni-spaceship text-white"></i>
          </div>
          <div class="ms-5">
            <h5 class="text-white">Address</h5>
        <p class="text-white text-sm">Ut enim ad minim veniam,<br>
              quis nostrud exer<br>
              New York
            </p>
          </div>
        </div>
        <div class="p-3 d-flex">
          <div class="icon icon-xl w-5">
            <i class="ni ni-collection text-white"></i>
          </div>
          <div class="ms-5">
            <h5 class="text-white">Give us a ring</h5>
            <p class="text-white text-sm"> Name here<br>
              617-445-2331<br>
              Mon - Fri, 8:00-22:00
            </p>
          </div>
        </div>

      </div>
      <div class="col-lg-5 m-auto">
        <div class="card card-contact card-raised">
          <form id="contact-form1" method="post">
            <div class="card-header text-center pt-4">
              <h5 class="card-title">Contact Us</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 pe-2">
                  <label>First name</label>
                  <div class="input-group input-group-sm mb-4">
                    <span class="input-group-text"><i class="fas fa-user text-secondary"></i></span>
                    <input class="form-control" placeholder="First Name" type="text" >
                  </div>
                </div>
                <div class="col-md-6 ps-2">
                  <div class="form-group">
                    <label>Last name</label>
                    <div class="input-group input-group-sm mb-4">
                      <span class="input-group-text"><i class="far fa-user text-secondary"></i></span>
                      <input class="form-control" placeholder="Last Name" type="text" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Email address</label>
                <div class="input-group input-group-sm mb-4">
                  <span class="input-group-text"><i class="ni ni-email-83 text-secondary"></i></span>
                  <input class="form-control" placeholder="Email" type="email" >
                </div>
              </div>
              <div class="form-group">
                <label>Your message</label>
                <textarea name="message" class="form-control form-control-sm border-radius-lg" placeholder="Type here" id="message" rows="6"></textarea>
              </div>

              <div class="row">
                <div class="col-md-6 text-end my-auto ms-auto">
                  <button type="submit" class="btn btn-primary btn-round bg-gradient-warning mb-0">Send Message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    @include('components.shared.footer')
@endsection
