<nav class="navbar navbar-expand-lg navbar-light py-4 mt-1">
    <div class="container">
        <a class="navbar-brand py-2" href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Kawan Data">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pelatihan</a>
                </li>
            </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, {{Auth::user()->name}}!
                    @if (Auth::user()->avatar)
                        <img src="{{Auth::user()->avatar}}" class="user-photo" alt="Avatar" style="border-radius: 50px;">
                    @else
                        <i class="fas fa-user-alt p-3"></i>
                        {{-- <img src="" class="user-photo" alt="Avatar" style="border-radius: 50px;"> --}}
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                        <li>
                            <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                    </ul>
                </a>
            </div>
            @else
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                    Masuk
                </a>
                <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                    Daftar
                </a>
            </div>
            @endauth    
        </div>
    </div>
</nav>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> --}}