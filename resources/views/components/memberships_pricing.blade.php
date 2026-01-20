<section class="py-4 bg-gray-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 mx-auto text-center">
        <h3>Sed do eiusmod tempor incidid</h3>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure.</p>
      </div>
    </div>
@for ($i = 1; $i <= 3; $i++)
    <div class="row mt-5">
    @for ($j = 1; $j <= 3; $j++)
      <div class="col-lg-4 col-md-6">
        <div class="card card-pricing">
          <div class="card-header bg-gradient-warning text-center py-4 position-relative">
            <div class="z-index-1 position-relative">
              <h5 class="text-white">Starter</h5>
              <h1 class="text-white mt-2 mb-0">
                <small>$</small>199</h1>
              <h6 class="text-white">per year</h6>
            </div>
          </div>
          <div class="card-body text-center">
            <ul class="list-unstyled max-width-200 mx-auto">
              <li> Ut enim ad minim veniam, quis </li>
              <li> Ut enim ad minim veniam, quis </li>
              <li> Ut enim ad minim veniam, quis </li>
              <li> Ut enim ad minim veniam, quis </li>
            </ul>
            <a href="javascript:;" class="btn bg-gradient-warning w-100 mt-4 mb-0">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    @endfor
    </div>
@endfor
  </div>
</section>
