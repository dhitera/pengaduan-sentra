<header class="p-3 bg-warning text-dark" style="background-color: #FBAB7E;
background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="home" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src="img/Logo.png" alt="" class="bi me-2" width="auto" height="40">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home" class="nav-link px-2 text-dark">Home</a></li>
          <li><a href="aspirasi" class="nav-link px-2 text-dark">Aspirasi</a></li>
          @auth
          <li><a href="buat-aspirasi" class="nav-link px-2 text-dark">Buat Aspirasi</a></li>
          @endauth
        </ul>

        @auth
        <div class="text-end">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (auth()->user()->roles == 'user')
              <li><a class="dropdown-item" href="">Histori Pengaduan</a></li>
              @elseif(auth()->user()->roles == 'admin')
              <li><a class="dropdown-item" href="{{ route('dashboard') }}">Admin Dashboard</a></li>
              @endif
              <li><hr class="dropdown-divider"></li> 
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
        @else
        <div class="text-end">
          <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="{{ route('register') }}"><button type="button" class="btn btn-dark">Register</button></a>
        </div>
        @endauth
      </div>
    </div>
  </header>