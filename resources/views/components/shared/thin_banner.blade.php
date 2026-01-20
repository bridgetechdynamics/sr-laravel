<footer class="footer py-4 my-11 bg-gradient-dark">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-3 text-start my-auto">
        <p class="mb-0 text-white text-sm">{{ $title }}</p>
      </div>
      <div class="col-lg-5 col-md-8 ms-auto text-end">
        <ul class="nav flex-row ms-n3 align-items-center mt-4 mt-sm-0">
          <li class="nav-item ms-auto">
            <button type="button" class="btn bg-gradient-warning mb-0 ms-3 ms-sm-0 mt-3 mt-sm-0">{{ $cta_1 }}</button>
          </li>
          @isset($cta_2)
          <li class="nav-item ms-auto">
            <button type="button" class="btn bg-gradient-warning mb-0 ms-3 ms-sm-0 mt-3 mt-sm-0">{{ $cta_2 }}</button>
          </li>
          @endisset
        </ul>
      </div>
    </div>
  </div>
</footer>
