@extends('layouts.mitra')

@section('content')
{{-- <div class="pagetitle">
  <h1>Dashboard</h1>
  
</div> --}}

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-12 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Perawat <span>| Medis</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-12 col-md-4">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Perawat <span>| Non Medis</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>542</h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-12 col-md-4">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Total Pemasukan</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>Rp. 12.000.000</h6>
                  

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales">

            <div class="card-body">
              <h5 class="card-title">Transaksi Terbaru</h5>
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Perawat</th>
                      <th scope="col">Jenis Layanan</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brandon Jacob</td>
                      <td>Dr. Wahyu</td>
                      <td>Pasang Infus</td>
                      <td>Rp. 120.000</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <td>Ilham</td>
                      <td>Dr. Setiawan</td>
                      <td>Perawatan Luka</td>
                      <td>Rp. 100.000</td>
                      <td><span class="badge bg-info">Proses</span></td>
                    </tr>
                    <tr>
                      <td>Brandon Jacob</td>
                      <td>Dr. Wahyu</td>
                      <td>Pasang Infus</td>
                      <td>Rp. 120.000</td>
                      <td><span class="badge bg-danger">Batal</span></td>
                    </tr>
                    <tr>
                      <td>Ilham</td>
                      <td>Dr. Setiawan</td>
                      <td>Perawatan Luka</td>
                      <td>Rp. 100.000</td>
                      <td><span class="badge bg-info">Proses</span></td>
                    </tr>
                    <tr>
                      <td>Brandon Jacob</td>
                      <td>Dr. Wahyu</td>
                      <td>Pasang Infus</td>
                      <td>Rp. 120.000</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        </div><!-- End Recent Sales -->

      </div>
    </div><!-- End Left side columns -->

  </div>
</section>
@endsection