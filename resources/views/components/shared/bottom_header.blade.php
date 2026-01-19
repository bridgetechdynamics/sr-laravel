<header class="position-relative">
  <div class="page-header min-vh-100" style="background-image: url(https://www.safarirun.com/public/images/safari/logo.png);">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
          <h1 class="text-white">{{ $title }}</h1>
          <p class="lead text-white text-left pe-5 mt-4">{{ $content }}</p>
          <br />
          <div class="buttons">
            <button type="button" class="btn btn-lg btn-white">{{ $cta_1 }}</button>
            @isset($cta_2)
            <button type="button" class="btn btn-lg btn-link text-white">{{ $cta_2 }}</button>
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
