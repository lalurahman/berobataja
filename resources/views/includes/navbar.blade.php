  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo me-auto"><img src="/fe/assets/img/logo.jpeg" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link  " href="{{ route('home') }}">Beranda</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Layanan</a></li> --}}
          <li class="dropdown"><a href="#"><span>Mitra</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Perawat</a></li>
              <li><a href="#">Dokter</a></li>
              <li><a href="#">Non Medis</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="#">Daftar Jadi Mitra</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login') }}" class="appointment-btn ">Masuk</a>

    </div>
  </header><!-- End Header -->
