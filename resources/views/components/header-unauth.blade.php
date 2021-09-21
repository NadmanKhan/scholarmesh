<header class="p-3 mb-3 border-bottom shadow">
  <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                  <use xlink:href="#bootstrap" />
              </svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 link-secondary">{{ config('app.name') }}</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control" placeholder="Search&hellip;" aria-label="Search">
          </form>

          <div class="text-end">
              <button type="button" class="btn btn-outline me-2">Login</button>
              <button type="button" class="btn btn-warning">Sign-up</button>
          </div>
      </div>
  </div>
</header>
