<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('includes.admin.style')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/fe/assets/img/logo.jpeg" alt="">
        <span class="d-none d-lg-block">berobataja</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    @include('includes.admin.navbar')

  </header><!-- End Header -->

  @include('includes.admin.sidebar-mitra')

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  @include('includes.admin.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.admin.script')
  @stack('addon-script')
</body>

</html>