<header>
    <div class="collapse bg-warning" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-dark">Table Siswa</h4>
            <p class="text-dark">Terdiri dari Variabel Nama, Jenis Kelamin, Agama, Alamat, NIS, Kelas dan Foto</p>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
              </svg>
          <strong>Siswa</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>