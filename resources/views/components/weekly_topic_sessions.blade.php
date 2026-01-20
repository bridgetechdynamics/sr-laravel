<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>{{ $title }}</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua! Duis aute irure. Sed do eiusmod tempor incididunt ut labore et.</p>
      </div>
    </div>
    <div class="row mt-5">
    @foreach (['atlassian', 'asana', 'shopify', 'invision', 'slack', 'webdev', 'apple', 'jira', 'weave'] as $logo)
      <div class="col-sm-6 col-lg-4 mt-lg-0 mt-4">
        <img class="width-48-px mb-3" src="assets/img/logos/small-logos/logo-{{ $logo }}.svg">
        <h5>Duis aute irure dolor in reprehenderit</h5>
        <p class="text-sm me-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      </div>
    @endforeach
    </div>
  </div>
</section>
