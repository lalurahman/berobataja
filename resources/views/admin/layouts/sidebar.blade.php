  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="/img/logo.jpeg" alt="AdminLTE Logo" width="26px" class="" style="opacity: .8"> 
      <span class="brand-text font-weight-light"><b>Berobataja</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{Request::is('admin/dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          {{-- @if (auth()->user()->role == 'admin')
          <li class="nav-item">
            <a href="/admin/mitra" class="nav-link {{Request::is('admin/mitra*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Mitra
              </p>
            </a>
          </li>
          @endif --}}
        @if (auth()->user()->role == 'mitra')
           <li class="nav-item">
            <a href="/admin/layanan" class="nav-link {{Request::is('admin/layanan*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-ambulance"></i>
              <p>
                Layanan
              </p>
            </a>
          </li>
          @endif

          
          

           @if (auth()->user()->role == 'admin')

           <li class="nav-item">
            <a href="/admin/service" class="nav-link {{Request::is('admin/service*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>


          <li class="nav-item {{Request::is('admin/posts*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('admin/posts*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/posts/post" class="nav-link {{Request::is('admin/posts/post*') ? 'child-active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/posts/kategori" class="nav-link {{Request::is('admin/posts/kategori*') ? 'child-active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{Request::is('admin/user*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('admin/user*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user?role=mitra" class="nav-link {{request('role') == 'mitra' ? 'child-active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mitra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/user?role=admin" class="nav-link {{request('role') == 'admin' ? 'child-active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>
          </li>

            @endif
          


          <li class="nav-item">
            <a href="/admin/profil" class="nav-link {{Request::is('admin/profil') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>

           @if (auth()->user()->role == 'mitra')
          <li class="nav-item {{Request::is('admin/dokumen*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('admin/dokumen*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Dokumen
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/dokumen?type=ijazah" class="nav-link {{request('type')=='ijazah' ? 'child-active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ijazah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/dokumen?type=sertifikat" class="nav-link {{request('type')=='sertifikat' ? 'child-active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertifikat</p>
                </a>
              </li>

            </ul>
          </li>

           @endif

           @if (auth()->user()->role == 'admin')

            <li class="nav-item">
            <a href="/admin/mou" class="nav-link {{Request::is('admin/mou*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                MoU
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="/admin/banner" class="nav-link {{Request::is('admin/banner*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/konfigurasi" class="nav-link {{Request::is('admin/konfigurasi*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Konfigurasi
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


