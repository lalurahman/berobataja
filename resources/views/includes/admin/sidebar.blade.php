<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin')) ? '' : 'collapsed' }}" href="{{ route('admin-dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/mitra-category')) ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        
        <li>
          <a href="components-accordion.html">
            <i class="bi bi-circle"></i><span>Testimoni</span>
          </a>
        </li>
        <li>
          <a href="components-badges.html">
            <i class="bi bi-circle"></i><span>Artikel</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin-mitra-category') }}">
            <i class="bi bi-circle"></i><span>Kategori Mitra</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('admin-user-admin') }}">
            <i class="bi bi-circle"></i><span>Admin</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin-user-mitra') }}">
            <i class="bi bi-circle"></i><span>Mitra</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin-user-customer') }}">
            <i class="bi bi-circle"></i><span>Pelanggan</span>
          </a>
        </li>
        
      </ul>
    </li><!-- End Forms Nav -->
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