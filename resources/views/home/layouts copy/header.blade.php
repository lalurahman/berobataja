<header>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand" href="/">
       <img src="/img/logo.jpeg" alt="AdminLTE Logo" width="26px" class="" style="opacity: .8"> <b> Berobataja</b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/">BERANDA</a>
          </li>

           <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/artikel">ARTIKEL</a>
          </li>

           <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/layanan">LAYANAN</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/mitra">MITRA</a>
          </li>
         
        </ul>

        @auth
        <a href="/profile" class="btn btn-primary btn-sm mx-2">
          <i class="fas fa-user"></i> Profile
        </a>
       
        @else
          <a href="/admin/auth" class="btn btn-primary btn-sm">
            <i class="fas fa-sign-in-alt"></i> MASUK
          </a>
        @endauth

      </div>
    </div>
  </nav>
</header> 