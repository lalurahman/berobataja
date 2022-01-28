

  <section class="department-page-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>Pilihan Layanan</h2>
				
			</div>
			<div class="row clearfix">
				
				<!-- Department Block -->
          @for ($i = 0; $i < 30 ; $i++)
				<div class="department-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="/home/layanan/1"><img src="/img/thumb.jpg" alt="" /></a>
						</div>
						<div class="content">
							<h4><a href="/home/layanan/1">Pemasangan Infus</a></h4>
							<h6 class="text">Harga : 130.000</h6>
							<a href="/home/layanan/1" class="theme-btn btn-style-seven"><span class="txt">Pilih Layanan</span></a>
						</div>
					</div>
				</div>
        @endfor
				
				
			</div>

			
		</div>
	</section>
	<!-- End Department Page Section -->



<div class="container">
  <div class="row my-5">
    <div class="col-md-8">
      <div class="row">
        @for ($i = 0; $i < 30 ; $i++)
            
        <div class="ktc-card col-md-4 mt-3 rounded">
          <div class="py-2 rounded">
            <div class="ktc-img-wrapper-card p-0 m-10">
              <img src="/img/thumb.jpg" alt="" class="w-100">
            </div>
            <div class="ktc-text-wrapper">
              <h6 class="text-center text-main"><b>Pembersihan Luka</b></h6>
              <p><i class="fas fa-user"></i> Aswar Kasim, S.Pd.</p>
              <p><i class="fas fa-user-graduate"></i> Pekerjaan : Perawat</p>
            </div>
            <a href="/home/layanan/1" class="btn btn-primary ktc-btn-block">Buka</a>
            </div>
        </div>
        @endfor

      </div>
    </div>
  </div>
</div>