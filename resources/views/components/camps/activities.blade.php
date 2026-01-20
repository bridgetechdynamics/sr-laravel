<section class="py-5">
  <div class="container">
    <div class="row mt-5">
    @foreach (['Weekly Themes', 'Crafts', 'Activities'] as $activity)
      <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
        <div class="card card-profile card-plain">
          <div class="text-start mt-n5 z-index-1">
            <div class="position-relative w-25">
              <div>
                <img class="avatar avatar-xxl shadow-lg rounded-circle" src="https://www.safarirun.com/public/images/safari/logo.png">
              </div>
            </div>
          </div>
          <div class="card-body ps-0">
            <h5 class="mb-0">{{ $activity }}</h5>
            <p>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <div class="row mt-5">
    @foreach (['Snack Time', 'Fitness and Nutrition', 'Personal Best Skill-Building'] as $activity)
      <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
        <div class="card card-profile card-plain">
          <div class="text-start mt-n5 z-index-1">
            <div class="position-relative w-25">
              <div>
                <img class="avatar avatar-xxl shadow-lg rounded-circle" src="https://www.safarirun.com/public/images/safari/logo.png">
              </div>
            </div>
          </div>
          <div class="card-body ps-0">
            <h5 class="mb-0">{{ $activity }}</h5>
            <p>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
