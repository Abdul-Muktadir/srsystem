<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Eleventh navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">SRSYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                    </a>  
                <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false"><strong>Login As</strong></a> 
                
                <ul class="dropdown-menu" aria-labelledby="dropdown09">
                    <li><a class="dropdown-item" href="{{route('getStudentLogin')}}">As Student</a></li>
                    <li><a class="dropdown-item" href="{{route('getLogin')}}">As Admin</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </div>
</nav>