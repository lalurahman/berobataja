<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
  
      <li class="nav-item">
        <a class="nav-link {{ (request()->is('mitra')) ? '' : 'collapsed' }}" href="{{ route('mitra-dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-bar-chart"></i>
          <span>Data Layanan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-bar-chart"></i>
          <span>Data Transaksi</span>
        </a>
      </li>
  
      <li class="nav-heading">Pengaturan</li>
  
      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->
  
    </ul>
  
  </aside><!-- End Sidebar-->