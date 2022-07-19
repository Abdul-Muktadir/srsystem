
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/admin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/admin/create">
                <span data-feather="plus"></span>
                Register Teacher
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/admin/show">
                <span data-feather="user"></span>
                Profile
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/adminstudent">
                <span data-feather="users"></span>
                Students
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/adminstudent/create">
                <span data-feather="plus"></span>
                Register Student
              </a>
            </li>
            {{-- <hr>
            <li class="nav-item">
              <a class="nav-link" href="{{route('getSRLogin')}}">
                <span data-feather="book"></span>
                Add Student Results
              </a>
            </li> --}}
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/adminstudentresults">
                <span data-feather="book"></span>
                Student Results
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              {{-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> --}}
              <span data-feather="settings"></span>
              mdo
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </nav>