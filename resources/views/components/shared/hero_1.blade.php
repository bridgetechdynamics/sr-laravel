<header>
  <div class="page-header min-vh-100">
    <div>
      <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-xl border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="https://www.safarirun.com/public/images/safari/logo.png">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
          <h1 class="mb-4">{{ $title }}</h1>
          <p class="lead pe-5 me-5">{{ $content }}</p>
          <div class="buttons">
            <button type="button" class="btn bg-gradient-warning mt-4">{{ $cta_1 }}</button>
            @isset($cta_2)
            <button type="button" class="btn text-warning shadow-none mt-4">{{ $cta_2 }}</button>
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
