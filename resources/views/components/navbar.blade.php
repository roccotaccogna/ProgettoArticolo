<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
        {{-- <i class="bi bi-cup-hot logo"></i> --}}
        <img src="/storage/fotos/eagle.png" alt="" class="logo">
      </a>
      <button class="navbar-toggler list" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list-nested lista"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Homepage</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('profile')}}">Il mio Profilo</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('articolo.create')}}">Inserisci Articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('articolo.index')}}">Visualizza Articoli</a>
          </li>

          @auth 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('logout')}}" 
                onclick="
                  event.preventDefault();
                  getElementById('form-logout').submit(); ">
                     Logout
                  </a>
                  <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
                    @csrf
                  </form>
                </li>
            </ul>
          </li>

          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ospite
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>



          @endauth

        </ul>

        

        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"> Search </button>
        </form> --}}
      </div>
    </div>
  </nav>