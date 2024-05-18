<header>
    <div class="collapse bg-warning" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-dark">Table Tabungan</h4>
            <p class="text-dark">Terdiri dari Variabel Id-Siswa, Tabungan, Tanggal Nabung</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            @guest
              <h4>Login / Register</h4>
              <h4 class="text-dark">Contact</h4>
              <ul class="list-unstyied">
              <li><a href="{{url('login')}}" class="text-dark">Login</a></li>
              <li><a href="{{url('register')}}" class="text-dark">Register</a></li>
            </ul>
            @else
            <h4 style="color: dark;">{{Auth::user()->name}}</h4>
            <ul class="list-unstyied">
              <li>
                <a href="{{url('logout')}}" class="text-dark"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                </a>
              </li>
              <!-- Form Untuk Logout -->
              <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
              </form>
            </ul>
            @endguest
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
              </svg>
          <strong>Tabungan</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>