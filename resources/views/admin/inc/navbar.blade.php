<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SRSYSTEM</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      {{-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> --}}
      <span data-feather="settings"></span>
      <strong>Super</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
    </ul>
  </div>
  </header>